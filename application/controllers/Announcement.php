<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_announcement_view') == 0 || $this->session->userdata('right_announcement_view') == null) {
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
        $this->load->model('Leavefiled_model');
        $this->load->model('Entitlement_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('Announcement_model');
        $this->load->model('RefGroup_model');
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

        $data['branch'] = $this->RefBranch_model->get_list('is_deleted = 0');
        $data['department'] = $this->RefDepartment_model->get_list('is_deleted = 0');
        $data['group'] = $this->RefGroup_model->get_list('is_deleted = 0');
        $data['title'] = 'Announcements';

        $this->load->view('announcement_view', $data);
    }

    function transaction($txn = null,$filter_value = null) {
        switch ($txn) {
            case 'list':
                $m_announcement=$this->Announcement_model;
                $response['data']=$m_announcement->get_list_of_announcement(0);
                echo json_encode($response);
            break;

            case 'details':
                $m_announcement=$this->Announcement_model;
                $data['info']=$m_announcement->get_list_of_announcement($filter_value);
                echo $this->load->view('template/announcement_detail_html',$data,TRUE);
            break;

            case 'create_announcement':
                $m_announcement=$this->Announcement_model;
                $user_id=$this->session->user_id;

                $m_announcement->announcement_title = $this->input->post('announcement_title', TRUE);
                $m_announcement->announcement = $this->input->post('announcement', TRUE);
                $m_announcement->branch_id = $this->input->post('branch-filter', TRUE);
                $m_announcement->department_id = $this->input->post('department-filter', TRUE);
                $m_announcement->group_id = $this->input->post('group-filter', TRUE);
                $m_announcement->date_created = date('Y-m-d H:i:s');
                $m_announcement->created_by = $this->session->user_id;
                $m_announcement->save();

                $announcement_post_id = $m_announcement->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'New Announcement successfully created.';

                $response['row_added']=$m_announcement->get_list_of_announcement($announcement_post_id);
                echo json_encode($response);

                break;

            case 'delete_announcement':
                $m_announcement=$this->Announcement_model;

                $announcement_post_id=$this->input->post('announcement_post_id',TRUE);
                    
                $m_announcement->is_deleted=1;
                $m_announcement->date_deleted = date("Y-m-d H:i:s");
                $m_announcement->deleted_by = $this->session->user_id;

                if($m_announcement->modify($announcement_post_id)){
                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Announcement is successfully deleted.';

                echo json_encode($response);
                }
            break;

            case 'update_announcement':
                $m_announcement=$this->Announcement_model;
                $user_id=$this->session->user_id;

                $announcement_post_id=$this->input->post('announcement_post_id',TRUE);

                $m_announcement->announcement_title = $this->input->post('announcement_title', TRUE);
                $m_announcement->announcement = $this->input->post('announcement', TRUE);
                $m_announcement->branch_id = $this->input->post('branch-filter', TRUE);
                $m_announcement->department_id = $this->input->post('department-filter', TRUE);
                $m_announcement->group_id = $this->input->post('group-filter', TRUE);
                $m_announcement->date_modified = date('Y-m-d H:i:s');
                $m_announcement->modified_by = $this->session->user_id;
                $m_announcement->modify($announcement_post_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Announcement is successfully updated.';
                $response['row_updated']=$m_announcement->get_list_of_announcement($announcement_post_id);
                echo json_encode($response);

                break;

        }
    }
}
