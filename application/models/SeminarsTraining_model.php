<?php

class SeminarsTraining_model extends CORE_Model {
    protected  $table="emp_seminar_training";
    protected  $pk_id="emp_seminar_training_id";

    function __construct() {
        parent::__construct();
    }

    function get_employee_seminars($emp_id){
		$query = $this->db->query('SELECT 
				emp_s.date_from, emp_s.seminar_title, emp_s.venue, rc.certificate
				FROM emp_seminar_training as emp_s
				LEFT JOIN ref_certificate as rc ON
				rc.ref_certificate_id = emp_s.ref_certificate_id
				WHERE emp_s.employee_id = '.$emp_id.'
				AND emp_s.is_deleted = 0');
	    $query->result();
	    return $query->result();
	}

}
?>