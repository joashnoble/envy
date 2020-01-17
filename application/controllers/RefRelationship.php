<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefRelationship extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_relationship_view') == 0 || $this->session->userdata('right_relationship_view') == null) {
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
        $this->load->model('RefRelationship_model');



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
        $data['title'] = 'Relationship';

        $this->load->view('ref_relationship_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefRelationship_model->get_list(
                    array('ref_relationship.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_relationship = $this->RefRelationship_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('relationship', 'Relationship Name', 'strip_tags|xss_clean|required');       
                 if ($this->form_validation->run() == TRUE) 
                {            
               
                $m_relationship->relationship = $this->input->post('relationship', TRUE);
                $m_relationship->description = $this->input->post('description', TRUE);
                $m_relationship->date_created = date("Y-m-d H:i:s");
                $m_relationship->created_by = $this->session->user_id;
                $m_relationship->save();

                $ref_relationship_id = $m_relationship->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Relationship information successfully created.';

                $response['row_added'] = $this->RefRelationship_model->get_list($ref_relationship_id);
                
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
                $m_relationship = $this->RefRelationship_model;
               
                $m_relationship->relationship = $this->input->post('postname', TRUE);
                $m_relationship->description = $this->input->post('post_description', TRUE);
                $m_relationship->date_created = date("Y-m-d H:i:s");
                $m_relationship->created_by = $this->session->user_id;
                $m_relationship->save();

                $ref_relationship_id = $m_relationship->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Relationship information successfully created.';

                $response['row_added'] = $this->RefRelationship_model->get_list($ref_relationship_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_relationship=$this->RefRelationship_model;

                $ref_relationship_id=$this->input->post('ref_relationship_id',TRUE);

                $m_relationship->is_deleted=1;
                $m_relationship->date_deleted = date("Y-m-d H:i:s");
                $m_relationship->deleted_by = $this->session->user_id;
                if($m_relationship->modify($ref_relationship_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Relationship information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_relationship=$this->RefRelationship_model;

                $ref_relationship_id=$this->input->post('ref_relationship_id',TRUE);

                $m_relationship->relationship = $this->input->post('relationship', TRUE);
                $m_relationship->description = $this->input->post('description', TRUE);
                $m_relationship->date_modified = date("Y-m-d H:i:s");
                $m_relationship->modified_by = $this->session->user_id;
                $m_relationship->modify($ref_relationship_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Relationship information successfully updated.';
                $response['row_updated']=$this->RefRelationship_model->get_list($ref_relationship_id);
                echo json_encode($response);

                break;

        }
    }











}
