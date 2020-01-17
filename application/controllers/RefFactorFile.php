<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefFactorFile extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_reffactorfile_view') == 0 || $this->session->userdata('right_reffactorfile_view') == null) {
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
        $data['title'] = 'Factor File';
        $data['reffactorfile'] = $this->RefFactorFile_model->get_list(array('reffactorfile.is_deleted'=>FALSE));

        $this->load->view('ref_factorfile_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefFactorFile_model->get_list(array('reffactorfile.is_deleted'=>FALSE));

          		echo json_encode($response);
                break;

            case 'create':
                $m_factor = $this->RefFactorFile_model;

                $m_factor->regular_ot = $this->input->post('regular_ot', TRUE);
                $m_factor->sunday = $this->input->post('sunday', TRUE);
                $m_factor->day_off = $this->input->post('day_off', TRUE);
                $m_factor->sunday_ot = $this->input->post('sunday_ot', TRUE);
                $m_factor->regular_holiday = $this->input->post('regular_holiday', TRUE);
                $m_factor->regular_holiday_ot = $this->input->post('regular_holiday_ot', TRUE);
                $m_factor->sun_regular_holiday = $this->input->post('sun_regular_holiday', TRUE);
                $m_factor->sun_regular_holiday_ot = $this->input->post('sun_regular_holiday_ot', TRUE);
                $m_factor->spe_holiday = $this->input->post('spe_holiday', TRUE);
                $m_factor->spe_holiday_ot = $this->input->post('spe_holiday_ot', TRUE);
                $m_factor->sun_spe_holiday = $this->input->post('sun_spe_holiday', TRUE);
                $m_factor->sun_spe_holiday_ot = $this->input->post('sun_spe_holiday_ot', TRUE);
                $m_factor->pagibig1 = $this->input->post('pagibig1', TRUE);
                $m_factor->pagibig2 = $this->input->post('pagibig2', TRUE);
                $m_factor->night_shift = $this->input->post('night_shift', TRUE);
                $m_factor->sun_night_shift = $this->input->post('sun_night_shift', TRUE);
                $m_factor->night_shift_reg_holiday = $this->input->post('night_shift_reg_holiday', TRUE);
                $m_factor->sun_night_shift_reg_holiday = $this->input->post('sun_night_shift_reg_holiday', TRUE);
                $m_factor->night_shift_spe_holiday = $this->input->post('night_shift_spe_holiday', TRUE);
                $m_factor->sun_night_shift_spe_holiday = $this->input->post('sun_night_shift_spe_holiday', TRUE);
                $m_factor->date_created = date("Y-m-d H:i:s");
                $m_factor->created_by = $this->session->user_id;
                $m_factor->save();

                $factor_id = $m_factor->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Factor Setup Information successfully created.';

                $response['row_added']=$this->RefFactorFile_model->get_list($factor_id);
          		echo json_encode($response);

                break;

            case 'delete':
                $m_factor=$this->RefFactorFile_model;

                $factor_id=$this->input->post('factor_id',TRUE);

                $m_factor->is_deleted=1;
                $m_factor->date_deleted = date("Y-m-d H:i:s");
                $m_factor->deleted_by = $this->session->user_id;
                if($m_factor->modify($factor_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Factor Setup Information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_factor = $this->RefFactorFile_model;
                $factor_id = $this->input->post('factor_id',TRUE);

                $m_factor->regular_ot = $this->input->post('regular_ot', TRUE);
                $m_factor->sunday = $this->input->post('sunday', TRUE);
                $m_factor->day_off = $this->input->post('day_off', TRUE);
                $m_factor->sunday_ot = $this->input->post('sunday_ot', TRUE);
                $m_factor->regular_holiday = $this->input->post('regular_holiday', TRUE);
                $m_factor->regular_holiday_ot = $this->input->post('regular_holiday_ot', TRUE);
                $m_factor->sun_regular_holiday = $this->input->post('sun_regular_holiday', TRUE);
                $m_factor->sun_regular_holiday_ot = $this->input->post('sun_regular_holiday_ot', TRUE);
                $m_factor->spe_holiday = $this->input->post('spe_holiday', TRUE);
                $m_factor->spe_holiday_ot = $this->input->post('spe_holiday_ot', TRUE);
                $m_factor->sun_spe_holiday = $this->input->post('sun_spe_holiday', TRUE);
                $m_factor->sun_spe_holiday_ot = $this->input->post('sun_spe_holiday_ot', TRUE);
                $m_factor->pagibig1 = $this->input->post('pagibig1', TRUE);
                $m_factor->pagibig2 = $this->input->post('pagibig2', TRUE);
                $m_factor->night_shift = $this->input->post('night_shift', TRUE);
                $m_factor->sun_night_shift = $this->input->post('sun_night_shift', TRUE);
                $m_factor->night_shift_reg_holiday = $this->input->post('night_shift_reg_holiday', TRUE);
                $m_factor->sun_night_shift_reg_holiday = $this->input->post('sun_night_shift_reg_holiday', TRUE);
                $m_factor->night_shift_spe_holiday = $this->input->post('night_shift_spe_holiday', TRUE);
                $m_factor->sun_night_shift_spe_holiday = $this->input->post('sun_night_shift_spe_holiday', TRUE);
                $m_factor->date_modified = date("Y-m-d H:i:s");
                $m_factor->modified_by = $this->session->user_id;
                $m_factor->modify($factor_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Factor Setup Information successfully updated.';	
                
                $response['row_updated']=$this->RefFactorFile_model->get_list($factor_id);
          		echo json_encode($response);

                break;

            case 'test':
            	
            	break;

        }
    }











}
