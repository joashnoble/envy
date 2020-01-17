<?php
class Reg_deduction_cycle_model extends CORE_Model {
    protected  $table="reg_deduction_cycle";
    protected  $pk_id="reg_deduction_cycle_id";
    protected  $fk_id="deduction_regular_id";

    function __construct() {
        parent::__construct();
    }

    function getDeductionCycle($deduction_regular_id){
        $query = $this->db->query("SELECT 
                    rdc.*,
                    CONCAT(rfp.pay_period_start,' ~ ',rfp.pay_period_end) AS payperiod,
                    (SELECT count(*) FROM pay_slip_deductions psd
                    
                        LEFT JOIN pay_slip ps ON ps.pay_slip_id = psd.pay_slip_id
                        LEFT JOIN daily_time_record dtr ON dtr.dtr_id = ps.dtr_id
                        WHERE psd.deduction_regular_id = rdc.deduction_regular_id
                        AND dtr.pay_period_id = rfp.pay_period_id
                    
                    ) as status                    
                FROM
                    reg_deduction_cycle rdc
                        LEFT JOIN
                    refpayperiod rfp ON rfp.pay_period_id = rdc.pay_period_id
                    WHERE deduction_regular_id=".$deduction_regular_id);
                    return $query->result();
    }
}
?>
