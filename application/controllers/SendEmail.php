<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendEmail extends CORE_Controller
{

    function __construct(){
        parent::__construct('');
        $this->validate_session();
        $this->load->library('email'); // load the library
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

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'Alpha List of Employee';

        $this->load->view('alpha_list_view', $data);
    }

}
