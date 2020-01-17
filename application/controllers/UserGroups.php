<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroups extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        }
        if($this->session->userdata('right_usergroup_view') == 0 || $this->session->userdata('right_usergroup_view') == null) {
            redirect('../Dashboard');
        }
        else{

        }
        $this->validate_session();
        $this->load->model('Users_model');
        $this->load->model('User_groups_model');
        $this->load->model('User_rights_model');
    }

    public function index() {

        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        /*$data['user_groups']=$this->User_groups_model->get_list(array('user_groups.is_deleted'=>FALSE));*/
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'User Groups Management';

        $this->load->view('usergroups_view', $data);
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $m_usergroups=$this->User_groups_model;

                $response['data']=$this->User_groups_model->get_list(
                    array('user_groups.is_deleted'=>FALSE),
                    'user_rights.*,user_groups.*',
                    array(
                            array('user_rights','user_rights.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);
                break;
            case 'create':
                $m_user_group=$this->User_groups_model;
                $m_user_group_rights=$this->User_rights_model;
                $m_user_group->user_group=$this->input->post('user_group',TRUE);
                $m_user_group->user_group_desc=$this->input->post('user_group_desc',TRUE);
                $m_user_group->date_created = date("Y-m-d H:i:s");
                $m_user_group->created_by = $this->session->user_id;
                $m_user_group->save();

                $user_group_id=$m_user_group->last_insert_id();
                foreach($_POST as $key => $val)
                {
                    if($key=="user_group" || $key=="user_group_desc"){
                        /*echo "patient";*/
                    }
                    else{
                        $m_user_group_rights->$key=$this->input->post($key);
                    }
                }
                $m_user_group_rights->user_group_id=$user_group_id;
                $m_user_group_rights->save();


                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='User Rights successfully created.';
                $response['row_added']=$m_user_group->get_list(
                    $user_group_id,
                    'user_rights.*,user_groups.*',
                    array(
                            array('user_rights','user_rights.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);

                break;
            //****************************************************************************************************************
            case 'update' :
                $m_user_group=$this->User_groups_model;
                $m_user_group_rights=$this->User_rights_model;
                $user_group_id=$this->input->post('user_group_id',TRUE);
                $m_user_group->user_group=$this->input->post('user_group',TRUE);
                $m_user_group->user_group_desc=$this->input->post('user_group_desc',TRUE);
                $m_user_group->date_modified = date("Y-m-d H:i:s");
                $m_user_group->modified_by = $this->session->user_id;
                $m_user_group->modify($user_group_id);

                $m_user_group_rights->delete_via_fk($user_group_id);

                foreach($_POST as $key => $val)
                {
                    if($key=="user_group" || $key=="user_group_desc"){
                        /*echo "patient";*/
                    }
                    else{
                        $m_user_group_rights->$key=$this->input->post($key);
                    }
                }

                $m_user_group_rights->save();


                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='User Rights successfully Updated.';
                $response['row_updated']=$m_user_group->get_list(
                    $user_group_id,
                    'user_rights.*,user_groups.*',
                    array(
                            array('user_rights','user_rights.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);

                break;
            //****************************************************************************************************************
            case 'delete':
                $m_user_group=$this->User_groups_model;
                $user_group_id=$this->input->post('user_group_id',TRUE);

                $m_user_group->is_deleted=1;
                $m_user_group->date_deleted = date("Y-m-d H:i:s");
                $m_user_group->deleted_by = $this->session->user_id;
                if($m_user_group->modify($user_group_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully deleted.';
                    echo json_encode($response);
                }
                break;

           /* case 'saverights':
                $m_users_rights=$this->User_rights_model;
                $user_group_id=$this->input->post('user_group_id',TRUE);
                $m_users_rights->delete_via_fk($user_group_id);
                $m_users_rights->user_group_id=$user_group_id;
                $m_users_rights->personnel_info=$this->input->post('personnel_info',TRUE);
                $m_users_rights->new_employee=$this->input->post('new_employee',TRUE);
                $m_users_rights->leave_entitlement=$this->input->post('leave_entitlement',TRUE);
                $m_users_rights->apply_leave=$this->input->post('apply_leave',TRUE);
                $m_users_rights->rates_duties=$this->input->post('rates_duties',TRUE);
                $m_users_rights->memorandum=$this->input->post('memorandum',TRUE);
                $m_users_rights->commendation=$this->input->post('commendation',TRUE);
                $m_users_rights->leave_type=$this->input->post('leave_type',TRUE);
                $m_users_rights->year_setup=$this->input->post('year_setup',TRUE);
                $m_users_rights->payment_type=$this->input->post('payment_type',TRUE);
                $m_users_rights->department=$this->input->post('department',TRUE);
                $m_users_rights->position=$this->input->post('position',TRUE);
                $m_users_rights->branch=$this->input->post('branch',TRUE);
                $m_users_rights->group=$this->input->post('group',TRUE);
                $m_users_rights->section=$this->input->post('section',TRUE);
                $m_users_rights->religion=$this->input->post('religion',TRUE);
                $m_users_rights->course=$this->input->post('course',TRUE);
                $m_users_rights->relationship=$this->input->post('relationship',TRUE);

                $m_users_rights->certificate=$this->input->post('certificate',TRUE);
                $m_users_rights->action_taken=$this->input->post('action_taken',TRUE);
                $m_users_rights->disciplinary_action_policy=$this->input->post('disciplinary_action_policy',TRUE);
                $m_users_rights->compensation=$this->input->post('compensation',TRUE);
                $m_users_rights->sss_contribution=$this->input->post('sss_contribution',TRUE);
                $m_users_rights->philhealth_contribution=$this->input->post('philhealth_contribution',TRUE);
                $m_users_rights->personnel_list=$this->input->post('personnel_list',TRUE);
                $m_users_rights->manpower_list=$this->input->post('manpower_list',TRUE);
                $m_users_rights->sss_report=$this->input->post('sss_report',TRUE);
                $m_users_rights->philhealth_report=$this->input->post('philhealth_report',TRUE);
                $m_users_rights->daily_time_record=$this->input->post('daily_time_record',TRUE);
                $m_users_rights->process_payroll=$this->input->post('process_payroll',TRUE);
                $m_users_rights->pay_slip=$this->input->post('pay_slip',TRUE);
                $m_users_rights->dtr_verification_list=$this->input->post('dtr_verification_list',TRUE);
                $m_users_rights->other_earning_regular=$this->input->post('other_earning_regular',TRUE);
                $m_users_rights->other_earning_temporary=$this->input->post('other_earning_temporary',TRUE);
                $m_users_rights->regular_deduction=$this->input->post('regular_deduction',TRUE);
                $m_users_rights->temporary_deduction=$this->input->post('temporary_deduction',TRUE);
                $m_users_rights->pay_period=$this->input->post('pay_period',TRUE);
                $m_users_rights->earning_setup=$this->input->post('earning_setup',TRUE);
                $m_users_rights->earning_type=$this->input->post('earning_type',TRUE);
                $m_users_rights->deduction_type=$this->input->post('deduction_type',TRUE);
                $m_users_rights->deduction_setup=$this->input->post('deduction_setup',TRUE);
                $m_users_rights->user_account=$this->input->post('user_account',TRUE);
                $m_users_rights->user_group=$this->input->post('user_group',TRUE);
                $m_users_rights->company_setup=$this->input->post('company_setup',TRUE);
                $m_users_rights->advance_settings=$this->input->post('advance_settings',TRUE);


                $m_users_rights->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='User account information successfully created.';
                $response['row_added']=$m_users_rights->get_list();
                echo json_encode($response);

                break;*/

            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/user/';

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

        }


    }
}
