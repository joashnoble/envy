<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        }
        if($this->session->userdata('right_useracccount_view') == 0 || $this->session->userdata('right_useracccount_view') == null) {
            redirect('../Dashboard');
        }
        else{

        }
        $this->validate_session();
        $this->load->model('Users_model');
        $this->load->model('User_groups_model');
        $this->load->model('Email_user_settings_model');
    }

    public function index() {

        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['user_groups']=$this->User_groups_model->get_list(array('user_groups.is_deleted'=>FALSE));
         $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'User Account Management';

        $this->load->view('users_view', $data);
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $m_users=$this->Users_model;
                $response['data']=$m_users->get_user_list();
                echo json_encode($response);
                break;
                
            case 'create':
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('user_name', 'UserName', 'strip_tags|trim|xss_clean|required|is_unique[user_accounts.user_name]');
                if ($this->form_validation->run() == TRUE)
                {
                    $m_users=$this->Users_model;
                    $m_users_email = $this->Email_user_settings_model;

                    $m_users->user_name=$this->input->post('user_name',TRUE);
                    $m_users->user_pword=sha1($this->input->post('user_pword',TRUE));
                    $m_users->user_lname=$this->input->post('user_lname',TRUE);
                    $m_users->user_fname=$this->input->post('user_fname',TRUE);
                    $m_users->user_mname=$this->input->post('user_mname',TRUE);
                    $m_users->user_address=$this->input->post('user_address',TRUE);
                    $m_users->user_email=$this->input->post('user_email',TRUE);
                    $m_users->user_mobile=$this->input->post('user_mobile',TRUE);
                    $m_users->user_telephone=$this->input->post('user_telephone',TRUE);
                    $m_users->user_bdate=date('Y-m-d',strtotime($this->input->post('user_bdate',TRUE)));
                    $m_users->user_group_id=$this->input->post('user_group_id',TRUE);
                    $m_users->photo_path=base_url($this->input->post('photo_path',TRUE));
                    $m_users->date_created = date("Y-m-d H:i:s");
                    $m_users->created_by = $this->session->user_id;
                    $m_users->save();

                    $user_account_id=$m_users->last_insert_id();

                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully created.';
                    $response['row_added']=$m_users->get_user_list($user_account_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                }

                echo json_encode($response);

            break;
            //****************************************************************************************************************
            case 'update' :
                $m_users=$this->Users_model;
                $m_users_email = $this->Email_user_settings_model;
                $user_account_id=$this->input->post('user_id',TRUE);
                $email_user_settings_id = $this->input->post('email_user_settings_id',TRUE);

                $user_name = $m_users->getusername($user_account_id);
                $post_username = $this->input->post('user_name',TRUE);
                /*jbpv validate if no changes in username*/
                $user_pword = $this->input->post('user_pword',TRUE);
                if($user_name==$post_username){
                    if($user_pword=='nochanges'){

                    }
                    else{
                        $m_users->user_pword=sha1($this->input->post('user_pword',TRUE));
                    }
                    $m_users->user_name=$this->input->post('user_name',TRUE);
                    /*$m_users->user_pword=sha1($this->input->post('user_pword',TRUE));*/
                    $m_users->user_lname=$this->input->post('user_lname',TRUE);
                    $m_users->user_fname=$this->input->post('user_fname',TRUE);
                    $m_users->user_mname=$this->input->post('user_mname',TRUE);
                    $m_users->user_address=$this->input->post('user_address',TRUE);
                    $m_users->user_email=$this->input->post('user_email',TRUE);
                    $m_users->user_email=$this->input->post('user_email',TRUE);
                    $m_users->user_mobile=$this->input->post('user_mobile',TRUE);
                    $m_users->user_telephone=$this->input->post('user_telephone',TRUE);
                    $m_users->user_bdate=date('Y-m-d',strtotime($this->input->post('user_bdate',TRUE)));
                    $m_users->user_group_id=$this->input->post('user_group_id',TRUE);
                    $m_users->photo_path=base_url($this->input->post('photo_path',TRUE));
                    $m_users->date_modified = date("Y-m-d H:i:s");
                    $m_users->modified_by = $this->session->user_id;
                    $m_users->modify($user_account_id);

                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully created.';
                    $response['row_updated']=$m_users->get_user_list($user_account_id);
                }
                /*jbpv validate if false checks if user already exist*/
                else{
                    $this->load->library('form_validation');
                    $this->load->helper('security');
                    $this->form_validation->set_rules('user_name', 'UserName', 'strip_tags|trim|xss_clean|required|is_unique[user_accounts.user_name]');
                    if ($this->form_validation->run() == TRUE){
                        $m_users->user_name=$this->input->post('user_name',TRUE);
                        $m_users->user_pword=sha1($this->input->post('user_pword',TRUE));
                        $m_users->user_lname=$this->input->post('user_lname',TRUE);
                        $m_users->user_fname=$this->input->post('user_fname',TRUE);
                        $m_users->user_mname=$this->input->post('user_mname',TRUE);
                        $m_users->user_address=$this->input->post('user_address',TRUE);
                        $m_users->user_email=$this->input->post('user_email',TRUE);
                        $m_users->user_email=$this->input->post('user_email',TRUE);
                        $m_users->user_mobile=$this->input->post('user_mobile',TRUE);
                        $m_users->user_telephone=$this->input->post('user_telephone',TRUE);
                        $m_users->user_bdate=date('Y-m-d',strtotime($this->input->post('user_bdate',TRUE)));
                        $m_users->user_group_id=$this->input->post('user_group_id',TRUE);
                        $m_users->photo_path=base_url($this->input->post('photo_path',TRUE));
                        $m_users->date_modified = date("Y-m-d H:i:s");
                        $m_users->modified_by = $this->session->user_id;
                        $m_users->modify($user_account_id);
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='User account information successfully created.';
                        $response['row_updated']=$m_users->get_user_list($user_account_id);
                    }
                    else{
                        $response['title']='Error!';
                        $response['stat']='error';
                        $response['msg']='Username already exists,please try another username..';
                        }
                }

                echo json_encode($response);

            break;
            //****************************************************************************************************************
            case 'delete':
                $m_users=$this->Users_model;
                $user_account_id=$this->input->post('user_id',TRUE);

                $m_users->is_deleted=1;
                $m_users->date_deleted = date("Y-m-d H:i:s");
                $m_users->deleted_by = $this->session->user_id;
                if($m_users->modify($user_account_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully deleted.';
                    echo json_encode($response);
                }
                break;

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
