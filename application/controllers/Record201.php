<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record201 extends CORE_Controller
{

    function __construct() {
        parent::__construct('');

        $this->validate_session();
        if($this->session->userdata('right_201records_view') == 0 || $this->session->userdata('right_201records_view') == null) {
            redirect('../Dashboard');
        }
        $this->load->library('excel');
        $this->load->model('Employee_model');

    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = '201 Record';
        $data['employee'] = $this->Employee_model->get_list('employee_list.is_deleted=0','employee_list.employee_id,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name, employee_list.ecode',null,'full_name ASC');


        $this->load->view('201record_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {

        }
    }

function alpha_dash_space($first_name){
if (! preg_match('/^[a-zA-Z\s]+$/', $first_name)) {
$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contains alpha characters & White spaces Only!');
return FALSE;
} else {
return TRUE;
}
}
function email_check($email_address)
{

    if (valid_email('@gmail.com') !== false) return true;
    if (valid_email('@yahoo.com') !== false) return true;

        $this->form_validation->set_message('email_address', 'Please provide an acceptable email address.');
        return FALSE;

}

function numeric_wcomma ($str)
{
    return preg_match('/^[0-9,]+$/', $str);
}

}
