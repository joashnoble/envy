<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeResignation extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_emp_resignation_view') == 0 || $this->session->userdata('right_emp_resignation_view') == null) {
            redirect('../Dashboard');
        }
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('Emp_resignation_model');
        $this->load->model('GeneralSettings_model');
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

        $data['employee']=$this->Employee_model->getEmplist_forResignation();

        $data['title'] = 'Employee Resignation';

        $this->load->view('emp_resignation_view', $data);
    }

    function transaction($txn = null, $filter_value = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Emp_resignation_model->get_resignation(null);
                echo json_encode($response);
                break;

            case 'create':
                $m_resignation = $this->Emp_resignation_model;
                $m_employee = $this->Employee_model;
                $this->load->library('form_validation');
                $this->load->helper('security');

                $this->form_validation->set_rules('employee_id', 'Employee', 'strip_tags|xss_clean|required');  
                $this->form_validation->set_rules('reason_of_leave', 'Reason of Leave', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('effectivity_date', 'Effectivity Date', 'strip_tags|xss_clean|required');
                $this->form_validation->set_rules('approved_by', 'Approved By', 'strip_tags|xss_clean|required');          
                
                if ($this->form_validation->run() == TRUE) 
                {            

                $employee_id = $this->input->post('employee_id', TRUE);
                $m_resignation->employee_id = $this->input->post('employee_id', TRUE);
                $m_resignation->reason_of_leave = $this->input->post('reason_of_leave', TRUE);
                $m_resignation->effectivity_date = date("Y-m-d", strtotime($this->input->post('effectivity_date', TRUE)));
                $m_resignation->approved_by = $this->input->post('approved_by', TRUE);
                $m_resignation->final_approve = $this->input->post('final_approve', TRUE);
                $m_resignation->is_cleared = $this->input->post('is_cleared', TRUE);
                $m_resignation->resignation_note = $this->input->post('resignation_note', TRUE);
                $m_resignation->date_created = date("Y-m-d H:i:s");;
                $m_resignation->created_by = $this->session->user_id;
                $m_resignation->save();

                $emp_resignation_id = $m_resignation->last_insert_id();

                $m_employee->date_end = date('Y-m-d',strtotime($this->input->post('effectivity_date', TRUE)));
                $m_employee->status = 'Inactive';
                $m_employee->modify($employee_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Resignation is successfully created.';

                $response['row_added'] = $this->Emp_resignation_model->get_resignation($emp_resignation_id);
               
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);
                break;


            case 'getEmpInfo_forResignation':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->Emp_resignation_model->get_employee_info($employee_id);
                echo json_encode($response);
            break;

            case 'getEmplist_forResignation':
                $response['data']=$this->Employee_model->getEmplist_forResignation();
                echo json_encode($response);
            break;                

            case 'delete':
                $m_resignation=$this->Emp_resignation_model;
                $m_employee=$this->Employee_model;
                $emp_resignation_id=$this->input->post('emp_resignation_id',TRUE);

                $emp_info = $this->Emp_resignation_model->get_resignation($emp_resignation_id);
                $employee_id = $emp_info[0]->employee_id;
                    
                $m_resignation->is_deleted=1;
                $m_resignation->date_deleted = date("Y-m-d H:i:s");
                $m_resignation->deleted_by = $this->session->user_id;

                if($m_resignation->modify($emp_resignation_id)){

                    $m_employee->date_end = "";
                    $m_employee->status = 'Active';
                    $m_employee->modify($employee_id);

                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Resignation successfully Deleted.';

                echo json_encode($response);
                }

                break;

            case 'update':
                $m_resignation=$this->Emp_resignation_model;
                $m_employee=$this->Employee_model;
                $this->load->library('form_validation');
                $this->load->helper('security');

                $this->form_validation->set_rules('reason_of_leave', 'Reason of Leave', 'strip_tags|xss_clean|required'); 
                $this->form_validation->set_rules('effectivity_date', 'Effectivity Date', 'strip_tags|xss_clean|required');
                $this->form_validation->set_rules('approved_by', 'Approved By', 'strip_tags|xss_clean|required');       

                 if ($this->form_validation->run() == TRUE) 
                {            

                $emp_resignation_id = $this->input->post('emp_resignation_id', TRUE);
               
                $m_resignation->reason_of_leave = $this->input->post('reason_of_leave', TRUE);
                $m_resignation->effectivity_date = date("Y-m-d", strtotime($this->input->post('effectivity_date', TRUE)));
                $m_resignation->approved_by = $this->input->post('approved_by', TRUE);
                $m_resignation->final_approve = $this->input->post('final_approve', TRUE);
                $m_resignation->is_cleared = $this->input->post('is_cleared', TRUE);
                $m_resignation->resignation_note = $this->input->post('resignation_note', TRUE);
                $m_resignation->date_modified = date("Y-m-d H:i:s");;
                $m_resignation->modified_by = $this->session->user_id;
                $m_resignation->modify($emp_resignation_id);

                $emp_info = $this->Emp_resignation_model->get_resignation($emp_resignation_id);
                $employee_id = $emp_info[0]->employee_id;
                $m_employee->date_end = date('Y-m-d',strtotime($this->input->post('effectivity_date', TRUE)));
                $m_employee->status = 'Inactive';
                $m_employee->modify($employee_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Resignation successfully updated.';
                $response['row_updated']=$this->Emp_resignation_model->get_resignation($emp_resignation_id);
               
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);
                break;

            case 'print_emp_resignation':

                $getcompany=$this->GeneralSettings_model->get_list(
                null,
                'company_setup.*'
                );
                $data['company']=$getcompany[0];

                $emp_info = $this->Emp_resignation_model->get_resignation($filter_value);
                $employee_id = $emp_info[0]->employee_id;

                $data['resignation']=$this->Emp_resignation_model->get_resignation($filter_value);
                $data['employee']=$this->Emp_resignation_model->get_employee_info($employee_id);

                echo $this->load->view('template/employee_resignation_html',$data,TRUE);
            break;


        }
    }











}
