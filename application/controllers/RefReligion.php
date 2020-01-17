<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefReligion extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_religion_view') == 0 || $this->session->userdata('right_religion_view') == null) {
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
        $data['title'] = 'Religion';

        $this->load->view('ref_religion_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefReligion_model->get_list(
                    array('ref_religion.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_religion = $this->RefReligion_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('religion', 'Religion Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
               
                $m_religion->religion = $this->input->post('religion', TRUE);
                $m_religion->description = $this->input->post('description', TRUE);
                $m_religion->date_created = date("Y-m-d H:i:s");
                $m_religion->created_by = $this->session->user_id;
                $m_religion->save();

                $ref_religion_id = $m_religion->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Religion information successfully created.';

                $response['row_added'] = $this->RefReligion_model->get_list($ref_religion_id);
                
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
                $m_religion = $this->RefReligion_model;
               
                $m_religion->religion = $this->input->post('postname', TRUE);
                $m_religion->description = $this->input->post('post_description', TRUE);
                $m_religion->date_created = date("Y-m-d H:i:s");
                $m_religion->created_by = $this->session->user_id;
                $m_religion->save();

                $ref_religion_id = $m_religion->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Religion information successfully created.';

                $response['row_added'] = $this->RefReligion_model->get_list($ref_religion_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_religion=$this->RefReligion_model;

                $ref_religion_id=$this->input->post('ref_religion_id',TRUE);

                $filter=$ref_religion_id;
                $response['data']=$this->RefReligion_model->checkifused($filter);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    $m_religion->is_deleted=1;
                    $m_religion->date_deleted = date("Y-m-d H:i:s");
                    $m_religion->deleted_by = $this->session->user_id;
                    if($m_religion->modify($ref_religion_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Religion Reference successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_religion=$this->RefReligion_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('religion', 'Religion Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
               
                $ref_religion_id=$this->input->post('ref_religion_id',TRUE);

                $m_religion->religion = $this->input->post('religion', TRUE);
                $m_religion->description = $this->input->post('description', TRUE);
                $m_religion->date_modified = date("Y-m-d H:i:s");
                $m_religion->modified_by = $this->session->user_id;
                $m_religion->modify($ref_religion_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Religion information successfully updated.';
                $response['row_updated']=$this->RefReligion_model->get_list($ref_religion_id);
                
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
