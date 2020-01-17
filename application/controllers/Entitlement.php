<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entitlement extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('Leavefiled_model');
        
        
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
                $response['data']=$this->Entitlement_model->getEntitlement();
                echo json_encode($response);
                break;

            case 'getresult':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->Entitlement_model->getEntitlement($employee_id);
                echo json_encode($response);
            break;

            case 'leave_details':
                $m_leaves_entitlement = $this->Entitlement_model;
                $emp_leaves_entitlement_id = $this->input->post('emp_leaves_entitlement_id', TRUE);
                $response['data']=$m_leaves_entitlement->getEntitlement(null,$emp_leaves_entitlement_id);
                echo json_encode($response);
                break;

            case 'getavailableleave':
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                $employee_id = $this->input->post('employee_id', TRUE);

                $response['available_leave']=$this->Entitlement_model->get_available_leave($employee_id,$active_year);
                echo json_encode($response);
                break;

            case 'create':
                $m_leaves_entitlement = $this->Entitlement_model;
                $m_yearsetup = $this->RefYearSetup_model;

                $user_id=$this->session->user_id;  // get id of current login user
                $active_year = $m_yearsetup->getactiveyear(); //model funct. to get active year :)

                $m_leaves_entitlement->emp_leave_year_id = $active_year; // current active year
                $m_leaves_entitlement->employee_id = $this->input->post('employee_id', TRUE);

                $m_leaves_entitlement->ref_leave_type_id = $this->input->post('ref_leave_type_id', TRUE);
                $m_leaves_entitlement->total_grant = $this->input->post('total_grant', TRUE);
                $m_leaves_entitlement->received_balance = $this->input->post('received_balance', TRUE);
                $m_leaves_entitlement->current_balance = $this->input->post('current_balance', TRUE);
                $m_leaves_entitlement->remark = $this->input->post('remark', TRUE);
                $m_leaves_entitlement->ref_leave_type_short_name = $this->input->post('leave_type_short_name', TRUE);
                $m_leaves_entitlement->is_payable = $this->input->post('is_payable', TRUE);
                $m_leaves_entitlement->is_forwardable = $this->input->post('is_forwardable', TRUE);
                $m_leaves_entitlement->is_forwarded = 0;
                $m_leaves_entitlement->date_created = date("Y-m-d H:i:s");
                $m_leaves_entitlement->created_by = $this->session->user_id;

                $m_leaves_entitlement->save();
                $m_leaves_entitlement_id = $m_leaves_entitlement->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Entitlement successfully created.';

                $response['row_added'] = $this->Entitlement_model->getEntitlement(null,$m_leaves_entitlement_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_entitlement=$this->Entitlement_model;
                $m_employee=$this->Employee_model;

                $emp_leaves_entitlement_id=$this->input->post('emp_leaves_entitlement_id',TRUE);

                $entitlement = $this->Entitlement_model->getEntitlement(null,$emp_leaves_entitlement_id);   
                $received_balance = $entitlement[0]->received_balance;

                if ($received_balance > 0){
                    $response['title']='Cannot Delete Leave Entitlement!';
                    $response['stat']='error';
                    $response['msg']='This Leave Entitlement was used in other transaction.';
                }else{
                    $m_entitlement->is_deleted=1;
                    $m_entitlement->deleted_by = $this->session->user_id;
                    $m_entitlement->date_deleted = date("Y-m-d H:i:s");

                    if($m_entitlement->modify($emp_leaves_entitlement_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Entitlement successfully deleted.';

                    }
                }

                echo json_encode($response);
                break;

            case 'update':
                $m_yearsetup = $this->RefYearSetup_model;
                $m_leaves_entitlement = $this->Entitlement_model;
                $m_leavefiled = $this->Leavefiled_model;

                $user_id=$this->session->user_id;
                $active_year = $m_yearsetup->getactiveyear();
                $employee_id = $this->input->post('employee_id', TRUE);
                $emp_leaves_entitlement_id = $this->input->post('emp_leaves_entitlement_id', TRUE);
                $total_grant = $this->input->post('total_grant', TRUE);

                $total_leaves_filed_this_year = $m_leavefiled->getleavesfiled($active_year,$employee_id,$emp_leaves_entitlement_id); //model funct. to get total leave :)
                
                $m_leaves_entitlement->emp_leave_year_id = $active_year; // current active year
                $m_leaves_entitlement->employee_id = $this->input->post('employee_id', TRUE);

                // $m_leaves_entitlement->ref_leave_type_id = $this->input->post('ref_leave_type_id', TRUE);
                $m_leaves_entitlement->total_grant = $this->input->post('total_grant', TRUE);
                // $m_leaves_entitlement->received_balance = $this->input->post('received_balance', TRUE);
                /*$m_leaves_entitlement->current_balance = $this->input->post('current_balance', TRUE);*/
                $m_leaves_entitlement->remark = $this->input->post('remark', TRUE);
                $m_leaves_entitlement->ref_leave_type_short_name = $this->input->post('leave_type_short_name', TRUE);
                $m_leaves_entitlement->is_payable = $this->input->post('is_payable', TRUE);
                $m_leaves_entitlement->is_forwardable = $this->input->post('is_forwardable', TRUE);
                $m_leaves_entitlement->is_forwarded = 0;

                if($total_grant>=$total_leaves_filed_this_year){
                    $m_leaves_entitlement->current_balance = $total_grant-$total_leaves_filed_this_year;
                    $m_leaves_entitlement->date_modified = date("Y-m-d H:i:s");
                    $m_leaves_entitlement->modified_by = $user_id;
                    $m_leaves_entitlement->modify($emp_leaves_entitlement_id);

                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Entitlement successfully Updated.';
                    $response['row_updated']=$this->Entitlement_model->getEntitlement(null,$emp_leaves_entitlement_id);
                }
                else{
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = 'Not Enough Leave Grant';
                }
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
