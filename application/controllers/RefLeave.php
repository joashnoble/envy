<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefLeave extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_leavetype_view') == 0 || $this->session->userdata('right_leavetype_view') == null) {
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


    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'Leave Type';

        $this->load->view('ref_leave_type_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefLeave_model->get_list(
                    array('ref_leave_type.is_deleted'=>FALSE),
                    'ref_leave_type.*'
                    );
                echo json_encode($response);
                break;

            case 'filterlist':
                $ref_leave_type_id = $this->input->post('ref_leave_type_id', TRUE);
                $response['data']=$this->RefLeave_model->get_list(
                    array('ref_leave_type.ref_leave_type_id'=>$ref_leave_type_id,'ref_leave_type.is_deleted'=>FALSE),
                    'ref_leave_type.*'
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_leave = $this->RefLeave_model;
                $user_id=$this->session->user_id;

                $m_leave->leave_type = $this->input->post('leave_type', TRUE);
                $m_leave->leave_type_short_name = $this->input->post('leave_type_short_name', TRUE);
                $total_grant = $this->input->post('total_grant', TRUE);
                $m_leave->total_grant = $this->get_numeric_value($total_grant);
                $m_leave->is_payable = $this->input->post('is_payable', TRUE);
                $m_leave->is_forwardable = $this->input->post('is_forwardable', TRUE);
                $m_leave->description = $this->input->post('description', TRUE);
                $m_leave->date_created = date("Y-m-d H:i:s");
                $m_leave->created_by = $this->session->user_id;
                $m_leave->save();

                $ref_leave_type_id = $m_leave->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Leave information successfully created.';

                $response['row_added'] = $this->RefLeave_model->get_list(
                    $ref_leave_type_id,
                    'ref_leave_type.*'
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_leave=$this->RefLeave_model;

                $ref_leave_type_id=$this->input->post('ref_leave_type_id',TRUE);
                $response['data']=$this->RefLeave_model->checkifused($ref_leave_type_id);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    
                    $m_leave->is_deleted=1;
                    $m_leave->date_deleted = date("Y-m-d H:i:s");
                    $m_leave->deleted_by = $this->session->user_id;
                    if($m_leave->modify($ref_leave_type_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Leave information successfully deleted.';

                    echo json_encode($response);
                    }
                }
                
                
                

                break;

            case 'update':
                $user_id=$this->session->user_id;
                $m_leave=$this->RefLeave_model;

                $ref_leave_type_id=$this->input->post('ref_leave_type_id',TRUE);

                $m_leave->leave_type = $this->input->post('leave_type', TRUE);
                $m_leave->leave_type_short_name = $this->input->post('leave_type_short_name', TRUE);
                $total_grant = $this->input->post('total_grant', TRUE);
                $m_leave->total_grant = $this->get_numeric_value($total_grant);
                $m_leave->is_payable = $this->input->post('is_payable', TRUE);
                $m_leave->is_forwardable = $this->input->post('is_forwardable', TRUE);
                $m_leave->description = $this->input->post('description', TRUE);
                $m_leave->date_modified = date("Y-m-d H:i:s");
                $m_leave->modified_by = $this->session->user_id;
                $m_leave->modify($ref_leave_type_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Leave information successfully updated.';
                $response['row_updated']=$this->RefLeave_model->get_list(
                    $ref_leave_type_id,
                        'ref_leave_type.*'
                    );
                echo json_encode($response);

                break;

                case 'checkifused':
                $ref_leave_type_id=24;
                $response['data']=$this->RefLeave_model->checkifused($ref_leave_type_id);
                
                echo json_encode($response);
                echo '<br>';
                $checkcount = count($response['data']);
                if($checkcount>0){
                    echo 'greater';
                }
                else{
                    echo 'd man';
                }
                break;

        }
    }











}
