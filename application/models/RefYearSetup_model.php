<?php

class RefYearSetup_model extends CORE_Model {
    protected  $table="emp_leave_year";
    protected  $pk_id="emp_leave_year_id";

    function __construct() {
        parent::__construct();
    }

    function updateAllRecords() {
    	$sql = "UPDATE emp_leave_year SET active_year = 0";
    	return $this->db->query($sql);
    }

    function getactiveyear() {
    	$total = $this->db->query('SELECT *
                            FROM emp_leave_year WHERE emp_leave_year.active_year=TRUE');
                            $grand = $total->row(0);
                            $data= $grand->emp_leave_year_id;
                           		
                          return $data;
    }

}
?>