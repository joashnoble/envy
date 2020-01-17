<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefDiscipline extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_disciplinary_view') == 0 || $this->session->userdata('right_disciplinary_view') == null) {
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
        $data['title'] = 'Disciplinary Action';

        $this->load->view('ref_disciplinary_action_policy_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefDiscipline_model->get_list(
                    array('ref_disciplinary_action_policy.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_discipline = $this->RefDiscipline_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('disciplinary_action_policy', 'Disciplinary Action Policy Name', 'strip_tags|xss_clean|required');       
               if ($this->form_validation->run() == TRUE) 
                {     
                $m_discipline->disciplinary_action_policy = $this->input->post('disciplinary_action_policy', TRUE);
                $m_discipline->description = $this->input->post('description', TRUE);
                $m_discipline->date_created = date("Y-m-d H:i:s");
                $m_discipline->created_by = $this->session->user_id;
                $m_discipline->save();

                $ref_disciplinary_action_policy_id = $m_discipline->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Disciplinary Action Policy information successfully created.';

                $response['row_added'] = $this->RefDiscipline_model->get_list($ref_disciplinary_action_policy_id);
                  
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);

                break;

            case 'createdirect':
                $m_discipline = $this->RefDiscipline_model;
               
                $m_discipline->disciplinary_action_policy = $this->input->post('postname', TRUE);
                $m_discipline->description = $this->input->post('postdescription', TRUE);
                $m_discipline->date_created = date("Y-m-d H:i:s");
                $m_discipline->created_by = $this->session->user_id;
                $m_discipline->save();

                $ref_disciplinary_action_policy_id = $m_discipline->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Disciplinary Action Policy information successfully created.';

                $response['row_added'] = $this->RefDiscipline_model->get_list($ref_disciplinary_action_policy_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_discipline=$this->RefDiscipline_model;

                $ref_disciplinary_action_policy_id=$this->input->post('ref_disciplinary_action_policy_id',TRUE);

                $m_discipline->is_deleted=1;
                $m_discipline->date_deleted = date("Y-m-d H:i:s");
                $m_discipline->deleted_by = $this->session->user_id;
                if($m_discipline->modify($ref_disciplinary_action_policy_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Disciplinary Action Policy information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_discipline=$this->RefDiscipline_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('disciplinary_action_policy', 'Disciplinary Action Policy Name', 'strip_tags|xss_clean|required');       
                 if ($this->form_validation->run() == TRUE) 
                {     
                $ref_disciplinary_action_policy_id=$this->input->post('ref_disciplinary_action_policy_id',TRUE);

                $m_discipline->disciplinary_action_policy = $this->input->post('disciplinary_action_policy', TRUE);
                $m_discipline->description = $this->input->post('description', TRUE);
                $m_discipline->date_modified = date("Y-m-d H:i:s");
                $m_discipline->modified_by = $this->session->user_id;
                $m_discipline->modify($ref_disciplinary_action_policy_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Disciplinary Action Policy information successfully updated.';
                $response['row_updated']=$this->RefDiscipline_model->get_list($ref_disciplinary_action_policy_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);

                break;

        }
    }











}
