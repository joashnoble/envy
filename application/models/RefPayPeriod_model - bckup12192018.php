<?php

class RefPayPeriod_model extends CORE_Model {
    protected  $table="refpayperiod";
    protected  $pk_id="pay_period_id";

    function __construct() {
        parent::__construct();
    }

    function get_pay_period($year) {
      $query = $this->db->query('SELECT * FROM refpayperiod WHERE extract(YEAR from pay_period_start)='.$year.' AND is_deleted=0 ORDER BY pay_period_start DESC');

                                return $query->result();
                          
    }

    function get_list_for_deduction($employee_id,$deduction_id){
        $query = $this->db->query("SELECT 
                    rpp.pay_period_id,
                    CONCAT(rpp.pay_period_start, ' ~ ', rpp.pay_period_end) AS payperiod_desc,
                    (SELECT count(*) FROM reg_deduction_cycle rdc
                        LEFT JOIN new_deductions_regular ndr ON ndr.deduction_regular_id = rdc.deduction_regular_id 
                        WHERE 
                            rdc.pay_period_id = rpp.pay_period_id
                            AND ndr.deduction_id = $deduction_id
                            AND ndr.employee_id = $employee_id
                    ) as is_checked
                FROM
                    refpayperiod rpp
                ORDER BY rpp.pay_period_id DESC");
        return $query->result();        
    }
    
}
?>