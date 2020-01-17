<?php

class RatesDuties_model extends CORE_Model {
    protected  $table="emp_rates_duties";
    protected  $pk_id="emp_rates_duties_id";

    function __construct() {
        parent::__construct();
    }

    function updateAllRates() {
    	$sql = "UPDATE emp_rates_duties SET active_rates_duties = 0";
    	return $this->db->query($sql);
    }

    function get_employee_rate($emp_id){
		$query = $this->db->query('SELECT 
				erd.date_start, rp.position, erd.salary_reg_rates, rpt.payment_type
				FROM emp_rates_duties as erd
				LEFT JOIN ref_position as rp ON
					rp.ref_position_id = erd.ref_position_id
				LEFT JOIN ref_payment_type as rpt ON
					rpt.ref_payment_type_id = erd.ref_payment_type_id
				WHERE erd.employee_id = '.$emp_id.'
				AND erd.is_deleted = 0');
        $query->result();
        return $query->result();
    }
}
?>