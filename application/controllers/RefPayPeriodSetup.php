<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefPayPeriodSetup extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        }
        if($this->session->userdata('right_payperiod_view') == 0 || $this->session->userdata('right_payperiod_view') == null) {
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
        $this->load->model('RefReligion_model');
        $this->load->model('RefCourse_model');
        $this->load->model('RefRelationship_model');
        $this->load->model('RefLeave_model');
        $this->load->model('RefCertificate_model');
        $this->load->model('RefAction_model');
        $this->load->model('RefDiscipline_model');
        $this->load->model('RefCompensation_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefSection_model');
        $this->load->model('RefReligion_model');
        $this->load->model('RefCourse_model');
        $this->load->model('RefRelationship_model');
        $this->load->model('RefLeave_model');
        $this->load->model('RefCertificate_model');
        $this->load->model('RefAction_model');
        $this->load->model('RefDiscipline_model');
        $this->load->model('RefCompensation_model');
        $this->load->model('RefPayment_model');
        $this->load->model('RefSSS_Contribution_model');
        $this->load->model('RefPhilHealth_Contribution_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefEarningSetup_model');
        $this->load->model('RefEarningType_model');
        $this->load->model('RefPayPeriod_model');



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
        $data['title'] = 'Pay Period Setup';

        $this->load->view('pay_period_setup_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
	            $response['data']=$this->RefPayPeriod_model->get_list(array('refpayperiod.is_deleted'=>FALSE,));
                echo json_encode($response);
                break;

            case 'getpayperiod':
                $year = $this->input->post('year', TRUE);
                $response['data']=$this->RefPayPeriod_model->get_pay_period($year);


                echo json_encode($response);
                break;

            case 'create':
            	function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_payperiod = $this->RefPayPeriod_model;

                $pay_period_starttemp = $this->input->post('pay_period_start', TRUE);
                $pay_period_endtemp = $this->input->post('pay_period_end', TRUE);

                $pay_period_start = date("Y-m-d", strtotime($pay_period_starttemp));
                $pay_period_end = date("Y-m-d", strtotime($pay_period_endtemp));

                $m_payperiod->pay_period_start = $pay_period_start;
                $m_payperiod->pay_period_end = $pay_period_end;
                $m_payperiod->pay_period_sequence = $this->input->post('pay_period_sequence', TRUE);
                $m_payperiod->month_id = $this->input->post('month_id', TRUE);
                $m_payperiod->date_created = date("Y-m-d H:i:s");
                $m_payperiod->created_by = $this->session->user_id;
                $m_payperiod->save();

                $pay_period_id = $m_payperiod->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Pay Period Setup information successfully created.';

                $response['row_added'] = $this->RefPayPeriod_model->get_list($pay_period_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_payperiod=$this->RefPayPeriod_model;

                $pay_period_id=$this->input->post('pay_period_id',TRUE);

                $m_payperiod->is_deleted=1;
                $m_payperiod->date_deleted = date("Y-m-d H:i:s");
                $m_payperiod->deleted_by = $this->session->user_id;
                if($m_payperiod->modify($pay_period_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Pay Period Setup information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_payperiod=$this->RefPayPeriod_model;

                $pay_period_id=$this->input->post('pay_period_id',TRUE);

                $pay_period_starttemp = $this->input->post('pay_period_start', TRUE);
                $pay_period_endtemp = $this->input->post('pay_period_end', TRUE);

                $pay_period_start = date("Y-m-d", strtotime($pay_period_starttemp));
                $pay_period_end = date("Y-m-d", strtotime($pay_period_endtemp));

                $m_payperiod->pay_period_start = $pay_period_start;
                $m_payperiod->pay_period_end = $pay_period_end;
                $m_payperiod->pay_period_sequence = $this->input->post('pay_period_sequence', TRUE);
                $m_payperiod->month_id = $this->input->post('month_id', TRUE);
                $m_payperiod->date_modified = date("Y-m-d H:i:s");
                $m_payperiod->modified_by = $this->session->user_id;
                $m_payperiod->modify($pay_period_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Pay Period Setup information successfully updated.';
                $response['row_updated']=$this->RefPayPeriod_model->get_list($pay_period_id);
                echo json_encode($response);

                break;

            case 'test':


                break;

        }
    }











}
