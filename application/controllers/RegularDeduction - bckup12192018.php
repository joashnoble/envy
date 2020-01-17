<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegularDeduction extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        }
        if($this->session->userdata('right_regdeduction_view') == 0 || $this->session->userdata('right_regdeduction_view') == null) {
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
        $this->load->model('RefReligion_model');
        $this->load->model('RefCourse_model');
        $this->load->model('RefRelationship_model');
        $this->load->model('RefLeave_model');
        $this->load->model('RefCertificate_model');
        $this->load->model('RefAction_model');
        $this->load->model('RefDiscipline_model');
        $this->load->model('RefCompensation_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefSection_model');
        $this->load->model('RefReligion_model');
        $this->load->model('RefCourse_model');
        $this->load->model('RefRelationship_model');
        $this->load->model('RefLeave_model');
        $this->load->model('RefCertificate_model');
        $this->load->model('RefAction_model');
        $this->load->model('RefDiscipline_model');
        $this->load->model('RefCompensation_model');
        $this->load->model('RefPayment_model');
        $this->load->model('RefSSS_Contribution_model');
        $this->load->model('RefPhilHealth_Contribution_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefEarningSetup_model');
        $this->load->model('RefEarningType_model');
        $this->load->model('RefPayPeriod_model');
        $this->load->model('RefDeductionType_model');
        $this->load->model('RefDeductionSetup_model');
        $this->load->model('Regular_Deduction_model');
        $this->load->model('Reg_deduction_cycle_model');

    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['title'] = 'Regular Deduction';
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['employee_list']=$this->Employee_model->get_list(array('employee_list.is_deleted'=>FALSE),'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name');
        $data['refdeduction']=$this->RefDeductionSetup_model->get_list('refdeduction.is_deleted=0 AND refdeduction.deduction_id!=1 AND refdeduction.deduction_id!=2 AND refdeduction.deduction_id!=3 AND refdeduction.deduction_id!=4 AND (refdeductiontype.deduction_type_id=1 or refdeductiontype.deduction_type_id=2 or refdeductiontype.deduction_type_id=4)',
                                                                        'refdeduction.deduction_id,refdeduction.deduction_desc',
                                                                        array(
                                                                                array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                                                                            ));
        $data['refdeductiontype']=$this->RefDeductionType_model->get_list(array('refdeductiontype.is_deleted'=>FALSE));
        $data['new_deductions_regular']=$this->Regular_Deduction_model->get_list(array('new_deductions_regular.is_deleted'=>FALSE,));
        $data['refpayperiod']=$this->RefPayPeriod_model->get_list_for_deduction(0,0);
        $this->load->view('regulardeduction_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
              $response['data'] = $this->Regular_Deduction_model->get_list(
                    array('new_deductions_regular.is_deleted'=>FALSE,'new_deductions_regular.is_temporary'=>0),
                    'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refdeduction.*,refdeductiontype.*,
                    (CASE
                      WHEN (SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                      THEN 
                        new_deductions_regular.loan_total_amount - ((SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id))
                      ELSE
                      new_deductions_regular.loan_total_amount
                    END) as deduction_total_amount',
                    array(
                        array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                        array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                        array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                      )
                    );


              echo json_encode($response);

            break;

            case 'getrefpayperiod':
              $response['data'] = $this->RefPayPeriod_model->get_list_for_deduction(0,0);
              echo json_encode($response);
            break;

            case 'create':
                $m_deduction_regular = $this->Regular_Deduction_model;
                $m_reg_deduction_cycle=$this->Reg_deduction_cycle_model;
                $user_id=$this->session->user_id;
                $employee_id = $this->input->post('employee_id', TRUE);
                $deduction_id = $this->input->post('deduction_id', TRUE);
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->load->helper(array('form', 'url'));
                $this->form_validation->set_rules('employee_id', 'Employee Name', 'required');
                if ($this->form_validation->run() == TRUE)
                {
                  $loancheck = $m_deduction_regular->checkifloanexists($employee_id,$deduction_id);
                  if($loancheck==0 || $loancheck==null){
                      $deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                      $deduction_per_pay_amount = $this->input->post('deduction_per_pay_amount', TRUE);

                      $m_deduction_regular->employee_id = $this->input->post('employee_id', TRUE);
                      $m_deduction_regular->deduction_id = $this->input->post('deduction_id', TRUE);
                      $m_deduction_regular->deduction_cycle = $this->input->post('deduction_cycle', TRUE);
                      $m_deduction_regular->deduction_total_amount = $this->get_numeric_value($deduction_total_amount);
                      $m_deduction_regular->loan_total_amount = $this->get_numeric_value($deduction_total_amount);
                      $m_deduction_regular->deduction_per_pay_amount = $this->get_numeric_value($deduction_per_pay_amount);
                      $m_deduction_regular->deduction_regular_remarks = $this->input->post('deduction_regular_remarks', TRUE);

                      $m_deduction_regular->date_created = date("Y-m-d H:i:s");
                      $m_deduction_regular->created_by = $this->session->user_id;
                      $m_deduction_regular->save();

                      $refpayperiod = $this->input->post('refpayperiod', TRUE);
                      $deduction_regular_id = $m_deduction_regular->last_insert_id();

                      for($i=0;$i<count($refpayperiod);$i++){
                          $m_reg_deduction_cycle->deduction_regular_id = $deduction_regular_id;
                          $m_reg_deduction_cycle->pay_period_id = $refpayperiod[$i];
                          $m_reg_deduction_cycle->save();
                      }

                      $response['title'] = 'Success!';
                      $response['stat'] = 'success';
                      $response['msg'] = 'Deduction Regular information successfully created.';

                      $response['row_added'] = $this->Regular_Deduction_model->get_list($deduction_regular_id,
                          'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refdeduction.*,refdeductiontype.*,
                          (CASE
                            WHEN (SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                            THEN 
                              new_deductions_regular.loan_total_amount - ((SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id))
                            ELSE
                            new_deductions_regular.loan_total_amount
                          END) as deduction_total_amount',
                          array(
                                  array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                                  array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                                  array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                              ));

                      echo json_encode($response);
                  }
                  else{
                      $response['title'] = 'Failure!';
                      $response['stat'] = 'error';
                      $response['msg'] = 'Loan/Deduction Description already Exist.';
                      echo json_encode($response);
                  }
                }
                else{
                  $response['title'] = 'Error!';
                  $response['stat'] = 'error';
                  $response['msg'] = validation_errors();
                }
            break;

            case 'delete':
                $m_deduction_regular=$this->Regular_Deduction_model;

                $deduction_regular_id=$this->input->post('deduction_regular_id',TRUE);
                $loan_status = $m_deduction_regular->verify_loan_status($deduction_regular_id);
                if($loan_status==0 || $loan_status==null){
                    $m_deduction_regular->is_deleted=1;
                    $m_deduction_regular->date_deleted = date("Y-m-d H:i:s");
                    $m_deduction_regular->deleted_by = $this->session->user_id;
                    if($m_deduction_regular->modify($deduction_regular_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Deduction Regular information successfully deleted.';

                        echo json_encode($response);
                    }
                }
                else{
                    $response['title']='Failure!';
                        $response['stat']='error';
                        $response['msg']='Cannot be deleted, Deduction Already Processed!.';

                        echo json_encode($response);
                }
                
            break;

            case 'getpayperiod':
                // $employee_id = $this->input->post('employee_id', TRUE);
                // $deduction_id = $this->input->post('deduction_id', TRUE);
                $response['data'] = $this->RefPayPeriod_model->get_list_for_deduction(0,0);
                echo json_encode($response);
            break;

            case 'getDeductionCycle':
                $deduction_regular_id = $this->input->post('deduction_regular_id',TRUE);
                $response['data'] = $this->Reg_deduction_cycle_model->getDeductionCycle($deduction_regular_id);
                echo json_encode($response);
            break;

            case 'update':
                $m_deduction_regular=$this->Regular_Deduction_model;
                $m_reg_deduction_cycle=$this->Reg_deduction_cycle_model;
                $m_employee=$this->Employee_model;
                $employee_id = $this->input->post('employee_id', TRUE);
                $deduction_id = $this->input->post('deduction_id', TRUE);

                $name = $response['data']=$this->Employee_model->get_list(
                    $employee_id,
                    'CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name'
                    );
                $deductdesc = $response['data']=$this->RefDeductionSetup_model->get_list(
                    $deduction_id,
                    'refdeduction.deduction_desc'
                    );
                $deduction_regular_id=$this->input->post('deduction_regular_id',TRUE);

                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->load->helper(array('form', 'url'));
                $this->form_validation->set_rules('employee_id', 'Employee Name', 'required');
                if ($this->form_validation->run() == TRUE)
                {
                  $loan_employee = $m_deduction_regular->getloanemployee($deduction_regular_id);
                  if($loan_employee==$employee_id){
                    $deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                    $deduction_per_pay_amount = $this->input->post('deduction_per_pay_amount', TRUE);

                    $refpayperiod = $this->input->post('refpayperiod', TRUE);

                    $m_deduction_regular->employee_id = $this->input->post('employee_id', TRUE);
                    $m_deduction_regular->deduction_id = $this->input->post('deduction_id', TRUE);
                    $m_deduction_regular->deduction_cycle = $this->input->post('deduction_cycle', TRUE);
                    $m_deduction_regular->deduction_total_amount = $this->get_numeric_value($deduction_total_amount);
                    $m_deduction_regular->loan_total_amount = $this->get_numeric_value($deduction_total_amount);
                    $m_deduction_regular->deduction_per_pay_amount = $this->get_numeric_value($deduction_per_pay_amount);
                    $m_deduction_regular->deduction_regular_remarks = $this->input->post('deduction_regular_remarks', TRUE);
                    $m_deduction_regular->date_modified = date("Y-m-d H:i:s");
                    $m_deduction_regular->modified_by = $this->session->user_id;
                    $m_deduction_regular->modify($deduction_regular_id);

                    $m_reg_deduction_cycle->delete_via_fk($deduction_regular_id);

                    for($i=0;$i<count($refpayperiod);$i++){
                        $m_reg_deduction_cycle->deduction_regular_id = $deduction_regular_id;
                        $m_reg_deduction_cycle->pay_period_id = $refpayperiod[$i];
                        $m_reg_deduction_cycle->save();
                    }

                    $response['title']='Success';
                    $response['stat']='success';
                    $response['msg'] = $name[0]->full_name."'s ".$deductdesc[0]->deduction_desc." successfully updated";

                    $response['row_updated'] = $this->Regular_Deduction_model->get_list($deduction_regular_id,
                          'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refdeduction.*,refdeductiontype.*,
                          (CASE
                            WHEN (SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                            THEN 
                              new_deductions_regular.loan_total_amount - ((SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id))
                            ELSE
                            new_deductions_regular.loan_total_amount
                          END) as deduction_total_amount',
                        array(
                                array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                                array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                                array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                            ));
                  }
                  else{
                    $loancheck = $m_deduction_regular->checkifloanexists($employee_id,$deduction_id);
                    if($loancheck==0 || $loancheck==null){
                        $deduction_total_amount = $this->input->post('deduction_total_amount', TRUE);
                        $deduction_per_pay_amount = $this->input->post('deduction_per_pay_amount', TRUE);

                        $m_deduction_regular->employee_id = $this->input->post('employee_id', TRUE);
                        $m_deduction_regular->deduction_id = $this->input->post('deduction_id', TRUE);
                        $m_deduction_regular->deduction_cycle = $this->input->post('deduction_cycle', TRUE);
                        $m_deduction_regular->deduction_total_amount = $this->get_numeric_value($deduction_total_amount);
                        $m_deduction_regular->loan_total_amount = $this->get_numeric_value($deduction_total_amount);
                        $m_deduction_regular->deduction_per_pay_amount = $this->get_numeric_value($deduction_per_pay_amount);
                        $m_deduction_regular->deduction_regular_remarks = $this->input->post('deduction_regular_remarks', TRUE);
                        $m_deduction_regular->date_modified = date("Y-m-d H:i:s");
                        $m_deduction_regular->modified_by = $this->session->user_id;
                        $m_deduction_regular->modify($deduction_regular_id);

                        $m_reg_deduction_cycle->delete_via_fk($deduction_regular_id);

                        for($i=0;$i<count($refpayperiod);$i++){
                            $m_reg_deduction_cycle->deduction_regular_id = $deduction_regular_id;
                            $m_reg_deduction_cycle->pay_period_id = $refpayperiod[$i];
                            $m_reg_deduction_cycle->save();
                        }

                        $response['title']='Success';
                        $response['stat']='success';
                        $response['msg'] = $name[0]->full_name."'s ".$deductdesc[0]->deduction_desc." successfully updated";

                        $response['row_updated'] = $this->Regular_Deduction_model->get_list($deduction_regular_id,
                          'new_deductions_regular.*,employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,refdeduction.*,refdeductiontype.*,
                          (CASE
                            WHEN (SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                            THEN 
                              new_deductions_regular.loan_total_amount - ((SELECT COALESCE(SUM(deduction_amount),0) FROM pay_slip_deductions WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id))
                            ELSE
                            new_deductions_regular.loan_total_amount
                          END) as deduction_total_amount',
                            array(
                                    array('employee_list','employee_list.employee_id=new_deductions_regular.employee_id','left'),
                                    array('refdeduction','refdeduction.deduction_id=new_deductions_regular.deduction_id','left'),
                                    array('refdeductiontype','refdeductiontype.deduction_type_id=refdeduction.deduction_type_id','left')
                                ));
                      }
                    else{
                        $response['title'] = 'Failure!';
                        $response['stat'] = 'error';
                        $response['msg'] = $name[0]->full_name." already have ".$deductdesc[0]->deduction_desc;
                    }
                  }
                }
                else{
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                }

                  echo json_encode($response);
            break;

            /*case 'test';
                $m_deduction_regular=$this->Regular_Deduction_model;
                $test = $m_deduction_regular->verify_loan_status();
                echo $test;
                break;*/

        }
    }





}
