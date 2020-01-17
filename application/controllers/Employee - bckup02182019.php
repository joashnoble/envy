<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CORE_Controller
{

    function __construct() {
        parent::__construct('');

        $this->validate_session();
        if($this->session->userdata('right_employee_view') == 0 || $this->session->userdata('right_employee_view') == null) {
            redirect('../Dashboard');
        }
        else{

        }
        $this->load->library('excel');
        $this->load->model('Employee_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('RefSection_model');
        $this->load->model('RefReligion_model');
        $this->load->model('RefCourse_model');
        $this->load->model('RefRelationship_model');
        $this->load->model('RefPayment_model');
        $this->load->model('RefLeave_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('RefDiscipline_model');
        $this->load->model('RefAction_model');
        $this->load->model('RefCertificate_model');
        $this->load->model('RefTaxCode_model');
        $this->load->model('RefGroup_model');  
        $this->load->model('Users_model');
        $this->load->model('GeneralSettings_model');
        $this->load->model('Employee_account_model');
        $this->load->model('RefDuration_model');
        $this->load->model('RefWorkExperience_model');
        $this->load->model('Emp_confidential_status_model');
    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforemployee', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'Employee';
        $data['ref_emptype']=$this->Ref_Emptype_model->get_list(array('ref_employment_type.is_deleted'=>FALSE));
        $data['ref_department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['ref_position']=$this->RefPosition_model->get_list(array('ref_position.is_deleted'=>FALSE));
        $data['ref_branch']=$this->RefBranch_model->get_list(array('ref_branch.is_deleted'=>FALSE));
        $data['ref_section']=$this->RefSection_model->get_list(array('ref_section.is_deleted'=>FALSE));
        $data['ref_religion']=$this->RefReligion_model->get_list(array('ref_religion.is_deleted'=>FALSE));
        $data['ref_course_degree']=$this->RefCourse_model->get_list(array('ref_course_degree.is_deleted'=>FALSE));
        $data['ref_relationship']=$this->RefRelationship_model->get_list(array('ref_relationship.is_deleted'=>FALSE));
        $data['ref_payment']=$this->RefPayment_model->get_list(array('ref_payment_type.is_deleted'=>FALSE));
        $data['ref_leave_type']=$this->RefLeave_model->get_list(array('ref_leave_type.is_deleted'=>FALSE));
        $data['emp_leave_year']=$this->RefYearSetup_model->get_list(array('emp_leave_year.active_year'=>TRUE));
        $data['ref_disciplinary_action_policy']=$this->RefDiscipline_model->get_list(array('ref_disciplinary_action_policy.is_deleted'=>FALSE));
        $data['ref_action_taken']=$this->RefAction_model->get_list(array('ref_action_taken.is_deleted'=>FALSE));
        $data['ref_certificate']=$this->RefCertificate_model->get_list(array('ref_certificate.is_deleted'=>FALSE));
        $data['ref_group']=$this->RefGroup_model->get_list(array('refgroup.is_deleted'=>FALSE));
        $data['ref_duration']=$this->RefDuration_model->get_list(array('ref_duration.is_deleted'=>FALSE));
        $data['tax_codes']=$this->RefTaxCode_model->gettaxcode();//get the tax code



        $this->load->view('employee_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {


            case 'chck_authorization' :
              $pword=$this->input->post('pword');
              $users=$this->Users_model;
              $usrid=$this->session->user_id;

              $result=$users->authenticate_user_pwd($usrid,$pword);

                if($result->num_rows()>0){
                    //valid username and pword
                    $response['stat']='success';
                    $response['title']='Success!';
                    $response['msg']='Successfully authenticated.';
                    echo json_encode($response);

                }else{ 
                    //not valid username and pword
                    $response['stat']='error';
                    $response['msg']='You are not Authorized.';
                    $response['title']='Error authentication!';
                    echo json_encode($response);
                }

            break;

            case 'chck_authorization_override' :
              $pword=$this->input->post('pword');
              $users=$this->Users_model;
              $result=$users->override_authorization_pwd($pword);

                if($result->num_rows()>0){
                    //valid username and pword
                    $response['stat']='success';
                    $response['title']='Success!';
                    $response['msg']='Successfully authenticated.';
                    echo json_encode($response);

                }else{ 
                    //not valid username and pword
                    $response['stat']='error';
                    $response['msg']='You are not Authorized.';
                    $response['title']='Error authentication!';
                    echo json_encode($response);
                }

            break;

            case 'getExpiringPersonnel':
                $type = $this->input->post('type', TRUE);
                $response['data']=$this->Employee_model->getExpiringPersonnel($type,1,0,0);
                echo json_encode($response);
            break;

            case 'chck_confidential_status':
                $m_confidential_status = $this->Emp_confidential_status_model;
                $m_employee = $this->Employee_model;
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data'] = $this->Emp_confidential_status_model->get_fkid($employee_id);
                echo json_encode($response);
            break;

            case 'confidential_status':
                $m_confidential_status = $this->Emp_confidential_status_model;
                $m_employee = $this->Employee_model;

                $block_active = $this->input->post('block_active', TRUE);
                $employee_id = $this->input->post('employee_id', TRUE);
                $e_date = $this->input->post('confidential_status_date', TRUE);
                $effectivity_date = date("Y-m-d", strtotime($e_date));

                $chck_emp = $this->Emp_confidential_status_model->get_fkid($employee_id);

                if ($block_active == 1){

                    $m_employee->is_blocked = 1;
                    $m_employee->modify($employee_id);
                    
                    $m_confidential_status->employee_id = $this->input->post('employee_id', TRUE);
                    $m_confidential_status->confidential_reason = $this->input->post('confidential_reason', TRUE);
                    $m_confidential_status->block_active = $this->input->post('block_active', TRUE);
                    $m_confidential_status->effectivity_date = $effectivity_date;

                    if (count($chck_emp) > 0){
                        $emp_confidential_status_id = $chck_emp[0]->emp_confidential_status_id;
                        $m_confidential_status->modify($emp_confidential_status_id);
                    }else{
                        $m_confidential_status->save();
                    }

                }else{

                    $m_employee->is_blocked = 0;
                    $m_employee->modify($employee_id);

                    if (count($chck_emp) > 0){
                        $m_confidential_status->delete_via_fk($employee_id);
                    }
                }

                $response['stat']='success';
                $response['title']='Success!';
                $response['msg']='Confidential Status updated.';
                echo json_encode($response);
            break;

            case 'attemptrefresh':
                $m_employee = $this->Employee_model;
                $emp_id=$m_employee->get_list(
                    'employee_list.attempt < 3',
                    'employee_list.employee_id'
                );

                for($i=0;$i<count($emp_id);$i++){
                    $m_employee->attempt = 0;
                    $m_employee->modify($emp_id[$i]->employee_id);
                }
            break;

            case 'activateEmployee':
                $m_employee = $this->Employee_model;
                $employee_id = $this->input->post('employee_id', TRUE);

                $m_employee->attempt = 0;
                $m_employee->is_retired = 0;
                $m_employee->status = "Active";
                $m_employee->modify($employee_id);

                $response['stat']='success';
                $response['msg']='Successfully Activated.';
                $response['title']='Activated!';
                $response['row_updated']=$this->Employee_model->get_list(
                    $employee_id,
                    'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                            array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            ),
                            'full_name ASC'
                            //,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );

                echo json_encode($response);

            break;

            case 'emailEmployee':

                $m_employee = $this->Employee_model;
                $m_general = $this->GeneralSettings_model;

                $employee_id = $this->input->post('employee_id', TRUE);

                ## Get Employee Info
                $emp_info = $m_employee->get_email_info($employee_id);
                $email = $emp_info[0]->email_address;
                $fullname = $emp_info[0]->fullname;
                $ecode = $emp_info[0]->ecode;
                $pin_number = $emp_info[0]->pin_number;

                $subject = 'Employee Information';
                $email_settings = $m_general->get_list();
                $company_email = $email_settings[0]->email_address;
                $email_password = $email_settings[0]->email_password;
                $company_name = $email_settings[0]->company_name;

                $year = date('Y');
                $date = date('m-d-Y');

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
                                        <p style="text-align: justify;">This email contains your generated Employee Code and Pin Number. Use these codes for the attendance system. You are required to scan your Employee ID and enter your pin number. 

                                        <br><br>
                                            <b>Note:</b>
                                            <br/>
                                            If your account has been blocked due to three (3) consecutive attempts to time in / time out using your account, coordinate with your Human Resources Manager.   
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
                                    </div>
                                    <div style="background: #F5F5F5;">
                                        <center>
                                            <p style="font-size: 8pt;">Copyright &copy; '.$year.' '.$company_name.'</p>
                                        </center>
                                    </div>
                                </div>
                            </div>';
                            
                // Set SMTP Configuration
                    $emailConfig = array(
                        'protocol' => 'smtp', 
                        'smtp_host' => 'ssl://smtp.googlemail.com', 
                        'smtp_port' => 465, 
                        'smtp_user' => $company_email, 
                        'smtp_pass' => $email_password, 
                        'mailtype' => 'html', 
                        'charset' => 'iso-8859-1'
                    );

                    // Load CodeIgniter Email library
                    $this->load->library('email', $emailConfig);
                    // Sometimes you have to set the new line character for better result
                    $this->email->set_newline("\r\n");
                    // Set email preferences
                    $this->email->from($company_email, $company_name);
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $this->email->message($message);
                    $this->email->set_mailtype("html");
                    // Ready to send email and check whether the email was successfully sent
                    
                    if (!$this->email->send()) {
                        // Raise error message
                    $response['title']='Try Again!';
                    $response['stat']='error';
                    $response['msg']='Please check the Email Address of your Account or your Internet Connection.';

                    echo json_encode($response);
                    } else {
                        // Show success notification or other things here
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Email Sent successfully.';

                    echo json_encode($response);
                    }

            break;

            case 'listfilter':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->Employee_model->get_list(
                    'employee_list.is_deleted=0 AND employee_list.employee_id='.$employee_id,
                    'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                            array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            )//,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );
                echo json_encode($response);
                break;

            case 'list':
                $active = $this->input->post('active', TRUE);
                $inactive = $this->input->post('inactive', TRUE);
                $where = "";
                    if ($active == 0 AND $inactive == 1){
                        $where = "employee_list.is_deleted = 0 AND employee_list.is_retired = 1 OR employee_list.is_deleted = 0 AND employee_list.status='Inactive'";
                    }
                    if ($active == 0 AND $inactive == 0){
                        $where = array('employee_list.is_deleted'=>FALSE,'employee_list.is_retired'=>-1);
                    }
                    if ($active == 1 AND $inactive == 0){
                        $where = "employee_list.is_deleted = 0 AND employee_list.is_retired = 0 AND employee_list.status='Active'";
                    }
                    if ($active == 1 AND $inactive == 1){
                        $where = array('employee_list.is_deleted'=>FALSE);
                    }

                    $response['data']=$this->Employee_model->get_list(
                        $where,
                        'employee_list.*,CONCAT(employee_list.last_name,", ",employee_list.first_name," ",middle_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                        ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc,ref_clearance_reason.clearance_description, DATE_FORMAT(employee_list.date_end, "%m/%d/%Y") as date_end_clearance',
                        array(
                                array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                                array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                                array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                                array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                                array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                                array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                                array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                                array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                                array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                                array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                                array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                                array('ref_clearance_reason','ref_clearance_reason.clearance_reason_id=employee_list.clearance_reason','left'),
                                ),
                                'employee_list.last_name ASC'
                                //,
                        //null,
                       // null,
                       // true,
                       // '4'
                        );
                    echo json_encode($response);

                break;

            case 'active':
                $response['data']=$this->Employee_model->get_list(
                    array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>1),
                    'employee_list.*,CONCAT(employee_list.first_name," ",middle_name," ",employee_list.last_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                            array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            ),
                            'full_name ASC'
                            //,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );
                echo json_encode($response);
                break;

            case 'getdept':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->Employee_model->get_list(
                    array('employee_list.is_deleted'=>FALSE,'employee_list.employee_id'=>$employee_id,'emp_rates_duties.active_rates_duties'=>1),
                    'ref_department.department',
                    array(
                            array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            )//,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );
                echo json_encode($response);
                break;

            case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_employee = $this->Employee_model;
                $m_general = $this->GeneralSettings_model;
                $m_eaccount = $this->Employee_account_model;
                //BACKEND FORM VALIDATION AND SECURITY HELPER
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->load->helper(array('form', 'url'));
                $this->form_validation->set_rules('id_number', 'ID Number', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('first_name', 'First Name', 'strip_tags|trim|xss_clean|callback_alpha_dash_space|required');
                $this->form_validation->set_rules('last_name', 'Last Name', 'strip_tags|trim|xss_clean|callback_alpha_dash_space|required');
                $this->form_validation->set_rules('employment_date', 'Employment Date', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('sss', 'SSS Number', 'strip_tags|min_length[10]|max_length[10]|trim|xss_clean');
                $this->form_validation->set_rules('phil_health', 'PhilHealth Number', 'strip_tags|min_length[12]|max_length[12]|trim|xss_clean|numeric');
                $this->form_validation->set_rules('pag_ibig', 'Pag-Ibig Number', 'strip_tags|min_length[12]|max_length[12]|trim|xss_clean|numeric');
                $this->form_validation->set_rules('tin', 'TIN Number', 'strip_tags|min_length[9]|max_length[9]|trim|xss_clean|numeric');


                if ($this->form_validation->run() == TRUE)
                {
                    $emp_birthdatetemp = $this->input->post('birthdate', TRUE);
                    $employmentdatetemp = $this->input->post('employment_date', TRUE);
                    /*$emp_regularizationdatetemp = $this->input->post('date_regularization', TRUE);*/
                    $emp_loandatetemp = $this->input->post('loan_date', TRUE);
                    $emp_dateretired = $this->input->post('date_retired', TRUE);

                    $employmentdate = date("Y-m-d", strtotime($employmentdatetemp));
                    $emp_birthdate = date("Y-m-d", strtotime($emp_birthdatetemp));
                    /*$emp_regularizationdate = date("Y-m-d", strtotime($emp_regularizationdatetemp));*/
                    $emp_loandate = date("Y-m-d", strtotime($emp_loandatetemp));
                    $date_retired = date("Y-m-d", strtotime($emp_dateretired));

                    $m_employee->id_number = $this->input->post('id_number', TRUE);
                    $m_employee->first_name = $this->input->post('first_name', TRUE);
                    $m_employee->middle_name = $this->input->post('middle_name', TRUE);
                    $m_employee->last_name = $this->input->post('last_name', TRUE);
                    $m_employee->address_one = $this->input->post('address_one', TRUE);
                    $m_employee->address_two = $this->input->post('address_two', TRUE);
                    $m_employee->email_address = $this->input->post('email_address', TRUE);
                    $m_employee->gender = $this->input->post('gender', TRUE);
                    $m_employee->cell_number = $this->input->post('cell_number', TRUE);

                    if ($emp_birthdatetemp == null || ""){
                        $m_employee->birthdate = "";
                    }else{
                        $m_employee->birthdate = $emp_birthdate;
                    }

                    $m_employee->telphone_number = $this->input->post('telphone_number', TRUE);
                    $m_employee->ref_religion_id = $this->input->post('ref_religion_id', TRUE);
                    $m_employee->blood_type = $this->input->post('blood_type', TRUE);
                    $m_employee->civil_status = $this->input->post('civil_status', TRUE);
                    $m_employee->height = $this->input->post('height', TRUE);
                    $m_employee->weight = $this->input->post('weight', TRUE);

                    if ($employmentdatetemp == null || ""){
                        $m_employee->employment_date = "";
                    }else{
                        $m_employee->employment_date = $employmentdate;
                    }
                    
                /*$m_employee->date_regularization = $emp_regularizationdate;*/
                $m_employee->sss = $this->input->post('sss', TRUE);
                $m_employee->phil_health = $this->input->post('phil_health', TRUE);
                $m_employee->pag_ibig = $this->input->post('pag_ibig', TRUE);
                $m_employee->tin = $this->input->post('tin', TRUE);
                $m_employee->health_id = $this->input->post('health_id', TRUE);
                $m_employee->barangay_id = $this->input->post('barangay_id', TRUE);
                $m_employee->bank_account = $this->input->post('bank_account', TRUE);
                $m_employee->bank_account_isprocess = $this->input->post('bank_account_isprocess', TRUE);
                $m_employee->tax_pay_type = $this->input->post('tax_pay_type', TRUE);
                $m_employee->exmpt_sss = $this->input->post('exmpt_sss', TRUE);
                $m_employee->exmpt_pagibig = $this->input->post('exmpt_pagibig', TRUE);
                $m_employee->exmpt_philhealth = $this->input->post('exmpt_philhealth', TRUE);
                $m_employee->image_name = $this->input->post('image_name', TRUE);
                $m_employee->is_retired = $this->input->post('is_retired', TRUE);

                if ($emp_dateretired == null || ""){
                    $m_employee->date_retired = "";
                }else{
                    $m_employee->date_retired = $date_retired;
                }

                /*$m_employee->loan_date = $emp_loandate;
                $m_employee->loan_amount = $this->input->post('loan_amount', TRUE);*/
                $m_employee->date_created = date("Y-m-d");
                $m_employee->created_by = $this->session->user_id;

                // ## Generate Pin Number
                $pin_number = mt_rand(1000,9999);
                $check_pin=$this->Employee_model->check_pin_number($pin_number);

                if (count($check_pin) == 0){
                    $m_employee->pin_number = $pin_number;
                }

                $m_employee->save();

                $employee_id = $m_employee->last_insert_id();

                $ecode = mt_rand(10000,99999);

                $randomdigits = mt_rand(1000, 9999);

                $password = 'pass'.$employee_id.date("Y").$randomdigits;

                $m_employee->ecode = $ecode;
                $m_employee->modify($employee_id);

                ## Create Employee Account
                $m_eaccount->employee_id = $employee_id;
                $m_eaccount->employee_ecode = $ecode;
                $m_eaccount->employee_pwd = sha1($password);
                $m_eaccount->save();

                ## Send Password Generated 
                $email = $this->input->post('email_address', TRUE);
                $subject = 'Employee Information';
                $email_settings = $m_general->get_list();
                $company_email = $email_settings[0]->email_address;
                $email_password = $email_settings[0]->email_password;
                $company_name = $email_settings[0]->company_name;

                $fname = $this->input->post('first_name', TRUE);
                $mname = $this->input->post('middle_name', TRUE);
                $lname = $this->input->post('last_name', TRUE);
                $fullname = $fname.' '.$mname.' '.$lname;
                
                $year = date('Y');
                $date = date('m-d-Y');

                // $message = '<div style="width:85%;background:#F5F5F5;padding: 50px;font-family: arial;">
                //                 <div style="border: 1px solid #CFD8DC;">
                //                     <div style="padding: 20px;background: #fff; font-weight: bold;font-size: 13pt;border-top: 5px solid #263238;">
                //                         '.$company_name.'
                //                     </div>
                //                     <div style="background: #263238; color: #fff;padding: 10px;">
                //                         '.$subject.'
                //                     </div>
                //                     <div style="background: #fff; padding: 15px;">
                //                         <p>Greetings '.$fullname.', <span style="text-align: right;float:right;">'.$date.'</span> </p>
                //                         <p style="text-align: justify;">This email contains your generated Employee Code and Pin Number. Use these codes for the attendance system. You are required to scan your Employee ID and enter your pin number. 

                //                         <br><br>
                //                             <b>Note:</b>
                //                             <br/>
                //                             If your account has been blocked due to three (3) consecutive attempts to time in / time out using your account, coordinate with your Human Resources Manager.   
                //                         <p>
                //                         <strong>Account Details</strong>
                //                             <table style="border: 1px solid gray;font-size: 10pt;">
                //                             <tr>
                //                                 <td>Ecode:</td>
                //                                 <td><strong>'.$ecode.'</strong></td>
                //                                 <td>| Pin #:</td>
                //                                 <td><strong>'.$pin_number.'</strong></td>
                //                             </tr>
                //                         </table>
                //                     </div>
                //                     <div style="background: #F5F5F5;">
                //                         <center>
                //                             <p style="font-size: 8pt;">Copyright &copy; '.$year.' '.$company_name.'</p>
                //                         </center>
                //                     </div>
                //                 </div>
                //             </div>';
                
                // $m_employee->send_mail($email,$message,$subject,$company_email,$email_password,$company_name);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Employee information successfully created.';

                $response['row_added'] = $this->Employee_model->get_list(
                    $employee_id,
                    'employee_list.*,CONCAT(employee_list.last_name,", ",employee_list.first_name," ",middle_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                            array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            ),
                            'full_name ASC'
                            //,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                }

                echo json_encode($response);

                break;

            case 'delete':
                $m_employee=$this->Employee_model;

                $employee_id=$this->input->post('employee_id',TRUE);

                $m_employee->is_deleted=1;
                $m_employee->date_deleted = date("Y-m-d");
                $m_employee->deleted_by = $this->session->user_id;
                if($m_employee->modify($employee_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Employee information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_employee=$this->Employee_model;
                //BACKEND FORM VALIDATION AND SECURITY HELPER
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('id_number', 'ID Number', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('first_name', 'First Name', 'strip_tags|trim|xss_clean|callback_alpha_dash_space|required');
                $this->form_validation->set_rules('last_name', 'Last Name', 'strip_tags|trim|xss_clean|callback_alpha_dash_space|required');
                $this->form_validation->set_rules('employment_date', 'Employment Date', 'strip_tags|trim|xss_clean|required');
                $this->form_validation->set_rules('sss', 'SSS Number', 'strip_tags|min_length[10]|max_length[10]|trim|xss_clean');
                $this->form_validation->set_rules('phil_health', 'PhilHealth Number', 'strip_tags|min_length[12]|max_length[12]|trim|xss_clean|numeric');
                $this->form_validation->set_rules('pag_ibig', 'Pag-Ibig Number', 'strip_tags|min_length[12]|max_length[12]|trim|xss_clean|numeric');
                $this->form_validation->set_rules('tin', 'TIN Number', 'strip_tags|min_length[9]|max_length[9]|trim|xss_clean|numeric');

                if ($this->form_validation->run() == TRUE)
                {
                $employee_id=$this->input->post('employee_id',TRUE);

                $emp_birthdatetemp = $this->input->post('birthdate', TRUE);
                $employmentdatetemp = $this->input->post('employment_date', TRUE);
                /*$emp_regularizationdatetemp = $this->input->post('date_regularization', TRUE);*/
                $emp_loandatetemp = $this->input->post('loan_date', TRUE);
                $emp_dateretired = $this->input->post('date_retired', TRUE);


                $employmentdate = date("Y-m-d", strtotime($employmentdatetemp));
                $emp_birthdate = date("Y-m-d", strtotime($emp_birthdatetemp));
                /*$emp_regularizationdate = date("Y-m-d", strtotime($emp_regularizationdatetemp));*/
                $emp_loandate = date("Y-m-d", strtotime($emp_loandatetemp));
                $date_retired = date("Y-m-d", strtotime($emp_dateretired));



                $m_employee->id_number = $this->input->post('id_number', TRUE);
                $m_employee->pin_number = $this->input->post('pin_number', TRUE);
                $m_employee->first_name = $this->input->post('first_name', TRUE);
                $m_employee->middle_name = $this->input->post('middle_name', TRUE);
                $m_employee->last_name = $this->input->post('last_name', TRUE);
                $m_employee->address_one = $this->input->post('address_one', TRUE);
                $m_employee->address_two = $this->input->post('address_two', TRUE);
                $m_employee->email_address = $this->input->post('email_address', TRUE);
                $m_employee->gender = $this->input->post('gender', TRUE);
                $m_employee->cell_number = $this->input->post('cell_number', TRUE);

                if ($emp_birthdatetemp == null || ""){
                    $m_employee->birthdate = "";
                }else{
                    $m_employee->birthdate = $emp_birthdate;
                }

                $m_employee->telphone_number = $this->input->post('telphone_number', TRUE);
                $m_employee->ref_religion_id = $this->input->post('ref_religion_id', TRUE);
                $m_employee->blood_type = $this->input->post('blood_type', TRUE);
                $m_employee->civil_status = $this->input->post('civil_status', TRUE);
                $m_employee->height = $this->input->post('height', TRUE);
                $m_employee->weight = $this->input->post('weight', TRUE);

                if ($employmentdatetemp == null || ""){
                    $m_employee->employment_date = "";
                }else{
                    $m_employee->employment_date = $employmentdate;
                }

                /*$m_employee->date_regularization = $emp_regularizationdate;*/
                $m_employee->sss = $this->input->post('sss', TRUE);
                $m_employee->phil_health = $this->input->post('phil_health', TRUE);
                $m_employee->pag_ibig = $this->input->post('pag_ibig', TRUE);
                $m_employee->tin = $this->input->post('tin', TRUE);
                $m_employee->health_id = $this->input->post('health_id', TRUE);
                $m_employee->barangay_id = $this->input->post('barangay_id', TRUE);
                $m_employee->bank_account = $this->input->post('bank_account', TRUE);
                $m_employee->bank_account_isprocess = $this->input->post('bank_account_isprocess', TRUE);
                $m_employee->tax_pay_type = $this->input->post('tax_pay_type', TRUE);
                $m_employee->exmpt_sss = $this->input->post('exmpt_sss', TRUE);
                $m_employee->exmpt_pagibig = $this->input->post('exmpt_pagibig', TRUE);
                $m_employee->exmpt_philhealth = $this->input->post('exmpt_philhealth', TRUE);
                $m_employee->image_name = $this->input->post('image_name', TRUE);
                $m_employee->is_retired = $this->input->post('is_retired', TRUE);

                if ($emp_dateretired == null || ""){
                    $m_employee->date_retired = "";
                }else{
                    $m_employee->date_retired = $date_retired;
                }

                $m_employee->date_modified = date("Y-m-d");
                $m_employee->modified_by = $this->session->user_id;
                /*$m_employee->loan_date = $emp_loandate;
                $m_employee->loan_amount = $this->input->post('loan_amount', TRUE);*/
                $m_employee->modify($employee_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Employee information successfully updated.';
                $response['row_updated']=$this->Employee_model->get_list(
                    $employee_id,
                    'employee_list.*,CONCAT(employee_list.last_name,", ",employee_list.first_name," ",middle_name) as full_name,ref_employment_type.employment_type,ref_department.department,ref_position.position,ref_branch.branch,ref_section.section,
                    ref_religion.religion,ref_payment_type.payment_type,tax_code_name.tax_name,reftaxcode.tax_code,reftaxcode.tax_id,refgroup.group_desc',
                    array(
                            array('emp_rates_duties','emp_rates_duties.emp_rates_duties_id=employee_list.emp_rates_duties_id','left'),
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=emp_rates_duties.ref_employment_type_id','left'),
                            array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                            array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                            array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                            array('ref_section','ref_section.ref_section_id=emp_rates_duties.ref_section_id','left'),
                            array('ref_payment_type','ref_payment_type.ref_payment_type_id=emp_rates_duties.ref_payment_type_id','left'),
                            array('ref_religion','ref_religion.ref_religion_id=employee_list.ref_religion_id','left'),
                            array('tax_code_name','tax_code_name.tax_code_name_id=employee_list.tax_code','left'),
                            array('reftaxcode','reftaxcode.tax_id=employee_list.tax_code','left'),
                            array('refgroup','refgroup.group_id=emp_rates_duties.group_id','left'),
                            ),
                            'full_name ASC'
                            //,
                    //null,
                   // null,
                   // true,
                   // '4'
                    );
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                }


                echo json_encode($response);

                break;

            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/employee/';

                foreach($_FILES as $file){

                    $server_file_name=uniqid('');
                    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
                    $file_path=$directory.$server_file_name.'.'.$extension;
                    $orig_file_name=$file['name'];

                    if(!in_array(strtolower($extension), $allowed)){
                        $response['title']='Invalid!';
                        $response['stat']='error';
                        $response['msg']='Image is invalid. Please select a valid photo!';
                        die(json_encode($response));
                    }

                    if(move_uploaded_file($file['tmp_name'],$file_path)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Image successfully uploaded.';
                        $response['path']=$file_path;
                        echo json_encode($response);
                    }
                }
                break;

                case 'export-employee-masterlist':
                $excel=$this->excel;
                /*$product_id=$this->input->get('id');
                $start=date('Y-m-d',strtotime($this->input->get('start')));
                $end=date('Y-m-d',strtotime($this->input->get('end')));*/
                $m_employee=$this->Employee_model;



                $excel->setActiveSheetIndex(0);


                //name the worksheet
                $excel->getActiveSheet()->setTitle("Employee Masterlist");

                $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A1',"Employee Masterlist")
                    ->setCellValue('A2',"Exported By : ".$this->session->user_fullname)
                    ->setCellValue('A3',"Date Exported : ".date("Y-m-d h:i:s"));


                //create headers
                $excel->getActiveSheet()->getStyle('A4:I4')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A4', 'Fullname')
                                        ->setCellValue('B4', 'Ecode')
                                        ->setCellValue('C4', 'Pin Number')
                                        ->setCellValue('D4', 'ID Number')
                                        ->setCellValue('E4', 'Birthdate')
                                        ->setCellValue('F4', 'Civil Status')
                                        ->setCellValue('G4', 'Gender')
                                        ->setCellValue('H4', 'Height')
                                        ->setCellValue('I4', 'Weight')
                                        ->setCellValue('J4', 'Blood Type')
                                        ->setCellValue('K4', 'Religion')
                                        ->setCellValue('L4', 'SSS')
                                        ->setCellValue('M4', 'Philhealth')
                                        ->setCellValue('N4', 'Pag-Ibig')
                                        ->setCellValue('O4', 'TIN')
                                        ->setCellValue('P4', 'Health ID')
                                        ->setCellValue('Q4', 'Barangay ID')
                                        ->setCellValue('R4', 'Bank Account #')
                                        ->setCellValue('S4', 'Employee Type')
                                        ->setCellValue('T4', 'Department')
                                        ->setCellValue('U4', 'Position')
                                        ->setCellValue('V4', 'Branch')
                                        ->setCellValue('W4', 'Section')
                                        ->setCellValue('X4', 'Pay Type')
                                        ->setCellValue('Y4', 'Group')
                                        ->setCellValue('Z4', 'Employment Date')
                                        ->setCellValue('AA4', 'Address1')
                                        ->setCellValue('AB4', 'Address2')
                                        ->setCellValue('AC4', 'Email Address')
                                        ->setCellValue('AD4', 'Mobile No')
                                        ->setCellValue('AE4', 'Phone No')
                                        ->setCellValue('AF4', 'Retired');

                $transaction=$employee_info=$m_employee->get_masterlist();
                $rows=array();
                foreach($transaction as $x){
                    $rows[]=array(
                        $x->full_name,
                        $x->ecode,
                        $x->pin_number,
                        $x->id_number,
                        $x->birthdate,
                        $x->civil_status,
                        $x->gender,
                        $x->height,
                        $x->weight,
                        $x->blood_type,
                        $x->religion,
                        $x->sss,
                        $x->phil_health,
                        $x->pag_ibig,
                        $x->tin,
                        $x->health_id,
                        $x->barangay_id,
                        $x->bank_account,
                        $x->employment_type,
                        $x->department,
                        $x->position,
                        $x->branch,
                        $x->section,
                        $x->payment_type,
                        $x->group_desc,
                        $x->employment_date,
                        $x->address_one,
                        $x->address_two,
                        $x->email_address,
                        $x->cell_number,
                        $x->telphone_number,
                        $x->retired


                    );
                }


                $excel->getActiveSheet()->getStyle('A4:AF4')->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('27ae60');

                $styleArray = array(
                    'font'  => array(
                        'bold'  => true,
                        'color' => array('rgb' => 'FFFFF'),
                        'size'  => 10,
                        'name'  => 'Tahoma'
                    ));

                $excel->getActiveSheet()->getStyle('A4:AF4')->applyFromArray($styleArray);

                $excel->getActiveSheet()->fromArray($rows,NULL,'A5');
                //autofit column
                foreach(range('A','AD') as $columnID)
                {
                    $excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(TRUE);
                }





                $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(TRUE);



                // Redirect output to a client’s web browser (Excel2007)
                ob_end_clean();
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename='."Employee Masterlist.xlsx".'');
                header('Cache-Control: max-age=0');
                // If you're serving to IE 9, then the following may be needed
                header('Cache-Control: max-age=1');

                // If you're serving to IE over SSL, then the following may be needed
                header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
                header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
                header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
                header ('Pragma: public'); // HTTP/1.0

                $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
                $objWriter->save('php://output');

                break;

            case 'test':
function replaceCharsInNumber($num, $chars) {
   return substr((string) $num, 0, -strlen($chars)) . $chars;
}

$format = "000000";
$temp = replaceCharsInNumber($format, '180'); //5069xxx
$ecode = $temp .'-'. $today = date("Y");
echo $ecode;


                break;
                case 'test2': //traditional selecting of data
                    $date = "2016-02-16"; // Or Your date
                    $newDate = Carbon::createFromFormat('Y-m-d', $date)->addYear(1);
                    echo $newDate;
                break;
                case 'date': //traditional selecting of data
                    echo $data['datenow'] = date("m/d/Y");
                break;
                case 'test3':

                $query = $this->db->query('SELECT tax_id,tax_code FROM reftaxcode LIMIT 4');
        $data['tax_codes']=$query->result_array();
        echo json_encode($data);
                break;

                case 'mail':
                    $this->load->library('email');

                    $this->email->from('your@example.com', 'Your Name');
                    $this->email->to('someone@example.com');
                    $this->email->cc('another@another-example.com');
                    $this->email->bcc('them@their-example.com');

                    $this->email->subject('Email Test');
                    $this->email->message('Testing the email class.');

                    $this->email->send();

                break;


        }
    }

function alpha_dash_space($first_name){
if (! preg_match('/^[a-zA-Z\s]+$/', $first_name)) {
$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contains alpha characters & White spaces Only!');
return FALSE;
} else {
return TRUE;
}
}
function email_check($email_address)
{

    if (valid_email('@gmail.com') !== false) return true;
    if (valid_email('@yahoo.com') !== false) return true;

        $this->form_validation->set_message('email_address', 'Please provide an acceptable email address.');
        return FALSE;

}

function numeric_wcomma ($str)
{
    return preg_match('/^[0-9,]+$/', $str);
}

}
