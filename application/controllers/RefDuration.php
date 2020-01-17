<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefDuration extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_duration_view') == 0 || $this->session->userdata('right_duration_view') == null) {
            redirect('../Dashboard');
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
        $this->load->model('RefDuration_model');



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

        $data['title'] = 'Duration';

        $this->load->view('ref_duration_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefDuration_model->get_list(
                    array('ref_duration.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
            break;

            case 'create':
                $m_duration = $this->RefDuration_model;
                $this->load->library('form_validation');
                $this->load->helper('security');

                $this->form_validation->set_rules('duration_desc', 'Duration Desc', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('no_of_duration', 'No of Duration', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('duration_type', 'Duration Type', 'strip_tags|xss_clean|required');    

                 if ($this->form_validation->run() == TRUE) 
                {            
               
                $m_duration->duration_desc = $this->input->post('duration_desc', TRUE);
                $m_duration->no_of_duration = $this->input->post('no_of_duration', TRUE);
                $m_duration->duration_type = $this->input->post('duration_type', TRUE);
                $m_duration->date_created = date("Y-m-d H:i:s");
                $m_duration->created_by = $this->session->user_id;
                $m_duration->save();

                $duration_id = $m_duration->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Duration information successfully created.';

                $response['row_added'] = $this->RefDuration_model->get_list($duration_id);
                
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
                $m_duration = $this->RefDuration_model;
               
                $m_duration->relationship = $this->input->post('postname', TRUE);
                $m_duration->description = $this->input->post('post_description', TRUE);
                $m_duration->date_created = date("Y-m-d H:i:s");
                $m_duration->created_by = $this->session->user_id;
                $m_duration->save();

                $duration_id = $m_duration->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Duration information successfully created.';

                $response['row_added'] = $this->RefDuration_model->get_list($duration_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_duration=$this->RefDuration_model;

                $duration_id=$this->input->post('duration_id',TRUE);

                $m_duration->is_deleted=1;
                $m_duration->date_deleted = date("Y-m-d H:i:s");
                $m_duration->deleted_by = $this->session->user_id;
                if($m_duration->modify($duration_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Duration information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_duration=$this->RefDuration_model;

                $this->load->library('form_validation');
                $this->load->helper('security');

                $this->form_validation->set_rules('duration_desc', 'Duration Desc', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('no_of_duration', 'No of Duration', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('duration_type', 'Duration Type', 'strip_tags|xss_clean|required'); 

                $duration_id=$this->input->post('duration_id',TRUE);

                if ($this->form_validation->run() == TRUE) 
                {            
                    $m_duration->duration_desc = $this->input->post('duration_desc', TRUE);
                    $m_duration->no_of_duration = $this->input->post('no_of_duration', TRUE);
                    $m_duration->duration_type = $this->input->post('duration_type', TRUE);
                    $m_duration->date_modified = date("Y-m-d H:i:s");
                    $m_duration->modified_by = $this->session->user_id;
                    $m_duration->modify($duration_id);

                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Duration information successfully created.';

                    $response['row_updated'] = $this->RefDuration_model->get_list($duration_id);
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
