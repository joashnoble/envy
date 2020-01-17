<?php

class RefWorkExperience_model extends CORE_Model {
    protected  $table="ref_work_experience";
    protected  $pk_id="ref_work_experience_id";

    function __construct() {
        parent::__construct();
    }

    function getEmpWorkExperience($ref_work_experience_id){
			$query = $this->db->query("SELECT 
					    ref_work_experience.*,
					    DATE_FORMAT(ref_work_experience.from_date,
					            '%m/%d/%Y') AS from_date,
					    DATE_FORMAT(ref_work_experience.to_date, '%m/%d/%Y') AS to_date
					FROM
					    ref_work_experience
					        LEFT JOIN
					    employee_list ON employee_list.employee_id = ref_work_experience.employee_id
					WHERE
					    ref_work_experience.ref_work_experience_id=$ref_work_experience_id");
		    $query->result();
		    return $query->result();
	}

    function get_employee_workexperience($emp_id){
		$query = $this->db->query("SELECT 
				    emp_work.company,
				    emp_work.job_title,
				    emp_work.job_description,
				    DATE_FORMAT(from_date, '%m/%d/%Y') AS from_date,
				    DATE_FORMAT(to_date, '%m/%d/%Y') AS to_date
				FROM
				    ref_work_experience AS emp_work
				WHERE
				    emp_work.employee_id = ".$emp_id."
				        AND emp_work.is_deleted = 0");
	    $query->result();
	    return $query->result();
	}

}
?>