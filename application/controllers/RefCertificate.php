<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefCertificate extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_certificate_view') == 0 || $this->session->userdata('right_certificate_view') == null) {
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
        $data['title'] = 'Certificate';

        $this->load->view('ref_certificate_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefCertificate_model->get_list(
                    array('ref_certificate.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_certificate = $this->RefCertificate_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('certificate', 'Certificate Name', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {
                $m_certificate->certificate = $this->input->post('certificate', TRUE);
                $m_certificate->description = $this->input->post('description', TRUE);
                $m_certificate->date_created = date("Y-m-d H:i:s");
                $m_certificate->created_by = $this->session->user_id;
                $m_certificate->save();

                $ref_certificate_id = $m_certificate->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Certificate information successfully created.';

                $response['row_added'] = $this->RefCertificate_model->get_list($ref_certificate_id);
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
                $m_certificate = $this->RefCertificate_model;
               
                $m_certificate->certificate = $this->input->post('postname', TRUE);
                $m_certificate->description = $this->input->post('post_description', TRUE);
                $m_certificate->date_created = date("Y-m-d H:i:s");
                $m_certificate->created_by = $this->session->user_id;
                $m_certificate->save();

                $ref_certificate_id = $m_certificate->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Certificate information successfully created.';

                $response['row_added'] = $this->RefCertificate_model->get_list($ref_certificate_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_certificate=$this->RefCertificate_model;

                $ref_certificate_id=$this->input->post('ref_certificate_id',TRUE);

                $m_certificate->is_deleted=1;
                $m_certificate->date_deleted = date("Y-m-d H:i:s");
                $m_certificate->deleted_by = $this->session->user_id;
                if($m_certificate->modify($ref_certificate_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Certificate information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_certificate=$this->RefCertificate_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('certificate', 'PAYMENT TYPE', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {  
                $ref_certificate_id=$this->input->post('ref_certificate_id',TRUE);

                $m_certificate->certificate = $this->input->post('certificate', TRUE);
                $m_certificate->description = $this->input->post('description', TRUE);
                $m_certificate->date_modified = date("Y-m-d H:i:s");
                $m_certificate->modified_by = $this->session->user_id;
                $m_certificate->modify($ref_certificate_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Certificate information successfully updated.';
                $response['row_updated']=$this->RefCertificate_model->get_list($ref_certificate_id);
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
