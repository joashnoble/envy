<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        if($this->session->user_id != '') {
            echo '<script>
            window.location.href = "Dashboard";
            </script>';
        }
        else{
        }
        $this->load->model('Employee_model');
        $this->load->model('Leavefiled_model');
        $this->load->model('Users_model');
        $this->load->model('User_groups_model');
        $this->load->model('GeneralSettings_model');
        $this->load->model('RefPayment_model');

    }


    public function index()
    {
        $this->create_required_default_data();

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['company_setup']=$this->GeneralSettings_model->get_list();
        $this->load->view('login_view',$data);

    }


    function create_required_default_data(){

        //create default user : the admin
        $m_users=$this->Users_model;
        $m_users->create_default_user();

        //create default user group : the Super User
        $m_user_groups=$this->User_groups_model;
        $m_user_groups->create_default_user_group();

        //create default user group : the Super User
        $m_ref_payment_type=$this->RefPayment_model;
        $m_ref_payment_type->create_default_payment_type();        


    }


    function transaction($txn=null){

        switch($txn){

                //****************************************************************************
                case 'validate' :
                    $uname=$this->input->post('uname');
                    $pword=$this->input->post('pword');
                    $users=$this->Users_model;
                    $m_employee = $this->Employee_model;
                    $m_leavefiled = $this->Leavefiled_model;
                    $result=$users->authenticate_user($uname,$pword);

                    $company_setup = $this->GeneralSettings_model;
                    $m_company = $company_setup->get_list();

                    if($result->num_rows()>0){//valid username and pword
                        $user_id = $result->row()->user_id;
                        $m_users=$this->Users_model;
                        $m_users->session_status = 1; //1 is equivalent to active or logged in
                        $m_users->modify($user_id);

                        // ## update on leave status of an employee
                        $datenow = date('Y-m-d');
                        $emp_id=$m_leavefiled->get_list(
                            'emp_leaves_filed.date_time_from <= "'.$datenow.'"',
                            'emp_leaves_filed.employee_id'
                        );

                        for($i=0;$i<count($emp_id);$i++){
                            $m_employee->on_leave = 1;
                            $m_employee->modify($emp_id[$i]->employee_id);
                        }

                        $emp_id_leave=$m_leavefiled->get_list(
                            'emp_leaves_filed.date_time_to < "'.$datenow.'"',
                            'emp_leaves_filed.employee_id'
                        );

                        for($a=0;$a<count($emp_id_leave);$a++){
                            $m_employee->on_leave = 0;
                            $m_employee->modify($emp_id_leave[$a]->employee_id);
                        }
                        // ## update on leave status of an employee


                        //set session data here and response data
                        $this->session->set_userdata(
                            array(
                                'main_directory'=>$m_company[0]->main_directory,
                                'user_id'=>$result->row()->user_id,
                                'user_group_id'=>$result->row()->user_group_id,
                                'user_fullname'=>$result->row()->user_fullname,
                                'user_email'=>$result->row()->user_email,
                                'user_photo'=>$result->row()->photo_path,
								'user_group_id'=>$result->row()->user_group_id,

                                'right_employee_view'=>$result->row()->right_employee_view,
                                'right_employee_create'=>$result->row()->right_employee_create,
                                'right_employee_email'=>$result->row()->right_employee_email,
                                'right_employee_edit'=>$result->row()->right_employee_edit,
                                'right_employee_delete'=>$result->row()->right_employee_delete,
                                'right_leaveentitlement_view'=>$result->row()->right_leaveentitlement_view,
                                'right_leaveentitlement_create'=>$result->row()->right_leaveentitlement_create,
                                'right_leaveentitlement_edit'=>$result->row()->right_leaveentitlement_edit,
                                'right_leaveentitlement_delete'=>$result->row()->right_leaveentitlement_delete,
                                'right_applyleave_view'=>$result->row()->right_applyleave_view,
                                'right_applyleave_create'=>$result->row()->right_applyleave_create,

                                'right_rates_view'=>$result->row()->right_rates_view,
                                'right_rates_create'=>$result->row()->right_rates_create,
                                'right_rates_edit'=>$result->row()->right_rates_edit,
                                'right_rates_delete'=>$result->row()->right_rates_delete,

                                'right_memorandum_view'=>$result->row()->right_memorandum_view,
                                'right_memorandum_create'=>$result->row()->right_memorandum_create,
                                'right_memorandum_edit'=>$result->row()->right_memorandum_edit,
                                'right_memorandum_delete'=>$result->row()->right_memorandum_delete,

                                'right_seminar_view'=>$result->row()->right_seminar_view,
                                'right_seminar_create'=>$result->row()->right_seminar_create,
                                'right_seminar_edit'=>$result->row()->right_seminar_edit,
                                'right_seminar_delete'=>$result->row()->right_seminar_delete,

                                'right_commendation_view'=>$result->row()->right_commendation_view,
                                'right_commendation_create'=>$result->row()->right_commendation_create,
                                'right_commendation_edit'=>$result->row()->right_commendation_edit,
                                'right_commendation_delete'=>$result->row()->right_commendation_delete,

                                'right_leavemgmt_view'=>$result->row()->right_leavemgmt_view,
                                'right_leavetype_view'=>$result->row()->right_leavetype_view,
                                'right_leavetype_create'=>$result->row()->right_leavetype_create,
                                'right_leavetype_edit'=>$result->row()->right_leavetype_edit,
                                'right_leavetype_delete'=>$result->row()->right_leavetype_delete,

                                'right_yearsetup_view'=>$result->row()->right_yearsetup_view,
                                'right_yearsetup_create'=>$result->row()->right_yearsetup_create,

                                'right_empreference_view'=>$result->row()->right_empreference_view,
                                'right_paymenttype_view'=>$result->row()->right_paymenttype_view,
                                'right_paymenttype_create'=>$result->row()->right_paymenttype_create,
                                'right_paymenttype_edit'=>$result->row()->right_paymenttype_edit,
                                'right_paymenttype_delete'=>$result->row()->right_paymenttype_delete,

                                'right_department_view'=>$result->row()->right_department_view,
                                'right_department_create'=>$result->row()->right_department_create,
                                'right_department_edit'=>$result->row()->right_department_edit,
                                'right_department_delete'=>$result->row()->right_department_delete,

                                'right_position_view'=>$result->row()->right_position_view,
                                'right_position_create'=>$result->row()->right_position_create,
                                'right_position_edit'=>$result->row()->right_position_edit,
                                'right_position_delete'=>$result->row()->right_position_delete,

                                'right_branch_view'=>$result->row()->right_branch_view,
                                'right_branch_create'=>$result->row()->right_branch_create,
                                'right_branch_edit'=>$result->row()->right_branch_edit,
                                'right_branch_delete'=>$result->row()->right_branch_delete,

                                'right_group_view'=>$result->row()->right_group_view,
                                'right_group_create'=>$result->row()->right_group_create,
                                'right_group_edit'=>$result->row()->right_group_edit,
                                'right_group_delete'=>$result->row()->right_group_delete,

                                'right_section_view'=>$result->row()->right_section_view,
                                'right_section_create'=>$result->row()->right_section_create,
                                'right_section_edit'=>$result->row()->right_section_edit,
                                'right_section_delete'=>$result->row()->right_section_delete,

                                'right_religion_view'=>$result->row()->right_religion_view,
                                'right_religion_create'=>$result->row()->right_religion_create,
                                'right_religion_edit'=>$result->row()->right_religion_edit,
                                'right_religion_delete'=>$result->row()->right_religion_delete,

                                'right_course_view'=>$result->row()->right_course_view,
                                'right_course_create'=>$result->row()->right_course_create,
                                'right_course_edit'=>$result->row()->right_course_edit,
                                'right_course_delete'=>$result->row()->right_course_delete,

                                'right_relationship_view'=>$result->row()->right_relationship_view,
                                'right_relationship_create'=>$result->row()->right_relationship_create,
                                'right_relationship_edit'=>$result->row()->right_relationship_edit,
                                'right_relationship_delete'=>$result->row()->right_relationship_delete,

                                'right_docreference_view'=>$result->row()->right_docreference_view,
                                'right_certificate_view'=>$result->row()->right_certificate_view,
                                'right_certificate_create'=>$result->row()->right_certificate_create,
                                'right_certificate_edit'=>$result->row()->right_certificate_edit,
                                'right_certificate_delete'=>$result->row()->right_certificate_delete,

                                'right_actiontaken_view'=>$result->row()->right_actiontaken_view,
                                'right_actiontaken_create'=>$result->row()->right_actiontaken_create,
                                'right_actiontaken_edit'=>$result->row()->right_actiontaken_edit,
                                'right_actiontaken_delete'=>$result->row()->right_actiontaken_delete,

                                'right_disciplinary_view'=>$result->row()->right_disciplinary_view,
                                'right_disciplinary_create'=>$result->row()->right_disciplinary_create,
                                'right_disciplinary_edit'=>$result->row()->right_disciplinary_edit,
                                'right_disciplinary_delete'=>$result->row()->right_disciplinary_delete,

                                'right_compensation_view'=>$result->row()->right_compensation_view,
                                'right_compensation_create'=>$result->row()->right_compensation_create,
                                'right_compensation_edit'=>$result->row()->right_compensation_edit,
                                'right_compensation_delete'=>$result->row()->right_compensation_delete,

                                'right_contribution_view'=>$result->row()->right_contribution_view,
                                'right_sss_view'=>$result->row()->right_sss_view,
                                'right_sss_create'=>$result->row()->right_sss_create,
                                'right_sss_edit'=>$result->row()->right_sss_edit,
                                'right_sss_delete'=>$result->row()->right_sss_delete,

                                'right_philhealth_view'=>$result->row()->right_philhealth_view,
                                'right_philhealth_create'=>$result->row()->right_philhealth_create,
                                'right_philhealth_edit'=>$result->row()->right_philhealth_edit,
                                'right_philhealth_delete'=>$result->row()->right_philhealth_delete,

                                'right_personnel_view'=>$result->row()->right_personnel_view,
                                'right_manpower_view'=>$result->row()->right_manpower_view,
                                'right_employeetenure_view'=>$result->row()->right_employeetenure_view,
                                'right_sssreport_view'=>$result->row()->right_sssreport_view,

                                'right_hrisreports_view'=>$result->row()->right_hrisreports_view,
                                'right_personnel_view'=>$result->row()->right_personnel_view,
                                'right_manpower_view'=>$result->row()->right_manpower_view,
                                'right_employeetenure_view'=>$result->row()->right_employeetenure_view,
                                'right_sssreport_view'=>$result->row()->right_sssreport_view,
                                'right_philhealthreport_view'=>$result->row()->right_philhealthreport_view,
                                'right_pagibigreport_view'=>$result->row()->right_pagibigreport_view,
                                'right_wtaxreport_view'=>$result->row()->right_wtaxreport_view,

                                'right_bir2316_view'=>$result->row()->right_bir2316_view,
                                'right_bir2316_create'=>$result->row()->right_bir2316_create,
                                'right_bir2316_edit'=>$result->row()->right_bir2316_edit,
                                'right_bir2316_delete'=>$result->row()->right_bir2316_delete,

                                'right_payrollparent_view'=>$result->row()->right_payrollparent_view,
                                'right_dtr_view'=>$result->row()->right_dtr_view,
                                'right_dtr_create'=>$result->row()->right_dtr_create,
                                'right_dtr_edit'=>$result->row()->right_dtr_edit,

                                'right_processpayroll_view'=>$result->row()->right_processpayroll_view,
                                'right_processpayroll_process'=>$result->row()->right_processpayroll_process,

                                'right_payslip_view'=>$result->row()->right_payslip_view,
                                'right_loanadjustment_view'=>$result->row()->right_loanadjustment_view,
                                'right_dtrverification_view'=>$result->row()->right_dtrverification_view,
                                'right_payrollhistory_view'=>$result->row()->right_payrollhistory_view,
                                'right_monthlypayroll_view'=>$result->row()->right_monthlypayroll_view,
                                'right_yearlypayroll_view'=>$result->row()->right_yearlypayroll_view,
                                'right_ledger_view'=>$result->row()->right_ledger_view,
                                'right_13thmonthpay_view'=>$result->row()->right_13thmonthpay_view,

                                'right_otherearningsparent_view'=>$result->row()->right_otherearningsparent_view,
                                'right_otherregearnings_view'=>$result->row()->right_otherregearnings_view,
                                'right_otherregearnings_create'=>$result->row()->right_otherregearnings_create,
                                'right_otherregearnings_edit'=>$result->row()->right_otherregearnings_edit,
                                'right_otherregearnings_delete'=>$result->row()->right_otherregearnings_delete,

                                'right_othertempearnings_view'=>$result->row()->right_othertempearnings_view,
                                'right_othertempearnings_create'=>$result->row()->right_othertempearnings_create,
                                'right_othertempearnings_edit'=>$result->row()->right_othertempearnings_edit,
                                'right_othertempearnings_delete'=>$result->row()->right_othertempearnings_delete,

                                'right_deductionsparent_view'=>$result->row()->right_deductionsparent_view,
                                'right_regdeduction_view'=>$result->row()->right_regdeduction_view,
                                'right_regdeduction_create'=>$result->row()->right_regdeduction_create,
                                'right_regdeduction_edit'=>$result->row()->right_regdeduction_edit,
                                'right_regdeduction_delete'=>$result->row()->right_regdeduction_delete,

                                'right_tempdeduction_view'=>$result->row()->right_tempdeduction_view,
                                'right_tempdeduction_create'=>$result->row()->right_tempdeduction_create,
                                'right_tempdeduction_edit'=>$result->row()->right_tempdeduction_edit,
                                'right_tempdeduction_delete'=>$result->row()->right_tempdeduction_delete,

                                'right_payrollreferenceparent_view'=>$result->row()->right_payrollreferenceparent_view,
                                'right_payperiod_view'=>$result->row()->right_payperiod_view,
                                'right_payperiod_create'=>$result->row()->right_payperiod_create,
                                'right_payperiod_edit'=>$result->row()->right_payperiod_edit,
                                'right_payperiod_delete'=>$result->row()->right_payperiod_delete,

                                'right_earningsetup_view'=>$result->row()->right_earningsetup_view,
                                'right_earningsetup_create'=>$result->row()->right_earningsetup_create,
                                'right_earningsetup_edit'=>$result->row()->right_earningsetup_edit,
                                'right_earningsetup_delete'=>$result->row()->right_earningsetup_delete,

                                'right_earningtype_view'=>$result->row()->right_earningtype_view,
                                'right_earningtype_create'=>$result->row()->right_earningtype_create,
                                'right_earningtype_edit'=>$result->row()->right_earningtype_edit,
                                'right_earningtype_delete'=>$result->row()->right_earningtype_delete,

                                'right_deductiontype_view'=>$result->row()->right_deductiontype_view,
                                'right_deductiontype_create'=>$result->row()->right_deductiontype_create,
                                'right_deductiontype_edit'=>$result->row()->right_deductiontype_edit,
                                'right_deductiontype_delete'=>$result->row()->right_deductiontype_delete,

                                'right_deductionsetup_view'=>$result->row()->right_deductionsetup_view,
                                'right_deductionsetup_create'=>$result->row()->right_deductionsetup_create,
                                'right_deductionsetup_edit'=>$result->row()->right_deductionsetup_edit,
                                'right_deductionsetup_delete'=>$result->row()->right_deductionsetup_delete,

                                'right_deductionperiod_view'=>$result->row()->right_deductionperiod_view,
                                'right_deductionperiod_edit'=>$result->row()->right_deductionperiod_edit,

                                'right_adminparent_view'=>$result->row()->right_adminparent_view,
                                'right_useracccount_view'=>$result->row()->right_useracccount_view,
                                'right_useracccount_create'=>$result->row()->right_useracccount_create,
                                'right_useracccount_edit'=>$result->row()->right_useracccount_edit,
                                'right_useracccount_delete'=>$result->row()->right_useracccount_delete,

                                'right_usergroup_view'=>$result->row()->right_usergroup_view,
                                'right_usergroup_create'=>$result->row()->right_usergroup_create,
                                'right_usergroup_edit'=>$result->row()->right_usergroup_edit,
                                'right_usergroup_delete'=>$result->row()->right_usergroup_delete,

                                'right_companysetup_view'=>$result->row()->right_companysetup_view,
                                'right_companysetup_edit'=>$result->row()->right_companysetup_edit,

                                'right_reffactorfile_view'=>$result->row()->right_reffactorfile_view,
                                'right_reffactorfile_edit'=>$result->row()->right_reffactorfile_edit,

                                'right_taxtable_view'=>$result->row()->right_taxtable_view,

                                'right_scheduling_view'=>$result->row()->right_scheduling_view,

                                'right_employee_schedule_view'=>$result->row()->right_employee_schedule_view,
                                'right_employee_schedule_create'=>$result->row()->right_employee_schedule_create,
                                'right_employee_schedule_edit'=>$result->row()->right_employee_schedule_edit,
                                'right_employee_schedule_delete'=>$result->row()->right_employee_schedule_delete,

                                'right_schedule_demography_view'=>$result->row()->right_schedule_demography_view,
                                'right_schedule_demography_create'=>$result->row()->right_schedule_demography_create,
                                'right_schedule_demography_edit'=>$result->row()->right_schedule_demography_edit,
                                'right_schedule_demography_delete'=>$result->row()->right_schedule_demography_delete,

                                'right_schedule_timeinout'=>$result->row()->right_schedule_timeinout,

                                'right_schedule_paytype_view'=>$result->row()->right_schedule_paytype_view,
                                'right_schedule_paytype_create'=>$result->row()->right_schedule_paytype_create,
                                'right_schedule_paytype_edit'=>$result->row()->right_schedule_paytype_edit,
                                'right_schedule_paytype_delete'=>$result->row()->right_schedule_paytype_delete,

                                'right_schedule_shifting_view'=>$result->row()->right_schedule_shifting_view,
                                'right_schedule_shifting_create'=>$result->row()->right_schedule_shifting_create,
                                'right_schedule_shifting_edit'=>$result->row()->right_schedule_shifting_edit,
                                'right_schedule_shifting_delete'=>$result->row()->right_schedule_shifting_delete,

                                'right_backup_view'=>$result->row()->right_backup_view,
                                'right_backup_create'=>$result->row()->right_backup_create,
                                'right_backup_restore'=>$result->row()->right_backup_restore,

                                'right_schedstat_view'=>$result->row()->right_schedstat_view,

                                'right_scheddtr_view'=>$result->row()->right_scheddtr_view,
                                'right_scheddtrsummary_view'=>$result->row()->right_scheddtrsummary_view,
                                'right_scheddtrdetailed_view'=>$result->row()->right_scheddtrdetailed_view,

                                'right_employee_compensation_view'=>$result->row()->right_employee_compensation_view,
                                'right_employee_deduction_view'=>$result->row()->right_employee_deduction_view,
                                'right_alphalist_view'=>$result->row()->right_alphalist_view,
                                'right_employee_sched_view'=>$result->row()->right_employee_sched_view,
                                'right_schedholidaysetup_view'=>$result->row()->right_schedholidaysetup_view,
                                
                                'right_overtimeentry_view'=>$result->row()->right_overtimeentry_view,
                                'right_overtimeentry_edit'=>$result->row()->right_overtimeentry_edit,
                                'right_employeeactual_view'=>$result->row()->right_employeeactual_view,
                                'right_payrollreports_view'=>$result->row()->right_payrollreports_view,
                                'right_employeequicksetup_view'=>$result->row()->right_employeequicksetup_view,
                                'right_birthdaycelebrant_view'=>$result->row()->right_birthdaycelebrant_view,
                                'right_plantilla_view'=>$result->row()->right_plantilla_view,
                                'right_201records_view'=>$result->row()->right_201records_view,
                                'right_override_time_view'=>$result->row()->right_override_time_view,
                                'right_override_time_authorization'=>$result->row()->right_override_time_authorization,

                                'right_leaverequest_view'=>$result->row()->right_leaverequest_view,
                                'right_leaverequest_approve'=>$result->row()->right_leaverequest_approve,
                                'right_leaverequest_decline'=>$result->row()->right_leaverequest_decline,

                                'right_announcement_view'=>$result->row()->right_announcement_view,
                                'right_announcement_create'=>$result->row()->right_announcement_create,
                                'right_announcement_edit'=>$result->row()->right_announcement_edit,
                                'right_announcement_delete'=>$result->row()->right_announcement_delete,

                                'right_duration_view'=>$result->row()->right_duration_view,
                                'right_duration_create'=>$result->row()->right_duration_create,
                                'right_duration_edit'=>$result->row()->right_duration_edit,
                                'right_duration_delete'=>$result->row()->right_duration_delete,
                                
                                'right_expiringpersonnel_view'=>$result->row()->right_expiringpersonnel_view,
                                'right_employee_active'=>$result->row()->right_employee_active,
                                
                                'right_payroll_register_view'=>$result->row()->right_payroll_register_view,
                                'right_payroll_register_waccount_view'=>$result->row()->right_payroll_register_waccount_view,
                                'right_payroll_register_cash_view'=>$result->row()->right_payroll_register_cash_view,
                                
                                'right_employeebreakreport_view'=>$result->row()->right_employeebreakreport_view,

                                'right_emp_resignation_view'=>$result->row()->right_emp_resignation_view,
                                'right_emp_resignation_create'=>$result->row()->right_emp_resignation_create,
                                'right_emp_resignation_edit'=>$result->row()->right_emp_resignation_edit,
                                'right_emp_resignation_delete'=>$result->row()->right_emp_resignation_delete,

                                'right_attrition_view'=>$result->row()->right_attrition_view,

                            )
                        );
                        
                        $response['title'] = 'Success';
                        $response['stat']='success';
                        $response['msg']='User successfully authenticated.';

                        echo json_encode($response);

                    }else{ //not valid
                        
                        $response['title'] = 'Cannot authenticate user!';
                        $response['stat']='error';
                        $response['msg']='Invalid username or password.';
                        echo json_encode($response);

                    }

                    break;


                case 'validatevoid' :
                    $uname=$this->input->post('uname');
                    $pword=$this->input->post('pword');

                    $users=$this->Users_model;
                    $result=$users->authenticate_user($uname,$pword);

                    if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data


                        $response['stat']='success';
                        $response['msg']='Successfully authenticated.';

                        echo json_encode($response);

                    }else{ //not valid

                        $response['stat']='error';
                        $response['msg']='Invalid username or password.';
                        echo json_encode($response);

                    }

                    break;
                //****************************************************************************
                case 'logout' :
                    $m_users=$this->Users_model;
                    $user_id = $this->session->user_id;
                    $m_users->session_status = 0; //0 is equivalent to inactive or logged out
                    $m_users->modify($user_id);
                    $this->end_session();
                //****************************************************************************


                break;

                default:


        }
    }
}
