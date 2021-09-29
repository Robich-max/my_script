<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$r = load_lang();


		add_visitor();
	}



	public function index()
	{
		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);
		$data['featured'] = $this->m_p->s_a("products", array("fet" => 1), 1);

		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");
		$data['slider'] = $this->m_p->s_a("slider", array('active_status =' => 1), FALSE, 0, array("*"), "position", "ASC");
		$data['homeslider'] = $this->m_p->s_a("home_slider", array(), FALSE, 0, array("*"), "position", "ASC");
		$data['bannerfive'] = $this->m_p->s_a("bannerfive", array('active_status =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$data['barslids'] = $this->m_p->s_a("barslids", array('active_status =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$data['pInfo']  = $this->db->query("SELECT * FROM products WHERE home_page_active = '1'")->row();


		// Upsell 
		$ids = [];

		$product_id =  $data['pInfo']->id;

		$upsells = $this->m_p->s_a("upsell", array("onOrder" => $product_id), FALSE);

		foreach ($upsells as $key) {
			$ids[] = $key->showProduct;
		}

		$data['upsell'] = [];

		if (count($ids) > 0) {
			foreach ($ids as $id_item) {
				$data['upsell'][] = $this->m_p->s_cart("products", $id_item, FALSE);
			}
		}


		$data['upselId']  = $product_id;

		$this->output->cache($data);

		$this->load->view(template . "/index", $data);
	}


	public function account()
	{

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$data['products'] = $this->m_p->s_a("products", array("discount > " => 0), FALSE);

		$this->output->cache($data);
		$this->load->view(template . "/login", $data);
	}

	public function setcurrency($currency)
	{
		// reset the currency
		$this->session->set_userdata('currency_code', strtoupper($currency));
	}

	public function category($id = FALSE)
	{

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if ($id == FALSE)
			redirect("home");

		$cat = $this->m_p->s_a("cats", array("id" => $id), 1);

		if (count($cat) == 0)
			redirect("home");

		$data["catName"] = get_info("cats", $id, "title");

		if (isset($_GET['sorting'])) {


			$sorting = $this->input->get("sorting");
			$pricerange = $this->input->get("pricerange");

			$data['products'] = $this->m_p->getSorting($sorting, $pricerange, $id);

			$data['cats']  = $this->db->query("SELECT * FROM cats WHERE id = $id")->row();
		} else {

			$this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
			$this->db->from('products');
			$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
			$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
			$this->db->where('cats.id =', $id);
			$query = $this->db->get();
			$data['products'] = $query->result();

			$data['cats']  = $this->db->query("SELECT * FROM cats WHERE id = $id")->row();
		}
		$this->output->cache($data);
		$this->load->view(template . "/cat", $data);
	}
	public function categorys($id = FALSE)
	{


		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if ($id == FALSE)
			redirect("home");

		$cat = $this->m_p->s_a("cats", array("page_url" => $id), 1);

		if (count($cat) == 0)
			redirect("home");

		$t = $cat['0'];
		$id = $t->id;


		$data["catName"] = get_info("cats", $id, "title");

		if (isset($_GET['sorting'])) {


			$sorting = $this->input->get("sorting");
			$pricerange = $this->input->get("pricerange");

			$data['products'] = $this->m_p->getSorting($sorting, $pricerange, $id);
			$data['cats']  = $this->db->query("SELECT * FROM cats WHERE id = $id")->row();
		} else {

			$this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
			$this->db->from('products');
			$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
			$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
			$this->db->where('cats.id =', $id);
			$query = $this->db->get();
			$data['products'] = $query->result();

			$data['cats']  = $this->db->query("SELECT * FROM cats WHERE id = $id")->row();
		}

		$this->output->cache($data);
		$this->load->view(template . "/cat", $data);
	}


	public function subcategory($id = FALSE)
	{


		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if ($id == FALSE)
			redirect("home");

		$subcat = $this->m_p->s_a("subcat", array("id" => $id), 1);

		if (count($subcat) == 0)
			redirect("home");

		$data["catName"] = get_info("subcat", $id, "name");

		if (isset($_GET['sorting'])) {


			$sorting = $this->input->get("sorting");
			$pricerange = $this->input->get("pricerange");

			$data['products'] = $this->m_p->getSortingSub($sorting, $pricerange, $id);

			$data['cats']  = $this->db->query("SELECT * FROM subcat WHERE id = $id")->row();
		} else {

			//	$data['products'] = $this->m_p->s_a("products", array("cat" => $id), FALSE);


			$this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
			$this->db->from('products');
			$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
			$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
			$this->db->where('subcat.id =', $id);
			$query = $this->db->get();
			$data['products'] = $query->result();



			$data['cats']  = $this->db->query("SELECT * FROM subcat WHERE id = $id")->row();
		}
		$this->output->cache($data);
		$this->load->view(template . "/subcat", $data);
	}


	public function discounts()
	{
		$data["catName"] = "Sale";

		if (isset($_GET['sorting'])) {

			$sorting = $this->input->get("sorting");
			$pricerange = $this->input->get("pricerange");

			$data['products'] = $this->m_p->getSorting($sorting, $pricerange, "discount");
		} else {

			$data['products'] = $this->m_p->s_a("products", array("discount > " => 0), FALSE);
		}

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");


		$this->output->cache($data);
		$this->load->view(template . "/cat", $data);
	}


	public function show($id = FALSE)
	{



		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if ($id == FALSE)
			redirect("home");

		$data['info'] = $this->m_p->s_a("products", array("id" => $id), 1);

		if (count($data['info']) == 0)
			redirect("home");

		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");

		$ids = [];

		$upsells = $this->m_p->s_a("upsell", array("onOrder" => $id), FALSE);

		foreach ($upsells as $key) {
			$ids[] = $key->showProduct;
		}

		$data['upsell'] = [];

		if (count($ids) > 0) {
			foreach ($ids as $id_item) {
				$data['upsell'][] = $this->m_p->s_cart("products", $id_item, FALSE);
			}
		}
		// if (count($ids) > 0)
		// 	$data['upsell'] = $this->m_p->s_cart("products", $ids, FALSE);
		// else
		// 	$data['upsell'] = [];


		$form_validation = array(
			array(
				"field" => "name",
				"label" => "الإسم الكامل",
				"rules" => "trim|required"
			),
			array(
				"field" => "comment",
				"label" => "التعليق",
				"rules" => "trim|required"
			)
		);
		$this->form_validation->set_rules($form_validation);
		if ($this->form_validation->run() === TRUE) {
			$config['upload_path'] 				= './reviews/';
			$config['allowed_types'] 			= 'jpg|jpeg|png';
			$config['encrypt_name'] 			= TRUE;
			$config['max_size']					= '10240'; // 10 MB
			$this->upload->initialize($config);
			$a = $this->upload->do_upload('img');
			$data_upload = $this->upload->data();
			$img = "";
			if ($a) {
				$this->image_l
					->load($data_upload['full_path'])
					->resize_crop(300, 300)
					->save_pa('', '', TRUE);

				$img = $data_upload['file_name'];
			}

			if (isset($_POST['starv'])) {

				$arr = array(
					"name" => $this->input->post("name"),
					"comment" => $this->input->post("comment"),
					"vote" => $this->input->post("starv"),
					"img" => $img,
					"date" => time(),
					"product" => $id

				);

				$this->m_p->ins("reviews", $arr);

				$data['msg'] = "تم إضافة التقييم الخاص بك سوف يظهر بعد مراجعة الإدارة .";
			}
		}

		if (is_login("admin_login")) {
			$data['votes'] = $this->db->query("SELECT * FROM reviews WHERE product = $id")->result();
		} else {
			$data['votes'] = $this->db->query("SELECT * FROM reviews WHERE product = $id")->result();
		}




		foreach ($data['info'] as $key) {
			$data['title'] = $key->title;
			$subcat = $key->subcat;
		}


		$dataId = $this->db->query("SELECT subcat FROM products WHERE id = $id")->row();


		$this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
		$this->db->from('products');
		$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
		$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
		$this->db->where('subcat.id =', $dataId->subcat);
		$query = $this->db->get();
		$data['products'] = $query->result();

		$data['customers'] = $this->m_p->s_a("cus_reviews", array("product_id" => $id));
		$data['results']  = $this->db->query("SELECT * FROM pro_reviews WHERE product_id = $id")->row();
		$data['upselId']  = $id;

		$this->output->cache($data);
		$this->load->view(template . "/show", $data);
	}

	public function productshow($id = FALSE)
	{

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if ($id == FALSE)
			redirect("home");

		$data['info'] = $this->m_p->s_a("products", array("page_url" => $id), 1);

		if (count($data['info']) == 0)
			redirect("home");

		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");

		$ids = [];

		$upsells = $this->m_p->s_a("upsell", array("onOrder" => $id), FALSE);

		foreach ($upsells as $key) {
			$ids[] = $key->showProduct;
		}

		if (count($ids) > 0)
			$data['upsell'] = $this->m_p->s_cart("products", $ids, FALSE);
		else
			$data['upsell'] = [];


		$form_validation = array(
			array(
				"field" => "name",
				"label" => "الإسم الكامل",
				"rules" => "trim|required"
			),
			array(
				"field" => "comment",
				"label" => "التعليق",
				"rules" => "trim|required"
			)
		);
		$this->form_validation->set_rules($form_validation);
		if ($this->form_validation->run() === TRUE) {
			$config['upload_path'] 				= './reviews/';
			$config['allowed_types'] 			= 'jpg|jpeg|png';
			$config['encrypt_name'] 			= TRUE;
			$config['max_size']					= '10240'; // 10 MB
			$this->upload->initialize($config);
			$a = $this->upload->do_upload('img');
			$data_upload = $this->upload->data();
			$img = "";
			if ($a) {
				$this->image_l
					->load($data_upload['full_path'])
					->resize_crop(300, 300)
					->save_pa('', '', TRUE);

				$img = $data_upload['file_name'];
			}

			if (isset($_POST['starv'])) {

				$arr = array(
					"name" => $this->input->post("name"),
					"comment" => $this->input->post("comment"),
					"vote" => $this->input->post("starv"),
					"img" => $img,
					"date" => time(),
					"product" => $id

				);

				$this->m_p->ins("reviews", $arr);

				$data['msg'] = "تم إضافة التقييم الخاص بك سوف يظهر بعد مراجعة الإدارة .";
			}
		}

		if (is_login("admin_login")) {
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id), 8);
		} else {
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id, "ac" => 1), 8);
		}

		foreach ($data['info'] as $key) {
			$data['title'] = $key->title;
			$subcat = $key->subcat;
		}

		$data['products'] = $this->m_p->s_a("products", array("page_url" => $id), 6);


		$this->output->cache($data);
		$this->load->view(template . "/show", $data);
	}

	public function js()
	{
		echo 'var lang_h115 = "' . lang("lang_h115") . '",';
		echo 'lang_h116 = "' . lang("lang_h116") . '",';
		echo 'lang_h118 = "' . lang("lang_h118") . '",';
		echo 'lang_h117 = "' . lang("lang_h117") . '";';
	}


	public function cart()
	{

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");

		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);


		if (!is_null(get_cookie("cart"))) {
			$arr = json_decode(get_cookie("cart"), TRUE);

			// print_r($arr);
			// exit();

			$ids = array();

			foreach ($arr as $a) {
				$ids[] = $a['id'];
			}

			$data['arr'] = $arr;

			if (count($ids) > 0)
				$data["info"] = $this->m_p->s_cart("products", $ids, FALSE);
			else
				$data['info'] = array();

			$infoa = array();

			foreach ($data['info'] as $key) {
				$infoa[$key->id] = $key;
			}

			$data['infoa'] = $infoa;

			$data['ids'] = implode(",", $ids);
		} else
			$data['info'] = array();


		$this->output->cache($data);
		$this->load->view(template . "/cart", $data);
	}

	public function trackOrder()
	{

		$data = array();

		if (isset($_GET['code'])) {

			$data['info'] = $this->m_p->s_a("orders", array("id" => $this->input->get("code")));
		}




		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);


		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$this->output->cache($data);
		$this->load->view(template . "/track", $data);
	}

	public function saveResponse()
	{

		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$orderId = $this->input->post("id");
		$response = $this->input->post("res") ?? "";
		$text = $this->input->post("text");
		$question = $this->input->post("question");

		$response = $response . " " . $text;

		$sessionOrderId = $this->session->orderId ?? 0;

		if ($sessionOrderId == $orderId && !empty($response)) {
			$arr = array(
				"orderId" 	=> $orderId,
				"question" 	=> $question,
				"answer" 	=> $response,
				"date" 		=> time()
			);
			$this->session->unset_userdata('orderId');

			$this->m_p->ins("responses", $arr);

			echo "1";

			exit();
		}

		echo "2";
	}

	public function page($id)

	{


		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);



		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$data['infos'] = $this->db->get_where("pages", array("menu_id" => $id), 1)->row();
		$data['faq'] = $this->db->get_where("faq", array("menu_id" => $id), 1)->row();
		$data['blog'] = $this->db->get_where("blog", array("menu_id" => $id), 1)->row();
		$data['contact'] = $this->db->get_where("contact", array("menu_id" => $id), 1)->row();

		if ($data['infos']) {
			$data['info'] = $data['infos'];
			$this->load->view(template . "/page", $data);
		} elseif ($data['faq']) {
			$data['info'] = $data['faq'];
			$data['faqinfos'] = $this->m_p->s_a("faq", array('active_status =' => 1), FALSE, 0, array("*"), "serial", "ASC");
			$this->output->cache($data);

			$this->load->view(template . "/faq", $data);
		} elseif ($data['blog']) {
			$data['info'] = $data['blog'];
			$data['bloginfos'] = $this->m_p->s_a("blog", array('active_status =' => 1), FALSE, 0, array("*"), "serial", "ASC");

			$this->output->cache($data);
			$this->load->view(template . "/blog", $data);
		} elseif ($data['contact']) {
			$data['info'] = $data['contact'];
			$this->output->cache($data);
			$this->load->view(template . "/contact", $data);
		} else {
			show_404();
		}
	}


	public function singleBlog($id)

	{
		//$slug = urldecode($slug);

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$data['info'] = $this->db->get_where("blog", array("id" => $id), 1)->row();


		$data['bloginfos'] = $this->m_p->s_a("blog", array('active_status =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$this->output->cache($data);
		$this->load->view(template . "/singleblog", $data);
	}

	public function about()

	{
		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'footer =' => 0), FALSE, 0, array("*"), "serial", "ASC");
		$this->output->cache($data);
		$this->load->view(template . "/about", $data);
	}

	public function checkout()
	{

		if (!$this->session->userdata('id')) {
			redirect('login');
		} else {



			$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);

			$insertData = array(
				"date" => date('Y-m-d\TH:i:s'),
				"visit" => '1'
			);

			$data['paymentConfig'] = $this->getPaymentConf();
			
			$this->m_p->ins("checkout_visit", $insertData);

			$this->load->config("countries");

			$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

			$data['countries'] = $this->config->item('countries');

			$data['shipping'] = $this->m_p->s_a("shipping", array(), FALSE, 0, array("*"), "price", "ASC");
			$this->output->cache($data);
			$this->load->view(template . "/checkout", $data);
		}
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

		if(isset($settings->paypal_client_id) && $settings->paypal_client_id != null && $settings->paypal_client_id != ''){
			$paymentConf['paypal_client_id'] = $settings->paypal_client_id;
		}

		if(isset($settings->paypal_secret) && $settings->paypal_secret != null && $settings->paypal_secret != ''){
			$paymentConf['paypal_secret'] = $settings->paypal_secret;
		}

		if(isset($settings->stripe_key) && $settings->stripe_key != null && $settings->stripe_key != ''){
			$paymentConf['stripe_key'] = $settings->stripe_key;
		}

		if(isset($settings->stripe_secret) && $settings->stripe_secret != null && $settings->stripe_secret != ''){
			$paymentConf['stripe_secret'] = $settings->stripe_secret;
		}

		return $paymentConf;
	}

	public function checkoutpage()
	{

		// $dataId = $this->db->query("SELECT id FROM cats WHERE id ")->row();
		//       $catId=$dataId->id;



		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);

		$insertData = array(
			"date" => date('Y-m-d\TH:i:s'),
			"visit" => '1'
		);

		$this->m_p->ins("checkout_visit", $insertData);

		$this->load->config("countries");

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		$data['countries'] = $this->config->item('countries');

		$data['shipping'] = $this->m_p->s_a("shipping", array(), FALSE, 0, array("*"), "price", "ASC");

		$data['paymentConfig'] = $this->getPaymentConf();

		$this->output->cache($data);
		//   echo "<script>alert('".template."/checkout"."')</script>";

		$this->load->view(template . "/checkout", $data);
	}

	public function products()
	{

		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		if (isset($_GET['sorting'])) {

			$sorting = $this->input->get("sorting");
			$pricerange = $this->input->get("pricerange");

			$data['products'] = $this->m_p->getSorting($sorting, $pricerange);
		} else {

			$data['products'] = $this->m_p->s_a("products", array(), FALSE);
		}
		$this->output->cache($data);
		$this->load->view(template . "/product", $data);
	}

	public function thanks()
	{
		//$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");

		if (is_null($this->session->orderId)) {
			redirect("home");
		}


		$data['products'] = $this->m_p->s_a("products", array('active_status =' => 1), 16);





		// $this->session->userdata('id')
		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$info = $this->m_p->se_a("thankspage");



		foreach ($info as $key) {
			$data['info'] = $key;
		}




		$data['id'] = $this->session->orderId ?? 0;
		$this->output->cache($data);
		$this->load->view(template . "/thanks", $data);
	}

	public function email()
	{


		$data['info'] = $this->m_p->s_a("orders", array("id" => 9), 1);

		$info = $this->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}
		$this->output->cache($data);
		$this->load->view("emails/orderEmail", $data);
	}

	public function t()
	{
		$tp = ["mobile", "desktop", "unknown"];
		$ref = ["fb", "ig", 'tw', 'direct', 'unknown'];
		$ip = "122.111.112.444";
		$date = strtotime(date("Y-m-d"));

		for ($i = 0; $i < 150; $i++) {
			$arr = array(
				"ip" => $ip,
				"source" => $ref[array_rand($ref)],
				"pageViews" => rand(1, 10),
				"device" => $tp[array_rand($tp)],
				"date" => $date
			);

			$this->m_p->ins("counter", $arr);
		}
	}


	public function email_sent($id = FALSE)
	{


		// $text = 'thanks for your order {name} from {store_name} {lhbib} <br />';

		// $g['name'] = "lhbib";

		// $g['store_name'] = "cheapzone";

		// $n = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use($g) { return $g[$matches[1]] ?? ""; }, $text);

		// echo $n;
		// echo $text;


		// exit();

		$this->load->library("email_send");

		$this->email_send->order($id);
	}


	public function contact()
	{
		$data = array();

		$form_validation = array(
			array(
				"field" => "name",
				"label" => "Name",
				"rules" => "trim|required"
			),
			array(
				"field" => "email",
				"label" => "Email",
				"rules" => "trim|required|valid_email"
			),
			array(
				"field" => "phone",
				"label" => "Phone number",
				"rules" => "trim|required"
			),
			array(
				"field" => "msg",
				"label" => "Message",
				"rules" => "trim|required"
			)
		);
		$this->form_validation->set_rules($form_validation);
		if ($this->form_validation->run() === TRUE) {


			$ins_ar = array(
				"name" 			=> $this->input->post("name"),
				"date" 			=> time(),
				"sub" 			=> $this->input->post("phone"),
				"message" 		=> $this->input->post("msg"),
				"email" 		=> $this->input->post("email")
			);

			$this->m_p->ins("msg", $ins_ar);
			$data['msg'] = "<div class='alert alert-success'>" . lang("lang_h45") . "</div>";

			unset($_POST);
		}

		//$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");
		$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");
		$this->output->cache($data);
		$this->load->view(template . "/contact", $data);
	}

	public function customerReview()
	{


		$id = $this->input->post("product");
		if (isset($_POST['vote'])) {

			$_POST['date'] = date("Y-m-d");


			foreach ($_POST as $key => $value) {
				$_POST[$key] = $this->input->post($key);
			}



			$this->m_p->ins('reviews', $_POST);
		}


		redirect("home/show/$id");
	}




	public function tr()
	{

		for ($i = 0; $i < 1500; $i++) {

			$s = rand(8, 18);

			if ($s < 10) {
				$mm = 0.3;
			} elseif ($s < 12) {
				$mm = 0.25;
			} elseif ($s < 14) {
				$mm = 0.2;
			} elseif ($s < 16) {
				$mm = 0.15;
			} else {
				$mm = 0.09;
			}

			$a = array();

			$a[] = $s;
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);
			$a[] = $s * (rand(100 - $mm * 100, 100 + $mm * 100) / 100);

			$m = $a[4] * 0.25 + $a[5] * 0.25 + $a[6] * 0.5;

			array_pop($a);

			if ($m < 10) {
				$a[] = "N";
			} elseif ($m < 12) $a[] = "P";
			elseif ($m < 14) $a[] = "A";
			elseif ($m < 16) $a[] = "B";
			elseif ($m < 18) $a[] = "TB";
			else $a[] = "E";

			echo implode(',', $a), "\n";
		}
	}
}
