<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_EducationalAttainment extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('EducationalAttainment_model');
        
    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforemployee', '', TRUE);
        $data['title'] = 'RatesDuties';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->EducationalAttainment_model->get_list(
                    array('emp_educational_attainment.is_deleted'=>FALSE,'employee_list.employee_id'=>$employee_id),
                    'emp_educational_attainment.*',
                    array(
                            array('employee_list','employee_list.employee_id=emp_educational_attainment.employee_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

            case 'listcourseofemployee':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->EducationalAttainment_model->get_list(
                    array('emp_educational_attainment.is_deleted'=>FALSE,'employee_list.employee_id'=>$employee_id),
                    'emp_educational_attainment.*,ref_course_degree.ref_course_degree_id,ref_course_degree.course_degree',
                    array(
                            array('employee_list','employee_list.employee_id=emp_educational_attainment.employee_id','left'),
                            array('ref_course_degree','ref_course_degree.ref_course_degree_id=emp_educational_attainment.ref_course_degree_id','left'),
                        )
                    );
                echo json_encode($response);
                break;


            case 'create':
                $m_educationalattainment = $this->EducationalAttainment_model;

                $year_graduate_temp = $this->input->post('year_graduate', TRUE);
                $year_graduate = date("Y-m-d", strtotime($year_graduate_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_educationalattainment->employee_id = $this->input->post('employee_id', TRUE);
                $m_educationalattainment->ref_course_degree_id = $this->input->post('ref_course_degree_id', TRUE);
                $m_educationalattainment->year_graduate = $year_graduate;
                $m_educationalattainment->date_created = date("Y-m-d");
                $m_educationalattainment->created_by = $user_id;

                $m_educationalattainment->save();

                $emp_educational_attainment_id = $m_educationalattainment->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Educational Attainment successfully created.';

                $response['row_added'] = $this->EducationalAttainment_model->get_list(
                   $emp_educational_attainment_id,
                   'emp_educational_attainment.*,ref_course_degree.ref_course_degree_id,ref_course_degree.course_degree',
                    array(
                            array('employee_list','employee_list.employee_id=emp_educational_attainment.employee_id','left'),
                            array('ref_course_degree','ref_course_degree.ref_course_degree_id=emp_educational_attainment.ref_course_degree_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_educationalattainment = $this->EducationalAttainment_model;

                $emp_educational_attainment_id=$this->input->post('emp_educational_attainment_id',TRUE);

                $m_educationalattainment->is_deleted=1;
                $m_educationalattainment->deleted_by=$this->session->user_id;
                $m_educationalattainment->date_deleted=date("Y-m-d");
                if($m_educationalattainment->modify($emp_educational_attainment_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Educational Attainment successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_educationalattainment = $this->EducationalAttainment_model;

                $year_graduate_temp = $this->input->post('year_graduate', TRUE);
                $year_graduate = date("Y-m-d", strtotime($year_graduate_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $emp_educational_attainment_id = $this->input->post('emp_educational_attainment_id', TRUE);
                $m_educationalattainment->ref_course_degree_id = $this->input->post('ref_course_degree_id', TRUE);
                $m_educationalattainment->year_graduate = $year_graduate;

                $m_educationalattainment->date_modified = date("Y-m-d");
                $m_educationalattainment->modified_by = $user_id;
                $m_educationalattainment->modify($emp_educational_attainment_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Educational Attainment successfully Updated.';
                
                $response['row_updated'] = $this->EducationalAttainment_model->get_list(
                   $emp_educational_attainment_id,
                   'emp_educational_attainment.*,ref_course_degree.ref_course_degree_id,ref_course_degree.course_degree',
                    array(
                            array('employee_list','employee_list.employee_id=emp_educational_attainment.employee_id','left'),
                            array('ref_course_degree','ref_course_degree.ref_course_degree_id=emp_educational_attainment.ref_course_degree_id','left'),
                        )

                    );
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
