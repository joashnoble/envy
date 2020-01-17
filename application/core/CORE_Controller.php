<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CORE_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    function validate_session(){
        $this->db->select('session_status');
        $this->db->where('user_id', $this->session->user_id);
        $query = $this->db->get('user_accounts');
        $queryget = $query->result();
        $queryget[0]->session_status;
        $session_status = $queryget[0]->session_status;

        if($session_status==0 || $session_status==null){
            session_destroy();
            redirect(base_url().'login');
        }
        if(!$this->session->user_id){
            redirect(base_url().'login');
        }
    }


    function end_session(){
        session_destroy();
        redirect(base_url().'login');
    }

    function get_numeric_value($str){
        return (float)str_replace(',','',$str);
    }




}