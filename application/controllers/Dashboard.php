<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Dashboard extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Employee_model');
        $this->load->model('Users_model');
        $this->load->model('Wall_post_model');
        $this->validate_session();

    }

    public function index()
    {


        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_switcher_settings']=$this->load->view('template/elements/switcher','',TRUE);
        $data['_side_bar_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigationfor_dash','',TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        /*getting retired employees*/
        $getretired=$this->Employee_model->get_list('employee_list.is_deleted=0 AND (employee_list.is_retired=1 OR employee_list.status="Inactive")',
            'COUNT(employee_list.employee_id) as retired_employees');
        /*getting ALL employees*/
        $gettotalemployee=$this->Employee_model->getcountemployee();
        /*computing percentage*/
       /* echo $gettotalemployee[0]->total_employee;*/
        $data['active_count']=abs($gettotalemployee[0]->total_employee-$getretired[0]->retired_employees);
        $data['retired_count']=$getretired[0]->retired_employees;
        $data['retired_percentage']=round(($getretired[0]->retired_employees/$gettotalemployee[0]->total_employee)*100,2);
        $data['active_percentage']=abs($data['retired_percentage']-100);
        //get online users
        $getonlineusers=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=1',
            'COUNT(*) as online_users');
        //get all users
        $getalleusers=$this->Users_model->get_list('user_accounts.is_deleted=0',
            'COUNT(*) as all_users');
        $data['percent_online_users']=round(($getonlineusers[0]->online_users/$getalleusers[0]->all_users)*100,2);
        $data['percent_offline_users']=abs($data['percent_online_users']-100);
        $data['online_users']=$getonlineusers[0]->online_users;
        $data['offline_users']=abs($getalleusers[0]->all_users-$getonlineusers[0]->online_users);
        //box users
        $data['online_users_box']=$getonlineusers=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=1',
                    'user_accounts.*,CONCAT(user_fname," ",user_mname," ",user_lname) as full_name');
        $data['offline_users_box']=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=0',
                    'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name');
        //wall post
        $data['wall_post']=$this->Wall_post_model->get_list(
                    null,
                    'wall_post.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_lname) as full_name,user_accounts.photo_path,
                    DATE_FORMAT(wall_post.date_created, "%M %D, %Y %H:%i:%s") as `readable`',
                    array(
                            array('user_accounts','user_accounts.user_id=wall_post.user_id','left'),
                        ),
                    'wall_post_id desc',
                    null,
                    TRUE,
                    '20'
                    );
        $data['count']=$this->Wall_post_model->get_list(
                            null,
                            'COUNT(*) as count'
                            );
        $data['empperdept']=$this->Employee_model->empcountperdept();
        $data['monthlygross']=$this->Employee_model->dashmonthlygross();
        $data['compensationdept']=$this->Employee_model->dashcompensationdept();
        $data['empperbranch']=$this->Employee_model->empcountperbranch();
        $data['user_id']=$this->session->user_id;
        $this->load->view('dashboard_view',$data);
        $data['title'] = 'Dashboard';
    }

    function transaction($txn = null) {
        switch ($txn) {

            case 'getExpiringPersonnel':
                $type = $this->input->post('type', TRUE);
                $response['data']=$this->Employee_model->getExpiringPersonnel($type,1,0,0);
                echo json_encode($response);
            break; 

            case 'getstats':
                $this->validate_session();
                $getretired=$this->Employee_model->get_list('employee_list.is_deleted=0 AND (employee_list.is_retired=1 OR employee_list.status="Inactive")',
                    'COUNT(employee_list.employee_id) as retired_employees');
                /*getting ALL employees*/
                $gettotalemployee=$this->Employee_model->getcountemployee();
                /*computing percentage*/
               /* echo $gettotalemployee[0]->total_employee;*/
                $response['active_count']=abs($gettotalemployee[0]->total_employee-$getretired[0]->retired_employees);
                $response['retired_count']=$getretired[0]->retired_employees;
                $response['retired_percentage']=round(($getretired[0]->retired_employees/$gettotalemployee[0]->total_employee)*100,2);
                $response['active_percentage']=abs($response['retired_percentage']-100);

                //get online users
                $getonlineusers=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=1',
                    'COUNT(*) as online_users');
                //get all users
                $getalleusers=$this->Users_model->get_list('user_accounts.is_deleted=0',
                    'COUNT(*) as all_users');
                $response['percent_online_users']=round(($getonlineusers[0]->online_users/$getalleusers[0]->all_users)*100,2);
                $response['percent_offline_users']=abs($response['percent_online_users']-100);
                $response['online_users']=$getonlineusers[0]->online_users;
                $response['offline_users']=abs($getalleusers[0]->all_users-$getonlineusers[0]->online_users);

                //box users online
                $response['online_users_box']=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=1',
                    'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name');
                //box users offline
                $response['offline_users_box']=$this->Users_model->get_list('user_accounts.is_deleted=0 AND session_status=0',
                    'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name');

                //wall post
                $chatamount = $this->input->post('chatamount', TRUE);
                $response['wall_post']=$this->Wall_post_model->wall_post($chatamount);
                $response['count']=$this->Wall_post_model->get_list(
                            null,
                            'COUNT(*) as count'
                            );

                echo json_encode($response);
            break;

            case 'create':
                $m_wallpost=$this->Wall_post_model;
                $m_wallpost->post_content=$this->input->post('post_content',TRUE);
                $m_wallpost->user_id = $this->session->user_id;
                $m_wallpost->date_created = date("Y-m-d H:i:s");
                $m_wallpost->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Post Successfull.';
                echo json_encode($response);

            break;
        }
    }
}
