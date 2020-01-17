<?php

class Employee_account_model extends CORE_Model {
    protected  $table="employee_account";
    protected  $pk_id="employee_account_id";

    function __construct() {
        parent::__construct();
    }

    function get_employee_account($employee_id){
		$query = $this->db->query("SELECT * FROM employee_account WHERE employee_id = $employee_id");
	    return $query->result();
	}

}
?>
