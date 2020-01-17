<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefEmploymentType extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefSection_model');
        $this->load->model('RefReligion_model');
        $this->load->model('RefEmploymentType_model');

    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['title'] = 'RatesDuties';

        $this->load->view('ref_employmenttype_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefEmploymentType_model->get_list(
                    array('ref_employment_type.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_employmenttype = $this->RefEmploymentType_model;
               
                $m_employmenttype->employment_type = $this->input->post('employment_type', TRUE);
                $m_employmenttype->description = $this->input->post('description', TRUE);
                $m_employmenttype->date_created = date("Y-m-d H:i:s");
                $m_employmenttype->created_by = $this->session->user_id;
                $m_employmenttype->save();

                $ref_employmenttype_id = $m_employmenttype->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Employment Type information successfully created.';

                $response['row_added'] = $this->RefEmploymentType_model->get_list($ref_employmenttype_id);
                echo json_encode($response);

                break;

            case 'createdirect':
                $m_employmenttype = $this->RefEmploymentType_model;
               
                $m_employmenttype->employment_type = $this->input->post('postname', TRUE);
                $m_employmenttype->description = $this->input->post('post_description', TRUE);
                $m_employmenttype->date_created = date("Y-m-d H:i:s");
                $m_employmenttype->created_by = $this->session->user_id;
                $m_employmenttype->save();

                $ref_employmenttype_id = $m_employmenttype->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Employment Type information successfully created.';

                $response['row_added'] = $this->RefEmploymentType_model->get_list($ref_employmenttype_id);
                echo json_encode($response);

                break;

            /*case 'delete':
                $m_religion=$this->RefReligion_model;

                $ref_religion_id=$this->input->post('ref_religion_id',TRUE);

                $m_religion->is_deleted=1;
                if($m_religion->modify($ref_religion_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Religion information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_religion=$this->RefReligion_model;

                $ref_religion_id=$this->input->post('ref_religion_id',TRUE);

                $m_religion->religion = $this->input->post('religion', TRUE);
                $m_religion->description = $this->input->post('description', TRUE);
                $m_religion->modify($ref_religion_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Religion information successfully updated.';
                $response['row_updated']=$this->RefReligion_model->get_list($ref_religion_id);
                echo json_encode($response);

                break;*/

            

        }
    }











}
