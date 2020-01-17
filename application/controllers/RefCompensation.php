<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefCompensation extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_compensation_view') == 0 || $this->session->userdata('right_compensation_view') == null) {
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
        $data['title'] = 'Compensation';

        $this->load->view('ref_compensation_type_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefCompensation_model->get_list(
                    array('ref_compensation_type.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_compensation = $this->RefCompensation_model;
               
                $m_compensation->compensation_type = $this->input->post('compensation_type', TRUE);
                $m_compensation->description = $this->input->post('description', TRUE);
                $m_compensation->date_created = date("Y-m-d H:i:s");
                $m_compensation->created_by = $this->session->user_id;
                $m_compensation->save();

                $ref_compensation_type_id = $m_compensation->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Compensation Type information successfully created.';

                $response['row_added'] = $this->RefCompensation_model->get_list($ref_compensation_type_id);
                echo json_encode($response);

                break;

            case 'createdirect':
                $m_compensation = $this->RefCompensation_model;
               
                $m_compensation->compensation_type = $this->input->post('postname', TRUE);
                $m_compensation->description = $this->input->post('post_description', TRUE);
                $m_compensation->date_created = date("Y-m-d H:i:s");
                $m_compensation->created_by = $this->session->user_id;
                $m_compensation->save();

                $ref_compensation_type_id = $m_compensation->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Compensation Type information successfully created.';

                $response['row_added'] = $this->RefCompensation_model->get_list($ref_compensation_type_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_compensation=$this->RefCompensation_model;

                $ref_compensation_type_id=$this->input->post('ref_compensation_type_id',TRUE);

                $m_compensation->is_deleted=1;
                $m_compensation->date_Deleted = date("Y-m-d H:i:s");
                $m_compensation->deleted_by = $this->session->user_id;
                if($m_compensation->modify($ref_compensation_type_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Compensation Type information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_compensation=$this->RefCompensation_model;

                $ref_compensation_type_id=$this->input->post('ref_compensation_type_id',TRUE);

                $m_compensation->compensation_type = $this->input->post('compensation_type', TRUE);
                $m_compensation->description = $this->input->post('description', TRUE);
                $m_compensation->date_modified = date("Y-m-d H:i:s");
                $m_compensation->modified_by = $this->session->user_id;
                $m_compensation->modify($ref_compensation_type_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Compensation Type information successfully updated.';
                $response['row_updated']=$this->RefCompensation_model->get_list($ref_compensation_type_id);
                echo json_encode($response);

                break;

        }
    }











}
