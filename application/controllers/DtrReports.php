<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DtrReports extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
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
        $this->load->model('Payslip_model');
        $this->load->model('GeneralSettings_model');
        $this->load->model('RefOtherEarningRegular_model');
        $this->load->model('PaySlip_earning_model');
        $this->load->model('PaySlip_deduction_model');
        $this->load->model('DailyTimeRecord_model');


    }
    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['ref_group']=$this->RefGroup_model->get_list(array('refgroup.is_deleted'=>FALSE));
        $data['ref_department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['title'] = 'Pay Slip';

        $this->load->view('pay_slip_view', $data);
    }


    function dtrreports($dtrreports=null,$filter_value=null,$filter_value2=null,$filter_value3=null,$type=null){




        switch($dtrreports){
            //****************************************************
            case 'dtr-verification-list': //
                        if($filter_value2=="all" AND $filter_value3=="all"){
                        $filter=array('daily_time_record.pay_period_id'=>$filter_value,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2=="all" AND $filter_value3!="all"){
                        $filter=array('daily_time_record.pay_period_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value3,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3=="all"){
                        $filter=array('daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3!="all"){
                        $filter=array('daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'ref_branch.ref_branch_id'=>$filter_value3,'employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        $data['dtr_verification_list']=$this->DailyTimeRecord_model->get_list(
                        $filter,
                        'daily_time_record.*,employee_list.ecode,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name',
                        array(
                             array('employee_list','employee_list.employee_id=daily_time_record.employee_id','left'),
                             array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                             array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                             array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );

                        //echo json_encode($data);
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );
                        if($filter_value2=="all"){
                            $data['dept']="All Department";
                        }
                        else{
                        $getdept=$this->RefDepartment_model->get_list(
                        $filter_value2,
                        'ref_department.department,'
                        );
                        $data['dept']=$getdept[0]->department;
                        }
                        if($filter_value3=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value3,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }
                        //echo $data['dept'];

                        $data['company']=$getcompany[0];
                        //echo json_encode($data);
                        //show only inside grid with menu button
                        if($type=='fullview'||$type==null){
                            echo $this->load->view('template/dtr_verification_list_html',$data,TRUE);
                            //echo $this->load->view('template/dr_content_menus',$data,TRUE);
                        }

                        //show only inside grid without menu button
                        if($type=='contentview'){
                            echo $this->load->view('template/dtr_verification_list_html',$data,TRUE);
                        }


                        //download pdf
                        if($type=='pdf'){
                            $pdfFilePath = "test".".pdf";  //generate filename base on id
                            $pdf = $this->m_pdf->load('A4-L'); //pass the instance of the mpdf class
                            $content=$this->load->view('template/dtr_verification_list',$data,TRUE); //load the template
                            $pdf->setFooter('{PAGENO}');
                            $pdf->WriteHTML($content);
                            //download it.
                            $pdf->Output($pdfFilePath,"D");

                        }

                        //preview on browser
                        if($type=='preview'){
                            $pdfFilePath = "test".".pdf"; //generate filename base on id
                            $pdf = $this->m_pdf->load('A4-L'); //pass the instance of the mpdf class
                            $content=$this->load->view('template/dtr_verification_list',$data,TRUE); //load the template
                            $pdf->setFooter('{PAGENO}');
                            $pdf->WriteHTML($content);
                            //download it.
                            $pdf->SetJS('this.print();');
                            $pdf->Output();
                        }

                        break;


        }
    }


}
