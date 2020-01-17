<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemporaryOtherEarnings extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_othertempearnings_view') == 0 || $this->session->userdata('right_othertempearnings_view') == null) {
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
        $this->load->model('TemporaryOtherEarnings_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefEarningSetup_model');

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
        $data['ref_group']=$this->RefGroup_model->get_list(array('refgroup.is_deleted'=>FALSE));
        $data['ref_department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['refotherearnings']=$this->RefEarningSetup_model->get_list(array('refotherearnings.is_deleted'=>FALSE));
        $data['employee_list']=$this->Employee_model->get_list(
                    array('employee_list.is_deleted'=>FALSE),
                    'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name'
                   // null,
                   // true,
                   // '4'
                    );
        $data['title'] = 'Temporary Other Earnings';

        $this->load->view('temporaryotherearnings_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->TemporaryOtherEarnings_model->get_list(
                    array('new_otherearnings_regular.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'gettemporaryotherearnings':
                $pay_period_id = $this->input->post('pay_period_id', TRUE);
                $ref_department_id = $this->input->post('ref_department_id', TRUE);
                $group_id = $this->input->post('group_id', TRUE);
                $space=" ";
                $test="";
                if($ref_department_id=="all" AND $group_id=="all"){
                $test=array('new_otherearnings_regular.pay_period_id'=>$pay_period_id,'new_otherearnings_regular.is_temporary'=>1,'new_otherearnings_regular.is_deleted'=>FALSE,'employee_list.is_deleted'=>FALSE);
                }
                if($ref_department_id=="all" AND $group_id!="all"){
                $test=array('new_otherearnings_regular.pay_period_id'=>$pay_period_id,'new_otherearnings_regular.is_temporary'=>1,'new_otherearnings_regular.is_deleted'=>FALSE,'emp_rates_duties.group_id'=>$group_id,'employee_list.is_deleted'=>FALSE);

                }
                if($ref_department_id!="all" AND $group_id=="all"){
                $test=array('new_otherearnings_regular.pay_period_id'=>$pay_period_id,'new_otherearnings_regular.is_temporary'=>1,'new_otherearnings_regular.is_deleted'=>FALSE,'emp_rates_duties.ref_department_id'=>$ref_department_id,'employee_list.is_deleted'=>FALSE);

                }
                if($ref_department_id!="all" AND $group_id!="all"){
                $test=array('new_otherearnings_regular.pay_period_id'=>$pay_period_id,'new_otherearnings_regular.is_temporary'=>1,'new_otherearnings_regular.is_deleted'=>FALSE,'emp_rates_duties.ref_department_id'=>$ref_department_id,'emp_rates_duties.group_id'=>$group_id,'employee_list.is_deleted'=>FALSE);

                }
                $response['data']=$this->TemporaryOtherEarnings_model->get_list(
                    $test,
                    'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refotherearnings.earnings_desc,refotherearningstype.earnings_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                         array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                         array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_temporary_otherearnings = $this->TemporaryOtherEarnings_model;
                $employee_id = $this->input->post('employee_id', TRUE);
                $earnings_id = $this->input->post('earnings_id', TRUE);
                /*$retrocheck = $m_temporary_otherearnings->checkifretroexist($employee_id);*/
                /*if($retrocheck==0 || $retrocheck==null){*/
                    
                    $oe_regular_amount=$this->input->post('oe_regular_amount', TRUE);
                    $user_id=$this->session->user_id;
                    $m_temporary_otherearnings->pay_period_id = $this->input->post('pay_period_id', TRUE);
                    $m_temporary_otherearnings->employee_id = $this->input->post('employee_id', TRUE);
                    $m_temporary_otherearnings->earnings_id = $this->input->post('earnings_id', TRUE);
                    $m_temporary_otherearnings->oe_regular_amount = $this->get_numeric_value($oe_regular_amount);
                    $m_temporary_otherearnings->oe_regular_remarks = $this->input->post('oe_regular_remarks', TRUE);
                    $m_temporary_otherearnings->date_created = date("Y-m-d H:i:s");
                    $m_temporary_otherearnings->created_by = $this->session->user_id;
                    $m_temporary_otherearnings->is_temporary = 1;
                    $m_temporary_otherearnings->save();

                    $earnings_temporary_id = $m_temporary_otherearnings->last_insert_id();


                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Other Earnings Deduction successfully created.';

                    $response['row_added'] = $this->TemporaryOtherEarnings_model->get_list($earnings_temporary_id,
                        'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refotherearnings.earnings_desc,refotherearningstype.earnings_type_desc',
                        array(
                             array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                             array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                             array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left'),
                            )
                        );
                /*}
                else{
                    $response['title'] = 'Failure!';
                    $response['stat'] = 'error';
                    $response['msg'] = 'Retro Salary already Exist.';
                    
                }*/
                echo json_encode($response);

                break;

            case 'delete':
                $m_temporary_otherearnings=$this->TemporaryOtherEarnings_model;

                $oe_regular_id = $this->input->post('oe_regular_id', TRUE);

                $filter=$oe_regular_id;
                //$response['data']=$this->TemporaryOtherEarnings_model->checkifused($filter);
               
                    $m_temporary_otherearnings->is_deleted=1;
                    $m_temporary_otherearnings->date_deleted = date("Y-m-d H:i:s");
                    $m_temporary_otherearnings->deleted_by = $this->session->user_id;
                    if($m_temporary_otherearnings->modify($oe_regular_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Other Earnings Deduction successfully Deleted.';

                    echo json_encode($response);
                    }
                break;

            case 'update':
                $m_temporary_otherearnings = $this->TemporaryOtherEarnings_model;
                $oe_regular_amount=$this->input->post('oe_regular_amount', TRUE);
                $user_id=$this->session->user_id;
                $oe_regular_id = $this->input->post('oe_regular_id', TRUE);
                $m_temporary_otherearnings->employee_id = $this->input->post('employee_id', TRUE);
                $m_temporary_otherearnings->earnings_id = $this->input->post('earnings_id', TRUE);
                $m_temporary_otherearnings->oe_regular_amount = $this->get_numeric_value($oe_regular_amount);
                $m_temporary_otherearnings->oe_regular_remarks = $this->input->post('oe_regular_remarks', TRUE);
                $m_temporary_otherearnings->date_modified = date("Y-m-d H:i:s");
                $m_temporary_otherearnings->modified_by = $this->session->user_id;
                $m_temporary_otherearnings->is_temporary = 1;
                $m_temporary_otherearnings->modify($oe_regular_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Section information successfully updated.';
                $response['row_updated']=$this->TemporaryOtherEarnings_model->get_list($oe_regular_id,
                    'new_otherearnings_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refotherearnings.earnings_desc,refotherearningstype.earnings_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=new_otherearnings_regular.employee_id','left'),
                         array('refotherearnings','refotherearnings.earnings_id=new_otherearnings_regular.earnings_id','left'),
                         array('refotherearningstype','refotherearningstype.earnings_type_id=refotherearnings.earnings_type_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

        }
    }











}
