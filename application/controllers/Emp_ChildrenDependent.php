<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_ChildrenDependent extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Entitlement_model');
        $this->load->model('Employee_model');
        $this->load->model('RefYearSetup_model');
        $this->load->model('ChildrenDependent_model');
        
    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigationforemployee', '', TRUE);
        $data['title'] = 'RatesDuties';

        $this->load->view('', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->ChildrenDependent_model->get_list(
                    array('emp_children_dependent.is_deleted'=>FALSE),
                    'emp_children_dependent.*'
                    );
                echo json_encode($response);
                break;

            case 'listchildrendependent':
                $employee_id = $this->input->post('employee_id', TRUE);
                $response['data']=$this->ChildrenDependent_model->get_list(
                    array('emp_children_dependent.is_deleted'=>FALSE,'employee_list.employee_id'=>$employee_id),
                    'emp_children_dependent.*,ref_relationship.ref_relationship_id,ref_relationship.relationship',
                    array(
                            array('employee_list','employee_list.employee_id=emp_children_dependent.employee_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=emp_children_dependent.ref_relationship_id','left'),
                        )
                    );
                echo json_encode($response);
                break;


            case 'create':
                $m_childrendependent = $this->ChildrenDependent_model;

                $birthdate_temp = $this->input->post('birthdate', TRUE);
                $birthdate = date("Y-m-d", strtotime($birthdate_temp));

                $m_childrendependent->employee_id = $this->input->post('employee_id', TRUE);
                $m_childrendependent->name = $this->input->post('name', TRUE);
                $m_childrendependent->ref_relationship_id = $this->input->post('ref_relationship_id', TRUE);
                $m_childrendependent->birthdate = $birthdate;

                $m_childrendependent->date_created = date("Y-m-d");
                $m_childrendependent->created_by = $this->session->user_id;
                $m_childrendependent->save();

                $emp_children_dependent_id = $m_childrendependent->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Children/Dependent successfully created.';

                $response['row_added'] = $this->ChildrenDependent_model->get_list(
                   $emp_children_dependent_id,
                   'emp_children_dependent.*,ref_relationship.ref_relationship_id,ref_relationship.relationship',
                    array(
                            array('ref_relationship','ref_relationship.ref_relationship_id=emp_children_dependent.ref_relationship_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_childrendependent = $this->ChildrenDependent_model;

                $emp_children_dependent_id=$this->input->post('emp_children_dependent_id',TRUE);

                $m_childrendependent->is_deleted=1;
                $m_childrendependent->deleted_by=$this->session->user_id;
                $m_childrendependent->date_deleted=date("Y-m-d");
                if($m_childrendependent->modify($emp_children_dependent_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Children/Dependent successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_childrendependent = $this->ChildrenDependent_model;

                $birthdate_temp = $this->input->post('birthdate', TRUE);
                $birthdate = date("Y-m-d", strtotime($birthdate_temp));

                $emp_children_dependent_id = $this->input->post('emp_children_dependent_id', TRUE);

                //$m_childrendependent->employee_id = $this->input->post('employee_id', TRUE);
                $m_childrendependent->name = $this->input->post('name', TRUE);
                $m_childrendependent->ref_relationship_id = $this->input->post('ref_relationship_id', TRUE);
                $m_childrendependent->birthdate = $birthdate;
                $m_childrendependent->modified_by = $this->session->user_id;
                $m_childrendependent->date_modified = date("Y-m-d");
                $m_childrendependent->modify($emp_children_dependent_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Children/Dependent successfully Updated.';
                
                $response['row_updated'] = $this->ChildrenDependent_model->get_list(
                   $emp_children_dependent_id,
                   'emp_children_dependent.*,ref_relationship.ref_relationship_id,ref_relationship.relationship',
                    array(
                            array('ref_relationship','ref_relationship.ref_relationship_id=emp_children_dependent.ref_relationship_id','left'),
                        )
                    );
                echo json_encode($response);

                break;

            case 'test':
function replaceCharsInNumber($num, $chars) {
   return substr((string) $num, 0, -strlen($chars)) . $chars;
}

$format = "000000";
$temp = replaceCharsInNumber($format, '200'); //5069xxx
$ecode = $temp .'-'. $today = date("Y");
echo $ecode;


                break;
                case 'test2':
                $m_yearsetup = $this->RefYearSetup_model;
                $active_year = $m_yearsetup->getactiveyear();
                echo $active_year;
                break;
        }
    }











}
