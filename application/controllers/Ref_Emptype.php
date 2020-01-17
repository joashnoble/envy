<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_Emptype extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');



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
                    array('employee_rates_duties.is_deleted'=>FALSE),
                    'employee_rates_duties.*,ref_employment_type.employment_type',
                            array(
                                array('ref_employment_type','ref_employment_type.ref_employment_type_id=employee_rates_duties.employee_rates_duties_id','left'),
                                )
                    );
                echo json_encode($response);
                break;

            case 'testlist':
                $employee_id = $this->input->post('employee_id', TRUE);

                $response['data']=$this->RatesDuties_model->get_list(
                    array('employee_rates_duties.employee_id'=>$employee_id),
                    'employee_rates_duties.*,ref_employment_type.employment_type',
                        array(
                            array('ref_employment_type','ref_employment_type.ref_employment_type_id=employee_rates_duties.employee_rates_duties_id','left'),
                            )
                    );

                echo json_encode($response);
                break;

            case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_employee = $this->Employee_model;
               
                $emp_birthdatetemp = $this->input->post('emp_birthdate', TRUE);
                $employmentdatetemp = $this->input->post('emp_employmentdate', TRUE);
                $emp_regularizationdatetemp = $this->input->post('emp_regularizationdate', TRUE);
                $emp_loandatetemp = $this->input->post('emp_loandate', TRUE);


				$employmentdate = date("Y-m-d", strtotime($employmentdatetemp));
                $emp_birthdate = date("Y-m-d", strtotime($emp_birthdatetemp));
                $emp_regularizationdate = date("Y-m-d", strtotime($emp_regularizationdatetemp));
                $emp_loandate = date("Y-m-d", strtotime($emp_loandatetemp));



                $m_employee->emp_idnumber = $this->input->post('emp_idnumber', TRUE);
                $m_employee->emp_fname = $this->input->post('emp_fname', TRUE);
                $m_employee->emp_mname = $this->input->post('emp_mname', TRUE);
                $m_employee->emp_lname = $this->input->post('emp_lname', TRUE);
                $m_employee->emp_address1 = $this->input->post('emp_address1', TRUE);
                $m_employee->emp_address2 = $this->input->post('emp_address2', TRUE);
                $m_employee->emp_email = $this->input->post('emp_email', TRUE);
                $m_employee->emp_gender = $this->input->post('emp_gender', TRUE);
                $m_employee->emp_cell = $this->input->post('emp_cell', TRUE);
                $m_employee->emp_birthdate = $emp_birthdate;
                $m_employee->emp_phone = $this->input->post('emp_phone', TRUE);
                $m_employee->emp_religion = $this->input->post('emp_religion', TRUE);
                $m_employee->emp_bloodtype = $this->input->post('emp_bloodtype', TRUE);
                $m_employee->emp_civilstatus = $this->input->post('emp_civilstatus', TRUE);
                $m_employee->emp_height = $this->input->post('emp_height', TRUE);
                $m_employee->emp_weight = $this->input->post('emp_weight', TRUE);
                $m_employee->emp_employmentdate = $employmentdate;
                $m_employee->emp_regularizationdate = $emp_regularizationdate;
                $m_employee->emp_sss = $this->input->post('emp_sss', TRUE);
                $m_employee->emp_philhealth = $this->input->post('emp_philhealth', TRUE);
                $m_employee->emp_philhealth = $this->input->post('emp_pagibig', TRUE);
                $m_employee->emp_tin = $this->input->post('emp_tin', TRUE);
                $m_employee->emp_accountno = $this->input->post('emp_accountno', TRUE);
                $m_employee->emp_processaccount = $this->input->post('emp_processaccount', TRUE);
                $m_employee->emp_taxcode = $this->input->post('emp_taxcode', TRUE);
                $m_employee->emp_exemptss = $this->input->post('emp_exemptss', TRUE);
                $m_employee->emp_exemptpagibig = $this->input->post('emp_exemptpagibig', TRUE);
                $m_employee->emp_exemptphilhealth = $this->input->post('emp_exemptphilhealth', TRUE);
                $m_employee->emp_loandate = $emp_loandate;
                $m_employee->emp_loanamount = $this->input->post('emp_loanamount', TRUE);
                $m_employee->save();

                $employee_id = $m_employee->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $employee_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_employee->ecode = $ecode;
                $m_employee->modify($employee_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Employee information successfully created.';

                $response['row_added'] = $this->Employee_model->get_list($employee_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_employee=$this->Employee_model;

                $employee_id=$this->input->post('employee_id',TRUE);

                $m_employee->is_deleted=1;
                if($m_employee->modify($employee_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Employee information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_employee=$this->Employee_model;

                $employee_id=$this->input->post('employee_id',TRUE);

                                $emp_birthdatetemp = $this->input->post('emp_birthdate', TRUE);
                $employmentdatetemp = $this->input->post('emp_employmentdate', TRUE);
                $emp_regularizationdatetemp = $this->input->post('emp_regularizationdate', TRUE);
                $emp_loandatetemp = $this->input->post('emp_loandate', TRUE);


                $employmentdate = date("Y-m-d", strtotime($employmentdatetemp));
                $emp_birthdate = date("Y-m-d", strtotime($emp_birthdatetemp));
                $emp_regularizationdate = date("Y-m-d", strtotime($emp_regularizationdatetemp));
                $emp_loandate = date("Y-m-d", strtotime($emp_loandatetemp));



                $m_employee->emp_idnumber = $this->input->post('emp_idnumber', TRUE);
                $m_employee->emp_fname = $this->input->post('emp_fname', TRUE);
                $m_employee->emp_mname = $this->input->post('emp_mname', TRUE);
                $m_employee->emp_lname = $this->input->post('emp_lname', TRUE);
                $m_employee->emp_address1 = $this->input->post('emp_address1', TRUE);
                $m_employee->emp_address2 = $this->input->post('emp_address2', TRUE);
                $m_employee->emp_email = $this->input->post('emp_email', TRUE);
                $m_employee->emp_gender = $this->input->post('emp_gender', TRUE);
                $m_employee->emp_cell = $this->input->post('emp_cell', TRUE);
                $m_employee->emp_birthdate = $emp_birthdate;
                $m_employee->emp_phone = $this->input->post('emp_phone', TRUE);
                $m_employee->emp_religion = $this->input->post('emp_religion', TRUE);
                $m_employee->emp_bloodtype = $this->input->post('emp_bloodtype', TRUE);
                $m_employee->emp_civilstatus = $this->input->post('emp_civilstatus', TRUE);
                $m_employee->emp_height = $this->input->post('emp_height', TRUE);
                $m_employee->emp_weight = $this->input->post('emp_weight', TRUE);
                $m_employee->emp_employmentdate = $employmentdate;
                $m_employee->emp_regularizationdate = $emp_regularizationdate;
                $m_employee->emp_sss = $this->input->post('emp_sss', TRUE);
                $m_employee->emp_philhealth = $this->input->post('emp_philhealth', TRUE);
                $m_employee->emp_philhealth = $this->input->post('emp_pagibig', TRUE);
                $m_employee->emp_tin = $this->input->post('emp_tin', TRUE);
                $m_employee->emp_accountno = $this->input->post('emp_accountno', TRUE);
                $m_employee->emp_processaccount = $this->input->post('emp_processaccount', TRUE);
                $m_employee->emp_taxcode = $this->input->post('emp_taxcode', TRUE);
                $m_employee->emp_exemptss = $this->input->post('emp_exemptss', TRUE);
                $m_employee->emp_exemptpagibig = $this->input->post('emp_exemptpagibig', TRUE);
                $m_employee->emp_exemptphilhealth = $this->input->post('emp_exemptphilhealth', TRUE);
                $m_employee->emp_loandate = $emp_loandate;
                $m_employee->emp_loanamount = $this->input->post('emp_loanamount', TRUE);
                $m_employee->modify($employee_id);

                $response['title']=$employee_id;
                $response['stat']='success';
                $response['msg']='Employee information successfully updated.';
                $response['row_updated']=$this->Employee_model->get_list($employee_id);
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
