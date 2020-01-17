<?php

class Emp_resignation_model extends CORE_Model {
    protected  $table="emp_resignation_form";
    protected  $pk_id="emp_resignation_id";
    protected  $fk_id="employee_id";

    function __construct() {
        parent::__construct();
    }

    function get_resignation($emp_resignation_id=null) {
        $query = $this->db->query("SELECT 
			    emp_resignation_form.*,
			    CONCAT(el_emp.first_name,
			            ' ',
			            el_emp.middle_name,
			            ' ',
			            el_emp.last_name) AS emp_fullname,
			    CONCAT(el_emp_apprv.first_name,
			            ' ',
			            el_emp_apprv.middle_name,
			            ' ',
			            el_emp_apprv.last_name) AS emp_aprrv_fullname,
			    emp_resignation_form.is_cleared,
			    DATE_FORMAT(emp_resignation_form.effectivity_date,'%m/%d/%Y') AS effectivity_date
			FROM
			    emp_resignation_form
			        LEFT JOIN
			    employee_list AS el_emp ON el_emp.employee_id = emp_resignation_form.employee_id
			        LEFT JOIN
			    employee_list AS el_emp_apprv ON el_emp_apprv.employee_id = emp_resignation_form.approved_by
			WHERE
			    emp_resignation_form.is_deleted = 0
			 ".($emp_resignation_id==null?"":" AND emp_resignation_form.emp_resignation_id=".$emp_resignation_id."")." ");
		return $query->result();
    }

    function get_employee_info($employee_id) {
                  $query = $this->db->query("SELECT 
                employee_list.*,
                CONCAT(employee_list.first_name,
                        ' ',
                        employee_list.middle_name,
                        ' ',
                        employee_list.last_name) AS full_name,
                ref_branch.branch,
                ref_department.department,
                emp_rates_duties.*,
                ref_position.position,
                (CASE
                	WHEN employee_list.employment_date = '' 
                		THEN 'N/A'
                	ELSE DATE_FORMAT(employee_list.employment_date,'%m/%d/%Y')
                END) AS employment_date
            FROM
                employee_list
                    LEFT JOIN
                emp_rates_duties ON emp_rates_duties.emp_rates_duties_id = employee_list.emp_rates_duties_id
                    LEFT JOIN
                ref_branch ON ref_branch.ref_branch_id = emp_rates_duties.ref_branch_id
                    LEFT JOIN
                ref_department ON ref_department.ref_department_id = emp_rates_duties.ref_department_id
                    LEFT JOIN
                ref_position ON ref_position.ref_position_id = emp_rates_duties.ref_position_id
            WHERE
                employee_list.is_deleted = 0
                AND employee_list.employee_id = ".$employee_id."
            ORDER BY full_name ASC");
            return $query->result();
   }

}
?>
