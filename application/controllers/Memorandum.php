<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memorandum extends CORE_Controller
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
                $response['data']=$this->Memorandum_model->get_list(
                    array('emp_memo.is_deleted'=>FALSE),
                    'emp_memo.*,ref_disciplinary_action_policy.disciplinary_action_policy,ref_action_taken.action_taken',
                        array(
                                array('ref_disciplinary_action_policy','ref_disciplinary_action_policy.ref_disciplinary_action_policy_id=emp_memo.ref_disciplinary_action_policy_id','left'),
                                array('ref_action_taken','ref_action_taken.ref_action_taken_id=emp_memo.ref_action_taken_id','left'),
                                )
                    );
                echo json_encode($response);
                break;

            case 'getmemorandum':
                $employee_id = $this->input->post('employee_id', TRUE);
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                $response['data']=$this->Memorandum_model->get_list(
                   array('emp_memo.employee_id'=>$employee_id,'emp_memo.is_deleted'=>FALSE),
                    'emp_memo.*,ref_disciplinary_action_policy.disciplinary_action_policy,ref_action_taken.action_taken',
                        array(
                                array('ref_disciplinary_action_policy','ref_disciplinary_action_policy.ref_disciplinary_action_policy_id=emp_memo.ref_disciplinary_action_policy_id','left'),
                                array('ref_action_taken','ref_action_taken.ref_action_taken_id=emp_memo.ref_action_taken_id','left'),
                                )
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_memorandum = $this->Memorandum_model;

                $date_memo_temp = $this->input->post('date_memo', TRUE);
                $date_granted_temp = $this->input->post('date_granted',TRUE);
                $date_memo = date("Y-m-d", strtotime($date_memo_temp));
                $date_granted = date("Y-m-d", strtotime($date_granted_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $m_memorandum->employee_id = $this->input->post('employee_id', TRUE);

                $m_memorandum->date_memo = $date_memo;
                $m_memorandum->memo_number = $this->input->post('memo_number', TRUE);
                $m_memorandum->ref_disciplinary_action_policy_id = $this->input->post('ref_disciplinary_action_policy_id', TRUE);
                $m_memorandum->ref_action_taken_id = $this->input->post('ref_action_taken_id', TRUE);
                $m_memorandum->date_granted = $date_granted;
                $m_memorandum->remarks = $this->input->post('remarks',TRUE);
                $m_memorandum->date_created = date("Y-m-d H:i:s");
                $m_memorandum->created_by = $user_id;

                $m_memorandum->save();

                $emp_memo_id = $m_memorandum->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Memorandum successfully created.';

                $response['row_added'] = $this->Memorandum_model->get_list(
                   $emp_memo_id,
                    'emp_memo.*,ref_disciplinary_action_policy.disciplinary_action_policy,ref_action_taken.action_taken',
                        array(
                                array('ref_disciplinary_action_policy','ref_disciplinary_action_policy.ref_disciplinary_action_policy_id=emp_memo.ref_disciplinary_action_policy_id','left'),
                                array('ref_action_taken','ref_action_taken.ref_action_taken_id=emp_memo.ref_action_taken_id','left'),
                                )
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_memorandum=$this->Memorandum_model;

                $emp_memo_id=$this->input->post('emp_memo_id',TRUE);

                $m_memorandum->is_deleted=1;
                $m_memorandum->date_deleted = date("Y-m-d H:i:s");
                $m_memorandum->deleted_by = $this->session->user_id;
                if($m_memorandum->modify($emp_memo_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Memorandum successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_memorandum = $this->Memorandum_model;
                $emp_memo_id = $this->input->post('emp_memo_id', TRUE);

                $date_memo_temp = $this->input->post('date_memo', TRUE);
                $date_granted_temp = $this->input->post('date_granted',TRUE);
                $date_memo = date("Y-m-d", strtotime($date_memo_temp));
                $date_granted = date("Y-m-d", strtotime($date_granted_temp));

                $user_id=$this->session->user_id;  // get id of current login user

                $m_memorandum->date_memo = $date_memo;
                $m_memorandum->memo_number = $this->input->post('memo_number', TRUE);
                $m_memorandum->ref_disciplinary_action_policy_id = $this->input->post('ref_disciplinary_action_policy_id', TRUE);
                $m_memorandum->ref_action_taken_id = $this->input->post('ref_action_taken_id', TRUE);
                $m_memorandum->date_granted = $date_granted;
                $m_memorandum->remarks = $this->input->post('remarks',TRUE);
                $m_memorandum->date_modified = date("Y-m-d H:i:s");
                $m_memorandum->modified_by = $user_id;
                $m_memorandum->modify($emp_memo_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Memorandum successfully Updated.';
                
                $response['row_updated']=$this->Memorandum_model->get_list(
                    array('emp_memo.emp_memo_id'=>$emp_memo_id,'emp_memo.is_deleted'=>FALSE),
                    'emp_memo.*,ref_disciplinary_action_policy.disciplinary_action_policy,ref_action_taken.action_taken',
                        array(
                                array('ref_disciplinary_action_policy','ref_disciplinary_action_policy.ref_disciplinary_action_policy_id=emp_memo.ref_disciplinary_action_policy_id','left'),
                                array('ref_action_taken','ref_action_taken.ref_action_taken_id=emp_memo.ref_action_taken_id','left'),
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
