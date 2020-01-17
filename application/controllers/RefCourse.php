<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefCourse extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_course_view') == 0 || $this->session->userdata('right_course_view') == null) {
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
        $data['title'] = 'Course/Degree';

        $this->load->view('ref_course_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefCourse_model->get_list(
                    array('ref_course_degree.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_course = $this->RefCourse_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('course_degree', 'Course Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
               
                $m_course->course_degree = $this->input->post('course_degree', TRUE);
                $m_course->description = $this->input->post('description', TRUE);
                $m_course->date_created = date("Y-m-d H:i:s");
                $m_course->created_by = $this->session->user_id;
                $m_course->save();

                $ref_course_degree_id = $m_course->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Course information successfully created.';

                $response['row_added'] = $this->RefCourse_model->get_list($ref_course_degree_id);
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
                $m_course = $this->RefCourse_model;
               
                $m_course->course_degree = $this->input->post('postname', TRUE);
                $m_course->description = $this->input->post('post_description', TRUE);
                $m_course->date_created = date("Y-m-d H:i:s");
                $m_course->created_by = $this->session->user_id;
                $m_course->save();

                $ref_course_degree_id = $m_course->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Course information successfully created.';

                $response['row_added'] = $this->RefCourse_model->get_list($ref_course_degree_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_course=$this->RefCourse_model;

                $ref_course_degree_id=$this->input->post('ref_course_degree_id',TRUE);

                $m_course->is_deleted=1;
                $m_course->date_deleted = date("Y-m-d H:i:s");
                $m_course->deleted_by = $this->session->user_id;
                if($m_course->modify($ref_course_degree_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Course information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_course=$this->RefCourse_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('course_degree', 'Course Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
               
                $ref_course_degree_id=$this->input->post('ref_course_degree_id',TRUE);

                $m_course->course_degree = $this->input->post('course_degree', TRUE);
                $m_course->description = $this->input->post('description', TRUE);
                $m_course->date_modified = date("Y-m-d H:i:s");
                $m_course->modified_by = $this->session->user_id;
                $m_course->modify($ref_course_degree_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Course information successfully updated.';
                $response['row_updated']=$this->RefCourse_model->get_list($ref_course_degree_id);
                
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
