<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          if ($this->session->userdata('id')) {
               redirect('private_area');
          }
          $this->load->library('form_validation');
          //$this->load->library('encrypt');
          $this->load->model('register_model');
     }

     function index()
     {
          $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");



          $this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
          $this->db->from('products');
          $this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
          $this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
          $this->db->where('cats.id');
          $query = $this->db->get();
          $data['products'] = $query->result();

          $this->load->view(template . "/login", $data);
     }

     function validation()
     {


          $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
          $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[user_register.email]');
          $this->form_validation->set_rules('user_password', 'Password', 'required');

          if ($this->form_validation->run()) {


               $verification_key = md5(rand());
               $encrypted_password = base64_encode($this->input->post('user_password'));

               $data = array(
                    'name'  => $this->input->post('user_name'),
                    'email'  => $this->input->post('user_email'),
                    'password' => $encrypted_password,
                    'verification_key' => $verification_key
               );

               $id = $this->register_model->insert($data);

               if ($id > 0) {

                    $subject = "Please verify email for login";
                    $message = "
    <p>Salut " . $this->input->post('user_name') . "</p>
    <p>Il s'agit d'un courrier électronique de vérification du système de registre de connexion. Pour compléter le processus d'enregistrement et se connecter au système. Vous voulez d'abord vérifier votre  <a href='" . base_url() . "register/verify_email/" . $verification_key . "'>email </a>en cliquant sur ce lien.</p>
    <p>Une fois que vous aurez cliqué sur ce lien, votre courriel sera vérifié et vous pourrez vous connecter au système.</p>
    <p>Merci,</p>
    ";
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
                    //$this->load->library('Email_send', $config);
                    $this->load->library('Email_send', array('mailtype' => 'html'));
                    $this->email->set_newline("\r\n");
                    $emailConf  = $this->db->query("SELECT * FROM email")->row();
                    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
                    // $this->email->from('admin@electriclint.store', "electriclint.store");
                    $this->email->to($this->input->post('user_email'));
                    $this->email->subject($subject);
                    $this->email->message($message);

                    $this->email->send();
                    
                    // if ($this->email->send()) {
                         $this->session->set_flashdata('message', 'Check in your email for email verification mail');
                         redirect('login');
                    // } 
               }
          } else {

               $this->index();
          }
     }

     function verify_email()
     {
          if ($this->uri->segment(3)) {
               $verification_key = $this->uri->segment(3);
               if ($this->register_model->verify_email($verification_key)) {
                    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="' . base_url() . 'login">here</a></h1>';
               } else {
                    $data['message'] = '<h1 align="center">Invalid Link</h1>';
               }
               $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");


               $this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
               $this->db->from('products');
               $this->db->join('subcat', 'subcat.id = products.subcat', 'right outer');
               $this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer');
               $this->db->where('cats.id');
               $query = $this->db->get();
               $data['products'] = $query->result();

               $this->load->view(template . "/email_verification", $data);
          }
     }
}
