<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SendEmail extends Controller {
 
 function SendEmail(){
  parent::Controller();
  $this->load->library('email'); // load the library
 }
 
 function index(){
  $this->sendEmail();  
 }
 
 public function send_email(){   
  // Email configuration
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'smtp.gmail.com',
     'smtp_port' => 465,
     'smtp_user' => 'noblejjoash@gmail.com', // change it to yours
     'smtp_pass' => '1tru5tG0d', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
 
 function send_email($email,$subject,$message){
  $this->load->library('email', $config);
  $this->email->from('noblejjoash@gmail.com', "JDEV");
  $this->email->to($email);
  $this->email->cc($email);
  $this->email->subject($subject);
  $this->email->message($message);
  }
}
