<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefDeductionSetup extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
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
        $this->load->model('RefDtrDeduction_model');
        



    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'Deduction Setup';
        $data['refdeductiontype']=$this->RefDeductionType_model->get_list(array('refdeductiontype.is_deleted'=>FALSE));

        $this->load->view('ref_deductionsetup_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefDeductionSetup_model->get_list(
                   	array('refdeduction.is_deleted'=>FALSE),
                   	'refdeduction.*,refdeductiontype.deduction_type_id,refdeductiontype.deduction_type_desc',
                   	array(
                   			array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                   		)
                   	);

          		echo json_encode($response);
                break;

            case 'getdtrdeductions':
                $response['data']=$this->RefDtrDeduction_model->get_list(
                    null,
                    'dtr_deductions.*',
                    array(
                            array('daily_time_record','daily_time_record.dtr_id=dtr_deductions.dtr_id','left')
                        )
                    );

                echo json_encode($response);
                break;


            case 'create':
                $m_deduction = $this->RefDeductionSetup_model;

                $m_deduction->deduction_type_id = $this->input->post('deduction_type_id', TRUE);
                $m_deduction->deduction_desc = $this->input->post('deduction_desc', TRUE);
                $m_deduction->date_created = date("Y-m-d H:i:s");
                $m_deduction->created_by = $this->session->user_id;
                $m_deduction->save();

                $deduction_id = $m_deduction->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Deduction Setup information successfully created.';

                $response['row_added'] = $this->RefDeductionSetup_model->get_list($deduction_id,
                   	'refdeduction.*,refdeductiontype.deduction_type_id,refdeductiontype.deduction_type_desc',
                   	array(
                   			array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                   		));

                echo json_encode($response);

                break;

            case 'delete':
                $m_deduction=$this->RefDeductionSetup_model;

                $deduction_id=$this->input->post('deduction_id',TRUE);

                $m_deduction->is_deleted=1;
                $m_deduction->date_deleted = date("Y-m-d H:i:s");
                $m_deduction->deleted_by = $this->session->user_id;
                if($m_deduction->modify($deduction_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Deduction Setup information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_deduction = $this->RefDeductionSetup_model;
                $deduction_id = $this->input->post('deduction_id',TRUE);

                $m_deduction->deduction_type_id = $this->input->post('deduction_type_id', TRUE);
                $m_deduction->deduction_desc = $this->input->post('deduction_desc', TRUE);
                $m_deduction->date_modifed = date("Y-m-d H:i:s");
                $m_deduction->deleted_by = $this->session->user_id;
                $m_deduction->modify($deduction_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Deduction Setup information successfully updated.';
                $response['row_updated']=$this->RefDeductionSetup_model->get_list($deduction_id,
                   	'refdeduction.*,refdeductiontype.deduction_type_id,refdeductiontype.deduction_type_desc',
                   	array(
                   			array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                   		));
                echo json_encode($response);

                break;

            case 'test':
            	
            	break;

        }
    }











}
