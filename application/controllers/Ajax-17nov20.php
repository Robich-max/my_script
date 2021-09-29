<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {



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
			'expire' => time()+3600*24*1000
		);

		set_cookie($cookie);
	}

	public function validCoupon()
	{

		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

		$coupon = $this->input->post("coupon");

		$date = date("Y-m-d");

		$c = $this->m_p->s_a("discounts", array("coupon" => $coupon, "date >=" => $date));

		if($c == 0)
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

		if(count($c) > 0) {
			
			echo "2";
		}else {
			
			$this->m_p->ins("subscribers", array("email" => $email, "date" => time()));



			$this->_send_welcome($email);

			

		}

	}

	public function _send_welcome($email = FALSE) {

		$this->load->library("email_send");

	//	$this->email_send->welcome($email);

     $data  = $this->db->query("SELECT * FROM email")->row();
 


           $this->load->library('Email_send', array('mailtype'=>'html'));
           $this->email->from('admin@electriclint.store', "electriclint.store");


            $html = $this->load->view("emails/$data->wemail_name",$data, TRUE);

            // echo "<pre>";
            // print_r($html);
            // exit;
            $this->email->to($email);
            $this->email->subject("$data->wesubject");
            $this->email->message($html);

            if($this->email->send()){
               
                 echo "1";
               
                }
            else{
                echo "3";
            }

	}


	public function getCart()
	{
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

		$total = 0;

		if(!is_null(get_cookie("cart"))){
			$arr = json_decode(get_cookie("cart"), TRUE);

			$total = count($arr);
		}

		$v = $this->load->view(template."/ajax/cart", array(), TRUE);

		echo json_encode(array('total' => $total, 'html' => $v), JSON_UNESCAPED_UNICODE);

	}

	public function reviews($id) {
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

		$p = $this->input->post("p");

		$start = 8 * $p;

		if(is_login("admin_login"))
		{
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id), 8, $start);
		}else {
			$data['votes'] = $this->m_p->s_a("reviews", array("product" => $id, "ac" => 1), 8, $start);
		}

		if(count($data['votes']) == 0)
			echo "0";
		else {

			$this->load->view(template."/ajax/reviews", $data);
		}


	}

	public function addToCart()
	{
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

		$ret = array();

		$ret['suc'] = 3;

		$id = $this->input->post("id");
		$q  = $this->input->post("q");

		$info = $this->m_p->s_a("products", array("id" => $id), 1);

		if(count($info) > 0)
		{
			foreach($info as $key)
			{
				$title 	= $key->title;
				$price 	= $key->discount > 0 ? number_format($key->price - ($key->price * $key->discount / 100), 2) : $key->price;
				$orprice = $key->price;
				$img 	= add_thumb($key->images, "_m");
			}

			if(is_null(get_cookie("cart"))){

				$arr = array();

				$op = "";

				if(isset($_POST['option']))
				{
					$op = json_encode($_POST['option']);
				}


				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);


				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time()+12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
			}else {
				$arr = json_decode(get_cookie("cart"), TRUE);

				$op = "";

				if(isset($_POST['option']))
				{
					$op = json_encode($_POST['option']);
				}
				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);

				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time()+12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
				
			}
		}

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

		if(count($info) > 0)
		{
			foreach($info as $key)
			{
				$title 	= $key->title;
				if($data->price){
                     $price = $data->price;
			         $orprice = $data->price;
				}else{
                 $price 	= $key->discount > 0 ? number_format($key->price - ($key->price * $key->discount / 100), 2) : $key->price;
				$orprice = $key->price;
				}
				
				$img 	= add_thumb($key->images, "_m");
			}

			if(is_null(get_cookie("cart"))){

				$arr = array();

				$op = "";

				if(isset($_POST['option']))
				{
					$op = json_encode($_POST['option']);
				}


				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);


				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time()+12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
			}else {
				$arr = json_decode(get_cookie("cart"), TRUE);

				$op = "";

				if(isset($_POST['option']))
				{
					$op = json_encode($_POST['option']);
				}
				$arr[] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice, "op" => $op);

				$ret['info'] = array("name" => $title, "id" => $id, "price" => $price, "img" => $img, "q" => $q, "orp" => $orprice);

				$f = json_encode($arr);

				$cookie = array(
					'name'   => 'cart',
					'value'  => $f,
					'expire' => time()+12586500
				);

				set_cookie($cookie);

				$ret['suc'] = 1;
				
			}
		}

		echo json_encode($ret);

	}

	public function getTotal()
	{
		if(is_null(get_cookie("cart"))){
			echo "0";
			exit();
		}

		$sum = 0;

		$arr = json_decode(get_cookie("cart"), TRUE);

		foreach ($arr as $key => $value) {
			$sum+=$value['price'] * $value['q'];
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

		if(array_key_exists($id, $arr))
		{

			$arr[$id]["q"] = $qty;

			if($qty < 1)
				unset($arr[$id]);

			$f = json_encode($arr);

			$cookie = array(
				'name'   => 'cart',
				'value'  => $f,
				'expire' => time()+12586500
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

		if(array_key_exists($id, $arr))
		{
			unset($arr[$id]);
			$f = json_encode($arr);

			$cookie = array(
				'name'   => 'cart',
				'value'  => $f,
				'expire' => time()+12586500
			);

			set_cookie($cookie);

			echo "1";
		}else {

			echo "2";

		}

	}





	

}