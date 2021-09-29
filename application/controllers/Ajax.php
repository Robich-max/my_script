<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{



	function __construct()
	{
		parent::__construct();
		load_lang();


		$this->load->library('email');
	}

	public function accept_cookies()
	{
		$cookie = array(
			'name'   => 'accept_cookies',
			'value'  => "yes",
			'expire' => time() + 3600 * 24 * 1000
		);

		set_cookie($cookie);
	}

	public function validCoupon()
	{
		error_reporting(0);

		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		if (!empty($this->session->userdata('id'))) {
			$uid = $this->session->userdata('id');
			$user = $this->m_p->s_a("user_register", array("id" => $uid));
		} else {
		}

		$data = array();
		$coupon = $this->input->post("coupon");
		$total_price = $this->input->post("total_price");
		// 		echo $this->input->post("products");
		$dataproducts = $this->input->post("products");

		//  if(isset($_POST['products'])){
		//      $dataproucts = $_POST['products'];
		//  }
		$json = trim($dataproducts);

		$products = json_decode($json, true);
		//print_r($products);
		// 		$products = json_decode($products);

		//echo json_encode($products);
		$totalAmount  = 0;
		$totalQty = 0;


		foreach ($products as $product) {
			$totalAmount = $totalAmount + $product['price'];
			$totalQty = $totalQty + $product['q'];
		}

		// To return with user selected currency
		$currencySymbol = substr($total_price, -1);

		if ($currencySymbol != "$") {
			$currencySymbol = "€";
		}

		$tp = str_replace("$", "", $total_price);
		$tp = str_replace("€", "", $total_price);
		$tp = str_replace("$", "", $tp);
		$tp = str_replace("€", "", $tp);
		// echo $tp;
		$date = date("Y-m-d h:i:s");

		$c = $this->m_p->s_a("discounts_coupon", array("discount_code" => $coupon, "start_date_time <=" => $date, "end_date_time >=" => $date));
		$data["query"] = $this->db->last_query();
		/*   echo "<pre>";
		print_r($c);
		echo "</pre>"; die; */
		if ($c) {

			if ($c == 0) {
				$data['msg'] = 'not';
				echo $resp = json_encode($data);
				die;
			}
			//commen checks
			if (isset($c[0]->selected_countries_val)) {
				$countries_array = explode("@", $c[0]->selected_countries_val);
				$check = 0;
				// foreach($countries_array as $country){
				//     if(condition){
				//         $check++;    
				//     }
				// }
				if ($check != 0) {
					$data['msg'] = 'not ok';
					$data['status'] = '0';
					$data['err'] = 'the customer is not eligible';
					echo $resp = json_encode($data);
					die;
				}
			}
			if (isset($c[0]->discount_customer)) {
				$customers = explode("@", $c[0]->discount_customer);
				$check = 0;
				foreach ($customers as $customer) {
					if (!empty($user)) {
						if ($user['name'] == $customer) {
							$check++;
						} else {
							// $count++;
						}
					}
				}
				if ($check != 0) {
					$data['msg'] = 'not ok';
					$data['status'] = '0';
					$data['err'] = 'you are not eligible';
					echo $resp = json_encode($data);
					die;
				}
			}
			if (!empty($c[0]->min_purchase_qty_val)) {
				$min_qty = $c[0]->min_purchase_qty_val;
				if ($min_qty > $totalQty) {
					$data['msg'] = 'not ok';
					$data['status'] = '0';
					$data['err'] = 'not eligible purchase minimum quantity ' . $min_qty;
					echo $resp = json_encode($data);
					die;
				}
			}
			if (!empty($c[0]->min_purchase_amount_val)) {
				$min_amount = $c[0]->min_purchase_amount_val;

				if ($min_amount > $tp) {
					$data['msg'] = 'not ok';
					$data['status'] = '0';
					$data['err'] = 'not eligible purchase minimum amount ' . $min_amount;
					echo $resp = json_encode($data);
					die;
				}
			}

			//print_r($products);
			if (!empty($c[0]->applies_specific_val)) {
				$applies_to  = $c[0]->applies_specific_val;
				if ($applies_to != "All products") {
					$prods = explode("@", $c[0]->applies_specific_val);
					$check = 0;

					// print_r($prods);
					// print_r($products);
					for ($i = 0; $i < count($products); $i++) {
						for ($j = 0; $j < count($prods); $j++) {
							if ($products[$i]['name'] == $prods[$j]) {
								$check++;
								break;
							}
						}
					}
					if ($check == 0) {
						$data['msg'] = 'not ok';
						$data['status'] = '0';
						$data['err'] = 'not eligible purchase one of these products ' . $applies_to;
						echo $resp = json_encode($data);
						die;
					}
				}
			}

			$percnt_type = $c[0]->percnt_type;
			if ($percnt_type == "Fixed amount") {
				$final = $tp - $c[0]->discount_value;
			}

			if ($percnt_type == "percentage") {
				//  echo $tp;
				$disc = ($c[0]->discount_value * $tp) / 100;
				$final = $tp - $disc;
			}
			if ($percnt_type == "Free shipping") {
				$final = 0;
			}

			if ($percnt_type == "Buy X get Y") {
				//
				$prods = explode("@", $c[0]->specific_buy_val);
				$coupon = $c[0];
				if (!empty($coupon->min_qty)) {
					$qty = 0;
					for ($i = 0; $i < count($products); $i++) {
						for ($j = 0; $j < count($prods); $j++) {
							if ($products[$i]['name'] == $prods[$j]) {
								$qty = $qty + $products[$i]["q"];
							}
						}
					}
					if ($qty < $coupon->min_qty) {
						$data['msg'] = 'not ok';
						$data['status'] = '0';
						$data['err'] = 'not eligible must have minimun quantity ' . $coupon->min_qty . " of products " . $c[0]->specific_buy_val;
						echo $resp = json_encode($data);
						die;
					}
				} //end qty if

				if (!empty($coupon->min_amnt)) {
					$price = 0;
					for ($i = 0; $i < count($products); $i++) {
						for ($j = 0; $j < count($prods); $j++) {
							if ($products[$i]['name'] == $prods[$j]) {
								$price = $price + $products[$i]["price"];
							}
						}
					}
					if ($price < $coupon->min_amnt) {
						$data['msg'] = 'not ok';
						$data['status'] = '0';
						$data['err'] = 'not eligible must have minimun amount ' . $coupon->min_amnt . " of products " . $c[0]->specific_buy_val;
						echo $resp = json_encode($data);
						die;
					}
				} //end amount if
				$data["discount"] = 0;
				if (!empty($coupon->customer_percentage_val)) {
					$data["discount"] = $coupon->customer_percentage_val;
				}
				$prods1 = explode("@", $c[0]->specific_gets_val);
				$discountProducts = "";
				foreach ($prods1 as $p) {
					$discountProducts .= "" . $p . " Q@X " . $coupon->min_get_qty . " |";
				}
				$data['discount_p'] = $discountProducts;
				//end buy x get y 
				$final = $tp;
			} else {
				$data["discount"] = -1;
				$data['discount_p'] = -1;
			}
			$prods1 = explode("@", $c[0]->specific_gets_val);
			foreach ($prods1 as $p) {
				$res = $this->db->get_where("products", array("title" => $p));
				if ($res) {
					$this->addToCart(array("percentage" => $data["discount"], "name" => $res->result()[0]->title, "id" => $res->result()[0]->id));
				} else {
					$data['msg'] = 'not ok';
					$data['status'] = '0';
					$data['err'] = "Product found contact admin";
					echo $resp = json_encode($data);
					die;
				}
			}



			$this->db->update("discounts_coupon", array("time_used" => ($c[0]->time_used + 1)), array("discount_code" => $c[0]->discount_code));
			if ($c[0]->time_used > 1) {
				$data['msg'] = 'not ok';
				$data['status'] = '0';
				$data['err'] = 'Coupon limit reached cannot use this coupon';
				echo $resp = json_encode($data);
				die;
			}
			$data['status'] = 1;
			$data['msg'] = 'ok';
			$data['total_price'] = $tp;
			$data['err'] = "Successfully added coupon";
			$data['discount_value'] = $c[0]->discount_value;
			$data['final_price'] = round($final, 2) . $currencySymbol; //"$";
		} else {
			$data['msg'] = 'not ok';
			$data['status'] = 0;
			$data['err'] = "There is no such active token try again";
		}


		echo $resp = json_encode($data);

		//return $resp;

	}

	public function validCoupon000()
	{

		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$coupon = $this->input->post("coupon");

		$date = date("Y-m-d");

		$c = $this->m_p->s_a("discounts", array("coupon" => $coupon, "date >=" => $date));

		if ($c == 0)
			echo "0";
		else {
			foreach ($c as $key) {
				echo $key->num;
			}
		}
	}

	public function subs()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}



		$email = $this->input->post("email");



		$form_validation = array(
			array(
				"field" => "email",
				"rules" => "trim|required|valid_email"
			)
		);

		// echo "hi";
		//         exit;
		// $this->form_validation->set_rules($form_validation);
		// if($this->form_validation->run() == FALSE) {
		// 	echo "3";
		// 	exit();

		// }


		$c = $this->m_p->s_a("subscribers", array("email" => $email));

		if (count($c) > 0) {

			echo "2";
		} else {

			$this->m_p->ins("subscribers", array("email" => $email, "date" => time()));



			$this->_send_welcome($email);
		}
	}

	public function _send_welcome($email = FALSE)
	{

		$emailConf = $this->m_p->se_a("email")[0];

		$this->load->library("email_send");

		//	$this->email_send->welcome($email);

		$data  = $this->db->query("SELECT * FROM email")->row();



		$this->load->library('Email_send', array('mailtype' => 'html'));

		$this->email->from($emailConf->smtp_user, $emailConf->smtp_user);


		$html = $this->load->view("emails/$data->wemail_name", $data, TRUE);

		// echo "<pre>";
		// print_r($html);
		// exit;
		$this->email->to($email);
		$this->email->subject("$data->wesubject");
		$this->email->message($html);

		if ($this->email->send()) {

			echo "1";
		} else {
			echo "3";
		}
	}


	public function getCart()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$total = 0;

		if (!is_null(get_cookie("cart"))) {
			$arr = json_decode(get_cookie("cart"), TRUE);

			$total = count($arr);
		}

		$v = $this->load->view(template . "/ajax/cart", array(), TRUE);

		echo json_encode(array('total' => $total, 'html' => $v), JSON_UNESCAPED_UNICODE);
	}

	public function reviews($id)
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$p = $this->input->post("p");

		$start = 8 * $p;

		if (is_login("admin_login")) {
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id), 8, $start);
		} else {
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id, "ac" => 1), 8, $start);
		}

		if (count($data['votes']) == 0)
			echo "0";
		else {

			$this->load->view(template . "/ajax/reviews", $data);
		}
	}

	public function addToCart($type = "")
	{

		// print_r($type);


		// 		if (!$this->input->is_ajax_request()) {
		// 		   exit('No direct script access allowed');
		// 		}

		$ret = array();

		$ret['suc'] = 3;
		if ($type != "") {
			$id = $type['id'];
		} else {
			$id = $this->input->post("id");
		}
		$q  = $this->input->post("q");

		$info = $this->m_p->s_a("products", array("id" => $id), 1);



		if (count($info) > 0) {
			
			foreach ($info as $key) {
				$title 	= $key->title;
				$price 	= $key->discount > 0 ? number_format($key->price - ($key->price * $key->discount / 100), 2) : $key->price;
				$orprice = $key->price;
				$img 	= add_thumb($key->images, "_m");
			}

			if (is_null(get_cookie("cart"))) {

				$arr = array();
				$arr2 = array();

				$op = "";

				if (isset($_POST['option'])) {
					$op = json_encode($_POST['option']);
				}


				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);
				if ($type != "") {
					if ($type['percentage'] != 0) {
						$price = $price - number_format(($price * $type['percentage']) / 100, 2);
					} else {
						$price = 0;
					}
					$arr2[] = array("name" => $type['name'], "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);
					echo "here";
				}

				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);
				$f2 = json_encode($arr2);

				if ($type != "") {
					$cookie = array(
						'name'   => 'cart',
						'value'  => $f2,
						'expire' => time() + 12586500
					);
				} else {
					$cookie = array(
						'name'   => 'cart',
						'value'  => $f,
						'expire' => time() + 12586500
					);
				}

				set_cookie($cookie);

				$ret['suc'] = 1;
			} else {
				$arr = json_decode(get_cookie("cart"), TRUE);

				$op = "";

				if (isset($_POST['option'])) {
					$op = json_encode($_POST['option']);
				}
				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);

				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time() + 12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
			}
		}
		if ($type == "")
			echo json_encode($ret);
	}




	public function addToCartUpSell()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$ret = array();

		$ret['suc'] = 3;

		$id = $this->input->post("id");
		$q  = $this->input->post("q");
		$uid  = $this->input->post("uid");




		$info = $this->m_p->s_a("products", array("id" => $id), 1);
		$data = $this->db->query("SELECT * FROM upsell WHERE showProduct = $id AND onOrder = $uid")->row();

		if (count($info) > 0) {
			foreach ($info as $key) {
				$title 	= $key->title;
				if ($data->price) {
					$price = $data->price;
					$orprice = $data->price;
				} else {
					$price 	= $key->discount > 0 ? number_format($key->price - ($key->price * $key->discount / 100), 2) : $key->price;
					$orprice = $key->price;
				}

				$img 	= add_thumb($key->images, "_m");
			}

			if (is_null(get_cookie("cart"))) {

				$arr = array();

				$op = "";

				if (isset($_POST['option'])) {
					$op = json_encode($_POST['option']);
				}


				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);


				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time() + 12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
			} else {
				$arr = json_decode(get_cookie("cart"), TRUE);

				$op = "";

				if (isset($_POST['option'])) {
					$op = json_encode($_POST['option']);
				}
				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);

				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time() + 12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
			}
		}

		echo json_encode($ret);
	}

	public function getTotal()
	{
		if (is_null(get_cookie("cart"))) {
			echo "0";
			exit();
		}

		$sum = 0;

		$arr = json_decode(get_cookie("cart"), TRUE);

		foreach ($arr as $key => $value) {
			$sum += $value['price'] * $value['q'];
		}

		echo $sum;
	}

	public function updateCart()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$id = (int) $this->input->post("id");
		$qty = $this->input->post("qty");


		$arr = json_decode(get_cookie("cart"), TRUE);

		if (array_key_exists($id, $arr)) {

			$arr[$id]["q"] = $qty;

			if ($qty < 1)
				unset($arr[$id]);

			$f = json_encode($arr);

			$cookie = array(
				'name'   => 'cart',
				'value'  => $f,
				'expire' => time() + 12586500
			);

			set_cookie($cookie);
		}
	}

	public function deleteFromCart()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$id = $this->input->post("id");


		$arr = json_decode(get_cookie("cart"), TRUE);

		if (array_key_exists($id, $arr)) {
			unset($arr[$id]);
			$f = json_encode($arr);

			$cookie = array(
				'name'   => 'cart',
				'value'  => $f,
				'expire' => time() + 12586500
			);

			set_cookie($cookie);

			echo "1";
		} else {

			echo "2";
		}
	}
}
