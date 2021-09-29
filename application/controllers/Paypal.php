<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Amount;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RefundRequest;
use PayPal\Api\Payer;
use PayPal\Api\Sale;

class Paypal extends CI_Controller
{
	public $_api_context;
	public $method;
	public $exp;
    public $total;
	function  __construct()
	{
		parent::__construct();
		$this->load->model('paypal_model', 'paypal');
		// paypal credentials
		$this->config->load('paypal');
		$info = $this->m_p->se_a("settings");
		$this->load->model('model_slids');
		$this->load->library('email');
		$this->load->library("email_send");
		$this->load->config("emails");
        $this->method = "$";
        $this->exp = "$0";
        $this->total = "$0";
		foreach ($info as $key) {
			$data['setiings'] = $key;
		}

		//$this->config->item('client_id'), $this->config->item('secret')

		$paymentConf = $this->getPaymentConf();

		$this->_api_context = new \PayPal\Rest\ApiContext(
			new \PayPal\Auth\OAuthTokenCredential(

				//		$data['setiings']->paypal_client_id, $data['setiings']->paypal_secret

				$paymentConf['paypal_client_id'],
				$paymentConf['paypal_secret']
				// $this->config->item('client_id'),
				// $this->config->item('secret')
			)
		);
	}

	function index()
	{

		// echo "<pre>";
		// print_r($this->model_slids->test($id););
		// exit;
		// echo "<pre>";
		// print_r($this->config->item('client_id'));
		// exit;

		if (isset($_POST['payMethod'])) {

			$paytp = $this->input->post("payMethod");
			$this->method = $this->input->post("currency_type");
            $this->exp = $this->input->post("exp");
            $this->total = $this->input->post("tot");

			if ($paytp == "visa") {

				$this->stripePost();
			} else {

				$this->create_payment_with_paypal();
			}
		}

		exit();
	}

	public function getPaymentConf()
	{
		$settings = $this->m_p->s_a("settings")[0];

		$paymentConf = [
			'paypal_client_id' => $this->config->item('client_id'),
			'paypal_secret' => $this->config->item('secret'),
			'stripe_key' => $this->config->item('stripe_key'),
			'stripe_secret'	 => $this->config->item('stripe_secret')
		];

		if (isset($settings->paypal_client_id) && $settings->paypal_client_id != null && $settings->paypal_client_id != '') {
			$paymentConf['paypal_client_id'] = $settings->paypal_client_id;
		}

		if (isset($settings->paypal_secret) && $settings->paypal_secret != null && $settings->paypal_secret != '') {
			$paymentConf['paypal_secret'] = $settings->paypal_secret;
		}

		if (isset($settings->stripe_key) && $settings->stripe_key != null && $settings->stripe_key != '') {
			$paymentConf['stripe_key'] = $settings->stripe_key;
		}

		if (isset($settings->stripe_secret) && $settings->stripe_secret != null && $settings->stripe_secret != '') {
			$paymentConf['stripe_secret'] = $settings->stripe_secret;
		}

		return $paymentConf;
	}

	public function stripePost()
	{
		$info = $this->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['setiings'] = $key;
		}

		// 	echo "<pre>";
		// 	print_r($data['setiings']->stripe_secret);


		$paymentConf = $this->getPaymentConf();

		\Stripe\Stripe::setApiKey($paymentConf['stripe_secret']);
		// \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
		// \Stripe\Stripe::setApiKey($data['setiings']->stripe_secret);

		$ListItemes = array();

		if (is_null(get_cookie("cart")))
			redirect("cart");


		$arr = json_decode(get_cookie("cart"), TRUE);

		$ids = array();

		foreach ($arr as $a) {
			$ids[] = $a['id'];
		}

		if (count($ids) > 0)
			$info = $this->m_p->s_cart("products", $ids, FALSE);
		else
			redirect("cart");


		$products = array();

		$tprice = 0;
		$ship = get_info("shipping", $this->input->post("shipping"), "price") ?? 0;

		$i = 0;

		foreach ($info as $key) {
			$infoa[$key->id] = $key;
		}

		foreach ($arr as $idk => $k) {
			$key = $infoa[$k['id']];

			$options = isset($k['op']) ? json_decode($k['op']) : array();

			$products[] = array("q" => $k["q"], "id" => $k['id'], "op" => $options);

			$pr = number_format($key->price - ($key->price * $key->discount / 100), 2);
			$tpr = isset($k['q']) ? number_format($pr * $k['q'], 2) : $pr;

			$tprice = $tprice + $tpr;

			$ListItemes[$i] = array(
				"name" 			=> get_info("products", $key->id, "title"),
				"sku" 			=> $key->id,
				"currency"      => "USD",
				"quantity" 		=> isset($k['q']) ? $k['q'] : 1,
				"price" 		=> $pr
			);

			$i++;
		}

		// $date = "Y-m-d";
		$date = date("Y-m-d");

		$coupon = $this->input->post("coupon") ?? "";

		$total = $tprice + $ship;

		if (!empty($coupon)) {

			// Do not know why getting discount from "discounts" instead of discounts_coupon
			// $c = $this->m_p->s_a("discounts", array("coupon" => $coupon, "date >=" => $date));
			$c = $this->m_p->s_a("discounts_coupon", array("discount_code" => $coupon, "start_date <=" => $date, "end_date >=" => $date));

			// print_r($c);
			if (count($c) != 0) {

				foreach ($c as $k)
					$num = $k->discount_value;

				$total = $total - $num * $total / 100;
			}
		}

		$currency_type = $this->input->post("currency_type");

		if ($currency_type == "EUR") {
			$total = $total / 1.4407;
			$total = round($total, 2);
		}
		// echo $total;
		// die;

		$date = date("Y-m-d");

		$results = $this->db->query("SELECT * FROM account where dateat like '$date%' ")->row();

		if ($results) {
			$target = $results->target;
		} else {
			$target = '00';
		}



		$ip = $this->input->ip_address();
		$bill_no = '#OR' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));

		$arrInsert = array(
			"name" => $this->input->post("fullname"),
			"tele" => $this->input->post("phone"),
			"email" => $this->input->post("email"),
			"address" => $this->input->post("address"),
			"address2" => $this->input->post("address2"),
			"city" => $this->input->post("city"),
			"state" => $this->input->post("state"),
			"zipcode" => $this->input->post("zipcode"),
			"country" => $this->input->post("country"),
			"note" => $this->input->post("note"),
			"ip" => $ip,
			"pay" => "visa",
			"totalPrice" => $total,
			"shipping" => $this->input->post("shipping"),
			"products" => json_encode($products),
			"date" => time(),
			"target" => $target,
			"order_id" => $bill_no,
			"datetime" => date('Y-m-d\TH:i:s'),
			'coupon' => $coupon,
			'currency_type' => $currency_type
		);

		$orderId = $this->m_p->ins("orders", $arrInsert);


		\Stripe\Charge::create([
			"amount" => number_format($total, 4) * 100,
			"currency" => "usd",
			"source" => $this->input->post('stripeToken'),
			"description" => setting("title") . " order #" . $orderId
		]);

		$PayerStatus = "VERIFIED";

		$this->m_p->up_d("orders", array("payment_status" => $PayerStatus, "status" => 1), array("id" => $orderId));

		//	$this->_send_email($orderId);
		$this->order($orderId);
		$this->session->set_userdata("orderId", $orderId);

		delete_cookie("cart");

		redirect('home/thanks');
	}


	function create_payment_with_paypal()
	{

		// setup PayPal api context
		$this->_api_context->setConfig($this->config->item('settings'));


		// ### Payer
		// A resource representing a Payer that funds a payment
		// For direct credit card payments, set payment method
		// to 'credit_card' and add an array of funding instruments.

		$payer = new \PayPal\Api\Payer();
		$payer->setPaymentMethod('paypal');

		// ### Itemized information
		// (Optional) Lets you specify item wise
		// information


		$ListItemes = array();

		if (is_null(get_cookie("cart")))
			redirect("cart");


		$arr = json_decode(get_cookie("cart"), TRUE);

		$ids = array();

		foreach ($arr as $a) {
			$ids[] = $a['id'];
		}

		if (count($ids) > 0)
			$info = $this->m_p->s_cart("products", $ids, FALSE);
		else
			redirect("cart");


		$products = array();

		$tprice = 0;
		$ship = get_info("shipping", $this->input->post("shipping"), "price") ?? 0;

		$i = 0;

		foreach ($info as $key) {
			$infoa[$key->id] = $key;
		}

		foreach ($arr as $idk => $k) {
			$key = $infoa[$k['id']];

			$options = isset($k['op']) ? json_decode($k['op']) : array();

			$products[] = array("q" => $k["q"], "id" => $k['id'], "op" => $options);

			$pr = number_format($key->price - ($key->price * $key->discount / 100), 2);
			$tpr = isset($k['q']) ? number_format($pr * $k['q'], 2) : $pr;

			$tprice = $tprice + $tpr;

			$ListItemes[$i] = array(
				"name" 			=> get_info("products", $key->id, "title"),
				"sku" 			=> $key->id,
				"currency"      => "USD",
				"quantity" 		=> isset($k['q']) ? $k['q'] : 1,
				"price" 		=> $pr
			);

			$i++;
		}

		$date = "Y-m-d";

		// if(!empty($coupon))
		// {
		// 	$c = $this->m_p->s_a("discounts", array("coupon" => $coupon, "date >=" => $date));

		// 	if(count($c) != 0)
		// 	{
		// 		foreach($c as $k)
		// 			$num = $k->num;

		// 		$tprice = $tprice - $num * $tprice / 100;
		// 	}
		// }

		$ip = $this->input->ip_address();

		$date = date("Y-m-d");

		$results = $this->db->query("SELECT * FROM account where dateat like '$date%' ")->row();
		if ($results) {
			$target = $results->target;
		} else {
			$target = '00';
		}
		$bill_no = '#OR' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));
		$currency_type = $this->input->post("currency_type");
		$arrInsert = array(
			"name" => $this->input->post("fullname"),
			"tele" => $this->input->post("phone"),
			"email" => $this->input->post("email"),
			"address" => $this->input->post("address"),
			"address2" => $this->input->post("address2"),
			"city" => $this->input->post("city"),
			"state" => $this->input->post("state"),
			"zipcode" => $this->input->post("zipcode"),
			"country" => $this->input->post("country"),
			"note" => $this->input->post("note"),
			"ip" => $ip,
			"pay" => "paypal",
			"totalPrice" => $tprice + $ship,
			"products" => json_encode($products),
			"date" => time(),
			"target" => $target,
			"order_id" => $bill_no,
			"datetime" => date('Y-m-d\TH:i:s'),
			'currency_type' => $currency_type
		);

		$orderId = $this->m_p->ins("orders", $arrInsert);
		
		$itemList = new ItemList();
		$itemList->setItems($ListItemes);

		// ### Additional payment details
		// Use this optional field to set additional
		// payment information such as tax, shipping
		// charges etc.
		$details['tax'] = number_format($ship, 2);
		$details['subtotal'] = number_format($tprice, 2);
		// ### Amount
		// Lets you specify a payment amount.
		// You can also specify additional details
		// such as shipping, tax.
		$amount['currency'] = "USD";
		$amount['total'] = number_format($details['tax'] + $details['subtotal'], 2);
		$amount['details'] = $details;
		// ### Transaction
		// A transaction defines the contract of a
		// payment - what is the payment for and who
		// is fulfilling it.

		//exit();

		$transaction['description'] = 'Payment';
		$transaction['amount'] = $amount;
		$transaction['invoice_number'] = uniqid();
		$transaction['item_list'] = $itemList;
		$transaction['custom'] = $orderId;

		// ### Redirect urls
		// Set the urls that the buyer must be redirected to after
		// payment approval/ cancellation.
		$baseUrl = base_url();
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl($baseUrl . "paypal/getPaymentStatus")
			->setCancelUrl($baseUrl . "paypal/getPaymentStatus");

		// ### Payment
		// A Payment Resource; create one using
		// the above types and intent set to sale 'sale'
		$payment = new Payment();
		$payment->setIntent("sale")
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions(array($transaction));

		try {
			$payment->create($this->_api_context);
		} catch (Exception $ex) {
			// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
			print_r($ex);
			exit(1);
		}
		foreach ($payment->getLinks() as $link) {
			if ($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

		if (isset($redirect_url)) {
			/** redirect to paypal **/
			redirect($redirect_url);
		}

		$this->session->set_flashdata('success_msg', 'Unknown error occurred');
		redirect('home/checkout');
	}


	public function getPaymentStatus()
	{

		// paypal credentials

		/** Get the payment ID before session clear **/
		$payment_id = $this->input->get("paymentId");
		$PayerID = $this->input->get("PayerID");
		$token = $this->input->get("token");
		/** clear the session payment ID **/

		if (empty($PayerID) || empty($token)) {
			$this->session->set_flashdata('success_msg', 'Payment failed');
			redirect('home');
		}

		$payment = Payment::get($payment_id, $this->_api_context);


		/** PaymentExecution object includes information necessary **/
		/** to execute a PayPal account payment. **/
		/** The payer_id is added to the request query parameters **/
		/** when the user is redirected from paypal back to your site **/
		$execution = new PaymentExecution();
		$execution->setPayerId($this->input->get('PayerID'));

		/**Execute the payment **/
		$result = $payment->execute($execution, $this->_api_context);



		//  DEBUG RESULT, remove it later **/
		if ($result->getState() == 'approved') {
			$trans = $result->getTransactions();

			// item info
			$Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
			$Tax = $trans[0]->getAmount()->getDetails()->getTax();
			$custom = $trans[0]->getCustom();

			$payer = $result->getPayer();
			// payer info //
			$PaymentMethod = $payer->getPaymentMethod();
			$PayerStatus = $payer->getStatus();
			$PayerMail = $payer->getPayerInfo()->getEmail();

			$relatedResources = $trans[0]->getRelatedResources();
			$sale = $relatedResources[0]->getSale();
			// sale info //
			$saleId = $sale->getId();
			$CreateTime = $sale->getCreateTime();
			$UpdateTime = $sale->getUpdateTime();
			$State = $sale->getState();
			$Total = $sale->getAmount()->getTotal();

			$this->m_p->up_d("orders", array("payment_status" => $PayerStatus, "status" => 1), array("id" => $custom));

			/** it's all right **/
			/** Here Write your database logic like that insert record or value in database if you want **/
			$this->paypal->create($Total, $Subtotal, $Tax, $PaymentMethod, $PayerStatus, $PayerMail, $saleId, $CreateTime, $UpdateTime, $State, $custom);
			$this->session->set_flashdata('success_msg', 'Payment success');

			//$this->_send_email($custom);
			$this->order($custom);
			$this->session->set_userdata("orderId", $custom);

			delete_cookie("cart");

			redirect('home/thanks');
		}
		$this->session->set_flashdata('success_msg', 'Payment failed');
		redirect('home');
	}

	function refund_payment()
	{

		exit();

		$refund_amount = $this->input->post('refund_amount');
		$saleId = $this->input->post('sale_id');
		$paymentValue =  (string) round($refund_amount, 2);;

		// ### Refund amount
		// Includes both the refunded amount (to Payer)
		// and refunded fee (to Payee). Use the $amt->details
		// field to mention fees refund details.
		$amt = new Amount();
		$amt->setCurrency('USD')
			->setTotal($paymentValue);

		// ### Refund object
		$refundRequest = new RefundRequest();
		$refundRequest->setAmount($amt);

		// ###Sale
		// A sale transaction.
		// Create a Sale object with the
		// given sale transaction id.
		$sale = new Sale();
		$sale->setId($saleId);
		try {
			// Refund the sale
			// (See bootstrap.php for more on `ApiContext`)
			$refundedSale = $sale->refundSale($refundRequest, $this->_api_context);
		} catch (Exception $ex) {
			// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
			ResultPrinter::printError("Refund Sale", "Sale", null, $refundRequest, $ex);
			exit(1);
		}

		// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
		ResultPrinter::printResult("Refund Sale", "Sale", $refundedSale->getId(), $refundRequest, $refundedSale);

		return $refundedSale;
	}


	public function _send_email($id = FALSE)
	{

		// 		$this->load->library("email_send");

		// 		$this->email_send->order($id);
		// 		$this->order($id);


		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->config->item('paid_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("p_email"));

		$data['btn_text'] = $this->config->item('paid_email_button_text');
		$data['btn_link'] = $this->config->item('paid_email_button_link');

		$html = $this->load->view("emails/order", $data, TRUE);

		$this->load->library('email');

		// prepare email
		$this->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->email->send();


		return;
	}

	public function order($id = FALSE)
	{


		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");
		
        $temp = $this->db->get("order_email")->first_row();
		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->config->item('paid_email_subject'));
        $subject = $temp->order_submition_subject;
		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("p_email"));

		$data['btn_text'] = $this->config->item('paid_email_button_text');
		$data['btn_link'] = $this->config->item('paid_email_button_link');
        $data['c_type'] = $this->method;
        $data['exp'] = $this->exp;
        $data['tot'] = $this->total;
        $data['temp'] = $temp;
		$html = $this->load->view("emails/order", $data, TRUE);
 


		$this->load->library('Email_send', array('mailtype' => 'html'));
		$this->email->set_newline("\r\n");
		$emailConf  = $this->db->query("SELECT * FROM email")->row();
    	$this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
		// $this->email->from('admin@electriclint.store', "electriclint.store");
		// $html = $this->load->view("emails/$emailData->abandon_name",$info, TRUE);


		// echo "<pre>";
		// print_r($html);
		// exit;
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($html);
		$this->email->send();
	}
}
