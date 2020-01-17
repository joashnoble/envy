<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sched_RefPay extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('right_schedule_paytype_view') == 0 || $this->session->userdata('right_schedule_paytype_view') == null) {
            redirect('../Dashboard');
        }
        $this->load->model('RefSchedPay_model');



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
        $data['title'] = 'Schedule Pay';

        $this->load->view('sched_refpay_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->RefSchedPay_model->get_list(
                    array('sched_refpay.is_deleted'=>FALSE)
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_schedpay = $this->RefSchedPay_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('schedpay', 'Sched Pay', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
                
                $m_schedpay->schedpay = $this->input->post('schedpay', TRUE);
                $m_schedpay->description = $this->input->post('description', TRUE);
                $m_schedpay->date_created = date("Y-m-d H:i:s");
                $m_schedpay->created_by = $this->session->user_id;
                $m_schedpay->save();

                $sched_refpay_id = $m_schedpay->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'SchedPay Type successfully created.';

                $response['row_added'] = $this->RefSchedPay_model->get_list($sched_refpay_id);
               }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }  
                echo json_encode($response);
                break;

            case 'delete':
                $m_schedpay=$this->RefSchedPay_model;

                $sched_refpay_id=$this->input->post('sched_refpay_id',TRUE);
                $filter=$sched_refpay_id;
                $response['data']=$this->RefSchedPay_model->checkifused($filter);
                $checkcount = count($response['data']);
                if($checkcount>0){
                    $response['false']=0;
                    $response['title']='Cannot be Deleted!';
                    $response['stat']='error';
                    $response['msg']='Reference is in used!';

                    echo json_encode($response);
                }
                else{
                    $m_schedpay->is_deleted=1;
                    $m_schedpay->date_deleted = date("Y-m-d H:i:s");
                    $m_schedpay->deleted_by = $this->session->user_id;
                    if($m_schedpay->modify($sched_refpay_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='SchedPay Type successfully Deleted.';

                    echo json_encode($response);
                    }
                }

                break;

            case 'update':
                $m_schedpay=$this->RefSchedPay_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('schedpay', 'Sched Pay', 'strip_tags|xss_clean|required');       
                if ($this->form_validation->run() == TRUE) 
                {            
                
                $sched_refpay_id=$this->input->post('sched_refpay_id',TRUE);

                $m_schedpay->schedpay = $this->input->post('schedpay', TRUE);
                $m_schedpay->description = $this->input->post('description', TRUE);
                $m_schedpay->date_modified = date("Y-m-d H:i:s");
                $m_schedpay->deleted_by = $this->session->user_id;
                $m_schedpay->modify($sched_refpay_id);

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='SchedPay Type successfully updated.';
                $response['row_updated']=$this->RefSchedPay_model->get_list($sched_refpay_id);
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
