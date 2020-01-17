<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
    }

    public function index()
    {
        $data['title'] = '404 Error';
        $this->load->view('error_404_view',$data);
    }
}
