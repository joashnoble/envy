<?php

class OvertimeEntry_model extends CORE_Model {
    protected  $table="ref_overtime_entry";
    protected  $pk_id="overtime_entry_id";

    function __construct() {
        parent::__construct();
    }

    
    function getOvertimetbl($dept_id,$period_id){
        $query = $this->db->query("SELECT 
                                      CONCAT(emp.first_name,' ',emp.middle_name,' ',emp.last_name) as full_name, emp.*, dtr.*, dept.department
                                      FROM 
                                          daily_time_record as dtr
                                          LEFT JOIN
                                        employee_list as emp ON emp.employee_id = dtr.employee_id
                                            LEFT JOIN 
                                        emp_rates_duties as emp_rates ON emp_rates.emp_rates_duties_id = emp.emp_rates_duties_id
                                            LEFT JOIN 
                                        ref_department as dept ON dept.ref_department_id=emp_rates.ref_department_id
                                      WHERE emp_rates.ref_department_id='".$dept_id."' AND dtr.pay_period_id = '".$period_id."'");
        return $query->result();
    }

 }

 ?>