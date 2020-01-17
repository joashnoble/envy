<?php

class RefDepartment_model extends CORE_Model {
    protected  $table="ref_department";
    protected  $pk_id="ref_department_id";
    protected  $tabletocheck="emp_rates_duties";

    function __construct() {
        parent::__construct();
    }

    function checkifused($ref_department_id,$table='ref_department') {
    	$query = $this->db->query('SELECT * FROM '.$table.'
    		 INNER JOIN emp_rates_duties ON ref_department.ref_department_id=emp_rates_duties.ref_department_id
    		 WHERE ref_department.ref_department_id='.$ref_department_id.' LIMIT 1
    		');
                            $query->result();
                           		
                          return $query->result();
    }


}
?>