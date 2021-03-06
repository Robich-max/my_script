<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    load_lang();
    add_visitor();
    $this->load->library('form_validation');
    $this->load->model('model_slids');
    $this->load->library('email');
    $this->load->library("email_send");
    $this->load->config("emails");
  }

  function customerEmail()
  {
    $subject  = $this->input->post('subject');
    $mail  = $this->input->post('email');
    $message['message']  = $this->input->post('message');

    // $config = array(
    //  'protocol'  => 'smtp',
    //  'smtp_host' => 'ssl://smtp.gmail.com',
    //  'smtp_port' => 465,
    //  'smtp_user'  => 'shahadot20@gmail.com',
    //  'smtp_pass'  => 'shad2016SHAD',
    //  'mailtype'  => 'html',
    //  'charset'    => 'iso-8859-1',
    //                'wordwrap'   => TRUE
    // );
    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $data  = $this->db->query("SELECT * FROM email")->row();
    $info = array(
      'message'  => $message,
      'data' => $data,
      'settings' => $settingsInfo,

    );

    $this->load->library('Email_send', array('mailtype' => 'html'));
    $this->email->set_newline("\r\n");
    $emailConf  = $this->db->query("SELECT * FROM email")->row();
    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
    // $this->email->from('admin@electriclint.store', "electriclint.store");
    $html = $this->load->view("emails/$data->promotion_name", $info, TRUE);

    // echo "<pre>";
    // print_r($html);
    // exit;

    $this->email->to($mail);
    $this->email->subject($subject);
    $this->email->message($html);
    if ($this->email->send()) {
      $this->session->set_flashdata('message', 'Email sent successfully');
      redirect('admin/customers');
    } else {
      $this->session->set_flashdata('message', 'Email sent Failed!Check your email.');
      redirect('admin/customers');
    }
  }
  function allCustomerEmail()
  {
    $subject  = $this->input->post('subject');
    $message1  = $this->input->post('message');
 
    
    

    $this->load->library("email_send");

    // $config = array(
    //  'protocol'  => 'smtp',
    //  'smtp_host' => 'ssl://smtp.gmail.com',
    //  'smtp_port' => 465,
    //  'smtp_user'  => 'shahadot20@gmail.com',
    //  'smtp_pass'  => 'shad2016SHAD',
    //  'mailtype'  => 'html',
    //  'charset'    => 'iso-8859-1',
    //                'wordwrap'   => TRUE
    // );
    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $data  = $this->db->query("SELECT * FROM email")->row();
    if(isset($_POST['btn_subscriber'])){
        $dataEmail = $this->db->query("SELECT * FROM subscribers")->result();
    }else{
        $dataEmail  = $this->db->query("SELECT * FROM orders GROUP BY email")->result();

    }
 $i = 0;
    foreach ($dataEmail as $key => $value) {
        $i++;
      $this->load->library('Email_send', array('mailtype' => 'html'));
      if(isset($_POST['btn_subscriber'])){
          $message1 = str_replace("{{customer_email}}",$value->email,$message1);
          $message1 = str_replace("{{admin_name}}",$data->admin_name,$message1);
          $message1 = str_replace("{{admin_email}}",$data->smtp_user,$message1);
          $message1 = str_replace("{{store_name}}",$data->store_name,$message1);
      }else{
          $message1 = str_replace("{{customer_name}}",$value->name,$message1);
          $message1 = str_replace("{{customer_email}}",$value->email,$message1);
          $message1 = str_replace("{{admin_name}}",$data->admin_name,$message1);
          $message1 = str_replace("{{admin_email}}",$data->smtp_user,$message1);
          $message1 = str_replace("{{store_name}}",$data->store_name,$message1);
      }
      $message['message'] = $message1;
        $info = array(
      'message'  => $message,
      'data' => $data,
      'settings' => $settingsInfo,

       );
  
      $this->email->set_newline("\r\n");
      $emailConf  = $this->db->query("SELECT * FROM email")->row();
      $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
      // $this->email->from('admin@electriclint.store', "electriclint.store");
      $html = $this->load->view("emails/$data->promotion_name", $info, TRUE);
      $this->email->to($value->email);
      $this->email->subject($subject);
      $this->email->message($html);
      $this->email->send();
    
    }
    if ($this->email->send()) {
      $this->session->set_flashdata('message', 'Email sent successfully');
      redirect('admin/customers');
    } else {
   //   $this->session->set_flashdata('message', 'Email sent Failed!Check your email.'.$i);
      redirect('admin/customers');
    }
  }
  public function dataInfo()
  {
    $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

    foreach ($cart as $kc) {

      $data[] = $kc['q'];
    }
    if (!empty($data)) {
      $qtyInfo = array_sum($data);
    } else {
      $qtyInfo = 0;
    }
    echo json_encode($qtyInfo);
  }
  public function customerInfoGet()
  {
    $email = $this->input->post('email');


    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer_view.email]');

    if ($this->form_validation->run()) {
      $data = array(
        'email' => $email,
        'date' => date('Y-m-d')
      );
      $update =  $this->m_p->ins('customer_view', $data);
      if ($update == true) {
        $response['success'] = true;
        $response['messages'] = 'Succesfully updated';
      } else {
        $response['success'] = false;
        $response['messages'] = 'Error in the database while updated the brand information';
      }
    }
  }
  public function abandonEmailSend()
  {

    $subject  = 'Abandon Email';
 

    $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

    $dataEmail  = $this->db->query("SELECT * FROM customer_view where email_send = '0'")->result();
    $emailData  = $this->db->query("SELECT * FROM email")->row();
    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $info = array(
      'data' => $emailData,
      'cart' => $cart,
      'settings' => $settingsInfo,

    );

    if ($emailData->ab_active_status == 1) {

      foreach ($dataEmail as $key => $value) {

        $now = date("Y-m-d H:i:s");
        $time = date("Y-m-d H:i:s", strtotime("+$emailData->time hours $value->date"));
        $emailInfo  = $this->db->query("SELECT * FROM orders where email = '$value->email'")->row();
        if ($now <= $time) {
          if (!$emailInfo) {

            $this->load->library('Email_send', array('mailtype' => 'html'));
            $this->email->set_newline("\r\n");
            $emailConf  = $this->db->query("SELECT * FROM email")->row();
            $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
            // $this->email->from('admin@electriclint.store', "electriclint.store");
            // $html = $this->load->view("emails/$emailData->abandon_name",$info, TRUE);
            $html = $this->load->view("emails/$emailData->abandon_name", $info, TRUE);

            // echo "<pre>";
            // print_r($html);
            // exit;
            $this->email->to($value->email);
            $this->email->subject($subject);
            $this->email->message($html);
            $this->email->send();

            $sendinfo = array('email_send' => '1');
            $this->db->where('email', $value->email);
            $this->db->update('customer_view', $sendinfo);
          }
        }
      }
    }
    if ($this->email->send()) {

      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }
  public function abandonEmailTwoSend()
  {

    $subject  = 'Abandon Email';


    $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

    $dataEmail  = $this->db->query("SELECT * FROM customer_view where emailtwo_send = '0'")->result();
    $emailData  = $this->db->query("SELECT abtwo_img as ab_img,abandontwo_name as abandon_name,abtwo_desc as ab_desc,abtwo_time FROM email")->row();
    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $info = array(
      'data' => $emailData,
      'cart' => $cart,
      'settings' => $settingsInfo,

    );
    if ($emailData->abt_active_status == 1) {

      foreach ($dataEmail as $key => $value) {
        $now = date("Y-m-d H:i:s");
        $time = date("Y-m-d H:i:s", strtotime("+$emailData->abtwo_time hours $value->date"));
        $emailInfo  = $this->db->query("SELECT * FROM orders where email = '$value->email'")->row();
        if ($now <= $time) {
          if (!$emailInfo) {

            $this->load->library('Email_send', array('mailtype' => 'html'));
            $this->email->set_newline("\r\n");
            $emailConf  = $this->db->query("SELECT * FROM email")->row();
            $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
            // $this->email->from('admin@electriclint.store', "electriclint.store");
            // $html = $this->load->view("emails/$emailData->abandon_name",$info, TRUE);
            $html = $this->load->view("emails/$emailData->abandon_name", $info, TRUE);

            // echo "<pre>";
            // print_r($html);
            // exit;
            $this->email->to($value->email);
            $this->email->subject($subject);
            $this->email->message($html);
            $this->email->send();

            $sendinfo = array('email_send' => '1');
            $this->db->where('email', $value->email);
            $this->db->update('customer_view', $sendinfo);
          }
        }
      }
    }
    if ($this->email->send()) {

      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }
  public function abandonEmailThreeSend()
  {

    $subject  = 'Abandon Email';


    $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

    $dataEmail  = $this->db->query("SELECT * FROM customer_view where emailthree_send = '0'")->result();
    $emailData  = $this->db->query("SELECT abthree_img as ab_img,abandonthree_name as abandon_name,abthree_desc as ab_desc,adthree_time FROM email")->row();
    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $info = array(
      'data' => $emailData,
      'cart' => $cart,
      'settings' => $settingsInfo,

    );

    if ($emailData->abth_active_status == 1) {

      foreach ($dataEmail as $key => $value) {
        $now = date("Y-m-d H:i:s");
        $time = date("Y-m-d H:i:s", strtotime("+$emailData->adthree_time hours $value->date"));
        $emailInfo  = $this->db->query("SELECT * FROM orders where email = '$value->email'")->row();
        if ($now <= $time) {
          if (!$emailInfo) {

            $this->load->library('Email_send', array('mailtype' => 'html'));
            $this->email->set_newline("\r\n");
            $emailConf  = $this->db->query("SELECT * FROM email")->row();
            $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
            // $this->email->from('admin@electriclint.store', "electriclint.store");
            // $html = $this->load->view("emails/$emailData->abandon_name",$info, TRUE);
            $html = $this->load->view("emails/$emailData->abandon_name", $info, TRUE);

            // echo "<pre>";
            // print_r($html);
            // exit;
            $this->email->to($value->email);
            $this->email->subject($subject);
            $this->email->message($html);
            $this->email->send();

            $sendinfo = array('email_send' => '1');
            $this->db->where('email', $value->email);
            $this->db->update('customer_view', $sendinfo);
          }
        }
      }
    }
    if ($this->email->send()) {

      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }
  public function abandonEmailFourSend()
  {

    $subject  = 'Abandon Email';


    $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

    $dataEmail  = $this->db->query("SELECT * FROM customer_view where emailfour_send = '0'")->result();
    $emailData  = $this->db->query("SELECT abfour_img as ab_img,abandonfour_name as abandon_name,abfour_desc as ab_desc,adfour_time FROM email")->row();

    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $info = array(
      'data' => $emailData,
      'cart' => $cart,
      'settings' => $settingsInfo,

    );


    if ($emailData->abf_active_status == 1) {

      foreach ($dataEmail as $key => $value) {
        $now = date("Y-m-d H:i:s");
        $time = date("Y-m-d H:i:s", strtotime("+$emailData->adfour_time hours $value->date"));
        $emailInfo  = $this->db->query("SELECT * FROM orders where email = '$value->email'")->row();
        if ($now <= $time) {
          if (!$emailInfo) {

            $this->load->library('Email_send', array('mailtype' => 'html'));
            $this->email->set_newline("\r\n");
            $emailConf  = $this->db->query("SELECT * FROM email")->row();
            $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
            // $this->email->from('admin@electriclint.store', "electriclint.store");
            // $html = $this->load->view("emails/$emailData->abandon_name",$info, TRUE);
            $html = $this->load->view("emails/$emailData->abandon_name", $info, TRUE);

            // echo "<pre>";
            // print_r($html);
            // exit;
            $this->email->to($value->email);
            $this->email->subject($subject);
            $this->email->message($html);
            $this->email->send();

            $sendinfo = array('email_send' => '1');
            $this->db->where('email', $value->email);
            $this->db->update('customer_view', $sendinfo);
          }
        }
      }
    }
    if ($this->email->send()) {

      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }
}
