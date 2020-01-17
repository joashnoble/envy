<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeminarsTraining extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('Memorandum_model');
        $this->load->model('Commendation_model');
        $this->load->model('SeminarsTraining_model');
        
    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforemployee', '', TRUE);
        $data['title'] = 'Seminars and Training';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->SeminarsTraining_model->get_list(
                    array('emp_seminar_training.is_deleted'=>FALSE),
                    'emp_seminar_training.*,ref_certificate.certificate',
                    array(
                           array('ref_certificate','ref_certificate.ref_certificate_id=emp_seminar_training.ref_certificate_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

            case 'getseminarstraining':
                $employee_id = $this->input->post('employee_id', TRUE);
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                $response['data']=$this->SeminarsTraining_model->get_list(
                   array('emp_seminar_training.employee_id'=>$employee_id,'emp_seminar_training.is_deleted'=>FALSE),
                    'emp_seminar_training.*,ref_certificate.certificate',
                    array(
                           array('ref_certificate','ref_certificate.ref_certificate_id=emp_seminar_training.ref_certificate_id','left'),
                        )
                    );

                echo json_encode($response);
                break;

            case 'create':
                $m_seminartraining = $this->SeminarsTraining_model;

                $date_temp = $this->input->post('date', TRUE);
                $date_from_temp = $this->input->post('date_from', TRUE);
                $date_to_temp = $this->input->post('date_to', TRUE);
                $date = date("Y-m-d", strtotime($date_temp));
                $date_from = date("Y-m-d", strtotime($date_from_temp));
                $date_to = date("Y-m-d", strtotime($date_to_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_seminartraining->employee_id = $this->input->post('employee_id', TRUE);

                $m_seminartraining->date = $date;
                $m_seminartraining->seminar_title = $this->input->post('seminar_title', TRUE);
                $m_seminartraining->given_by = $this->input->post('given_by', TRUE);
                $m_seminartraining->date_from = $date_from;
                $m_seminartraining->date_to = $date_to;
                $m_seminartraining->venue = $this->input->post('venue', TRUE);
                $m_seminartraining->ref_certificate_id = $this->input->post('ref_certificate_id',TRUE);
                $m_seminartraining->remarks = $this->input->post('remarks',TRUE);
                $m_seminartraining->date_created = date("Y-m-d H:i:s");
                $m_seminartraining->created_by = $this->session->user_id;

                $m_seminartraining->save();

                $emp_seminar_training_id = $m_seminartraining->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Seminars and Training successfully created.';

                $response['row_added'] = $this->SeminarsTraining_model->get_list(
                   $emp_seminar_training_id,
                    'emp_seminar_training.*,ref_certificate.certificate',
                    array(
                           array('ref_certificate','ref_certificate.ref_certificate_id=emp_seminar_training.ref_certificate_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_seminartraining=$this->SeminarsTraining_model;

                $emp_seminar_training_id=$this->input->post('emp_seminar_training_id',TRUE);

                $m_seminartraining->is_deleted=1;
                $m_seminartraining->date_deleted = date("Y-m-d H:i:s");
                $m_seminartraining->deleted_by = $this->session->user_id;
                if($m_seminartraining->modify($emp_seminar_training_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Seminars and Training successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_seminartraining = $this->SeminarsTraining_model;

                $emp_seminar_training_id = $this->input->post('emp_seminar_training_id', TRUE);

                $date_temp = $this->input->post('date', TRUE);
                $date_from_temp = $this->input->post('date_from', TRUE);
                $date_to_temp = $this->input->post('date_to', TRUE);
                $date = date("Y-m-d", strtotime($date_temp));
                $date_from = date("Y-m-d", strtotime($date_from_temp));
                $date_to = date("Y-m-d", strtotime($date_to_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_seminartraining->employee_id = $this->input->post('employee_id', TRUE);

                $m_seminartraining->date = $date;
                $m_seminartraining->seminar_title = $this->input->post('seminar_title', TRUE);
                $m_seminartraining->given_by = $this->input->post('given_by', TRUE);
                $m_seminartraining->date_from = $date_from;
                $m_seminartraining->date_to = $date_to;
                $m_seminartraining->venue = $this->input->post('venue', TRUE);
                $m_seminartraining->ref_certificate_id = $this->input->post('ref_certificate_id',TRUE);
                $m_seminartraining->remarks = $this->input->post('remarks',TRUE);
                $m_seminartraining->date_modified = date("Y-m-d H:i:s");
                $m_seminartraining->modified_by = $this->session->user_id;

                $m_seminartraining->modify($emp_seminar_training_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Seminar and Training successfully Updated.';
                
                $response['row_updated']=$this->SeminarsTraining_model->get_list(
                    array('emp_seminar_training.emp_seminar_training_id'=>$emp_seminar_training_id,'emp_seminar_training.is_deleted'=>FALSE),
                    'emp_seminar_training.*,ref_certificate.certificate',
                    array(
                           array('ref_certificate','ref_certificate.ref_certificate_id=emp_seminar_training.ref_certificate_id','left'),
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
