<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefOtherEarningRegular extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_otherregearnings_view') == 0 || $this->session->userdata('right_otherregearnings_view') == null) {
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
        $this->load->model('RefDeductionType_model');
        $this->load->model('RefDeductionSetup_model');
        $this->load->model('RefFactorFile_model');
        $this->load->model('RefOtherEarningRegular_model');

    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['title'] = 'Other Earnings(Regular)';
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['employee_list']=$this->Employee_model->get_list(array('employee_list.is_deleted'=>FALSE),'employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
        $data['refotherearnings']=$this->RefEarningSetup_model->get_list(array('refotherearnings.is_deleted'=>FALSE));
        $data['refotherearningstype']=$this->RefEarningType_model->get_list(array('refotherearningstype.is_deleted'=>FALSE));
        $data['new_otherearnings_regular']=$this->RefOtherEarningRegular_model->get_list(array('new_otherearnings_regular.is_deleted'=>FALSE));
        $this->load->view('ref_otherearnings_regular_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
            	$response['data'] = $this->RefOtherEarningRegular_model->get_list(
                   	array('new_otherearnings_regular.is_deleted'=>FALSE,'new_otherearnings_regular.is_temporary'=>FALSE),
                   	'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refotherearnings.*,refotherearningstype.*
                        ',
                   	array(
                   			array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                   			array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                   			array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left')
                   		));

          		echo json_encode($response);
                
                break;

            case 'create':
                $m_otherearnings_regular = $this->RefOtherEarningRegular_model;

                $oe_regular_amount=$this->input->post('oe_regular_amount', TRUE);
                $m_otherearnings_regular->employee_id = $this->input->post('employee_id', TRUE);
                $m_otherearnings_regular->earnings_id = $this->input->post('earnings_id', TRUE);
                $m_otherearnings_regular->pay_period_id = $this->input->post('pay_period_id', TRUE);
                //$m_otherearnings_regular->deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                $m_otherearnings_regular->oe_regular_amount = $this->get_numeric_value($oe_regular_amount);
                $m_otherearnings_regular->oe_cycle = $this->input->post('oe_cycle', TRUE);
                $m_otherearnings_regular->is_taxable = $this->input->post('is_taxable', TRUE);
                $m_otherearnings_regular->oe_regular_remarks = $this->input->post('oe_regular_remarks', TRUE);
                $m_otherearnings_regular->is_temporary = 0;
                $m_otherearnings_regular->date_created = date("Y-m-d H:i:s");
                $m_otherearnings_regular->created_by = $this->session->user_id;
                $m_otherearnings_regular->save();

                $oe_regular_id = $m_otherearnings_regular->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Other Earnings Regular information successfully created.';

                $response['row_added'] = $this->RefOtherEarningRegular_model->get_list($oe_regular_id,
                   	'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refotherearnings.*,refotherearningstype.*',
                   	array(
                   			array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                   			array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                   			array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left')
                   		));

          		echo json_encode($response);

                break;

            case 'delete':
                $m_otherearnings_regular=$this->RefOtherEarningRegular_model;

                $oe_regular_id=$this->input->post('oe_regular_id',TRUE);

                $m_otherearnings_regular->is_deleted=1;
                $m_otherearnings_regular->date_deleted = date("Y-m-d H:i:s");
                $m_otherearnings_regular->deleted_by = $this->session->user_id;
                if($m_otherearnings_regular->modify($oe_regular_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Other Earnings Regular information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_otherearnings_regular=$this->RefOtherEarningRegular_model;
                $oe_regular_amount=$this->input->post('oe_regular_amount', TRUE);
                $oe_regular_id=$this->input->post('oe_regular_id',TRUE);

                $m_otherearnings_regular->employee_id = $this->input->post('employee_id', TRUE);
                $m_otherearnings_regular->earnings_id = $this->input->post('earnings_id', TRUE);
                $m_otherearnings_regular->pay_period_id = $this->input->post('pay_period_id', TRUE);
                //$m_otherearnings_regular->deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                $m_otherearnings_regular->oe_regular_amount = $this->get_numeric_value($oe_regular_amount);
                $m_otherearnings_regular->oe_cycle = $this->input->post('oe_cycle', TRUE);
                $m_otherearnings_regular->is_taxable = $this->input->post('is_taxable', TRUE);
                $m_otherearnings_regular->oe_regular_remarks = $this->input->post('oe_regular_remarks', TRUE);
                $m_otherearnings_regular->is_temporary = 0;
                $m_otherearnings_regular->date_modified = date("Y-m-d H:i:s");
                $m_otherearnings_regular->modified_by = $this->session->user_id;
                $m_otherearnings_regular->modify($oe_regular_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Other Earnings Regular information successfully updated.';

                $response['row_updated'] = $this->RefOtherEarningRegular_model->get_list($oe_regular_id,
                   	'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refotherearnings.*,refotherearningstype.*',
                   	array(
                   			array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                   			array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                   			array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left')
                   		));

          		echo json_encode($response);

                break;

        }
    }





}
