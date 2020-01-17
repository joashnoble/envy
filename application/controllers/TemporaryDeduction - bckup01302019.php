<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemporaryDeduction extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        }
        if($this->session->userdata('right_tempdeduction_view') == 0 || $this->session->userdata('right_tempdeduction_view') == null) {
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
        $this->load->model('TemporaryDeduction_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefDeductionSetup_model');
        $this->load->model('Regular_Deduction_model');

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
        $data['refdeduction']=$this->RefDeductionSetup_model->get_list('refdeduction.is_deleted=0 AND refdeductiontype.deduction_type_id!=1 AND refdeductiontype.deduction_type_id!=2 AND refdeductiontype.deduction_type_id!=4',
                                                                        'refdeduction.deduction_id,refdeduction.deduction_desc',
                                                                        array(
                                                                                array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                                                                            ));
        $data['employee_list']=$this->Employee_model->get_list(
                    array('employee_list.is_deleted'=>FALSE),
                    'employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name'
                   // null,
                   // true,
                   // '4'
                    );
        $data['title'] = 'Temporary Deduction';

        $this->load->view('temporarydeduction_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
            /*
                $response['data']=$this->TemporaryDeduction_model->get_list(
                    array('deductions_temporary.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                */
                $response['data'] = $this->Regular_Deduction_model->get_list(
                    array('new_deductions_regular.is_deleted'=>FALSE,'new_deductions_regular.is_temporary'=>1),
                    'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refdeduction.*,refdeductiontype.*',
                    array(
                            array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                            array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                            array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                        )
                    );
                break;

            case 'gettemporarydeduction':
                $pay_period_id = $this->input->post('pay_period_id', TRUE);
                $ref_department_id = $this->input->post('ref_department_id', TRUE);
                $group_id = $this->input->post('group_id', TRUE);
                $space=" ";
                $test="";
                if($ref_department_id=="all" AND $group_id=="all"){
                $test=array('new_deductions_regular.pay_period_id'=>$pay_period_id,'new_deductions_regular.is_deleted'=>FALSE,'new_deductions_regular.is_temporary'=>1,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>1);
                }
                if($ref_department_id=="all" AND $group_id!="all"){
                $test=array('new_deductions_regular.pay_period_id'=>$pay_period_id,'new_deductions_regular.is_deleted'=>FALSE,'refgroup.group_id'=>$group_id,'new_deductions_regular.is_temporary'=>1,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>1);

                }
                if($ref_department_id!="all" AND $group_id=="all"){
                $test=array('new_deductions_regular.pay_period_id'=>$pay_period_id,'new_deductions_regular.is_deleted'=>FALSE,'ref_department.ref_department_id'=>$ref_department_id,'new_deductions_regular.is_temporary'=>1,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>1);

                }
                if($ref_department_id!="all" AND $group_id!="all"){
                $test=array('new_deductions_regular.pay_period_id'=>$pay_period_id,'new_deductions_regular.is_deleted'=>FALSE,'ref_department.ref_department_id'=>$ref_department_id,'refgroup.group_id'=>$group_id,'new_deductions_regular.is_temporary'=>1,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>1);

                }
                $response['data']=$this->Regular_Deduction_model->get_list(
                    $test,
                    'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refdeduction.deduction_desc,refdeductiontype.deduction_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                         array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                         array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left'),
                         array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                         array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                         array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                        )
                    );
                echo json_encode($response);
                /*
                $pay_period_id = $this->input->post('pay_period_id', TRUE);
                $ref_department_id = $this->input->post('ref_department_id', TRUE);
                $group_id = $this->input->post('group_id', TRUE);
                $space=" ";
                $test="";
                if($ref_department_id=="all" AND $group_id=="all"){
                $test=array('deductions_temporary.pay_period_id'=>$pay_period_id,'deductions_temporary.is_deleted'=>FALSE,'employee_list.is_deleted'=>FALSE);
                }
                if($ref_department_id=="all" AND $group_id!="all"){
                $test=array('deductions_temporary.pay_period_id'=>$pay_period_id,'deductions_temporary.is_deleted'=>FALSE,'emp_rates_duties.group_id'=>$group_id,'employee_list.is_deleted'=>FALSE);

                }
                if($ref_department_id!="all" AND $group_id=="all"){
                $test=array('deductions_temporary.pay_period_id'=>$pay_period_id,'deductions_temporary.is_deleted'=>FALSE,'emp_rates_duties.ref_department_id'=>$ref_department_id,'employee_list.is_deleted'=>FALSE);

                }
                if($ref_department_id!="all" AND $group_id!="all"){
                $test=array('deductions_temporary.pay_period_id'=>$pay_period_id,'deductions_temporary.is_deleted'=>FALSE,'emp_rates_duties.ref_department_id'=>$ref_department_id,'emp_rates_duties.group_id'=>$group_id,'employee_list.is_deleted'=>FALSE);

                }
                $response['data']=$this->TemporaryDeduction_model->get_list(
                    $test,
                    'deductions_temporary.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refdeduction.deduction_desc,refdeductiontype.deduction_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=deductions_temporary.employee_id','left'),
                         array('refdeduction','refdeduction.deduction_id=deductions_temporary.deduction_id','left'),
                         array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left'),
                        )
                    );
                echo json_encode($response);
                */
                break;

            case 'create':
                /*$m_temporary_deduction = $this->TemporaryDeduction_model;
                $user_id=$this->session->user_id;
                $m_temporary_deduction->pay_period_id = $this->input->post('pay_period_id', TRUE);
                $m_temporary_deduction->employee_id = $this->input->post('employee_id', TRUE);
                $m_temporary_deduction->deduction_id = $this->input->post('deduction_id', TRUE);
                $m_temporary_deduction->deduction_temporary_amount = $this->input->post('deduction_temporary_amount', TRUE);
                $m_temporary_deduction->deduction_temporary_remarks = $this->input->post('deduction_temporary_remarks', TRUE);
                $m_temporary_deduction->created_by = $user_id;
                $m_temporary_deduction->save();

                $deduction_temporary_id = $m_temporary_deduction->last_insert_id();
*/
                $m_deduction_regular = $this->Regular_Deduction_model;
                $user_id=$this->session->user_id;

                $deduction_per_pay_amount = $this->input->post('deduction_per_pay_amount', TRUE);

                $m_deduction_regular->employee_id = $this->input->post('employee_id', TRUE);
                $m_deduction_regular->deduction_id = $this->input->post('deduction_id', TRUE);
                $m_deduction_regular->pay_period_id = $this->input->post('pay_period_id', TRUE);
                $m_deduction_regular->deduction_cycle = $this->input->post('deduction_cycle', TRUE);
                //$m_deduction_regular->deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                $m_deduction_regular->deduction_per_pay_amount = $this->get_numeric_value($deduction_per_pay_amount);
                $m_deduction_regular->deduction_regular_remarks = $this->input->post('deduction_regular_remarks', TRUE);
                $m_deduction_regular->is_temporary = 1;

                $m_deduction_regular->date_created = date("Y-m-d H:i:s");
                $m_deduction_regular->created_by = $this->session->user_id;
                $m_deduction_regular->save();

                $deduction_regular_id = $m_deduction_regular->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Temporary Deduction successfully created.';

                $response['row_added'] = $this->Regular_Deduction_model->get_list($deduction_regular_id,
                    'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refdeduction.deduction_desc,refdeductiontype.deduction_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                         array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                         array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_temporary_deduction=$this->Regular_Deduction_model;

                $deduction_temporary_id = $this->input->post('deduction_regular_id', TRUE);

                $filter=$deduction_temporary_id;
                //$response['data']=$this->TemporaryDeduction_model->checkifused($filter);

                    $m_temporary_deduction->is_deleted=1;
                    $m_temporary_deduction->date_deleted = date("Y-m-d H:i:s");
                    $m_temporary_deduction->deleted_by = $this->session->user_id;
                    if($m_temporary_deduction->modify($deduction_temporary_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Temporary Deduction successfully Deleted.';

                    echo json_encode($response);
                    }
                break;

            case 'update':
            /*
                $m_temporary_deduction = $this->TemporaryDeduction_model;
                $user_id=$this->session->user_id;
                $deduction_temporary_id = $this->input->post('deduction_temporary_id', TRUE);
                $m_temporary_deduction->employee_id = $this->input->post('employee_id', TRUE);
                $m_temporary_deduction->deduction_id = $this->input->post('deduction_id', TRUE);
                $m_temporary_deduction->deduction_temporary_amount = $this->input->post('deduction_temporary_amount', TRUE);
                $m_temporary_deduction->deduction_temporary_remarks = $this->input->post('deduction_temporary_remarks', TRUE);
                $m_temporary_deduction->modified_by = $user_id;

                $m_temporary_deduction->modify($deduction_temporary_id);
                */
                $m_deduction_regular = $this->Regular_Deduction_model;
                $user_id=$this->session->user_id;
                $deduction_regular_id = $this->input->post('deduction_regular_id', TRUE);

                $m_deduction_regular->employee_id = $this->input->post('employee_id', TRUE);
                $m_deduction_regular->deduction_id = $this->input->post('deduction_id', TRUE);
                //$m_deduction_regular->pay_period_id = $this->input->post('pay_period_id', TRUE);
                $m_deduction_regular->deduction_cycle = $this->input->post('deduction_cycle', TRUE);
                //$m_deduction_regular->deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                $deduction_per_pay_amount = $this->input->post('deduction_per_pay_amount', TRUE);

                $m_deduction_regular->deduction_per_pay_amount = $this->get_numeric_value($deduction_per_pay_amount);
                $m_deduction_regular->deduction_regular_remarks = $this->input->post('deduction_regular_remarks', TRUE);
                $m_deduction_regular->is_temporary = 1;

                $m_deduction_regular->date_modified = date("Y-m-d H:i:s");
                $m_deduction_regular->modified_by = $this->session->user_id;
                $m_deduction_regular->modify($deduction_regular_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Section information successfully updated.';
                $response['row_updated']=$this->Regular_Deduction_model->get_list($deduction_regular_id,
                    'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,refdeduction.deduction_desc,refdeductiontype.deduction_type_desc',
                    array(
                         array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                         array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                         array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

        }
    }











}
