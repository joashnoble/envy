<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DtrVerification extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_dtrverification_view') == 0 || $this->session->userdata('right_dtrverification_view') == null) {
            redirect('../Dashboard');
        }
        else{
            
        }
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefSection_model');
        $this->load->model('TemporaryDeduction_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefDeductionSetup_model');

    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforprocesspayroll', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['ref_group']=$this->RefGroup_model->get_list(array('refgroup.is_deleted'=>FALSE));
        $data['ref_branch']=$this->RefBranch_model->get_list(array('ref_branch.is_deleted'=>FALSE));
        $data['ref_department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        /*$data['refdeduction']=$this->RefDeductionSetup_model->get_list(array('refdeduction.is_deleted'=>FALSE));
        $data['employee_list']=$this->Employee_model->get_list(
                    array('employee_list.is_deleted'=>FALSE),
                    'employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name'
                   // null,
                   // true,
                   // '4'
                    );*/
        $data['title'] = 'DTR: Verification List';

        $this->load->view('dtr_verification_list_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                break;

            case 'create':

                break;

            case 'delete':
                break;

            case 'update':

                break;


        }
    }











}
