<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LeaveFiled extends CORE_Controller
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
        $data['title'] = 'Leave Filed';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Leavefiled_model->get_list(
                    array('emp_leaves_filed.is_deleted'=>FALSE),
                    'emp_leaves_filed.*,emp_leaves_filed,ref_leave_type.ref_leave_type_id',
                        array(
                            array('emp_leaves_entitlement','emp_leaves_entitlement.emp_leaves_entitlement_id=emp_leaves_filed.emp_leaves_entitlement_id','left'),
                            array('ref_leave_type','ref_leave_type.ref_leave_type_id=emp_leaves_entitlement.ref_leave_type_id','left'),
                            )
                    );
                echo json_encode($response);
                break;

            case 'getfiledleave':
                $employee_id = $this->input->post('employee_id', TRUE);
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                $response['data']=$this->Leavefiled_model->get_list(
                   array('emp_leaves_filed.employee_id'=>$employee_id,'emp_leaves_filed.emp_leave_year_id'=>$active_year,'emp_leaves_entitlement.is_deleted'=>FALSE),
                    'emp_leaves_filed.*,ref_leave_type.leave_type',
                        array(
                            array('emp_leaves_entitlement','emp_leaves_entitlement.emp_leaves_entitlement_id=emp_leaves_filed.emp_leaves_entitlement_id','left'),
                            array('ref_leave_type','ref_leave_type.ref_leave_type_id=emp_leaves_entitlement.ref_leave_type_id','left'),
                            )
                    );

                echo json_encode($response);
                break;

            case 'create':
                $m_employee = $this->Employee_model;
                $m_leavefiled = $this->Leavefiled_model;
                $m_yearsetup = $this->RefYearSetup_model;
                $m_leaves_entitlement = $this->Entitlement_model;
                $employee_id = $this->input->post('employee_id', TRUE);
                $emp_leaves_entitlement_id = $this->input->post('emp_leaves_entitlement_id', TRUE);

                $date_filed_temp = $this->input->post('date_filed', TRUE);
                $date_granted_temp = $this->input->post('date_granted', TRUE);
                $date_time_from_temp = $this->input->post('date_time_from', TRUE);
                $date_time_to_temp = $this->input->post('date_time_to', TRUE);
                $total = $this->input->post('total', TRUE);
                $date_filed = date("Y-m-d", strtotime($date_filed_temp));
                $date_granted = date("Y-m-d", strtotime($date_granted_temp));
                $date_time_from = date("Y-m-d", strtotime($date_time_from_temp));
                $date_time_to = date("Y-m-d", strtotime($date_time_to_temp));

                $user_id=$this->session->user_id;  // get id of current login user
                $active_year = $m_yearsetup->getactiveyear(); //model funct. to get active year :)
                
                /*echo $total_leaves_filed_this_year;*/
                $m_leavefiled->emp_leave_year_id = $active_year; // current active year
                $m_leavefiled->employee_id = $this->input->post('employee_id', TRUE);
                $m_leavefiled->emp_leaves_entitlement_id = $this->input->post('emp_leaves_entitlement_id', TRUE);
                $m_leavefiled->date_filed = $date_filed;
                $m_leavefiled->date_granted = $date_granted;
                $m_leavefiled->date_time_from = $date_time_from;
                $m_leavefiled->date_time_to = $date_time_to;
                $m_leavefiled->purpose = $this->input->post('purpose', TRUE);
                $m_leavefiled->total = $this->get_numeric_value($total);
                $m_leavefiled->date_created = date("Y-m-d H:i:s");
                $m_leavefiled->created_by = $user_id;
                $m_leavefiled->save();

                $m_leaves_filed_id = $m_leavefiled->last_insert_id();
                $total_leaves_filed_this_year = $m_leavefiled->getleavesfiled($active_year,$employee_id,$emp_leaves_entitlement_id); //model funct. to get total leave :)
                $total_leaves_grant_this_year = $m_leaves_entitlement->gettotalgrantthisyear($active_year,$emp_leaves_entitlement_id); //model funct. to get total leave grant :)

                $m_employee->on_leave = 1;
                $m_employee->modify($employee_id);
                
                // if condition
                    if($total_leaves_grant_this_year>=$total_leaves_filed_this_year){
                        $leave_current_balance=$total_leaves_grant_this_year-$total_leaves_filed_this_year;
                        $m_leaves_entitlement->set('current_balance',$leave_current_balance);
                        /*echo $total_leaves_filed_this_year;*/
                        $m_leaves_entitlement->modify($emp_leaves_entitlement_id);

                        

                        //$m_products->set('quantity','quantity-'.$pos_qty[$i]);
                        //$m_products->modify($product_id[$i]);

                        $response['title'] = 'Success!';
                        $response['stat'] = 'success';
                        $response['msg'] = 'Entitlement successfully created.';

                        $response['row_added'] = $this->Leavefiled_model->get_list(
                           $m_leaves_filed_id,
                            'emp_leaves_filed.*,ref_leave_type.leave_type',
                                array(
                                    array('emp_leaves_entitlement','emp_leaves_entitlement.emp_leaves_entitlement_id=emp_leaves_filed.emp_leaves_entitlement_id','left'),
                                    array('ref_leave_type','ref_leave_type.ref_leave_type_id=emp_leaves_entitlement.ref_leave_type_id','left'),
                                    )
                            );
                    }
                    else{
                        $response['title'] = 'Error!';
                        $response['stat'] = 'error';
                        $response['msg'] = 'Not Enough Leave Grant.';
                        /*$m_leavefiled->is_deleted = 1;
                        $m_leavefiled->modify($m_leaves_filed_id);*/
                        //DELETE LAST INSERTED BEC. OF LACK OF GRANT
                        $this->db->where('emp_leaves_filed_id', $m_leaves_filed_id);
                        $this->db->delete('emp_leaves_filed'); 
                    }
                
                echo json_encode($response);
                break;

            case 'delete':
                

                break;

            case 'update':
                

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
