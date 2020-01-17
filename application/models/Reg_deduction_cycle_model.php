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
                    CONCAT(rfp.pay_period_start,' ~ ',rfp.pay_period_end) AS payperiod
                FROM
                    reg_deduction_cycle rdc
                        LEFT JOIN
                    refpayperiod rfp ON rfp.pay_period_id = rdc.pay_period_id
                    WHERE deduction_regular_id=".$deduction_regular_id);
                    return $query->result();
    }
}
?>
