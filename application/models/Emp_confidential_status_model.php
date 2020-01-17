<?php

class Emp_confidential_status_model extends CORE_Model {
    protected  $table="emp_confidential_status";
    protected  $pk_id="emp_confidential_status_id";
    protected  $fk_id="employee_id";

    function __construct() {
        parent::__construct();
    }


    function get_fkid($employee_id) {
        $query = $this->db->query("SELECT 
					    emp_confidential_status.*,
					    DATE_FORMAT(effectivity_date, '%m/%d/%Y') AS effectivity_date
					FROM
					    emp_confidential_status
					WHERE
					    employee_id =".$employee_id);
		$query->result();
		return $query->result();
    }

}
?>
