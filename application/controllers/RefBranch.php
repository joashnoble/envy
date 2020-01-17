<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefBranch extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_branch_view') == 0 || $this->session->userdata('right_branch_view') == null) {
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
        $data['title'] = 'Branch';

        $this->load->view('ref_branch_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefBranch_model->get_list(
                    array('ref_branch.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_branch = $this->RefBranch_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('branch', 'Branch Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
                
                $m_branch->branch = $this->input->post('branch', TRUE);
                $m_branch->description = $this->input->post('description', TRUE);
                $m_branch->date_created = date("Y-m-d H:i:s");
                $m_branch->created_by = $this->session->user_id;
                $m_branch->save();

                $ref_branch_id = $m_branch->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Branch information successfully created.';

                $response['row_added'] = $this->RefBranch_model->get_list($ref_branch_id);
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
                $m_branch = $this->RefBranch_model;
               
                $m_branch->branch = $this->input->post('postname', TRUE);
                $m_branch->description = $this->input->post('post_description', TRUE);
                $m_branch->date_created = date("Y-m-d H:i:s");
                $m_branch->created_by = $this->session->user_id;
                $m_branch->save();

                $ref_branch_id = $m_branch->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Branch information successfully created.';

                $response['row_added'] = $this->RefBranch_model->get_list($ref_branch_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_branch=$this->RefBranch_model;

                $ref_branch_id=$this->input->post('ref_branch_id',TRUE);
                $filter=$ref_branch_id;
                $response['data']=$this->RefBranch_model->checkifused($filter);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    $m_branch->is_deleted=1;
                    $m_branch->date_deleted = date("Y-m-d H:i:s");
                    $m_branch->deleted_by = $this->session->user_id;
                    if($m_branch->modify($ref_branch_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Department Reference successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_branch=$this->RefBranch_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('branch', 'Branch Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
                
                $ref_branch_id=$this->input->post('ref_branch_id',TRUE);

                $m_branch->branch = $this->input->post('branch', TRUE);
                $m_branch->description = $this->input->post('description', TRUE);
                $m_branch->date_modified = date("Y-m-d H:i:s");
                $m_branch->deleted_by = $this->session->user_id;
                $m_branch->modify($ref_branch_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Branch information successfully updated.';
                $response['row_updated']=$this->RefBranch_model->get_list($ref_branch_id);
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
