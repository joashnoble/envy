<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 

        $this->validate_session();

        $this->load->model('Users_model');
        $this->load->model('GeneralSettings_model');

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
        $data['title'] = 'Profile';
        $data['company_setup']=$this->GeneralSettings_model->get_list();

        $data['user'] = $this->Users_model->get_list($this->session->user_id)[0];
        $this->load->view('profile_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {

            case 'update':
                $m_user=$this->Users_model;

                $user_id=$this->session->user_id;
                $user_name=$this->input->post('user_name', TRUE);

                $validate_user_name = $m_user->check_username($user_name,$user_id); 

                if(count($validate_user_name) > 0){
                    $response['title']='Warning';
                    $response['stat']='error';
                    $response['msg']='Username is already taken.';
                    echo json_encode($response);
                    exit();
                }

                $user_bdate = $this->input->post('user_bdate', TRUE);
                $m_user->user_name = $this->input->post('user_name', TRUE);
                $m_user->user_fname = $this->input->post('user_fname', TRUE);
                $m_user->user_mname = $this->input->post('user_mname', TRUE);
                $m_user->user_lname = $this->input->post('user_lname', TRUE);
                $m_user->user_bdate = $this->input->post('user_bdate', TRUE);
                $m_user->user_mobile = $this->input->post('user_mobile', TRUE);
                $m_user->user_email = $this->input->post('user_email', TRUE);
                $m_user->user_address = $this->input->post('user_address', TRUE);

                if ($user_bdate != "" || $user_bdate != null){
                    $m_user->user_bdate = date("Y-m-d", strtotime($user_bdate));
                }else{
                    $m_user->user_bdate = "";
                }

                $m_user->photo_path = $this->input->post('photo_path', TRUE);
                $m_user->modified_by = $this->session->user_id;
                $m_user->date_modified = date("Y-m-d H:i:s");
                $m_user->modify($user_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Profile successfully updated.';
                echo json_encode($response);

                break;

            case 'chck_current_pass':

                $m_user=$this->Users_model;
                $user_id=$this->session->user_id;

                $user_pword=$this->input->post('user_pword', TRUE);

                $check_password = $m_user->check_password($user_pword,$user_id); 

                if(count($check_password) > 0){

                    $response['password']=1;

                }else{
                    $response['title']='Error';
                    $response['stat']='error';
                    $response['msg']='Current Password is incorrect.';
                    $response['password']=0;
                }

                echo json_encode($response);

                break;

            case 'update_password':

                $m_user=$this->Users_model;
                $user_id=$this->session->user_id;

                $new_user_pword=$this->input->post('new_user_pword', TRUE);

                $m_user->user_pword = sha1($new_user_pword);
                $m_user->modify($user_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Password successfully changed.';
                echo json_encode($response);

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
