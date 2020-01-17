<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeQuickSetup extends CORE_Controller
{

    function __construct() {
        parent::__construct('');

        $this->validate_session();
        if($this->session->userdata('right_employeequicksetup_view') == 0 || $this->session->userdata('right_employeequicksetup_view') == null) {
            redirect('../Dashboard');
        }
        $this->load->library('excel');
        $this->load->model('Employee_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefPayment_model');
        $this->load->model('RefTaxCode_model');
        $this->load->model('RefGroup_model');  
        $this->load->model('RatesDuties_model');        
        $this->load->model('GeneralSettings_model');
        $this->load->model('Employee_account_model');

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
        $data['title'] = 'Employee Quick Setup';

        $data['ref_emptype']=$this->Ref_Emptype_model->get_list(array('ref_employment_type.is_deleted'=>FALSE));
        $data['ref_department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['ref_branch']=$this->RefBranch_model->get_list(array('ref_branch.is_deleted'=>FALSE));
        $data['ref_payment']=$this->RefPayment_model->get_list(array('ref_payment_type.is_deleted'=>FALSE));
        $data['ref_group']=$this->RefGroup_model->get_list(array('refgroup.is_deleted'=>FALSE));
        $data['tax_codes']=$this->RefTaxCode_model->gettaxcode();

        $this->load->view('employee_quicksetup_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
    
            case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_employee = $this->Employee_model; 
                $m_general = $this->GeneralSettings_model;
                $m_ratesandduties = $this->RatesDuties_model;
                $m_eaccount = $this->Employee_account_model;
                $defaultimagepath = "assets/img/anonymous-icon.png";

                //BACKEND FORM VALIDATION AND SECURITY HELPER
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->load->helper(array('form', 'url'));

                $this->form_validation->set_rules('emp_fname', 'Firstname', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_lname', 'Lastname', 'strip_tags|trim|xss_clean|required');
                // $this->form_validation->set_rules('emp_mname', 'Middlename', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_email', 'Email', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_dept', 'Department', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_pay_type', 'Tax Pay Type', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_hrs_per_day', 'Hrs Per Day', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('emp_reg_rates', 'Regular Rates', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('employment_date', 'Employment Date', 'strip_tags|trim|xss_clean|required');

                if ($this->form_validation->run() == TRUE)
                {

                // ## Insert Employee Information    
                $m_employee->first_name = $this->input->post('emp_fname', TRUE);
                $m_employee->middle_name = $this->input->post('emp_mname', TRUE);
                $m_employee->last_name = $this->input->post('emp_lname', TRUE);
                $m_employee->email_address = $this->input->post('emp_email', TRUE);
                $m_employee->tax_pay_type = $this->input->post('emp_pay_type', TRUE);
                $m_employee->employment_date = date("Y-m-d", strtotime($this->input->post('employment_date', TRUE)));
                $m_employee->image_name = $defaultimagepath;

                // ## Generate Pin Number
                $pin_number = mt_rand(1000,9999);
                $check_pin=$this->Employee_model->check_pin_number($pin_number);

                if (count($check_pin) == 0){
                    $m_employee->pin_number = $pin_number;
                }

                $m_employee->date_created = date("Y-m-d");
                $m_employee->created_by = $this->session->user_id;
                $m_employee->save();

                $employee_id = $m_employee->last_insert_id();
                
                $ecode = mt_rand(10000,99999);
                $randomdigits = mt_rand(1000, 9999);
                $password = 'prime_'.$ecode;

                $m_employee->ecode = $ecode;
                $m_employee->modify($employee_id);

                $m_ratesandduties->employee_id = $employee_id;

                $tax_pay_type = $this->input->post('emp_pay_type', TRUE);
                $monthly_based_salary = $this->input->post('monthly_based_salary', TRUE);

                $m_ratesandduties->ref_employment_type_id = $this->input->post('emp_type', TRUE);
                $m_ratesandduties->ref_payment_type_id = $this->input->post('emp_pay_type', TRUE);
                $m_ratesandduties->ref_department_id = $this->input->post('emp_dept', TRUE);
                $m_ratesandduties->ref_branch_id = $this->input->post('emp_branch', TRUE);
                $m_ratesandduties->group_id = $this->input->post('emp_group', TRUE);
                $m_ratesandduties->active_rates_duties = 1;
                $m_ratesandduties->date_start = date("Y-m-d");
                $emp_hrs_per_day = $this->input->post('emp_hrs_per_day', TRUE);
                $emp_reg_rates = $this->get_numeric_value($this->input->post('emp_reg_rates', TRUE));
                $emp_cola_per_hour_temp = 0;
                $emp_per_day_pay_temp = $this->input->post('emp_per_day_pay', TRUE);
                $emp_per_hour_pay_temp = $this->input->post('emp_per_hour_pay', TRUE);

                if ($tax_pay_type == 1){  // Semi Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($emp_reg_rates * 2);
                }else if ($tax_pay_type == 2){ // Monthly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($emp_reg_rates);
                }else if ($tax_pay_type == 3){ // Daily
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else if ($tax_pay_type == 4){ // Weekly
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }else{ // Semi Monthly (No Sat.)
                    $m_ratesandduties->monthly_based_salary = $this->get_numeric_value($monthly_based_salary);
                }

                $m_ratesandduties->hour_per_day=$this->get_numeric_value($emp_hrs_per_day);
                $m_ratesandduties->salary_reg_rates=$this->get_numeric_value($emp_reg_rates);
                $m_ratesandduties->cola_per_hour=$this->get_numeric_value($emp_cola_per_hour_temp);
                $m_ratesandduties->per_day_pay=$this->get_numeric_value($emp_per_day_pay_temp);
                $m_ratesandduties->per_hour_pay=$this->get_numeric_value($emp_per_hour_pay_temp);

                $m_ratesandduties->date_created = date("Y-m-d H:i:s");
                $m_ratesandduties->created_by = $this->session->user_id;

                $m_ratesandduties->save();

                $emp_rates_duties_id = $m_ratesandduties->last_insert_id();

                $m_employee->emp_rates_duties_id = $emp_rates_duties_id;
                $m_employee->modify($employee_id);

                ## Create Employee Account
                $m_eaccount->employee_id = $employee_id;
                $m_eaccount->employee_ecode = $ecode;
                $m_eaccount->employee_pwd = sha1($password);
                $m_eaccount->save();

                ## Send Password Generated 
                $email = $this->input->post('emp_email', TRUE);
                $subject = 'Employee Information';

                $fname = $this->input->post('emp_fname', TRUE);
                $mname = $this->input->post('emp_mname', TRUE);
                $lname = $this->input->post('emp_lname', TRUE);
                $fullname = $fname.' '.$mname.' '.$lname;

                $email_settings = $m_general->get_list();
                $company_email = $email_settings[0]->email_address;
                $email_password = $email_settings[0]->email_password;
                $company_name = $email_settings[0]->company_name;
                $year = date('Y');
                $date = date('m-d-Y');

                if ($email != ""){
                    $message = '<div style="width:85%;background:#F5F5F5;padding: 50px;font-family: arial;">
                                    <div style="border: 1px solid #CFD8DC;">
                                        <div style="padding: 20px;background: #fff; font-weight: bold;font-size: 13pt;border-top: 5px solid #263238;">
                                            '.$company_name.'
                                        </div>
                                        <div style="background: #263238; color: #fff;padding: 10px;">
                                            '.$subject.'
                                        </div>
                                        <div style="background: #fff; padding: 15px;">
                                            <p>Greetings '.$fullname.', <span style="text-align: right;float:right;">'.$date.'</span> </p>
                                            <p style="text-align: justify;">This email contains your generated Employee Code and Pin Number. Use these codes for the attendance system and Employee Portal. You are required to scan your Employee ID and enter your pin number. 
                                            <p>
                                            <strong>Account Details</strong>
                                                <table style="border: 1px solid gray;font-size: 10pt;">
                                                <tr>
                                                    <td>Ecode:</td>
                                                    <td><strong>'.$ecode.'</strong></td>
                                                    <td>| Pin #:</td>
                                                    <td><strong>'.$pin_number.'</strong></td>
                                                </tr>
                                            </table>
                                            <br/>
                                            In your first Login, you are required to change your password for security purposes, please contact your Human Resource Admin when you encounter an error. Thank you. <br>

                                            Use the password below. <br />
                                            Password : '.$password.'<br />
                                            '.$this->config->item("base_urlemployee").'

                                        </div>
                                        <div style="background: #F5F5F5;">
                                            <center>
                                                <p style="font-size: 8pt;">Copyright &copy; '.$year.' '.$company_name.'</p>
                                            </center>
                                        </div>
                                    </div>
                                </div>';
                    
                                $m_employee->send_mail($email,$message,$subject,$company_email,$email_password,$company_name);
                }

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Employee information successfully created.';
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                }

                echo json_encode($response);

                break;

        }
    }
}
