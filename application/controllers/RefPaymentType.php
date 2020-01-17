<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefPaymentType extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        if($this->session->userdata('user_id') == FALSE) {
            redirect('../login');
        } 
        if($this->session->userdata('right_paymenttype_view') == 0 || $this->session->userdata('right_paymenttype_view') == null) {
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
        $this->load->model('RefEmploymentType_model');
        $this->load->model('RefPayment_model');

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
        $data['title'] = 'Payment Type';

        $this->load->view('ref_payment_type_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefPayment_model->get_list(
                    array('ref_payment_type.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_paymenttype = $this->RefPayment_model;
                //Backend FORM VALIDATION AND SECURITY HELPER
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('payment_type', 'PAYMENT TYPE', 'strip_tags|xss_clean|required');       
                $this->form_validation->set_rules('pay_type_factor', 'Factor', 'strip_tags|xss_clean|required');   

                if ($this->form_validation->run() == TRUE) 
                {            
                    $m_paymenttype->payment_type = $this->input->post('payment_type', TRUE);
                    $m_paymenttype->description = $this->input->post('description', TRUE);
                    $m_paymenttype->pay_type_factor = $this->input->post('pay_type_factor', TRUE);
                    $m_paymenttype->date_created = date("Y-m-d H:i:s");
                    $m_paymenttype->created_by = $this->session->user_id;
                    $m_paymenttype->save();

                    $ref_paymenttype_id = $m_paymenttype->last_insert_id();


                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Payment Type information successfully created.';

                    $response['row_added'] = $this->RefPayment_model->get_list($ref_paymenttype_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);              

                break;

            case 'createdirect':
                $m_paymenttype = $this->RefPayment_model;
               
                $m_paymenttype->payment_type = $this->input->post('postname', TRUE);
                $m_paymenttype->description = $this->input->post('postdescription', TRUE);
                $m_paymenttype->date_created = date("Y-m-d H:i:s");
                $m_paymenttype->created_by = $this->session->user_id;
                $m_paymenttype->save();

                $ref_paymenttype_id = $m_paymenttype->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Payment Type information successfully created.';

                $response['row_added'] = $this->RefPaymentType_model->get_list($ref_paymenttype_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_paymenttype = $this->RefPayment_model;

                $ref_payment_type_id=$this->input->post('ref_payment_type_id',TRUE);

                if($ref_payment_type_id == 1 OR 2 OR 3 OR 4){
                    $response['false']=0;
                    $response['title']='Payment Type is in used!';
                    $response['stat']='error';
                    $response['msg']='Cannot delete default payment type!';
                    echo json_encode($response);
                }
                else{
                    $m_paymenttype->is_deleted=1;
                    $m_paymenttype->date_deleted = date("Y-m-d H:i:s");
                    $m_paymenttype->deleted_by = $this->session->user_id;
                    if($m_paymenttype->modify($ref_payment_type_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Payment Type Reference successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_paymenttype = $this->RefPayment_model;

                $ref_payment_type_id=$this->input->post('ref_payment_type_id',TRUE);
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('payment_type', 'PAYMENT TYPE', 'strip_tags|xss_clean|required');       
                $this->form_validation->set_rules('pay_type_factor', 'Factor', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
            
                $m_paymenttype->payment_type = $this->input->post('payment_type', TRUE);
                $m_paymenttype->description = $this->input->post('description', TRUE);
                $m_paymenttype->pay_type_factor = $this->input->post('pay_type_factor', TRUE);

                $m_paymenttype->date_modified = date("Y-m-d H:i:s");
                $m_paymenttype->modified_by = $this->session->user_id;
                $m_paymenttype->modify($ref_payment_type_id);


                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Payment Type information successfully updated.';
                $response['row_updated']=$this->RefPayment_model->get_list($ref_payment_type_id);
              
               }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
 
                echo json_encode($response);

                break;

        }
    }











}
