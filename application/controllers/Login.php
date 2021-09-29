<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {



 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('checkout');
  }

    $this->load->library('email');
  $this->load->library('form_validation');
  $this->load->model('login_model');
   
 }

 function index()
 {
  $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1,'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");

  

  $this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
          $this->db->from('products');
          $this->db->join('subcat', 'subcat.id = products.subcat', 'right outer'); 
          $this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer'); 
          $this->db->where('cats.id'); 
          $query = $this->db->get();
          $data['products'] =$query->result();
 
  $this->load->view(template."/login",$data);
 }

 function validation()
 {
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('checkout');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    redirect('login');
   }
  }
  else
  {
   $this->index();
  }
 }





public function recover(){
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1,'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");


     $this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
          $this->db->from('products');
          $this->db->join('subcat', 'subcat.id = products.subcat', 'right outer'); 
          $this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer'); 
          $this->db->where('cats.id'); 
          $query = $this->db->get();
          $data['products'] =$query->result();

    $this->load->view(template."/recover",$data);
}
public function recover_password(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

            //check if email is in the database
        $this->load->model('model_users');
        if($this->model_users->email_exists()){
            //$them_pass is the varible to be sent to the user's email
            $temp_pass = md5(uniqid());
            //send email with #temp_pass as a link
            //          $config = array(
            //    'protocol'  => 'smtp',
            //    'smtp_host' => 'ssl://smtp.gmail.com',
            //    'smtp_port' => 465,
            //    'smtp_user'  => 'shahadot20@gmail.com', 
            //    'smtp_pass'  => 'shad2016SHAD', 
            //    'mailtype'  => 'html',
            //    'charset'    => 'iso-8859-1',
            //                  'wordwrap'   => TRUE
            //   );
            // $this->load->library('Email_send', $config);

            $this->load->library('Email_send', array('mailtype'=>'html'));
            $emailConf  = $this->db->query("SELECT * FROM email")->row();
            $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
            // $this->email->from('admin@electriclint.store', "electriclint.store");


          //  $html = $this->load->view("emails/welcome_email_two",'', TRUE);
            $this->email->to($this->input->post('email'));
            $this->email->subject("Reset your Password");

            $message = "<p>This email has been sent as a request to reset our password</p>";
            $message .= "<p><a href='".base_url()."Login/reset_password/$temp_pass'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
            $this->email->message($message);

            if($this->email->send()){
                $this->load->model('model_users');
                if($this->model_users->temp_reset_password($temp_pass)){

                   $this->session->set_flashdata('message', 'check your email for instructions, thank you');
                    redirect('login/recover');
               
                }
            }
            else{
                echo "email was not sent, please contact your administrator";
            }

        }else{
            echo "your email is not in our database";
        }
}
public function reset_password($temp_pass){
  


    $this->load->model('model_users');
    if($this->model_users->is_temp_pass_valid($temp_pass)){

      
   $this->db->select('products.*,subcat.id as sid,subcat.cat_id,cats.id as cid');
          $this->db->from('products');
          $this->db->join('subcat', 'subcat.id = products.subcat', 'right outer'); 
          $this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer'); 
          $this->db->where('cats.id'); 
          $query = $this->db->get();
          $data['products'] =$query->result();


   $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1,'menu =' => 1), FALSE, 0, array("*"), "serial", "ASC");


  $_SESSION['temp_pass'] = $temp_pass;
    $this->load->view(template."/reset_password",$data);
    
       //once the user clicks submit $temp_pass is gone so therefore I can't catch the new password and   //associated with the user...

    }else{
        echo "the key is not valid";    
    }

}
public function update_password(){

    $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
            if($this->form_validation->run()){

 
$temp_pass= $_SESSION['temp_pass'];
$encrypted_password =base64_encode($this->input->post('password'));
 $data =array(
                'password' =>$encrypted_password
              );
               

        $this->db->where('reset_pass', $temp_pass);
        $this->db->update('user_register', $data);  
       


            $this->session->set_flashdata('message', 'Password Update Successfully');
            redirect('login');


            }else{
               $this->session->set_flashdata('message', 'passwords do not match');
                 redirect('login/recover');
       
            }
}


}
