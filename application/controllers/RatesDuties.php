<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatesDuties extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');



    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['title'] = 'RatesDuties';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RatesDuties_model->get_list(
                    array('emp_rates_duties.is_deleted'=>FALSE),
                    'emp_rates_duties.*,ref_employment_type.employment_type,
                    ref_position.position,ref_department.department,ref_section.section,ref_branch.branch,ref_payment_type.payment_type,refgroup.group_desc',
                        array(
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                    );
                echo json_encode($response);
                break;

            case 'testlist':
                $employee_id = $this->input->post('employee_id', TRUE);

                $response['data']=$this->RatesDuties_model->get_list(
                    array('emp_rates_duties.employee_id'=>$employee_id,'emp_rates_duties.is_deleted'=>FALSE),
                    'emp_rates_duties.*,
                    DATE_FORMAT(date_start, "%m/%d/%Y") as date_start,
                    DATE_FORMAT(date_end, "%m/%d/%Y") as date_end,
                    ref_employment_type.employment_type,
                    ref_position.position,ref_department.department,ref_section.section,ref_branch.branch,ref_payment_type.payment_type,refgroup.group_desc',
                        array(
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                    );

                echo json_encode($response);
                break;

           /* case 'getdept':
                $emp_rates_duties_id = $this->input->post('emp_rates_duties_id', TRUE);

                $response['data']=$this->RatesDuties_model->get_list(
                    array('emp_rates_duties.is_deleted'=>FALSE,'emp_rates_duties.emp_rates_duties_id'=>$emp_rates_duties_id),
                    'ref_department.department',
                        array(
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            )
                    );

                echo json_encode($response);
                break;
                */

            case 'create':
                $m_ratesandduties = $this->RatesDuties_model;
                $m_employee = $this->Employee_model;

                $date_starttemp = $this->input->post('date_start', TRUE);
                $date_startendtemp = $this->input->post('date_end', TRUE);


				$date_start = date("Y-m-d", strtotime($date_starttemp));
                $date_end = date("Y-m-d", strtotime($date_startendtemp));

                $employee_id = $this->input->post('employee_id', TRUE);
                $ref_payment_type_id = $this->input->post('ref_payment_type_id', TRUE);
                $monthly_based_salary = $this->get_numeric_value($this->input->post('monthly_based_salary', TRUE));

                $m_ratesandduties->employee_id = $this->input->post('employee_id', TRUE);
                $m_ratesandduties->ref_employment_type_id = $this->input->post('ref_employment_type_id', TRUE);
                $m_ratesandduties->ref_payment_type_id = $this->input->post('ref_payment_type_id', TRUE);
                $m_ratesandduties->ref_department_id = $this->input->post('ref_department_id', TRUE);
                $m_ratesandduties->ref_position_id = $this->input->post('ref_position_id', TRUE);
                $m_ratesandduties->ref_branch_id = $this->input->post('ref_branch_id', TRUE);
                $m_ratesandduties->ref_section_id = $this->input->post('ref_section_id', TRUE);
                $m_ratesandduties->group_id = $this->input->post('group_id', TRUE);
                
                if ($date_starttemp == null || ""){
                    $m_ratesandduties->date_start = "";
                }else{
                    $m_ratesandduties->date_start = $date_start;
                }

                if ($date_startendtemp == null || ""){
                    $m_ratesandduties->date_end = "";
                }
                else{
                    $m_ratesandduties->date_end = $date_end;
                }

                $m_ratesandduties->duration_id = $this->input->post('duration_id', TRUE);

                $hour_per_daytemp = $this->input->post('hour_per_day', TRUE);
                $salary_reg_rates_temp = $this->get_numeric_value($this->input->post('salary_reg_rates', TRUE));
                $semi_monthly = $this->get_numeric_value($salary_reg_rates_temp) * 2;

                if ($ref_payment_type_id == 1){  // Semi Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($semi_monthly);
                }else if ($ref_payment_type_id == 2){ // Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($salary_reg_rates_temp);
                }else if ($ref_payment_type_id == 3){ // Daily
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else if ($ref_payment_type_id == 4){ // Weekly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else{ // Semi Monthly (No Sat.)
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }

                $cola_per_hour_temp = $this->input->post('cola_per_hour', TRUE);
                $per_day_pay_temp = $this->input->post('per_day_pay', TRUE);
                $per_hour_pay_temp = $this->input->post('per_hour_pay', TRUE);
                $sss_phic_salary_credit = $this->input->post('sss_phic_salary_credit', TRUE);
                $philhealth_salary_credit = $this->input->post('philhealth_salary_credit', TRUE);
                $pagibig_salary_credit = $this->input->post('pagibig_salary_credit', TRUE);
                $tax_shield_temp = $this->input->post('tax_shield', TRUE);
                $sunday_premium = $this->input->post('sunday_premium', TRUE);

                $m_ratesandduties->hour_per_day=$this->get_numeric_value($hour_per_daytemp);
                $m_ratesandduties->salary_reg_rates=$this->get_numeric_value($salary_reg_rates_temp);
                $m_ratesandduties->cola_per_hour=$this->get_numeric_value($cola_per_hour_temp);
                $m_ratesandduties->per_day_pay=$this->get_numeric_value($per_day_pay_temp);
                $m_ratesandduties->per_hour_pay=$this->get_numeric_value($per_hour_pay_temp);
                $m_ratesandduties->sss_phic_salary_credit=$this->get_numeric_value($sss_phic_salary_credit);
                $m_ratesandduties->philhealth_salary_credit=$this->get_numeric_value($philhealth_salary_credit);
                $m_ratesandduties->pagibig_salary_credit=$this->get_numeric_value($pagibig_salary_credit);
                $m_ratesandduties->tax_shield=$this->get_numeric_value($tax_shield_temp);
                $m_ratesandduties->remarks = $this->input->post('remarks', TRUE);
                $m_ratesandduties->date_created = date("Y-m-d H:i:s");
                $m_ratesandduties->is_sunday_premium = $sunday_premium;
                $m_ratesandduties->created_by = $this->session->user_id;
                $m_ratesandduties->save();

                $emp_rates_duties_id = $m_ratesandduties->last_insert_id();
                $m_employee->emp_rates_duties_id = $emp_rates_duties_id;
                $m_employee->modify($employee_id);


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Rates and Duties successfully created.';

                $response['row_added'] = $this->RatesDuties_model->get_list(
                   $emp_rates_duties_id,
                    'emp_rates_duties.*,
                    DATE_FORMAT(date_start, "%m/%d/%Y") as date_start,
                    DATE_FORMAT(date_end, "%m/%d/%Y") as date_end,
                    ref_employment_type.employment_type,
                    ref_position.position,ref_department.department,ref_section.section,ref_branch.branch,ref_payment_type.payment_type,refgroup.group_desc',
                        array(
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )

                    );
/*
                        //For Employeee list dropdown update details
                $response['row_update'] = $this->Employee_model->get_list(
                   array('employee_list.employee_id='=>$employee_id,'employee_list.is_deleted'=>FALSE),
                    'employee_list.*,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                    );
                    */
                echo json_encode($response);

                break;

            case 'delete':
                $m_ratesandduties=$this->RatesDuties_model;
                $m_employee=$this->Employee_model;

                $emp_rates_duties_id=$this->input->post('emp_rates_duties_id',TRUE);

                $m_ratesandduties->is_deleted=1;
                $m_ratesandduties->date_deleted = date("Y-m-d H:i:s");
                $m_ratesandduties->deleted_by = $this->session->user_id;
                if($m_ratesandduties->modify($emp_rates_duties_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Rates and Duties successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_ratesandduties = $this->RatesDuties_model;
                $m_employee = $this->Employee_model;
                $employee_id = $this->input->post('employee_id', TRUE);
                $date_starttemp = $this->input->post('date_start', TRUE);
                $date_startendtemp = $this->input->post('date_end', TRUE);
                $date_start = date("Y-m-d", strtotime($date_starttemp));
                $date_end = date("Y-m-d", strtotime($date_startendtemp));
                $ref_payment_type_id = $this->input->post('ref_payment_type_id', TRUE);
                $emp_rates_duties_id = $this->input->post('emp_rates_duties_id', TRUE);
                $m_ratesandduties->ref_employment_type_id = $this->input->post('ref_employment_type_id', TRUE);
                $m_ratesandduties->ref_payment_type_id = $this->input->post('ref_payment_type_id', TRUE);
                $m_ratesandduties->ref_department_id = $this->input->post('ref_department_id', TRUE);
                $m_ratesandduties->ref_position_id = $this->input->post('ref_position_id', TRUE);
                $m_ratesandduties->ref_branch_id = $this->input->post('ref_branch_id', TRUE);
                $m_ratesandduties->ref_section_id = $this->input->post('ref_section_id', TRUE);
                $m_ratesandduties->group_id = $this->input->post('group_id', TRUE);
                
                if ($date_starttemp == null || ""){
                    $m_ratesandduties->date_start = "";
                }else{
                    $m_ratesandduties->date_start = $date_start;
                }

                if ($date_startendtemp == null || ""){
                    $m_ratesandduties->date_end = "";
                }
                else{
                    $m_ratesandduties->date_end = $date_end;
                }

                $m_ratesandduties->duration_id = $this->input->post('duration_id', TRUE);

                $hour_per_daytemp = $this->input->post('hour_per_day', TRUE);
                $salary_reg_rates_temp = $this->get_numeric_value($this->input->post('salary_reg_rates', TRUE));
                $ref_payment_type_id = $this->input->post('ref_payment_type_id', TRUE);
                $monthly_based_salary = $this->get_numeric_value($this->input->post('monthly_based_salary', TRUE));
                $semi_monthly = $this->get_numeric_value($salary_reg_rates_temp) * 2;

                if ($ref_payment_type_id == 1){  // Semi Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($semi_monthly);
                }else if ($ref_payment_type_id == 2){ // Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($salary_reg_rates_temp);
                }else if ($ref_payment_type_id == 3){ // Daily
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else if ($ref_payment_type_id == 4){ // Weekly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else{ // Semi Monthly (No Sat.)
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }

                $cola_per_hour_temp = $this->input->post('cola_per_hour', TRUE);
                $per_day_pay_temp = $this->input->post('per_day_pay', TRUE);
                $per_hour_pay_temp = $this->input->post('per_hour_pay', TRUE);
                $sss_phic_salary_credit = $this->input->post('sss_phic_salary_credit', TRUE);
                $philhealth_salary_credit = $this->input->post('philhealth_salary_credit', TRUE);
                $pagibig_salary_credit = $this->input->post('pagibig_salary_credit', TRUE);
                $tax_shield_temp = $this->input->post('tax_shield', TRUE);
                $sunday_premium = $this->input->post('sunday_premium', TRUE);

                $m_ratesandduties->hour_per_day=$this->get_numeric_value($hour_per_daytemp);
                $m_ratesandduties->salary_reg_rates=$this->get_numeric_value($salary_reg_rates_temp);
                $m_ratesandduties->cola_per_hour=$this->get_numeric_value($cola_per_hour_temp);
                $m_ratesandduties->per_day_pay=$this->get_numeric_value($per_day_pay_temp);
                $m_ratesandduties->per_hour_pay=$this->get_numeric_value($per_hour_pay_temp);
                $m_ratesandduties->sss_phic_salary_credit=$this->get_numeric_value($sss_phic_salary_credit);
                $m_ratesandduties->philhealth_salary_credit=$this->get_numeric_value($philhealth_salary_credit);
                $m_ratesandduties->pagibig_salary_credit=$this->get_numeric_value($pagibig_salary_credit);
                $m_ratesandduties->tax_shield=$this->get_numeric_value($tax_shield_temp);
                $m_ratesandduties->remarks = $this->input->post('remarks', TRUE);
                $m_ratesandduties->date_modified = date("Y-m-d H:i:s");
                $m_ratesandduties->modified_by = $this->session->user_id;
                $m_ratesandduties->is_sunday_premium = $sunday_premium;
                $m_ratesandduties->modify($emp_rates_duties_id);

                //$m_employee->emp_rates_duties_id= $this->input->post('emp_rates_duties_id', TRUE);
                //$m_employee->modify($employee_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Rates and Duties successfully Updated.';

                $response['row_updated']=$this->RatesDuties_model->get_list(
                    $emp_rates_duties_id,
                    'emp_rates_duties.*,
                    DATE_FORMAT(date_start, "%m/%d/%Y") as date_start,
                    DATE_FORMAT(date_end, "%m/%d/%Y") as date_end,
                    ref_employment_type.employment_type,
                    ref_position.position,ref_department.department,ref_section.section,ref_branch.branch,ref_payment_type.payment_type,refgroup.group_desc',
                        array(
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                        );

             /*   $response['row_update'] = $this->Employee_model->get_list(
                   array('employee_list.employee_id='=>$employee_id,'employee_list.is_deleted'=>FALSE),
                    'employee_list.*,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                    );*/
                echo json_encode($response);

                break;

            case 'activaterate':
                $m_ratesandduties=$this->RatesDuties_model;
                $m_employee=$this->Employee_model;

                $emp_rates_duties_id=$this->input->post('emp_rates_duties_id',TRUE);
                $employee_id=$this->input->post('employee_id',TRUE);

                $query = $this->db->query('UPDATE emp_rates_duties SET active_rates_duties = 0 WHERE employee_id='.$employee_id);
                $m_ratesandduties->active_rates_duties = $this->input->post('active_rates_duties', TRUE);
                $m_ratesandduties->modify($emp_rates_duties_id);
                $m_employee->emp_rates_duties_id= $this->input->post('emp_rates_duties_id', TRUE);
                $m_employee->modify($employee_id);

                $response['row_update'] = $this->Employee_model->get_list(
                   array('employee_list.employee_id='=>$employee_id,'employee_list.is_deleted'=>FALSE),
                    'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )
                    );
                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Rate and Duties Successfully Activated.';
                //$response['row_updated']=$this->RefYearSetup_model->get_list($emp_leave_year_id);
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
        }
    }











}
