<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    require 'application/third_party/Carbon.php';
    use Carbon\Carbon;
class Hris_Reports extends CORE_Controller
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
        $this->load->model('DailyTimeRecord_model');
        $this->load->model('Memorandum_model');
        $this->load->model('Commendation_model');
        $this->load->model('SeminarsTraining_model');
        $this->load->model('Email_user_settings_model');
        $this->load->model('Users_model');
        $this->load->model('RefWorkExperience_model');

        $this->load->library('excel');

    }
    public function index() {
        //HRIS REPORTS
    }

    function reports($reports=null,$filter_value=null,$filter_value2=null,$filter_value3=null,$type=null){




        switch($reports){
            //****************************************************

            case 'generate_all_template':
                $data['masterlist'] = $this->Employee_model->get_masterlist();
                $data['admin'] = $this->Employee_model->get_masterlist(1);
                echo $this->load->view('template/id_all_template_html',$data,TRUE);
                break;

            case 'generate_id_template':
                $employee_id = $this->input->get("e_id",true);
                $data['masterlist'] = $this->Employee_model->get_masterlist(null,$employee_id);
                $data['admin'] = $this->Employee_model->get_masterlist(1);
                echo $this->load->view('template/id_template_html',$data,TRUE);
                break;                

            case 'personnel-list': //
                        if($filter_value=="all" AND $filter_value2=="all"){
                        $filter=array('emp_rates_duties.active_rates_duties'=>TRUE,'employee_list.is_deleted'=>FALSE);
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value);
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        $data['employee_dept']=$this->Employee_model->get_list(
                        $filter,
                        'employee_list.*,ref_department.department,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,emp_rates_duties.date_start',
                        array(
                             array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                             array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                             array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                             array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        if($filter_value=="all"){
                            $data['dept']="All Department";
                        }
                        else{
                        $getdept=$this->RefDepartment_model->get_list(
                        $filter_value,
                        'ref_department.department,'
                        );
                        $data['dept']=$getdept[0]->department;
                        }
                        if($filter_value2=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }
                        //echo $data['dept'];

                        $data['company']=$getcompany[0];
                            echo $this->load->view('template/hris_personnel_list_html',$data,TRUE);

                        break;

            case 'manpower-list': //
                        $data['branch']=$filter_value2;
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['department']=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        $data['company']=$getcompany[0];
                        $manpower="Manpower List Active";
                        if($filter_value2=="all"){
                            $data['namebranch']="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $data['namebranch']=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/hris_manpower_list_html',$data,TRUE);

                        break;

            case 'export-manpower-list': //
                        $excel = $this->excel;
                        $branch=$filter_value2;
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        $company=$getcompany[0];
                        $manpower="Manpower List Active";
                        if($filter_value2=="all"){
                            $namebranch="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $namebranch=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Man Power List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');

                        $excel->getActiveSheet()->setCellValue('A6','Man Power List')
                                                ->setCellValue('A7','Branch : '.$namebranch);

                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('35');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','#');
                        $excel->getActiveSheet()->setCellValue('C9','E-CODE');
                        $excel->getActiveSheet()->setCellValue('D9','Name');
                        $excel->getActiveSheet()->setCellValue('E9','Position');

                        $i = 10;

                         foreach($department as $deptrow){

                            $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department);


                            if($branch!="all"){
                                $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                $this->db->where('employee_list.is_retired', 0);
                                $this->db->where('employee_list.is_deleted', 0);
                                $this->db->where('employee_list.status="Active"');
                                $this->db->where('ref_branch.ref_branch_id', $branch);
                                $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                $this->db->from('employee_list');
                                $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                $this->db->order_by("full_name", "asc");
                                $query = $this->db->get();
                                    
                                $i++;
                                    $count=1;

                                    if($query->num_rows() != 0){
                                        foreach($query->result() as $row){
                                            $excel->getActiveSheet()->setCellValue('A'.$i);
                                            $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                        $excel->getActiveSheet()
                                                ->getStyle('B'.$i)
                                                ->getAlignment()
                                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                        $excel->getActiveSheet()
                                                ->getStyle('C'.$i)
                                                ->getAlignment()
                                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  


                                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->position);

                                            $count++;
                                            $i++;
                                        }
                                    }
                                    else{   
                                            $excel->getActiveSheet()
                                                    ->getStyle('A'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                                                                                       
                                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                            $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                            $i++;
                                    }

                            }
                            else{
                                $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                $this->db->where('employee_list.is_retired', 0);
                                $this->db->where('employee_list.is_deleted', 0);
                                $this->db->where('employee_list.status="Active"');
                                $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                $this->db->from('employee_list');
                                $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                $this->db->order_by("full_name", "asc");
                                $query = $this->db->get();
                                $i++;
                                    $count=1;
                                    if($query->num_rows() != 0){
                                        foreach($query->result() as $row){
                                            $excel->getActiveSheet()->setCellValue('A'.$i);
                                            $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                            $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                            $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->position);
                                            $count++;
                                            $i++;
                                        }
                                    }
                                    else{
                                            $excel->getActiveSheet()
                                                    ->getStyle('A'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);          

                                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                            $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                            $i++;
                                    }
                            }

                            }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Man Power List.xlsx".'');
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

            case 'email-manpower-list': //
                        $excel = $this->excel;
                        $branch=$filter_value2;
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $m_user = $this->Users_model;
                        $id = $this->session->user_id;
                        $email = $m_user->get_email($id);

                        $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        $company=$getcompany[0];
                        $manpower="Manpower List Active";
                        if($filter_value2=="all"){
                            $namebranch="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $namebranch=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button

                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Man Power List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');

                        $excel->getActiveSheet()->setCellValue('A6','Man Power List')
                                                ->setCellValue('A7','Branch : '.$namebranch);

                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('35');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','#');
                        $excel->getActiveSheet()->setCellValue('C9','E-CODE');
                        $excel->getActiveSheet()->setCellValue('D9','Name');
                        $excel->getActiveSheet()->setCellValue('E9','Position');

                        $i = 10;

                         foreach($department as $deptrow){

                            $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department);


                            if($branch!="all"){
                                $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                $this->db->where('employee_list.is_retired', 0);
                                $this->db->where('employee_list.is_deleted', 0);
                                $this->db->where('employee_list.status="Active"');
                                $this->db->where('ref_branch.ref_branch_id', $branch);
                                $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                $this->db->from('employee_list');
                                $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                $this->db->order_by("full_name", "asc");
                                $query = $this->db->get();
                                    
                                $i++;
                                    $count=1;

                                    if($query->num_rows() != 0){
                                        foreach($query->result() as $row){
                                            $excel->getActiveSheet()->setCellValue('A'.$i);
                                            $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                        $excel->getActiveSheet()
                                                ->getStyle('B'.$i)
                                                ->getAlignment()
                                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                        $excel->getActiveSheet()
                                                ->getStyle('C'.$i)
                                                ->getAlignment()
                                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  


                                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->position);

                                            $count++;
                                            $i++;
                                        }
                                    }
                                    else{   
                                            $excel->getActiveSheet()
                                                    ->getStyle('A'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                                                                                       
                                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                            $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                            $i++;
                                    }

                            }
                            else{
                                $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                $this->db->where('employee_list.is_retired', 0);
                                $this->db->where('employee_list.is_deleted', 0);
                                $this->db->where('employee_list.status="Active"');
                                $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                $this->db->from('employee_list');
                                $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                $this->db->order_by("full_name", "asc");
                                $query = $this->db->get();
                                $i++;
                                    $count=1;
                                    if($query->num_rows() != 0){
                                        foreach($query->result() as $row){
                                            $excel->getActiveSheet()->setCellValue('A'.$i);
                                            $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                            $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                            $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->position);
                                            $count++;
                                            $i++;
                                        }
                                    }
                                    else{
                                            $excel->getActiveSheet()
                                                    ->getStyle('A'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);          

                                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                            $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                            $i++;
                                    }
                            }

                            }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Man Power List.xlsx".'');
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
                        $data = ob_get_clean();


                            $file_name='Man Power List Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'Man Power List Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Man Power List (Active) Report'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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


            case 'employee-tenure': //

                        $data['branch']=$filter_value2;
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['department']=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        /*$data['branches']=$this->RefBranch_model->get_list(
                        array('ref_branch.is_deleted'=>FALSE),
                        'ref_branch.ref_branch_id,ref_branch.branch'
                        );*/

                        $data['company']=$getcompany[0];
                        $manpower="Employee Tenure";

                        if($filter_value2=="all"){
                            $data['namebranch']="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $data['namebranch']=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/hris_employee_tenure_html',$data,TRUE);
                        break;

            case 'export-employee-tenure': //
                        $excel = $this->excel;
                        $branch=$filter_value2;
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        /*$data['branches']=$this->RefBranch_model->get_list(
                        array('ref_branch.is_deleted'=>FALSE),
                        'ref_branch.ref_branch_id,ref_branch.branch'
                        );*/

                        $company=$getcompany[0];
                        $manpower="Employee Tenure";

                        if($filter_value2=="all"){
                            $namebranch="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $namebranch=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Employee Tenure");
                        $excel->getActiveSheet()->mergeCells('A1:G1');
                        $excel->getActiveSheet()->mergeCells('A2:G2');
                        $excel->getActiveSheet()->mergeCells('A3:G3');
                        $excel->getActiveSheet()->mergeCells('A4:G4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:G5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:G6');
                        $excel->getActiveSheet()->mergeCells('A7:G7');

                        $excel->getActiveSheet()->setCellValue('A6','Employee Tenure')
                                                ->setCellValue('A7','Branch : '.$namebranch);

                        $excel->getActiveSheet()->mergeCells('A8:G8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('G9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','#');
                        $excel->getActiveSheet()->setCellValue('C9','E-CODE');
                        $excel->getActiveSheet()->setCellValue('D9','Name');
                        $excel->getActiveSheet()->setCellValue('E9','Retired?');
                        $excel->getActiveSheet()->setCellValue('F9','Years');
                        $excel->getActiveSheet()->setCellValue('G9','Months');

                        $i = 10;

                        foreach($department as $deptrow){

                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department)
                                                        ->getStyle('A'.$i)->getFont()->setBold(TRUE);


                                if($branch!="all"){
                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->where('employee_list.status="Active"');
                                    $this->db->where('ref_branch.ref_branch_id', $branch);
                                    $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                    $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                    $this->db->order_by("full_name", "asc");
                                    $query = $this->db->get();
                                        $i++;
                                        $count=1;
                                        $filter_date;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                if($row->is_retired==1){
                                                    $filter_date=$row->date_retired;
                                                }
                                                else{
                                                    $filter_date='today';

                                                }
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                                $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                                $excel->getActiveSheet()->setCellValue('E'.$i,($row->is_retired == 1 ? 'YES' : 'NO'));
                                                $from = new DateTime($row->date_start);
                                                $to = new DateTime($filter_date);
                                                $years = $from->diff($to)->y;
                                                $months = $from->diff($to)->m;            
                                                $excel->getActiveSheet()->setCellValue('F'.$i,$years);
                                                $excel->getActiveSheet()->setCellValue('G'.$i,$months);

                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{
                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);   

                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }
                                }
                                else{
                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->where('employee_list.status="Active"');
                                    $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                    $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                    $this->db->order_by("full_name", "asc");
                                    $query = $this->db->get();
                                        $i++;                                    
                                        $count=1;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                if($row->is_retired==1){
                                                    $filter_date=$row->date_retired;
                                                }
                                                else{
                                                    $filter_date='today';
                                                }
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                                $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 


                                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                                $excel->getActiveSheet()->setCellValue('E'.$i,($row->is_retired == 1 ? 'YES' : 'NO'));
                                                $from = new DateTime($row->date_start);
                                                $to = new DateTime($filter_date);
                                                $years = $from->diff($to)->y;
                                                $months = $from->diff($to)->m;            
                                                $excel->getActiveSheet()->setCellValue('F'.$i,$years);
                                                $excel->getActiveSheet()->setCellValue('G'.$i,$months);

                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{
                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                               
                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }
                                }
                        }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Employee Tenure.xlsx".'');
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

            case 'email-employee-tenure': //
                        $excel = $this->excel;
                        $branch=$filter_value2;
                        $m_user = $this->Users_model;
                        $id = $this->session->user_id;
                        $email = $m_user->get_email($id);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                        );
                        //echo $data['dept'];

                        /*$data['branches']=$this->RefBranch_model->get_list(
                        array('ref_branch.is_deleted'=>FALSE),
                        'ref_branch.ref_branch_id,ref_branch.branch'
                        );*/

                        $company=$getcompany[0];
                        $manpower="Employee Tenure";

                        if($filter_value2=="all"){
                            $namebranch="All Branch";
                        }
                        else{
                        $namebranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $namebranch=$namebranch[0]->branch;
                        }
                        //echo json_encode($data);
                        //show only inside grid with menu button
                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Employee Tenure");
                        $excel->getActiveSheet()->mergeCells('A1:G1');
                        $excel->getActiveSheet()->mergeCells('A2:G2');
                        $excel->getActiveSheet()->mergeCells('A3:G3');
                        $excel->getActiveSheet()->mergeCells('A4:G4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:G5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:G6');
                        $excel->getActiveSheet()->mergeCells('A7:G7');

                        $excel->getActiveSheet()->setCellValue('A6','Employee Tenure')
                                                ->setCellValue('A7','Branch : '.$namebranch);

                        $excel->getActiveSheet()->mergeCells('A8:G8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('G9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','#');
                        $excel->getActiveSheet()->setCellValue('C9','E-CODE');
                        $excel->getActiveSheet()->setCellValue('D9','Name');
                        $excel->getActiveSheet()->setCellValue('E9','Retired?');
                        $excel->getActiveSheet()->setCellValue('F9','Years');
                        $excel->getActiveSheet()->setCellValue('G9','Months');

                        $i = 10;

                        foreach($department as $deptrow){

                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department)
                                                        ->getStyle('A'.$i)->getFont()->setBold(TRUE);


                                if($branch!="all"){
                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->where('employee_list.status="Active"');
                                    $this->db->where('ref_branch.ref_branch_id', $branch);
                                    $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                    $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                    $this->db->order_by("full_name", "asc");
                                    $query = $this->db->get();
                                        $i++;
                                        $count=1;
                                        $filter_date;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                if($row->is_retired==1){
                                                    $filter_date=$row->date_retired;
                                                }
                                                else{
                                                    $filter_date='today';

                                                }
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                                $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                                $excel->getActiveSheet()->setCellValue('E'.$i,($row->is_retired == 1 ? 'YES' : 'NO'));
                                                $from = new DateTime($row->date_start);
                                                $to = new DateTime($filter_date);
                                                $years = $from->diff($to)->y;
                                                $months = $from->diff($to)->m;            
                                                $excel->getActiveSheet()->setCellValue('F'.$i,$years);
                                                $excel->getActiveSheet()->setCellValue('G'.$i,$months);

                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{
                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);   

                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }
                                }
                                else{
                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->where('employee_list.status="Active"');
                                    $this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
                                    $this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
                                    $this->db->order_by("full_name", "asc");
                                    $query = $this->db->get();
                                        $i++;                                    
                                        $count=1;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                if($row->is_retired==1){
                                                    $filter_date=$row->date_retired;
                                                }
                                                else{
                                                    $filter_date='today';
                                                }
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$count);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);

                                                $excel->getActiveSheet()
                                                    ->getStyle('B'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 

                                                $excel->getActiveSheet()
                                                    ->getStyle('C'.$i)
                                                    ->getAlignment()
                                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); 


                                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                                $excel->getActiveSheet()->setCellValue('E'.$i,($row->is_retired == 1 ? 'YES' : 'NO'));
                                                $from = new DateTime($row->date_start);
                                                $to = new DateTime($filter_date);
                                                $years = $from->diff($to)->y;
                                                $months = $from->diff($to)->m;            
                                                $excel->getActiveSheet()->setCellValue('F'.$i,$years);
                                                $excel->getActiveSheet()->setCellValue('G'.$i,$months);

                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{
                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                               
                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'G'.$i);
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }
                                }
                        }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Employee Tenure.xlsx".'');
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

                        $data = ob_get_clean();

                            $file_name='Employee Tenure Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'Employee Tenure Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Employee Tenure'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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

            case 'sss-list': //
                        //$data['month']=$filter_value;
                        //$data['branch']=$filter_value2;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }

                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }

                        $data['sss_report']=$this->DailyTimeRecord_model->get_sss_report($filter);

                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/sss_list_html',$data,TRUE);
                break;

                case 'export-sss-list': //
                        $excel = $this->excel;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $branch="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $branch=$getbranch[0]->branch;
                        }

                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }

                        $sss_report=$this->DailyTimeRecord_model->get_sss_report($filter);

                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("SSS REPORT");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address);

                        $excel->getActiveSheet()->mergeCells('A3:F3');

                        $excel->getActiveSheet()->getStyle('A4'.':'.'A5')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A4:F4');
                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->setCellValue('A4','SSS Report for the Month of '.$month)
                                                ->setCellValue('A5','Branch : '.$branch);
                        $excel->getActiveSheet()->mergeCells('A6:F6');

                        $excel->getActiveSheet()->getStyle('A7'.':'.'I7')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('H')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('I')->setWidth('25');

                        $excel->getActiveSheet()
                                ->getStyle('A7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

                        $excel->getActiveSheet()
                                ->getStyle('F7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('G7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('H7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('I7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                        $excel->getActiveSheet()->setCellValue('A7','#');
                        $excel->getActiveSheet()->setCellValue('B7','Period');
                        $excel->getActiveSheet()->setCellValue('C7','Ecode');
                        $excel->getActiveSheet()->setCellValue('D7','Name');
                        $excel->getActiveSheet()->setCellValue('E7','SSS No.');
                        $excel->getActiveSheet()->setCellValue('F7','Employee');
                        $excel->getActiveSheet()->setCellValue('G7','Employer');
                        $excel->getActiveSheet()->setCellValue('H7','EC');
                        $excel->getActiveSheet()->setCellValue('I7','Total');

                        $i = 8;
                        $total_sss=0;
                        $total_employer=0;
                        $total_ec=0;
                        $grand_total = 0;
                        $row_total = 0;
                        $count=1;             
                        
                        if(count($sss_report)!=0 || count($sss_report)!=null){
                            foreach($sss_report as $row){
                                $total_sss+=$row->sss_deduction_employee;
                                if ($row->sss_deduction_employee != 0){

                                $row_total = $row->sss_deduction_employee + $row->sss_deduction_employer + $row->sss_deduction_ec;
                               
                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  

                                $excel->getActiveSheet()
                                        ->getStyle('C'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                $excel->getActiveSheet()
                                        ->getStyle('F'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()->setCellValue('A'.$i,$count);

                                if ($month == "All"){

                                    $date = explode("~", $row->period);
                                    $time = strtotime($date[0]);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,date("F", $time). ($row->period));

                                }else{

                                    $date = explode("~", $row->period);
                                    $time = strtotime($date[0]);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,$row->period);

                                }
                                    $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);
                                    $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                    $excel->getActiveSheet()->setCellValue('E'.$i,$row->sss);
                                    $excel->getActiveSheet()->getStyle('F'.$i.':'.'I'.$i)->getNumberFormat()->setFormatCode('###,##0.00;(###,##0.00)');                    
                                    $excel->getActiveSheet()->setCellValue('F'.$i,number_format($row->sss_deduction_employee,2));
                                    $excel->getActiveSheet()->setCellValue('G'.$i,number_format($row->sss_deduction_employer,2));
                                    $excel->getActiveSheet()->setCellValue('H'.$i,number_format($row->sss_deduction_ec,2));
                                    $excel->getActiveSheet()->setCellValue('I'.$i,number_format($row_total,2));

                                    $total_employer+=$row->sss_deduction_employer;
                                    $total_ec+=$row->sss_deduction_ec;
                                    $grand_total+=$row_total;
                                    $count++;
                            }}}
                            else{ 

                                    $excel->getActiveSheet()
                                            ->getStyle('A'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  

                                    $excel->getActiveSheet()->mergeCells('A'.$i.':'.'I'.$i);
                                    $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');

                            }

                                $i++;

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('F'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('G'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('H'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('I'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Total:');
                                
                                $excel->getActiveSheet()->getStyle('F'.$i.':'.'I'.$i)->getNumberFormat()->setFormatCode('###,##0.00;(###,##0.00)');                    

                                $excel->getActiveSheet()->setCellValue('F'.$i,number_format($total_sss,2));
                                $excel->getActiveSheet()->setCellValue('G'.$i,number_format($total_employer,2));
                                $excel->getActiveSheet()->setCellValue('H'.$i,number_format($total_ec,2));
                                $excel->getActiveSheet()->setCellValue('I'.$i,number_format($grand_total,2));

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."SSS REPORT.xlsx".'');
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

            case 'email-sss-list': //
                        $m_user = $this->Users_model;
                        $id = $this->session->user_id;
                        $email = $m_user->get_email($id);

                        $excel = $this->excel;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $branch="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $branch=$getbranch[0]->branch;
                        }

                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=1 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }

                        $sss_report=$this->DailyTimeRecord_model->get_sss_report($filter);

                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;

                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("SSS REPORT");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address);

                        $excel->getActiveSheet()->mergeCells('A3:F3');

                        $excel->getActiveSheet()->getStyle('A4'.':'.'A5')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A4:F4');
                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->setCellValue('A4','SSS Report for the Month of '.$month)
                                                ->setCellValue('A5','Branch : '.$branch);
                        $excel->getActiveSheet()->mergeCells('A6:F6');

                        $excel->getActiveSheet()->getStyle('A7'.':'.'I7')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('H')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('I')->setWidth('25');

                        $excel->getActiveSheet()
                                ->getStyle('A7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

                        $excel->getActiveSheet()
                                ->getStyle('F7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('G7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('H7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $excel->getActiveSheet()
                                ->getStyle('I7')
                                ->getAlignment()
                                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                        $excel->getActiveSheet()->setCellValue('A7','#');
                        $excel->getActiveSheet()->setCellValue('B7','Period');
                        $excel->getActiveSheet()->setCellValue('C7','Ecode');
                        $excel->getActiveSheet()->setCellValue('D7','Name');
                        $excel->getActiveSheet()->setCellValue('E7','SSS No.');
                        $excel->getActiveSheet()->setCellValue('F7','Employee');
                        $excel->getActiveSheet()->setCellValue('G7','Employer');
                        $excel->getActiveSheet()->setCellValue('H7','EC');
                        $excel->getActiveSheet()->setCellValue('I7','Total');

                        $i = 8;
                        $total_sss=0;
                        $total_employer=0;
                        $total_ec=0;
                        $grand_total = 0;
                        $row_total = 0;
                        $count=1;             
                        
                        if(count($sss_report)!=0 || count($sss_report)!=null){
                            foreach($sss_report as $row){
                                $total_sss+=$row->sss_deduction_employee;
                                if ($row->sss_deduction_employee != 0){

                                $row_total = $row->sss_deduction_employee + $row->sss_deduction_employer + $row->sss_deduction_ec;
                               
                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  

                                $excel->getActiveSheet()
                                        ->getStyle('C'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  

                                $excel->getActiveSheet()
                                        ->getStyle('F'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()->setCellValue('A'.$i,$count);

                                if ($month == "All"){

                                    $date = explode("~", $row->period);
                                    $time = strtotime($date[0]);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,date("F", $time). ($row->period));

                                }else{

                                    $date = explode("~", $row->period);
                                    $time = strtotime($date[0]);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,$row->period);

                                }
                                    $excel->getActiveSheet()->setCellValue('C'.$i,$row->ecode);
                                    $excel->getActiveSheet()->setCellValue('D'.$i,$row->full_name);
                                    $excel->getActiveSheet()->setCellValue('E'.$i,$row->sss);
                                    $excel->getActiveSheet()->getStyle('F'.$i.':'.'I'.$i)->getNumberFormat()->setFormatCode('###,##0.00;(###,##0.00)');                    
                                    $excel->getActiveSheet()->setCellValue('F'.$i,number_format($row->sss_deduction_employee,2));
                                    $excel->getActiveSheet()->setCellValue('G'.$i,number_format($row->sss_deduction_employer,2));
                                    $excel->getActiveSheet()->setCellValue('H'.$i,number_format($row->sss_deduction_ec,2));
                                    $excel->getActiveSheet()->setCellValue('I'.$i,number_format($row_total,2));

                                    $total_employer+=$row->sss_deduction_employer;
                                    $total_ec+=$row->sss_deduction_ec;
                                    $grand_total+=$row_total;
                                    $count++;
                            }}}
                            else{ 

                                    $excel->getActiveSheet()
                                            ->getStyle('A'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  

                                    $excel->getActiveSheet()->mergeCells('A'.$i.':'.'I'.$i);
                                    $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');

                            }

                                $i++;

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('F'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('G'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('H'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()
                                        ->getStyle('I'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Total:');

                                $excel->getActiveSheet()->getStyle('F'.$i.':'.'I'.$i)->getNumberFormat()->setFormatCode('###,##0.00;(###,##0.00)');                    
                                $excel->getActiveSheet()->setCellValue('F'.$i,number_format($total_sss,2));
                                $excel->getActiveSheet()->setCellValue('G'.$i,number_format($total_employer,2));
                                $excel->getActiveSheet()->setCellValue('H'.$i,number_format($total_ec,2));
                                $excel->getActiveSheet()->setCellValue('I'.$i,number_format($grand_total,2));

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."SSS REPORT.xlsx".'');
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
                        $data = ob_get_clean();

                            $file_name='SSS Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'SSS Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'SSS Report'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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


                case 'bday-list': 
                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $data['bdaylist']=$this->Employee_model->get_bday($filter_value);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/birthday_celebrant_html',$data,TRUE);
                break;

                case 'export-bday-list': 
                        $excel = $this->excel;
                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $bdaylist=$this->Employee_model->get_bday($filter_value);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Birthday List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');

                        $excel->getActiveSheet()->setCellValue('A6','Birthday List')
                                                ->setCellValue('A7',$month.' Celebrants');

                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');

                        $excel->getActiveSheet()->setCellValue('A9','#');
                        $excel->getActiveSheet()->setCellValue('B9','Name');
                        $excel->getActiveSheet()->setCellValue('C9','Department');
                        $excel->getActiveSheet()->setCellValue('D9','Birthday');

                        $i =10;
                        $count=1;

                            if(isset($bdaylist)){
                                foreach($bdaylist as $row){

                                    $excel->getActiveSheet()
                                            ->getStyle('A'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('B'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('C'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('D'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);     

                                    $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,$row->fullname);
                                    $excel->getActiveSheet()->setCellValue('C'.$i,$row->department);
                                    $excel->getActiveSheet()->setCellValue('D'.$i,date('F d, Y', strtotime($row->birthdate)));
                           
                            $i++;     
                            $count++;
                            ; } }



                        
                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Birthday List.xlsx".'');
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

                case 'email-bday-list': 
                        $excel = $this->excel;
                        $m_user = $this->Users_model;

                        $id = $this->session->user_id;
                        $email = $m_user->get_email($id);

                        $m_admin = $this->GeneralSettings_model;
                        $admin = $m_admin->get_list(1);

                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $bdaylist=$this->Employee_model->get_bday($filter_value);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button

                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Birthday List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');

                        $excel->getActiveSheet()->setCellValue('A6','Birthday List')
                                                ->setCellValue('A7',$month.' Celebrants');

                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('35');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');

                        $excel->getActiveSheet()->setCellValue('A9','#');
                        $excel->getActiveSheet()->setCellValue('B9','Name');
                        $excel->getActiveSheet()->setCellValue('C9','Department');
                        $excel->getActiveSheet()->setCellValue('D9','Birthday');

                        $i =10;
                        $count=1;

                            if(isset($bdaylist)){
                                foreach($bdaylist as $row){

                                    $excel->getActiveSheet()
                                            ->getStyle('A'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('B'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('C'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                                    $excel->getActiveSheet()
                                            ->getStyle('D'.$i)
                                            ->getAlignment()
                                            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);     

                                    $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                                    $excel->getActiveSheet()->setCellValue('B'.$i,$row->fullname);
                                    $excel->getActiveSheet()->setCellValue('C'.$i,$row->department);
                                    $excel->getActiveSheet()->setCellValue('D'.$i,date('F d, Y', strtotime($row->birthdate)));
                           
                            $i++;     
                            $count++;
                            ; } }


                        
                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Birthday List.xlsx".'');
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
                        $data = ob_get_clean();

                            $file_name='Birthday List Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $admin[0]->email_address, 
                                'smtp_pass' => $admin[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $admin[0]->email_address,
                                'name' => $admin[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'Birthday List Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Birthday List Report'.'</ br><p>Sent By: '. '<b>'.$admin[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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


                case 'expiring_personnel': 
                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $data['personnel']=$this->Employee_model->getExpiringPersonnel('Month',2,$filter_value,$filter_value2);
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        $data['year']=$filter_value2;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/expiring_personnel_html',$data,TRUE);
                break;

                case 'export_expiring_personnel': 
                        $excel = $this->excel;
                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $personnel=$this->Employee_model->getExpiringPersonnel('Month',2,$filter_value,$filter_value2);
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;
                        $year=$filter_value2;
                        
                        $excel->setActiveSheetIndex(0);

                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Expiring Personnel");
                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address);

                        $excel->getActiveSheet()->mergeCells('A3:E3');

                        $excel->getActiveSheet()->getStyle('A4')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A4','Expiring Personnel for month of '.$month.' '.$year);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('30');


                        $excel->getActiveSheet()->mergeCells('A5:E5');
                        $excel->getActiveSheet()->getStyle('A6'.':'.'E6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A6','#');
                        $excel->getActiveSheet()->setCellValue('B6','Name');
                        $excel->getActiveSheet()->setCellValue('C6','Department');
                        $excel->getActiveSheet()->setCellValue('D6','Date Expire');
                        $excel->getActiveSheet()->setCellValue('E6','Date Hired');
                        
                        $i = 7;


                        if(count($personnel)!=0 || count($personnel)!=null){
                        $count=1;
                            foreach($personnel as $row){

                                $excel->getActiveSheet()
                                    ->getStyle('A'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                                $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                                $excel->getActiveSheet()->setCellValue('B'.$i,$row->fullname);
                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->department);
                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->date_expire);
                                $excel->getActiveSheet()->setCellValue('E'.$i,$row->date_hired);
                                $i++;
                                $count++; 
                            } 
                        }else{
                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);     
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);                       
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data available');
                        }                         

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Expiring Personnel.xlsx".'');
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

                case 'email_expiring_personnel': 
                        $excel = $this->excel;
                        $m_user = $this->Users_model;
                        $id = $this->session->user_id;
                        $email = $m_user->get_email($id);

                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $personnel=$this->Employee_model->getExpiringPersonnel('Month',2,$filter_value,$filter_value2);
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $company=$getcompany[0];
                        $month=$month;
                        $year=$filter_value2;
                        
                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Expiring Personnel");
                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address);

                        $excel->getActiveSheet()->mergeCells('A3:E3');

                        $excel->getActiveSheet()->getStyle('A4')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A4','Expiring Personnel for month of '.$month.' '.$year);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('30');


                        $excel->getActiveSheet()->mergeCells('A5:E5');
                        $excel->getActiveSheet()->getStyle('A6'.':'.'E6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A6','#');
                        $excel->getActiveSheet()->setCellValue('B6','Name');
                        $excel->getActiveSheet()->setCellValue('C6','Department');
                        $excel->getActiveSheet()->setCellValue('D6','Date Expire');
                        $excel->getActiveSheet()->setCellValue('E6','Date Hired');
                        
                        $i = 7;


                        if(count($personnel)!=0 || count($personnel)!=null){
                        $count=1;
                            foreach($personnel as $row){

                                $excel->getActiveSheet()
                                      ->getStyle('A'.$i)
                                      ->getAlignment()
                                      ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                                $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                                $excel->getActiveSheet()->setCellValue('B'.$i,$row->fullname);
                                $excel->getActiveSheet()->setCellValue('C'.$i,$row->department);
                                $excel->getActiveSheet()->setCellValue('D'.$i,$row->date_expire);
                                $excel->getActiveSheet()->setCellValue('E'.$i,$row->date_hired);
                                $i++;

                        $count++; } }else{
                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);     
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);                       
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data available');
                        }                         

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Expiring Personnel.xlsx".'');
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
                        $data = ob_get_clean();

                            $file_name='Expiring Personnel Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'Expiring Personnel Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Expiring Personnel Report'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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

                case 'expiring_personnel': 
                        if($filter_value==1){
                             $month="January";
                        }
                        else if($filter_value==2){
                             $month="February";
                        }
                        else if($filter_value==3){
                             $month="March";
                        }
                        else if($filter_value==4){
                            $month="April";
                        }
                        else if($filter_value==5){
                             $month="May";
                        }
                        else if($filter_value==6){
                             $month="June";
                        }
                        else if($filter_value==7){
                             $month="July";
                        }
                        else if($filter_value==8){
                             $month="August";
                        }
                        else if($filter_value==9){
                            $month="September";
                        }
                        else if($filter_value==10){
                             $month="October";
                        }
                        else if($filter_value==11){
                             $month="November";
                        }
                        else if($filter_value==12){
                             $month="December";
                        }

                        $data['personnel']=$this->Employee_model->getExpiringPersonnel('Month',2,$filter_value,$filter_value2);
                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        $data['year']=$filter_value2;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/expiring_personnel_html',$data,TRUE);
                break;

                case 'plantilla':
                    $data['department']=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $data['company']=$getcompany[0];
                    echo $this->load->view('template/plantilla_html',$data,TRUE);
                break;

                case 'export-plantilla':
                    $excel = $this->excel;
                    $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $company=$getcompany[0];

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Plantilla Report");
                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');
                        $excel->getActiveSheet()->mergeCells('A3:E3');
                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);


                        $excel->getActiveSheet()->mergeCells('A5:E5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:E6');
                        $excel->getActiveSheet()->mergeCells('A7:E7');

                        $excel->getActiveSheet()->setCellValue('A6','Plantilla (Employee Summary)')
                                                ->setCellValue('A7','Date : '.date('m-d-Y'));

                        $excel->getActiveSheet()->mergeCells('A8:E8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','Group');
                        $excel->getActiveSheet()->setCellValue('C9','Active');
                        $excel->getActiveSheet()->setCellValue('D9','Inactive');
                        $excel->getActiveSheet()->setCellValue('E9','On Leave');

                        $i = 10;
                                                          
                             foreach($department as $deptrow){

                                    $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department);
                                    $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->select('*,ref_department.ref_department_id,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name, 

                                    SUM(IF(employee_list.is_retired = 0, 1, 0))  as active, SUM(IF(employee_list.is_retired = 1, 1, 0)) as inactive, SUM(IF(employee_list.on_leave = 1, 1, 0)) as onleave');
                                    
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties','emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_department','ref_department.ref_department_id = emp_rates_duties.ref_department_id');
                                    $this->db->join('refgroup','refgroup.group_id = emp_rates_duties.group_id');
                                    $this->db->group_by("refgroup.group_id,ref_department.ref_department_id");
                                    $this->db->order_by("refgroup.group_id", "ASC");
                                    $query = $this->db->get();
                                        $i++;
                                        $count=1;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$row->group_desc);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,number_format($row->active));
                                                $excel->getActiveSheet()->setCellValue('D'.$i,number_format($row->inactive));
                                                $excel->getActiveSheet()->setCellValue('E'.$i,number_format($row->onleave));
                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{

                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);                                              
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }

                                }
                        
                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Plantilla Report.xlsx".'');
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

                case 'email-plantilla':
                    $excel = $this->excel;
                    $m_user = $this->Users_model;
                    $id = $this->session->user_id;
                    $email = $m_user->get_email($id);

                    $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $company=$getcompany[0];

                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Plantilla Report");
                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');
                        $excel->getActiveSheet()->mergeCells('A3:E3');
                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);


                        $excel->getActiveSheet()->mergeCells('A5:E5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:E6');
                        $excel->getActiveSheet()->mergeCells('A7:E7');

                        $excel->getActiveSheet()->setCellValue('A6','Plantilla (Employee Summary)')
                                                ->setCellValue('A7','Date : '.date('m-d-Y'));

                        $excel->getActiveSheet()->mergeCells('A8:E8');

                        $excel->getActiveSheet()->getStyle('A9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D9')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E9')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('25');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A9','Department');
                        $excel->getActiveSheet()->setCellValue('B9','Group');
                        $excel->getActiveSheet()->setCellValue('C9','Active');
                        $excel->getActiveSheet()->setCellValue('D9','Inactive');
                        $excel->getActiveSheet()->setCellValue('E9','On Leave');

                        $i = 10;
                                                          
                             foreach($department as $deptrow){

                                    $excel->getActiveSheet()->setCellValue('A'.$i,$deptrow->department);
                                    $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);
                                    
                                    $this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
                                    $this->db->where('emp_rates_duties.active_rates_duties', 1);
                                    $this->db->where('employee_list.is_deleted', 0);
                                    $this->db->select('*,ref_department.ref_department_id,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name, 

                                    SUM(IF(employee_list.is_retired = 0, 1, 0))  as active, SUM(IF(employee_list.is_retired = 1, 1, 0)) as inactive, SUM(IF(employee_list.on_leave = 1, 1, 0)) as onleave');
                                    
                                    $this->db->from('employee_list');
                                    $this->db->join('emp_rates_duties','emp_rates_duties.employee_id = employee_list.employee_id');
                                    $this->db->join('ref_department','ref_department.ref_department_id = emp_rates_duties.ref_department_id');
                                    $this->db->join('refgroup','refgroup.group_id = emp_rates_duties.group_id');
                                    $this->db->group_by("refgroup.group_id,ref_department.ref_department_id");
                                    $this->db->order_by("refgroup.group_id", "ASC");
                                    $query = $this->db->get();
                                        $i++;
                                        $count=1;
                                        if($query->num_rows() != 0){
                                            foreach($query->result() as $row){
                                                $excel->getActiveSheet()->setCellValue('A'.$i);
                                                $excel->getActiveSheet()->setCellValue('B'.$i,$row->group_desc);
                                                $excel->getActiveSheet()->setCellValue('C'.$i,number_format($row->active));
                                                $excel->getActiveSheet()->setCellValue('D'.$i,number_format($row->inactive));
                                                $excel->getActiveSheet()->setCellValue('E'.$i,number_format($row->onleave));
                                                $count++;
                                                $i++;
                                            }
                                        }
                                        else{

                                                $excel->getActiveSheet()
                                                        ->getStyle('A'.$i)
                                                        ->getAlignment()
                                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);                                              
                                                $excel->getActiveSheet()->setCellValue('A'.$i,'No Result');
                                                $i++;
                                        }

                                }
                        
                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Plantilla Report.xlsx".'');
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
                        $data = ob_get_clean();

                            $file_name='Plantilla Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = 'Plantilla Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Plantilla Report'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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

                case 'record201':

                    $data['employee']=$this->Employee_model->get_list($filter_value,'CONCAT(first_name," ",middle_name," ",last_name) as fullname, CONCAT(address_one," ", address_two) as fulladdress, cell_number, telphone_number, sss, phil_health, pag_ibig, bank_account, birthdate, tin, image_name');
                    $data['duties'] = $this->RatesDuties_model->get_employee_rate($filter_value);
                    $data['memos'] = $this->Memorandum_model->get_employee_memos($filter_value);
                    $data['commendation'] = $this->Commendation_model->get_employee_commendation($filter_value);
                    $data['seminars'] = $this->SeminarsTraining_model->get_employee_seminars($filter_value);
                    $data['work_experience'] = $this->RefWorkExperience_model->get_employee_workexperience($filter_value);

                    $data['department']=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $data['company']=$getcompany[0];
                    echo $this->load->view('template/201record_html',$data,TRUE);

                break;

                case 'export-record201':
                    $excel = $this->excel;
                    $employee=$this->Employee_model->get_list($filter_value,'CONCAT(first_name," ",middle_name," ",last_name) as fullname, CONCAT(address_one," ", address_two) as fulladdress, cell_number, telphone_number, sss, phil_health, pag_ibig, bank_account, birthdate, tin, image_name');
                    $duties = $this->RatesDuties_model->get_employee_rate($filter_value);
                    $memos = $this->Memorandum_model->get_employee_memos($filter_value);
                    $commendation = $this->Commendation_model->get_employee_commendation($filter_value);
                    $seminars = $this->SeminarsTraining_model->get_employee_seminars($filter_value);
                    $work_experience = $this->RefWorkExperience_model->get_employee_workexperience($filter_value);

                    $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $company=$getcompany[0];

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("201 Record Report");

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('40');

                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');
                        $excel->getActiveSheet()->mergeCells('A3:E3'); 
                        $excel->getActiveSheet()->mergeCells('A4:E4');
                        $excel->getActiveSheet()->mergeCells('A5:E5');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);


                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A6','Personnel 201 Record')
                                                ->getStyle('A6')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->mergeCells('A7:E7');
                        
                        $default_border = array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('rgb'=>'CFD8DC')
                        );

                        $style_header = array(
                            'borders' => array(
                                'bottom' => $default_border,
                                'left' => $default_border,
                                'top' => $default_border,
                                'right' => $default_border,
                            ),
                            'fill' => array(
                                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                                'color' => array('rgb'=>'CFD8DC'),
                            ),
                            'font' => array(
                                'bold' => true,
                            )
                        );
                         
                        $excel->getActiveSheet()->mergeCells('A6:E6');

                        $excel->getActiveSheet()->setCellValue('A8','Personal Information')
                                                ->getStyle('A8:E8')->applyFromArray($style_header);

                        $i = 9;
                        $fullname = "";
                        foreach($employee as $row){
                            $fullname = $row->fullname;

                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                            $excel->getActiveSheet()->setCellValue('A'.$i,'Name: '.$row->fullname);

                            $i++;

                            if ($row->fulladdress == ""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Address: '.'N/A');
                            }else{
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Address: '.$row->fulladdress);
                            }

                            $i++;

                            if ($row->cell_number == "" AND $row->telphone_number ==""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.'N/A');
                            }

                            else if ($row->cell_number > 0){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.$row->cell_number);
                            }

                            else if  ($row->telphone_number > 0){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.' / '.$row->telphone_number);
                            }else{
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.$row->telphone_number);
                            }


                            if  ($row->birthdate == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Birthdate: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Birthdate: '.date('m-d-Y', strtotime($row->birthdate)));
                            }

                            $i++;
                            if  ($row->sss == ""){
                                $excel->getActiveSheet()->setCellValue('A'.$i,'SSS #: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('A'.$i,'SSS #: '.$row->sss);                                
                            }

                            if  ($row->tin == ""){
                                $excel->getActiveSheet()->setCellValue('B'.$i,'TIN #: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('B'.$i,'TIN #: '.$row->tin);                                
                            }

                            if  ($row->phil_health == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'PhilHealth: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->setCellValue('C'.$i,'PhilHealth: '.$row->phil_health);                                
                            }

                            $i++;

                            if  ($row->pag_ibig == ""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Pagibig: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Pagibig: '.$row->pag_ibig);                                
                            }                   

                            if  ($row->bank_account == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Bank Account: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Bank Account: '.$row->bank_account);                                
                            }
                            $i++;
                        }
                            
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Contract Information')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);

                        $i++;

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('40');

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Contract');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Position');                                
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Rate');                                
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Rate Type');          

                        $i++;                    

                        if (count($duties) > 0){
                        foreach($duties as $rowd){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowd->date_start)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowd->position);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,number_format($rowd->salary_reg_rates,2)); 
                                $excel->getActiveSheet()
                                        ->getStyle('C'.$i)
                                        ->getNumberFormat()->setFormatCode('#,##0.00');
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rowd->payment_type);   
                                $i++;                             
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);       
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');    
                                $i++;   
                        }                    
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Memos (Disciplines)')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Violation');                          
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Disciplinary Action');                    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Action Taken');  

                        $i++;

                        if (count($memos) > 0){
                        foreach($memos as $rowm){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowm->date_memo)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowm->remarks);                      
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rowm->disciplinary_action_policy);
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rowm->action_taken);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }                        

 
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Commendation')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'C'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Memo');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Action');    

                        $i++;

                        if (count($commendation) > 0){
                        foreach($commendation as $rowc){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowc->date_commendation)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowc->memo_number);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rowc->remarks);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');   
                                $i++;    
                        }      


                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Seminars & Training')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Course Taken (Title)');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Certificate / Achievement');    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Venue');    

                        $i++;

                        if (count($seminars) > 0){
                        foreach($seminars as $rows){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rows->date_from)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rows->seminar_title);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rows->certificate);  
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rows->venue);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }    


                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Work Experience')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Previous Company');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Job Title');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'From Date');    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'To Date');     
                        $excel->getActiveSheet()->setCellValue('E'.$i,'Job Description');    

                        $i++;

                        if (count($work_experience) > 0){
                        foreach($work_experience as $rows){
                                $excel->getActiveSheet()->setCellValue('A'.$i,$rows->company);
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rows->job_title);
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rows->from_date);  
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rows->to_date);   
                                $excel->getActiveSheet()->setCellValue('E'.$i,$rows->job_description);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }    


                        $filename = $fullname.' - 201 Record Report.xlsx';

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='.$filename);
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

                case 'email-record201':
                    $excel = $this->excel;
                    $m_user = $this->Users_model;
                    $id = $this->session->user_id;
                    $email = $m_user->get_email($id);

                    $employee=$this->Employee_model->get_list($filter_value,'CONCAT(first_name," ",middle_name," ",last_name) as fullname, CONCAT(address_one," ", address_two) as fulladdress, cell_number, telphone_number, sss, phil_health, pag_ibig, bank_account, birthdate, tin, image_name');
                    $duties = $this->RatesDuties_model->get_employee_rate($filter_value);
                    $memos = $this->Memorandum_model->get_employee_memos($filter_value);
                    $commendation = $this->Commendation_model->get_employee_commendation($filter_value);
                    $seminars = $this->SeminarsTraining_model->get_employee_seminars($filter_value);
                    $work_experience = $this->RefWorkExperience_model->get_employee_workexperience($filter_value);

                    $department=$this->RefDepartment_model->get_list(
                        array('ref_department.is_deleted'=>FALSE),
                        'ref_department.ref_department_id,ref_department.department'
                    );
                    
                    $getcompany=$this->GeneralSettings_model->get_list(
                    null,
                    'company_setup.*'
                    );
                    $company=$getcompany[0];

                        ob_start();
                        
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("201 Record Report");

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('40');

                        $excel->getActiveSheet()->mergeCells('A1:E1');
                        $excel->getActiveSheet()->mergeCells('A2:E2');
                        $excel->getActiveSheet()->mergeCells('A3:E3'); 
                        $excel->getActiveSheet()->mergeCells('A4:E4');
                        $excel->getActiveSheet()->mergeCells('A5:E5');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);


                        $excel->getActiveSheet()->mergeCells('A4:E4');

                        $excel->getActiveSheet()->setCellValue('A6','Personnel 201 Record')
                                                ->getStyle('A6')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->mergeCells('A7:E7');
                        
                        $default_border = array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('rgb'=>'CFD8DC')
                        );

                        $style_header = array(
                            'borders' => array(
                                'bottom' => $default_border,
                                'left' => $default_border,
                                'top' => $default_border,
                                'right' => $default_border,
                            ),
                            'fill' => array(
                                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                                'color' => array('rgb'=>'CFD8DC'),
                            ),
                            'font' => array(
                                'bold' => true,
                            )
                        );
                         
                        $excel->getActiveSheet()->mergeCells('A6:E6');

                        $excel->getActiveSheet()->setCellValue('A8','Personal Information')
                                                ->getStyle('A8:E8')->applyFromArray($style_header);

                        $i = 9;
                        $fullname = "";
                        foreach($employee as $row){
                            $fullname = $row->fullname;

                            $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                            $excel->getActiveSheet()->setCellValue('A'.$i,'Name: '.$row->fullname);

                            $i++;

                            if ($row->fulladdress == ""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Address: '.'N/A');
                            }else{
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Address: '.$row->fulladdress);
                            }

                            $i++;

                            if ($row->cell_number == "" AND $row->telphone_number ==""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.'N/A');
                            }

                            else if ($row->cell_number > 0){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.$row->cell_number);
                            }

                            else if  ($row->telphone_number > 0){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.' / '.$row->telphone_number);
                            }else{
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Tel # (Mobile): '.$row->telphone_number);
                            }


                            if  ($row->birthdate == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Birthdate: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Birthdate: '.date('m-d-Y', strtotime($row->birthdate)));
                            }

                            $i++;
                            if  ($row->sss == ""){
                                $excel->getActiveSheet()->setCellValue('A'.$i,'SSS #: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('A'.$i,'SSS #: '.$row->sss);                                
                            }

                            if  ($row->tin == ""){
                                $excel->getActiveSheet()->setCellValue('B'.$i,'TIN #: '.'N/A');                                
                            }else{
                                $excel->getActiveSheet()->setCellValue('B'.$i,'TIN #: '.$row->tin);                                
                            }

                            if  ($row->phil_health == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'PhilHealth: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->setCellValue('C'.$i,'PhilHealth: '.$row->phil_health);                                
                            }

                            $i++;

                            if  ($row->pag_ibig == ""){
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Pagibig: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'B'.$i);
                                $excel->getActiveSheet()->setCellValue('A'.$i,'Pagibig: '.$row->pag_ibig);                                
                            }                   

                            if  ($row->bank_account == ""){
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Bank Account: '.'N/A');                                
                            }else{ 
                                $excel->getActiveSheet()->setCellValue('C'.$i,'Bank Account: '.$row->bank_account);                                
                            }
                            $i++;
                        }
                            
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Contract Information')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);

                        $i++;

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('40');

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Contract');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Position');                                
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Rate');                                
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Rate Type');          

                        $i++;                    

                        if (count($duties) > 0){
                        foreach($duties as $rowd){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowd->date_start)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowd->position);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,number_format($rowd->salary_reg_rates,2)); 
                                $excel->getActiveSheet()
                                        ->getStyle('C'.$i)
                                        ->getNumberFormat()->setFormatCode('#,##0.00');
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rowd->payment_type);   
                                $i++;                             
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);       
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');    
                                $i++;   
                        }                    
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Memos (Disciplines)')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Violation');                          
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Disciplinary Action');                    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Action Taken');  

                        $i++;

                        if (count($memos) > 0){
                        foreach($memos as $rowm){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowm->date_memo)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowm->remarks);                      
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rowm->disciplinary_action_policy);
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rowm->action_taken);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }                        

 
                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Commendation')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'C'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Memo');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Action');    

                        $i++;

                        if (count($commendation) > 0){
                        foreach($commendation as $rowc){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rowc->date_commendation)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rowc->memo_number);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rowc->remarks);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');   
                                $i++;    
                        }      


                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Seminars & Training')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Date');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Course Taken (Title)');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'Certificate / Achievement');    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'Venue');    

                        $i++;

                        if (count($seminars) > 0){
                        foreach($seminars as $rows){
                                $excel->getActiveSheet()->setCellValue('A'.$i,date('m-d-Y',strtotime($rows->date_from)));
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rows->seminar_title);                                
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rows->certificate);  
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rows->venue);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }    


                        $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);

                        $excel->getActiveSheet()->setCellValue('A'.$i,'Work Experience')
                                                ->getStyle('A'.$i.':'.'E'.$i)->applyFromArray($style_header);
                        $i++;

                        $excel->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->setCellValue('A'.$i,'Previous Company');                                
                        $excel->getActiveSheet()->setCellValue('B'.$i,'Job Title');      
                        $excel->getActiveSheet()->setCellValue('C'.$i,'From Date');    
                        $excel->getActiveSheet()->setCellValue('D'.$i,'To Date');     
                        $excel->getActiveSheet()->setCellValue('E'.$i,'Job Description');    

                        $i++;

                        if (count($work_experience) > 0){
                        foreach($work_experience as $rows){
                                $excel->getActiveSheet()->setCellValue('A'.$i,$rows->company);
                                $excel->getActiveSheet()->setCellValue('B'.$i,$rows->job_title);
                                $excel->getActiveSheet()->setCellValue('C'.$i,$rows->from_date);  
                                $excel->getActiveSheet()->setCellValue('D'.$i,$rows->to_date);   
                                $excel->getActiveSheet()->setCellValue('E'.$i,$rows->job_description);  
                                $i++;
                        }
                        }else{

                                $excel->getActiveSheet()
                                        ->getStyle('A'.$i)
                                        ->getAlignment()
                                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                                $excel->getActiveSheet()->mergeCells('A'.$i.':'.'E'.$i);      
                                $excel->getActiveSheet()->setCellValue('A'.$i,'No data Available');       
                                $i++;
                        }    


                        $filename = $fullname.' - 201 Record Report.xlsx';

                        
                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='.$filename);
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
                        $data = ob_get_clean();

                            $file_name= $fullname.' - 201 Record Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $getcompany[0]->email_address, 
                                'smtp_pass' => $getcompany[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $getcompany[0]->email_address,
                                'name' => $getcompany[0]->company_name
                            );

                            $to = array($email[0]->user_email);
                            $subject = $fullname.' - 201 Record Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .$fullname.' - 201 Record'.'</ br><p>Sent By: '. '<b>'.$getcompany[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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


                case 'philhealth-list': //
                        //$data['month']=$filter_value;
                        //$data['branch']=$filter_value2;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }


                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=2 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=2 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=2 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=2 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        $data['sss_report']=$this->DailyTimeRecord_model->get_list(
                        $filter,
                        'employee_list.phil_health,employee_list.ecode,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,ROUND(pay_slip_deductions.deduction_amount,2) as philhealth_deduction,daily_time_record.employee_id,daily_time_record.pay_period_id,pay_slip.pay_slip_id,refpayperiod.month_id,pay_slip_deductions.deduction_amount,refpayperiod.pay_period_start, CONCAT(refpayperiod.pay_period_start," ~ ",refpayperiod.pay_period_end) as period',
                        array(
                             array('pay_slip','pay_slip.dtr_id=daily_time_record.dtr_id','left'),
                             array('refpayperiod','refpayperiod.pay_period_id=daily_time_record.pay_period_id','left'),
                             array('pay_slip_deductions','pay_slip_deductions.pay_slip_id=pay_slip.pay_slip_id','left'),
                             array('emp_rates_duties','emp_rates_duties.employee_id=daily_time_record.employee_id','left'),
                             array('employee_list','employee_list.employee_id=daily_time_record.employee_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );
                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                        if($type=='fullview'||$type==null){
                            echo $this->load->view('template/philhealth_list_html',$data,TRUE);
                            //echo $this->load->view('template/dr_content_menus',$data,TRUE);
                        }

                        //show only inside grid without menu button
                        if($type=='contentview'){
                            echo $this->load->view('template/philhealth_list_html',$data,TRUE);
                        }


                        //download pdf
                        if($type=='pdf'){
                            $pdfFilePath = "PhilHealth-".$data['branch']."-".$month.".pdf"; //generate filename base on id
                            $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                            $content=$this->load->view('template/philhealth_list',$data,TRUE); //load the template
                            $pdf->setFooter('{PAGENO}');
                            $pdf->WriteHTML($content);
                            //download it.
                            $pdf->Output($pdfFilePath,"D");

                        }

                        //preview on browser
                        if($type=='preview'){
                            $pdfFilePath = "PhilHealth-".$data['branch']."-".$month.".pdf"; //generate filename base on id
                            $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                            $content=$this->load->view('template/philhealth_list',$data,TRUE); //load the template
                            $pdf->setFooter('{PAGENO}');
                            $pdf->WriteHTML($content);
                            //download it.
                            $pdf->SetJS('this.print();');
                            $pdf->Output();
                        }

                        break;

                case 'pagibig-list': //
                        //$data['month']=$filter_value;
                        //$data['branch']=$filter_value2;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }


                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=3 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=3 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=3 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=3 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        $data['sss_report']=$this->DailyTimeRecord_model->get_list(
                        $filter,
                        'employee_list.pag_ibig,employee_list.ecode,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,ROUND(pay_slip_deductions.deduction_amount,2) as pagibig_deduction,daily_time_record.employee_id,daily_time_record.pay_period_id,pay_slip.pay_slip_id,refpayperiod.month_id,pay_slip_deductions.deduction_amount,refpayperiod.pay_period_start',
                        array(
                             array('pay_slip','pay_slip.dtr_id=daily_time_record.dtr_id','left'),
                             array('refpayperiod','refpayperiod.pay_period_id=daily_time_record.pay_period_id','left'),
                             array('pay_slip_deductions','pay_slip_deductions.pay_slip_id=pay_slip.pay_slip_id','left'),
                             array('emp_rates_duties','emp_rates_duties.employee_id=daily_time_record.employee_id','left'),
                             array('employee_list','employee_list.employee_id=daily_time_record.employee_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );
                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;
                        //echo json_encode($data);
                        //show only inside grid with menu button
                            echo $this->load->view('template/pagibig_list_html',$data,TRUE);

                        break;

            case 'export-personnel-list':
                        $excel=$this->excel;
                        if($filter_value=="all" AND $filter_value2=="all"){
                        $filter=array('emp_rates_duties.active_rates_duties'=>TRUE,'employee_list.is_deleted'=>FALSE);
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value);
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        $employee_dept=$this->Employee_model->get_list(
                        $filter,
                        'employee_list.*,ref_department.department,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,emp_rates_duties.date_start',
                        array(
                             array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                             array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                             array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                             array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        if($filter_value=="all"){
                            $dept="All Department";
                        }
                        else{
                            $getdept=$this->RefDepartment_model->get_list(
                            $filter_value,
                            'ref_department.department,'
                            );
                            $dept=$getdept[0]->department;
                        }

                        if($filter_value2=="all"){
                            $branch="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $branch=$getbranch[0]->branch;
                        }
                        //echo $data['dept'];

                        $company=$getcompany[0];

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Personnel List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A8')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');
                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->setCellValue('A6','Personnel List')
                                                ->setCellValue('A7','Department: '.$dept)
                                                ->setCellValue('A8','Branch: '.$branch);

                        $excel->getActiveSheet()->mergeCells('A9:F9');

                        $excel->getActiveSheet()->getStyle('A10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F10')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A10','#');
                        $excel->getActiveSheet()->setCellValue('B10','E-CODE');
                        $excel->getActiveSheet()->setCellValue('C10','Name');
                        $excel->getActiveSheet()->setCellValue('D10','Position');
                        $excel->getActiveSheet()->setCellValue('E10','Birthdate');
                        $excel->getActiveSheet()->setCellValue('F10','Retired?');

                        $i = 12;
                        $count=1;
                        $i--;
                        foreach($employee_dept as $result){


                            $excel->getActiveSheet()
                                    ->getStyle('A'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('B'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('C'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('D'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('E'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('F'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                                               

                            $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                            $excel->getActiveSheet()->setCellValue('B'.$i,$result->ecode);
                            $excel->getActiveSheet()->setCellValue('C'.$i,$result->full_name);
                            $excel->getActiveSheet()->setCellValue('D'.$i,$result->position);
                            $excel->getActiveSheet()->setCellValue('E'.$i,$result->birthdate);
                            $excel->getActiveSheet()->setCellValue('F'.$i,($result->is_retired == 1 ? 'YES' : 'NO'));

                            $count++;               
                            $i++;

                        }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Personnel List.xlsx".'');
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

            case 'email-personnel-list':
                        $excel=$this->excel;

                        $m_admin=$this->GeneralSettings_model;
                        $admin=$m_admin->get_list(1);

                        $id = $this->session->user_id;

                        $m_user=$this->Users_model;

                        $email=$m_user->get_email($id);

                        if($filter_value=="all" AND $filter_value2=="all"){
                        $filter=array('emp_rates_duties.active_rates_duties'=>TRUE,'employee_list.is_deleted'=>FALSE);
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value);
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter=array('employee_list.is_deleted'=>FALSE,'emp_rates_duties.active_rates_duties'=>TRUE,'ref_department.ref_department_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value2);
                        }
                        $employee_dept=$this->Employee_model->get_list(
                        $filter,
                        'employee_list.*,ref_department.department,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,emp_rates_duties.date_start',
                        array(
                             array('emp_rates_duties','emp_rates_duties.employee_id=employee_list.employee_id','left'),
                             array('ref_department','ref_department.ref_department_id=emp_rates_duties.ref_department_id','left'),
                             array('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id','left'),
                             array('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        if($filter_value=="all"){
                            $dept="All Department";
                        }
                        else{
                        $getdept=$this->RefDepartment_model->get_list(
                        $filter_value,
                        'ref_department.department,'
                        );
                        $dept=$getdept[0]->department;
                        }
                        if($filter_value2=="all"){
                            $branch="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value2,
                        'ref_branch.branch,'
                        );
                        $branch=$getbranch[0]->branch;
                        }
                        //echo $data['dept'];

                        $company=$getcompany[0];

                        ob_start();
                                               $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Personnel List");
                        $excel->getActiveSheet()->mergeCells('A1:F1');
                        $excel->getActiveSheet()->mergeCells('A2:F2');
                        $excel->getActiveSheet()->mergeCells('A3:F3');
                        $excel->getActiveSheet()->mergeCells('A4:F4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:F5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A8')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:F6');
                        $excel->getActiveSheet()->mergeCells('A7:F7');
                        $excel->getActiveSheet()->mergeCells('A8:F8');

                        $excel->getActiveSheet()->setCellValue('A6','Personnel List')
                                                ->setCellValue('A7','Department: '.$dept)
                                                ->setCellValue('A8','Branch: '.$branch);

                        $excel->getActiveSheet()->mergeCells('A9:F9');

                        $excel->getActiveSheet()->getStyle('A10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F10')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('15');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('40');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('30');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('10');

                        $excel->getActiveSheet()->setCellValue('A10','#');
                        $excel->getActiveSheet()->setCellValue('B10','E-CODE');
                        $excel->getActiveSheet()->setCellValue('C10','Name');
                        $excel->getActiveSheet()->setCellValue('D10','Position');
                        $excel->getActiveSheet()->setCellValue('E10','Birthdate');
                        $excel->getActiveSheet()->setCellValue('F10','Retired?');

                        $i = 12;
                        $count=1;
                        $i--;
                        foreach($employee_dept as $result){


                            $excel->getActiveSheet()
                                    ->getStyle('A'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('B'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('C'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('D'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('E'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('F'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);                                                               

                            $excel->getActiveSheet()->setCellValue('A'.$i,$count);
                            $excel->getActiveSheet()->setCellValue('B'.$i,$result->ecode);
                            $excel->getActiveSheet()->setCellValue('C'.$i,$result->full_name);
                            $excel->getActiveSheet()->setCellValue('D'.$i,$result->position);
                            $excel->getActiveSheet()->setCellValue('E'.$i,$result->birthdate);
                            $excel->getActiveSheet()->setCellValue('F'.$i,($result->is_retired == 1 ? 'YES' : 'NO'));

                            $count++;               
                            $i++;

                        }

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='."Personnel List.xlsx".'');
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

                        $data = ob_get_clean();

                            $file_name='Personnel List Report '.date('Y-m-d h:i:A', now());
                            $excelFilePath = $file_name.".xlsx"; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $admin[0]->email_address, 
                                'smtp_pass' => $admin[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $admin[0]->email_address,
                                'name' => $admin[0]->company_name
                            );

                            $to = array($email[0]->user_email);

                            $subject = 'Personnel List Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Personnel List Report '.'</ br><p>Sent By: '. '<b>'.$admin[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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

                case 'wtax-list': //
                        //$data['month']=$filter_value;
                        //$data['month']=$filter_value2;
                        if($filter_value2==1){
                             $month="January";
                        }
                        else if($filter_value2==2){
                             $month="February";
                        }
                        else if($filter_value2==3){
                             $month="March";
                        }
                        else if($filter_value2==4){
                            $month="April";
                        }
                        else if($filter_value2==5){
                             $month="May";
                        }
                        else if($filter_value2==6){
                             $month="June";
                        }
                        else if($filter_value2==7){
                             $month="July";
                        }
                        else if($filter_value2==8){
                             $month="August";
                        }
                        else if($filter_value2==9){
                            $month="September";
                        }
                        else if($filter_value2==10){
                             $month="October";
                        }
                        else if($filter_value2==11){
                             $month="November";
                        }
                        else if($filter_value2==12){
                             $month="December";
                        }
                        else{
                            $month="All";
                        }

                        if($filter_value=="all"){
                            $data['branch']="All Branch";
                        }
                        else{
                        $getbranch=$this->RefBranch_model->get_list(
                        $filter_value,
                        'ref_branch.branch,'
                        );
                        $data['branch']=$getbranch[0]->branch;
                        }


                        if($filter_value=="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=4 AND emp_rates_duties.active_rates_duties=1 AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2=="all"){
                            $filter='pay_slip_deductions.deduction_id=4 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value=="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=4 AND emp_rates_duties.active_rates_duties=1 AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        if($filter_value!="all" AND $filter_value2!="all"){
                            $filter='pay_slip_deductions.deduction_id=4 AND emp_rates_duties.active_rates_duties=1 AND emp_rates_duties.ref_branch_id='.$filter_value.' AND refpayperiod.month_id='.$filter_value2.' AND extract(YEAR from refpayperiod.pay_period_start)='.$filter_value3;
                        }
                        $data['wtax_report']=$this->DailyTimeRecord_model->get_list(
                        $filter,
                        'employee_list.tin,employee_list.ecode,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name,pay_slip_deductions.deduction_amount as wtax_deduction,daily_time_record.employee_id,daily_time_record.pay_period_id,pay_slip.pay_slip_id,pay_slip.taxable_pay,refpayperiod.month_id,pay_slip_deductions.deduction_amount,refpayperiod.pay_period_start, CONCAT(refpayperiod.pay_period_start," ~ ",refpayperiod.pay_period_end) as period',
                        array(
                             array('pay_slip','pay_slip.dtr_id=daily_time_record.dtr_id','left'),
                             array('refpayperiod','refpayperiod.pay_period_id=daily_time_record.pay_period_id','left'),
                             array('pay_slip_deductions','pay_slip_deductions.pay_slip_id=pay_slip.pay_slip_id','left'),
                             array('emp_rates_duties','emp_rates_duties.employee_id=daily_time_record.employee_id','left'),
                             array('employee_list','employee_list.employee_id=daily_time_record.employee_id','left'),
                             ),
                        'employee_list.first_name ASC'
                        );
                        //echo json_encode($data);

                        $getcompany=$this->GeneralSettings_model->get_list(
                        null,
                        'company_setup.*'
                        );

                        $data['company']=$getcompany[0];
                        $data['month']=$month;

                        echo $this->load->view('template/wtax_list_html',$data,TRUE);

                    break;

                    case 'attrition': 

                        $getcompany=$this->GeneralSettings_model->get_list(null,'company_setup.*');

                        $data['company']=$getcompany[0];

                        $data['from_date']=date("F j, Y", strtotime($filter_value));
                        $data['to_date']=date("F j, Y", strtotime($filter_value2));

                        if ($filter_value3 == "all"){
                            $data['position'] = "All";
                        }else{
                            $get_position = $this->RefPosition_model->get_list($filter_value3);
                            $position = $get_position[0]->position;
                            $data['position'] = $position;
                        }

                        $data['attrition']=$this->Employee_model->getAttrition($filter_value,$filter_value2,$filter_value3);
                        
                        echo $this->load->view('template/attrition_html',$data,TRUE);
                    break;

                    case 'export-attrition':
                        $excel=$this->excel;
                        $attrition=$this->Employee_model->getAttrition($filter_value,$filter_value2,$filter_value3);
                       
                        $getcompany=$this->GeneralSettings_model->get_list(null,'company_setup.*');

                        $company=$getcompany[0];

                        $from_date=date("F j, Y", strtotime($filter_value));
                        $to_date=date("F j, Y", strtotime($filter_value2));

                        if ($filter_value3 == "all"){
                            $position = "All";
                        }else{
                            $get_position = $this->RefPosition_model->get_list($filter_value3);
                            $position = $get_position[0]->position;
                        }

                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Attrition Report");
                        $excel->getActiveSheet()->mergeCells('A1:G1');
                        $excel->getActiveSheet()->mergeCells('A2:G2');
                        $excel->getActiveSheet()->mergeCells('A3:G3');
                        $excel->getActiveSheet()->mergeCells('A4:G4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:G5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A8')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:G6');
                        $excel->getActiveSheet()->mergeCells('A7:G7');
                        $excel->getActiveSheet()->mergeCells('A8:G8');

                        $excel->getActiveSheet()->setCellValue('A6','Attrition Report')
                                                ->setCellValue('A7','Date: '.$from_date.' to '.$to_date)
                                                ->setCellValue('A8','Position: '.$position);

                        $excel->getActiveSheet()->mergeCells('A9:G9');

                        $excel->getActiveSheet()->getStyle('A10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('G10')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('20');

                        $excel->getActiveSheet()->setCellValue('A10','#');
                        $excel->getActiveSheet()->setCellValue('B10','Opening Balance');
                        $excel->getActiveSheet()->setCellValue('C10','Employee Joined');
                        $excel->getActiveSheet()->setCellValue('D10','Employee Left');
                        $excel->getActiveSheet()->setCellValue('E10','Closing Balance');
                        $excel->getActiveSheet()->setCellValue('F10','Attrition Rate');
                        $excel->getActiveSheet()->setCellValue('G10','Attrition Percentage');

                        $i = 12;
                        $count=1;
                        $i--;
                        foreach($attrition as $row){

                            $excel->getActiveSheet()
                                    ->getStyle('A'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('B'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('C'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('D'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('E'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('F'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('G'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);                                                               

                            $excel->getActiveSheet()->setCellValue('A'.$i,$row->month_name);
                            $excel->getActiveSheet()->setCellValue('B'.$i,$row->opening_balance);
                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->employee_joined);
                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->employee_left);
                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->closing_balance);
                            $excel->getActiveSheet()->setCellValue('F'.$i,number_format($row->attrition_rate,2));
                            $excel->getActiveSheet()->setCellValue('G'.$i,number_format($row->attrition_percentage,2));

                            $count++;               
                            $i++;

                        }

                        $filename = "Attrition Report (".$filter_value." to ".$filter_value2.").xlsx";

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='.$filename);
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

            case 'email_attrition':
                      $excel=$this->excel;
                        $attrition=$this->Employee_model->getAttrition($filter_value,$filter_value2,$filter_value3);
                       
                        $getcompany=$this->GeneralSettings_model->get_list(null,'company_setup.*');
                        $company=$getcompany[0];

                        $m_admin=$this->GeneralSettings_model;
                        $admin=$m_admin->get_list(1);
                        $id = $this->session->user_id;
                        $m_user=$this->Users_model;
                        $email=$m_user->get_email($id);

                        $from_date=date("F j, Y", strtotime($filter_value));
                        $to_date=date("F j, Y", strtotime($filter_value2));

                        if ($filter_value3 == "all"){
                            $position = "All";
                        }else{
                            $get_position = $this->RefPosition_model->get_list($filter_value3);
                            $position = $get_position[0]->position;
                        }

                        ob_start();
                        $excel->setActiveSheetIndex(0);
                        //name the worksheet
                        $excel->getActiveSheet()->setTitle("Attrition Report");
                        $excel->getActiveSheet()->mergeCells('A1:G1');
                        $excel->getActiveSheet()->mergeCells('A2:G2');
                        $excel->getActiveSheet()->mergeCells('A3:G3');
                        $excel->getActiveSheet()->mergeCells('A4:G4');

                        $excel->getActiveSheet()->setCellValue('A1',$company->company_name)
                                                ->setCellValue('A2',$company->address)
                                                ->setCellValue('A3',$company->contact_no)
                                                ->setCellValue('A4',$company->email_address);

                        $excel->getActiveSheet()->mergeCells('A5:G5');

                        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('A8')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->mergeCells('A6:G6');
                        $excel->getActiveSheet()->mergeCells('A7:G7');
                        $excel->getActiveSheet()->mergeCells('A8:G8');

                        $excel->getActiveSheet()->setCellValue('A6','Attrition Report')
                                                ->setCellValue('A7','Date: '.$from_date.' to '.$to_date)
                                                ->setCellValue('A8','Position: '.$position);

                        $excel->getActiveSheet()->mergeCells('A9:G9');

                        $excel->getActiveSheet()->getStyle('A10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('B10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('C10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('D10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('E10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('F10')->getFont()->setBold(TRUE);
                        $excel->getActiveSheet()->getStyle('G10')->getFont()->setBold(TRUE);

                        $excel->getActiveSheet()->getColumnDimension('A')->setWidth('10');
                        $excel->getActiveSheet()->getColumnDimension('B')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('C')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('D')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('E')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('F')->setWidth('20');
                        $excel->getActiveSheet()->getColumnDimension('G')->setWidth('20');

                        $excel->getActiveSheet()->setCellValue('A10','#');
                        $excel->getActiveSheet()->setCellValue('B10','Opening Balance');
                        $excel->getActiveSheet()->setCellValue('C10','Employee Joined');
                        $excel->getActiveSheet()->setCellValue('D10','Employee Left');
                        $excel->getActiveSheet()->setCellValue('E10','Closing Balance');
                        $excel->getActiveSheet()->setCellValue('F10','Attrition Rate');
                        $excel->getActiveSheet()->setCellValue('G10','Attrition Percentage');

                        $i = 12;
                        $count=1;
                        $i--;
                        foreach($attrition as $row){

                            $excel->getActiveSheet()
                                    ->getStyle('A'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('B'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('C'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('D'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('E'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('F'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                            $excel->getActiveSheet()
                                    ->getStyle('G'.$i)
                                    ->getAlignment()
                                    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);                                                               

                            $excel->getActiveSheet()->setCellValue('A'.$i,$row->month_name);
                            $excel->getActiveSheet()->setCellValue('B'.$i,$row->opening_balance);
                            $excel->getActiveSheet()->setCellValue('C'.$i,$row->employee_joined);
                            $excel->getActiveSheet()->setCellValue('D'.$i,$row->employee_left);
                            $excel->getActiveSheet()->setCellValue('E'.$i,$row->closing_balance);
                            $excel->getActiveSheet()->setCellValue('F'.$i,number_format($row->attrition_rate,2));
                            $excel->getActiveSheet()->setCellValue('G'.$i,number_format($row->attrition_percentage,2));

                            $count++;               
                            $i++;

                        }

                        $filename = "Attrition Report (".$filter_value." to ".$filter_value2.").xlsx";

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment;filename='.$filename);
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
                        $data = ob_get_clean();

                            $excelFilePath = $filename; //generate filename base on id
                            //download it.
                            // Set SMTP Configuration
                            $emailConfig = array(
                                'protocol' => 'smtp', 
                                'smtp_host' => 'ssl://smtp.googlemail.com', 
                                'smtp_port' => 465, 
                                'smtp_user' => $admin[0]->email_address, 
                                'smtp_pass' => $admin[0]->email_password, 
                                'mailtype' => 'html', 
                                'charset' => 'iso-8859-1'
                            );

                            // Set your email information
                            
                            $from = array(
                                'email' => $admin[0]->email_address,
                                'name' => $admin[0]->company_name
                            );

                            $to = array($email[0]->user_email);

                            $subject = 'Attrition Report';
                          //  $message = 'Type your gmail message here';
                            $message = '<p>To: ' .$email[0]->user_email. '</p></ br>' .'Attrition Report '.'</ br><p>Sent By: '. '<b>'.$admin[0]->company_name.'</b>'. '</p></ br>' .date('Y-m-d h:i:A', now());

                            // Load CodeIgniter Email library
                            $this->load->library('email', $emailConfig);
                            // Sometimes you have to set the new line character for better result
                            $this->email->set_newline("\r\n");
                            // Set email preferences
                            $this->email->from($from['email'], $from['name']);
                            $this->email->to($to);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            $this->email->attach($data, 'attachment', $excelFilePath , 'application/ms-excel');
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

        }
    }


}
