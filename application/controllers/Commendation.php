<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commendation extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') !== FALSE) {

        } 
        else{
            redirect('login');
        } 
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('Memorandum_model');
        $this->load->model('Commendation_model');
        
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
                $response['data']=$this->Commendation_model->get_list(
                    array('emp_commendation.is_deleted'=>FALSE),
                    'emp_commendation.*'
                    );
                echo json_encode($response);
                break;

            case 'getcommendation':
                $employee_id = $this->input->post('employee_id', TRUE);
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                $response['data']=$this->Commendation_model->get_list(
                   array('emp_commendation.employee_id'=>$employee_id,'emp_commendation.is_deleted'=>FALSE),
                    'emp_commendation.*'
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_commendation = $this->Commendation_model;

                $date_commendation_temp = $this->input->post('date_commendation', TRUE);
                $date_commendation = date("Y-m-d", strtotime($date_commendation_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_commendation->employee_id = $this->input->post('employee_id', TRUE);

                $m_commendation->date_commendation = $date_commendation;
                $m_commendation->memo_number = $this->input->post('memo_number', TRUE);
                $m_commendation->remarks = $this->input->post('remarks',TRUE);
                $m_commendation->date_created = date("Y-m-d");
                $m_commendation->created_by = $user_id;
                $m_commendation->save();

                $emp_commendation_id = $m_commendation->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Commendation successfully created.';

                $response['row_added'] = $this->Commendation_model->get_list(
                   $emp_commendation_id,
                    'emp_commendation.*'
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_commendation=$this->Commendation_model;

                $emp_commendation_id=$this->input->post('emp_commendation_id',TRUE);

                $m_commendation->is_deleted=1;
                if($m_commendation->modify($emp_commendation_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Commendation successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_commendation = $this->Commendation_model;
                $emp_commendation_id = $this->input->post('emp_commendation_id', TRUE);
                $date_commendation_temp = $this->input->post('date_commendation', TRUE);
                $date_commendation = date("Y-m-d", strtotime($date_commendation_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_commendation->employee_id = $this->input->post('employee_id', TRUE);

                $m_commendation->date_commendation = $date_commendation;
                $m_commendation->memo_number = $this->input->post('memo_number', TRUE);
                $m_commendation->remarks = $this->input->post('remarks',TRUE);

                
                $m_commendation->date_modified = date("Y-m-d");
                $m_commendation->modified_by = $user_id;
                $m_commendation->modify($emp_commendation_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Commendation successfully Updated.';
                
                $response['row_updated']=$this->Commendation_model->get_list(
                    array('emp_commendation.emp_commendation_id'=>$emp_commendation_id,'emp_commendation.is_deleted'=>FALSE)
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
