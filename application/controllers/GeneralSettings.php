<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralSettings extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_companysetup_view') == 0 || $this->session->userdata('right_companysetup_view') == null) {
            redirect('../Dashboard');
        }
        else{
            
        }
        $this->validate_session();
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
        $data['title'] = 'General Settings';
        $data['company_setup']=$this->GeneralSettings_model->get_list();
        $this->load->view('generalsettings_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
            	$response['data']=$this->GeneralSettings_model->get_list(
                    array('company_setup.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                
                break;

            /*case 'create':
                $m_general_settings = $this->GeneralSettings_model;

                $m_general_settings->company_id = $this->input->post('company_id', TRUE);
                $m_general_settings->company_name = $this->input->post('company_name', TRUE);
                $m_general_settings->address = $this->input->post('address', TRUE);
                $m_general_settings->contact_no = $this->input->post('contact_no', TRUE);
                $m_general_settings->email_address = $this->input->post('email_address', TRUE);
                $m_general_settings->image_name = $this->input->post('image_name', TRUE);
                $m_general_settings->created_by = $this->session->user_id;
                $m_general_settings->date_created = date("Y-m-d H:i:s");
                $m_general_settings->save();

                $company_id = $m_general_settings->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'General Settings information successfully created.';

                $response['row_added'] = $this->GeneralSettings_model->get_list($company_id);
                echo json_encode($response);

                break;*/

            case 'delete':
                $m_general_settings=$this->GeneralSettings_model;

                $company_id=$this->input->post('company_id',TRUE);

                $m_general_settings->is_deleted=1;
                if($m_general_settings->modify($company_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='General Settings information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_general_settings=$this->GeneralSettings_model;

                $company_id=$this->input->post('company_id',TRUE);

                $m_general_settings->company_id = $this->input->post('company_id', TRUE);
                $m_general_settings->company_name = $this->input->post('company_name', TRUE);
                $m_general_settings->address = $this->input->post('address', TRUE);
                $m_general_settings->contact_no = $this->input->post('contact_no', TRUE);
                $m_general_settings->email_address = $this->input->post('email_address', TRUE);
                $m_general_settings->email_password = $this->input->post('email_password', TRUE);
                $m_general_settings->image_name = $this->input->post('image_name', TRUE);

                $m_general_settings->modified_by = $this->session->user_id;



                $m_general_settings->date_modified = date("Y-m-d H:i:s");

                $m_general_settings->rdo = $this->input->post('rdo', TRUE);
                $m_general_settings->bir_reg_no = $this->input->post('bir_reg_no', TRUE);
                $m_general_settings->applicable_year = $this->input->post('applicable_year', TRUE);
                $m_general_settings->applicable_month = $this->input->post('applicable_month', TRUE);
                $m_general_settings->tin_no = $this->input->post('tin_no', TRUE);
                $m_general_settings->quote = $this->input->post('quote', TRUE);
                $m_general_settings->modify($company_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='General Settings information successfully updated.';

                $response['row_updated'] = $this->GeneralSettings_model->get_list($company_id);
                echo json_encode($response);

                break;

            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/company/';

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
