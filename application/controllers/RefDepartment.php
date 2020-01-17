<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefDepartment extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_department_view') == 0 || $this->session->userdata('right_department_view') == null) {
            redirect('../Dashboard');
        }
        else{
            
        }
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');



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
        $data['title'] = 'RatesDuties';

        $this->load->view('ref_department_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefDepartment_model->get_list(
                    array('ref_department.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_department = $this->RefDepartment_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('department', 'PAYMENT TYPE', 'strip_tags|xss_clean|required');       
                 if ($this->form_validation->run() == TRUE) 
                {            
              
                $m_department->department = $this->input->post('department', TRUE);
                $m_department->description = $this->input->post('description', TRUE);
                $m_department->date_created = date("Y-m-d H:i:s");
                $m_department->created_by = $this->session->user_id;
                $m_department->save();

                $ref_department_id = $m_department->last_insert_id();
                
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Department information successfully created.';

                $response['row_added'] = $this->RefDepartment_model->get_list($ref_department_id);
              
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
                $m_department = $this->RefDepartment_model;
               
                $m_department->department = $this->input->post('postname', TRUE);
                $m_department->description = $this->input->post('post_description', TRUE);
                $m_department->date_created = date("Y-m-d H:i:s");
                $m_department->created_by = $this->session->user_id;
                $m_department->save();

                $ref_department_id = $m_department->last_insert_id();
                
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Department information successfully created.';

                $response['row_added'] = $this->RefDepartment_model->get_list($ref_department_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_department=$this->RefDepartment_model;

                $ref_department_id=$this->input->post('ref_department_id',TRUE);
                $filter=$ref_department_id;
                $response['data']=$this->RefDepartment_model->checkifused($filter);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    $m_department->is_deleted=1;
                    $m_department->date_deleted = date("Y-m-d H:i:s");
                    $m_department->deleted_by = $this->session->user_id;
                    if($m_department->modify($ref_department_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Department Reference successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_department=$this->RefDepartment_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('department', 'Department', 'strip_tags|xss_clean|required');       
                 if ($this->form_validation->run() == TRUE) 
                {            
             
                $ref_department_id=$this->input->post('ref_department_id',TRUE);

                $m_department->department = $this->input->post('department', TRUE);
                $m_department->description = $this->input->post('description', TRUE);
                $m_department->date_modified = date("Y-m-d H:i:s");
                $m_department->modified_by = $this->session->user_id;
                $m_department->modify($ref_department_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Department information successfully updated.';
                $response['row_updated']=$this->RefDepartment_model->get_list($ref_department_id);
                
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);
                break;

            case 'checkifused':
                $ref_leave_type_id=2;
                $response['data']=$this->RefDepartment_model->checkifused($ref_leave_type_id);
                
                echo json_encode($response);
                echo '<br>';
                $checkcount = count($response['data']);
                if($checkcount>0){
                    echo 'greater';
                }
                else{
                    echo 'd man';
                }
                break;

        }
    }











}
