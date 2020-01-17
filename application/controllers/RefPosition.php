<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefPosition extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_position_view') == 0 || $this->session->userdata('right_position_view') == null) {
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
        $data['title'] = 'Position Type';

        $this->load->view('ref_position_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefPosition_model->get_list(
                    array('ref_position.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_position = $this->RefPosition_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('position', 'Position Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
               
                $m_position->position = $this->input->post('position', TRUE);
                $m_position->description = $this->input->post('description', TRUE);
                $m_position->date_created = date("Y-m-d H:i:s");
                $m_position->created_by = $this->session->user_id;
                $m_position->save();

                $ref_position_id = $m_position->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Position information successfully created.';

                $response['row_added'] = $this->RefPosition_model->get_list($ref_position_id);
               
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
                $m_position = $this->RefPosition_model;
               
                $m_position->position = $this->input->post('postname', TRUE);
                $m_position->description = $this->input->post('post_description', TRUE);
                $m_position->date_created = date("Y-m-d H:i:s");
                $m_position->created_by = $this->session->user_id;
                $m_position->save();

                $ref_position_id = $m_position->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Position information successfully created.';

                $response['row_added'] = $this->RefPosition_model->get_list($ref_position_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_position=$this->RefPosition_model;

                $ref_position_id=$this->input->post('ref_position_id',TRUE);
                $filter=$ref_position_id;
                $response['data']=$this->RefPosition_model->checkifused($filter);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    $m_position->is_deleted=1;
                    $m_position->date_deleted = date("Y-m-d H:i:s");
                    $m_position->deleted_by = $this->session->user_id;
                    if($m_position->modify($ref_position_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Department Reference successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_position=$this->RefPosition_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('position', 'Position Name', 'strip_tags|xss_clean|required');       
                 if ($this->form_validation->run() == TRUE) 
                {            
               
                $ref_position_id=$this->input->post('ref_position_id',TRUE);

                $m_position->position = $this->input->post('position', TRUE);
                $m_position->description = $this->input->post('description', TRUE);
                $m_position->date_modified = date("Y-m-d H:i:s");
                $m_position->modified_by = $this->session->user_id;
                $m_position->modify($ref_position_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Position information successfully updated.';
                $response['row_updated']=$this->RefPosition_model->get_list($ref_position_id);
               
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
