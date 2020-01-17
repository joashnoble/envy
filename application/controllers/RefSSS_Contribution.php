<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefSSS_Contribution extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_sss_view') == 0 || $this->session->userdata('right_sss_view') == null) {
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
        $this->load->model('RefPayment_model');
        $this->load->model('RefSSS_Contribution_model');



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
        $data['title'] = 'Social Security System';

        $this->load->view('ref_sss_contribution_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefSSS_Contribution_model->get_list(
                    array('ref_sss_contribution.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_sss_contribution = $this->RefSSS_Contribution_model;

                $salaryrangefromtemp = $this->input->post('salary_range_from', TRUE);
                $salary_range_from = $this->get_numeric_value($salaryrangefromtemp);

                $salaryrangetotemp = $this->input->post('salary_range_to', TRUE);
                $salary_range_to = $this->get_numeric_value($salaryrangetotemp);

                $monthlysalarycredittemp = $this->input->post('monthly_salary_credit', TRUE);
                $monthly_salary_credit = $this->get_numeric_value($monthlysalarycredittemp);

                $employeetemp = $this->input->post('employee', TRUE);
                $employee = $this->get_numeric_value($employeetemp);

                $employertemp = $this->input->post('employer', TRUE);
                $employer = $this->get_numeric_value($employertemp);

                $employercontributiontemp = $this->input->post('employer_contribution', TRUE);
                $employer_contribution = $this->get_numeric_value($employercontributiontemp);

                $sub_total = $employer + $employee;
                $total = $sub_total + $employer_contribution;

                $m_sss_contribution->salary_range_from = $salary_range_from;
                $m_sss_contribution->salary_range_to = $salary_range_to;
                $m_sss_contribution->monthly_salary_credit = $monthly_salary_credit;
                $m_sss_contribution->employer = $employer;
                $m_sss_contribution->employee = $employee;
                $m_sss_contribution->sub_total = $sub_total;
                $m_sss_contribution->employer_contribution = $employer_contribution;
                $m_sss_contribution->total = $total;
                $m_sss_contribution->date_created = date("Y-m-d H:i:s");
                $m_sss_contribution->created_by = $this->session->user_id;
                $m_sss_contribution->save();

                $ref_sss_contribution_id = $m_sss_contribution->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'SSS Contribution information successfully created.';

                $response['row_added'] = $this->RefSSS_Contribution_model->get_list($ref_sss_contribution_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_sss_contribution=$this->RefSSS_Contribution_model;

                $ref_sss_contribution_id=$this->input->post('ref_sss_contribution_id',TRUE);

                $m_sss_contribution->is_deleted=1;
                $m_sss_contribution->date_deleted = date("Y-m-d H:i:s");
                $m_sss_contribution->deleted_by = $this->session->user_id;
                if($m_sss_contribution->modify($ref_sss_contribution_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='SSS Contribution information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_sss_contribution = $this->RefSSS_Contribution_model;

                $ref_sss_contribution_id=$this->input->post('ref_sss_contribution_id',TRUE);

                $salaryrangefromtemp = $this->input->post('salary_range_from', TRUE);
                $salary_range_from = $this->get_numeric_value($salaryrangefromtemp);

                $salaryrangetotemp = $this->input->post('salary_range_to', TRUE);
                $salary_range_to = $this->get_numeric_value($salaryrangetotemp);

                $monthlysalarycredittemp = $this->input->post('monthly_salary_credit', TRUE);
                $monthly_salary_credit = $this->get_numeric_value($monthlysalarycredittemp);

                $employeetemp = $this->input->post('employee', TRUE);
                $employee = $this->get_numeric_value($employeetemp);

                $employertemp = $this->input->post('employer', TRUE);
                $employer = $this->get_numeric_value($employertemp);

                $employercontributiontemp = $this->input->post('employer_contribution', TRUE);
                $employer_contribution = $this->get_numeric_value($employercontributiontemp);

                $sub_total = $employer + $employee;
                $total = $sub_total + $employer_contribution;

                $m_sss_contribution->salary_range_from = $salary_range_from;
                $m_sss_contribution->salary_range_to = $salary_range_to;
                $m_sss_contribution->monthly_salary_credit = $monthly_salary_credit;
                $m_sss_contribution->employer = $employer;
                $m_sss_contribution->employee = $employee;
                $m_sss_contribution->sub_total = $sub_total;
                $m_sss_contribution->employer_contribution = $employer_contribution;
                $m_sss_contribution->total = $total;
                $m_sss_contribution->date_modified = date("Y-m-d H:i:s");
                $m_sss_contribution->modified_by = $this->session->user_id;
                $m_sss_contribution->modify($ref_sss_contribution_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='SSS Contribution information successfully updated.';
                $response['row_updated']=$this->RefSSS_Contribution_model->get_list($ref_sss_contribution_id);
                echo json_encode($response);

                break;

            case 'test':
            	$query = $this->db->query("SELECT * FROM ref_sss_contribution");
				$response['data'] = $query->result_array();
				
				
				foreach ($query->result() as $row)
				{
				        $employer = $row->employer;
				        $employer_contribution = $row->employer_contribution;
				        //echo $employer . '<br>';
				        //echo $employer_contribution . '<br>';

				        $sub_total = $employer + $employer_contribution;
				        echo $sub_total . '<br>';
				}

            	break;

        }
    }











}
