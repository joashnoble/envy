<?php

class Entitlement_model extends CORE_Model {
    protected  $table="emp_leaves_entitlement";
    protected  $pk_id="emp_leaves_entitlement_id";

    function __construct() {
        parent::__construct();
    }

    function gettotalgrantthisyear($active_year,$emp_leaves_entitlement_id) {
    	$this->db->where('emp_leaves_entitlement_id', $emp_leaves_entitlement_id);
    	$this->db->where('emp_leave_year_id', $active_year);
    	/*$this->db->select('emp_leaves_entitlement_id');*/
    	$this->db->select_sum('total_grant');
        $query = $this->db->get('emp_leaves_entitlement');
        foreach($query->result() as $row)  
        {
        	$total_leave_grant=$row->total_grant;
        }              
         return $total_leave_grant;
    }


}
?>