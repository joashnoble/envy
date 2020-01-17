<?php

class Commendation_model extends CORE_Model {
    protected  $table="emp_commendation";
    protected  $pk_id="emp_commendation_id";

    function __construct() {
        parent::__construct();
    }

    function get_employee_commendation($emp_id){
		$query = $this->db->query('SELECT 
				date_commendation, memo_number, remarks
				FROM emp_commendation
				WHERE employee_id = '.$emp_id.'
				AND is_deleted = 0');
	    $query->result();
	    return $query->result();
	}
}
?>