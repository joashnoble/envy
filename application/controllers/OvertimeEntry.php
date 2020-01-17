<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  require 'application/third_party/Carbon.php';
  use Carbon\Carbon;
class OvertimeEntry extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('right_overtimeentry_view') == 0 || $this->session->userdata('right_overtimeentry_view') == null) {
            redirect('../Dashboard');
        }
        $this->load->model('Employee_model');
        $this->load->model('SchedEmployee_model');
        $this->load->model('RefSchedPay_model');
        $this->load->model('SchedRefShift_model');
        $this->load->model('RefPayPeriod_model');
        $this->load->model('RefGroup_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('OvertimeEntry_model');
        $this->load->model('DailyTimeRecord_model');

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

        $data['pay_period']=$this->RefPayPeriod_model->get_list(
            array('refpayperiod.is_deleted'=>FALSE),
            'refpayperiod.*',
            array(
            ),
        'refpayperiod.pay_period_start DESC'
        );

        $data['department']=$this->RefDepartment_model->get_list(array('ref_department.is_deleted'=>FALSE));
        $data['title'] = 'Overtime Entry';
        $this->load->view('overtime_entry_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
          
            case 'list':
                $department_id = ($this->input->post('department_id', TRUE) == null || $this->input->post('department_id', TRUE) == "" ) ? 0 : $this->input->post('department_id', TRUE);
                $period_id = ($this->input->post('period_id', TRUE) == null || $this->input->post('period_id', TRUE) == "" ) ? 0 : $this->input->post('period_id', TRUE);

                $response['data']=$this->OvertimeEntry_model->getOvertimetbl($department_id,$period_id);
                echo json_encode($response);
            break;

            case 'updateOvertimeEntry':

              $m_overtime=$this->DailyTimeRecord_model;

              $dtr_id=$this->input->post('id',TRUE);
              $ot_reg=$this->input->post('ot_reg',TRUE);
              $ot_reg_reg_hol=$this->input->post('ot_reg_reg_hol',TRUE);
              $ot_reg_spe_hol=$this->input->post('ot_reg_spe_hol',TRUE);
              $ot_sun=$this->input->post('ot_sun',TRUE);
              $ot_sun_reg_hol=$this->input->post('ot_sun_reg_hol',TRUE);
              $ot_sun_spe_hol=$this->input->post('ot_sun_spe_hol',TRUE);
              $nsd_reg=$this->input->post('nsd_reg',TRUE);
              $nsd_reg_reg_hol=$this->input->post('nsd_reg_reg_hol',TRUE);
              $nsd_reg_spe_hol=$this->input->post('nsd_reg_spe_hol',TRUE);
              $nsd_sun=$this->input->post('nsd_sun',TRUE);
              $nsd_sun_reg_hol=$this->input->post('nsd_sun_reg_hol',TRUE);
              $nsd_sun_spe_hol=$this->input->post('nsd_sun_spe_hol',TRUE);
            
              for($i=0;$i<count($dtr_id);$i++){
                $m_overtime->ot_reg=$this->get_numeric_value($ot_reg[$i]);
                $m_overtime->ot_reg_reg_hol=$this->get_numeric_value($ot_reg_reg_hol[$i]);
                $m_overtime->ot_reg_spe_hol=$this->get_numeric_value($ot_reg_spe_hol[$i]);
                $m_overtime->ot_sun=$this->get_numeric_value($ot_sun[$i]);
                $m_overtime->ot_sun_reg_hol=$this->get_numeric_value($ot_sun_reg_hol[$i]);
                $m_overtime->ot_sun_spe_hol=$this->get_numeric_value($ot_sun_spe_hol[$i]);
                $m_overtime->nsd_reg=$this->get_numeric_value($nsd_reg[$i]);
                $m_overtime->nsd_reg_reg_hol=$this->get_numeric_value($nsd_reg_reg_hol[$i]);
                $m_overtime->nsd_reg_spe_hol=$this->get_numeric_value($nsd_reg_spe_hol[$i]);
                $m_overtime->nsd_sun=$this->get_numeric_value($nsd_sun[$i]);
                $m_overtime->nsd_sun_reg_hol=$this->get_numeric_value($nsd_sun_reg_hol[$i]);
                $m_overtime->nsd_sun_spe_hol=$this->get_numeric_value($nsd_sun_spe_hol[$i]);

                $m_overtime->modified_by = $this->session->user_id;
                $m_overtime->date_modified = date("Y-m-d H:i:s");
                $m_overtime->modify($dtr_id[$i]);
              }

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Overtime Entries are successfully updated.';
                echo json_encode($response);

            break;
        }
    }
}
