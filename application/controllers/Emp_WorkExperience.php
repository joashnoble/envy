<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_WorkExperience extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('EmergencyContact_model');
        $this->load->model('RefWorkExperience_model');
        
    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforemployee', '', TRUE);
        $data['title'] = 'Work Experience';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->EmergencyContact_model->get_list(
                    array('emp_emergency_contact_details.is_deleted'=>FALSE),
                    'emp_emergency_contact_details.*,ref_relationship.ref_relationship_id,ref_relationship.relationship',
                    array(
                            array('employee_list','employee_list.employee_id=emp_emergency_contact_details.employee_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=emp_emergency_contact_details.ref_relationship_id','left'),
                        )
                    );
                break;

            case 'listworkexperience':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->RefWorkExperience_model->get_list(
                    array('ref_work_experience.is_deleted'=>FALSE,'employee_list.employee_id'=>$employee_id),
                    'ref_work_experience.*,DATE_FORMAT(ref_work_experience.from_date, "%m/%d/%Y") as from_date, DATE_FORMAT(ref_work_experience.to_date,"%m/%d/%Y") as to_date',
                    array(
                            array('employee_list','employee_list.employee_id=ref_work_experience.employee_id','left'),
                        )
                    );
                echo json_encode($response);
            break;


            case 'create':
                $m_workexperience = $this->RefWorkExperience_model;

                $from_date = $this->input->post('from_date', TRUE);
                $to_date = $this->input->post('to_date', TRUE);

                $user_id=$this->session->user_id;  // get id of current login user
                $m_workexperience->employee_id = $this->input->post('employee_id', TRUE);
                $m_workexperience->company = $this->input->post('company', TRUE);
                $m_workexperience->job_title = $this->input->post('job_title', TRUE);
                $m_workexperience->job_description = $this->input->post('job_description', TRUE);
                $m_workexperience->from_date = date("Y-m-d", strtotime($from_date));
                $m_workexperience->to_date = date("Y-m-d", strtotime($to_date));      
                $m_workexperience->date_created=date("Y-m-d");
                $m_workexperience->created_by = $user_id;
                $m_workexperience->save();
                $ref_work_experience_id = $m_workexperience->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Work Experience successfully created.';
                $response['row_added']=$this->RefWorkExperience_model->getEmpWorkExperience($ref_work_experience_id);
                echo json_encode($response);
            break;

            case 'delete':
                $m_workexperience = $this->RefWorkExperience_model;

                $ref_work_experience_id=$this->input->post('ref_work_experience_id',TRUE);

                $m_workexperience->is_deleted=1;
                $m_workexperience->date_deleted=date("Y-m-d");
                $m_workexperience->deleted_by = $this->session->user_id;
                if($m_workexperience->modify($ref_work_experience_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Work Experience successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_workexperience = $this->RefWorkExperience_model;


                $ref_work_experience_id=$this->input->post('ref_work_experience_id',TRUE);
                $from_date = $this->input->post('from_date', TRUE);
                $to_date = $this->input->post('to_date', TRUE);

                $m_workexperience->company = $this->input->post('company', TRUE);
                $m_workexperience->job_title = $this->input->post('job_title', TRUE);
                $m_workexperience->job_description = $this->input->post('job_description', TRUE);
                $m_workexperience->from_date = date("Y-m-d", strtotime($from_date));
                $m_workexperience->to_date = date("Y-m-d", strtotime($to_date));      
                $m_workexperience->date_modified=date("Y-m-d");
                $m_workexperience->modified_by = $this->session->user_id;
                $m_workexperience->modify($ref_work_experience_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Work Experience successfully Updated.';

                $response['row_updated']=$this->RefWorkExperience_model->getEmpWorkExperience($ref_work_experience_id); 
                echo json_encode($response);

                break;

            case 'test':
function replaceCharsInNumber($num, $chars) {
   return substr((string) $num, 0, -strlen($chars)) . $chars;
}

$format = "000000";
$temp = replaceCharsInNumber($format, '200'); //5069xxx
$ecode = $temp .'-'. $today = date("Y");
echo $ecode;


                break;
                case 'test2':
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                echo $active_year;
                break;
        }
    }











}
