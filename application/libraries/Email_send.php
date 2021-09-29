<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @author hobrt.me
 */


class Email_send
{

	private $CI;


	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->config("emails");
		$this->CI->load->library('email');
		$info = $this->CI->m_p->se_a("email");

		foreach ($info as $key) {
			$data['email'] = $key;
		}


		$config = array();
		// $config['protocol'] = $data['email']->protocol;
		// $config['smtp_host'] = $data['email']->smtp_host;
		// $config['smtp_user'] = $data['email']->smtp_user;
		// $config['smtp_pass'] = $data['email']->smtp_pass;
		// $config['smtp_port'] = $data['email']->smtp_port;

		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'ssl://smtp.gmail.com';
		// $config['smtp_user'] = 'shahadot20@gmail.com';
		// $config['smtp_pass'] = 'shad2016SHAD';
		// $config['smtp_port'] = 465;

		// $config['smtp_auth'] =TRUE;
		// $config['charset'] = 'iso-8859-1';
		//       $config['mailtype'] = 'html';
		//       $config['smtp_timeout'] = '10';
		//       $config['validation'] = TRUE;


		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'ssl://premium125.web-hosting.com';
		// $config['smtp_user'] = 'contact@u-childrenteeth.com';
		// $config['smtp_pass'] = 'e97U;cbb..lM';
		// $config['smtp_port'] = 465;
		// $config['smtp_auth'] =TRUE;
		// $config['charset'] = 'iso-8859-1';
		// $config['mailtype'] = 'html';
		// $config['smtp_timeout'] = '10';
		// $config['validation'] = TRUE;

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['mailtype'] = 'html';
		$config['charset'] = 'UTF-8';
		$config['wordwrap'] = TRUE;
		$this->CI->email->initialize($config);
		$this->CI->email->set_newline("\r\n");
	}

	public function order($id = FALSE)
	{

		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->CI->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('paid_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("p_email"));

		$data['btn_text'] = $this->CI->config->item('paid_email_button_text');
		$data['btn_link'] = $this->CI->config->item('paid_email_button_link');

		$html = $this->CI->load->view("emails/order", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}

	public function refund($id = FALSE)
	{

		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->CI->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('refund_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("ref_email"));

		$data['btn_text'] = $this->CI->config->item('refund_email_button_text');
		$data['btn_link'] = $this->CI->config->item('refund_email_button_link');

		$html = $this->CI->load->view("emails/order", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}

	public function fulfilled($id = FALSE)
	{

		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->CI->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('shipped_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("f_email"));

		$data['btn_text'] = $this->CI->config->item('shipped_email_button_text');
		$data['btn_link'] = $this->CI->config->item('shipped_email_button_link');

		$html = $this->CI->load->view("emails/order", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}

	public function payment_request($id = FALSE)
	{

		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->CI->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('payment_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("pr_email"));

		$data['btn_text'] = $this->CI->config->item('payment_email_button_text');
		$data['btn_link'] = $this->CI->config->item('payment_email_button_link');

		$html = $this->CI->load->view("emails/order", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}

	public function ab_cart($n = "", $id = FALSE)
	{

		if ($id == FALSE)
			return;

		$data['idOrder'] = $id;


		$data['info'] = $this->CI->m_p->s_a("orders", array("id" => $id), 1);

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$to = get_info("orders", $id, "email");

		$g['store_name'] = $key->title;
		$g['order_number'] = $id;
		$g['name'] = get_info("orders", $id, "name");

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('cart_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("acart_email" . $tp));

		$data['btn_text'] = $this->CI->config->item('cart_email_button_text');
		$data['btn_link'] = $this->CI->config->item('cart_email_button_link');

		$html = $this->CI->load->view("emails/order", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}

	public function welcome($to = FALSE)
	{

		if ($to == FALSE)
			return;

		$info = $this->CI->m_p->se_a("settings");

		foreach ($info as $key) {
			$data['settings'] = $key;
		}

		$g['store_name'] = $key->title;

		$subject = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, $this->CI->config->item('welcome_email_subject'));

		$data['message_text'] = preg_replace_callback('/\{([a-z_]+)\}/', function ($matches) use ($g) {
			return $g[$matches[1]] ?? "";
		}, email_text("w_email"));

		$data['btn_text'] = $this->CI->config->item('welcome_email_button_text');
		$data['btn_link'] = $this->CI->config->item('welcome_email_button_link');

		$html = $this->CI->load->view("emails/welcome", $data, TRUE);

		$this->CI->load->library('email');

		// prepare email
		$this->CI->email
			->from($key->whs, $key->title)
			->to($to)
			->subject($subject)
			->message($html)
			->set_mailtype('html');

		// send email
		$this->CI->email->send();
	}
}
