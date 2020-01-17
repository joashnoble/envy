<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefWtax extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_taxtable_view') == 0 || $this->session->userdata('right_taxtable_view') == null) {
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
        $data['title'] = 'Employee';;
        $this->load->view('ref_wtax_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefPayment_model->get_list(array('ref_payment_type.is_deleted'=>FALSE));

            	echo json_encode($response);

				break;

            case 'taxMonthly':
            	$response['data']=$this->RefPayment_model->get_list(
            		array('ref_payment_type.is_deleted'=>FALSE,'reftaxcode.ref_payment_type_id'=>2, 'ref_payment_type.ref_payment_type_id'=>2),
            			'ref_payment_type.*,reftaxcode.*',
            		array(
            				array('reftaxcode','ref_payment_type.ref_payment_type_id=ref_payment_type.ref_payment_type_id','left')
            			)

            		);
          		echo json_encode($response);
          			
          	break;

          	case 'taxSemiMonthly':
            	$response['data']=$this->RefPayment_model->get_list(
            		array('ref_payment_type.is_deleted'=>FALSE,'reftaxcode.ref_payment_type_id'=>1, 'ref_payment_type.ref_payment_type_id'=>1),
            			'ref_payment_type.*,reftaxcode.*',
            		array(
            				array('reftaxcode','ref_payment_type.ref_payment_type_id=ref_payment_type.ref_payment_type_id','left')
            			)

            		);
          		echo json_encode($response);
          			
          	break;

          	case 'taxWeekly':
            	$response['data']=$this->RefPayment_model->get_list(
            		array('ref_payment_type.is_deleted'=>FALSE,'reftaxcode.ref_payment_type_id'=>4, 'ref_payment_type.ref_payment_type_id'=>4),
            			'ref_payment_type.*,reftaxcode.*',
            		array(
            				array('reftaxcode','ref_payment_type.ref_payment_type_id=ref_payment_type.ref_payment_type_id','left')
            			)

            		);
          		echo json_encode($response);
          			
          	break;

          	case 'taxDaily':
            	$response['data']=$this->RefPayment_model->get_list(
            		array('ref_payment_type.is_deleted'=>FALSE,'reftaxcode.ref_payment_type_id'=>3, 'ref_payment_type.ref_payment_type_id'=>3),
            			'ref_payment_type.*,reftaxcode.*',
            		array(
            				array('reftaxcode','ref_payment_type.ref_payment_type_id=ref_payment_type.ref_payment_type_id','left')
            			)

            		);
          		echo json_encode($response);
          			
          	break;

            case 'taxWeekly':
                $response['data']=$this->RefPayment_model->get_list(
                    array('ref_payment_type.is_deleted'=>FALSE,'reftaxcode.ref_payment_type_id'=>4, 'ref_payment_type.ref_payment_type_id'=>4),
                        'ref_payment_type.*,reftaxcode.*',
                    array(
                            array('reftaxcode','ref_payment_type.ref_payment_type_id=ref_payment_type.ref_payment_type_id','left')
                        )

                    );
                echo json_encode($response);
                    
            break;

            case 'test':
	
		  		$query = $this->db->query("SELECT * FROM employee_list");
		    	$response['data']=$query->result_array();

		    	echo json_encode($response);

                break;
        }
    }

}
