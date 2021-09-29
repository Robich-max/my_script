<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


 

  public function test($id = FALSE)
	{
	 

	   	$data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1,'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

		if($id == FALSE)
			redirect("home");
		
		$data['info'] = $this->m_p->s_a("products", array("id" => $id), 1);

		if(count($data['info']) == 0)
			redirect("home");

		$data['cats'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");

		$ids = [];

		$upsells = $this->m_p->s_a("upsell", array("onOrder" => $id), FALSE);

		foreach ($upsells as $key) {
			$ids[] = $key->showProduct;
		}

		if(count($ids) > 0)
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
		if($this->form_validation->run() === TRUE)
		{
			$config['upload_path'] 				= './reviews/';
			$config['allowed_types'] 			= 'jpg|jpeg|png';
			$config['encrypt_name'] 			= TRUE;
			$config['max_size']					= '10240'; // 10 MB
			$this->upload->initialize($config);
			$a = $this->upload->do_upload('img');
			$data_upload = $this->upload->data();
			$img = "";
			if($a)
			{
				$this->image_l
					->load($data_upload['full_path'])
					->resize_crop(300,300)
					->save_pa('','',TRUE);

				$img = $data_upload['file_name'];
			}

			if(isset($_POST['starv'])){

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

		if(is_login("admin_login"))
		{
			$data['votes'] = $this->db->query("SELECT * FROM reviews WHERE product = $id")->result();
		}else {
			$data['votes'] = $this->db->query("SELECT * FROM reviews WHERE product = $id")->result();
		}


		

		foreach($data['info'] as $key)
		{
			$data['title'] = $key->title;
			$subcat = $key->subcat;
		}

		$data['products'] = $this->m_p->s_a("products", array("id" => $id), 6);
		$data['customers'] = $this->m_p->s_a("cus_reviews", array("product_id" => $id));
		 $data['results']  = $this->db->query("SELECT * FROM pro_reviews WHERE product_id = $id")->row();
		 $data['upselId']  = $id;

// echo "<pre>";
// print_r($data['results']);
// exit;
		 $this->load->view(template."/test",$data);

	}
}
