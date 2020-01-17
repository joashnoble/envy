<?php

class RefDeductionSetup_model extends CORE_Model {
    protected  $table="refdeduction";
    protected  $pk_id="deduction_id";

    function __construct() {
        parent::__construct();
    }

    function getcycleperiod($pay_period_id) {
        $query = $this->db->query('SELECT refpayperiod.pay_period_sequence FROM refpayperiod WHERE pay_period_id='.$pay_period_id
            );
                            $query->result();

                          return $query->result();
    }

    function getalldeduct($employee_id,$pay_period_id,$pay_period_sequence) {
        $query = $this->db->query('
                SELECT refdeduction.*,refdeductiontype.deduction_type_id,refdeductiontype.deduction_type_desc,td.deduction_per_pay_amount,td.deduction_regular_id
                FROM refdeduction
                LEFT JOIN refdeductiontype
                ON refdeduction.deduction_type_id=refdeductiontype.deduction_type_id
                LEFT JOIN
                    (
                        SELECT new_deductions_regular.deduction_regular_id,new_deductions_regular.deduction_per_pay_amount, new_deductions_regular.deduction_id as deduct_idtemp
                        FROM new_deductions_regular
                        WHERE employee_id='.$employee_id.' AND (pay_period_id = '.$pay_period_id.' OR deduction_cycle = '.$pay_period_sequence.')
                    ) AS td
                    ON refdeduction.deduction_id = td.deduct_idtemp
                     WHERE refdeduction.is_deleted=0
            ');
                            $query->result();

                          return $query->result();
    }

    function getalldeductedit($employee_id,$dtr_id) {
        $query = $this->db->query('
                SELECT refdeduction.*,refdeductiontype.deduction_Type_id,refdeductiontype.deduction_type_desc,a.deduction_per_pay_amount,a.deduction_regular_id,a.is_deduct
                FROM refdeduction
                LEFT JOIN refdeductiontype
                ON refdeduction.deduction_type_id=refdeductiontype.deduction_type_id
                LEFT JOIN
                    (
                        SELECT dtr_deductions.deduction_id,dtr_deductions.is_deduct,dtr_deductions.deduction_regular_id,new_deductions_regular.deduction_per_pay_amount
                        FROM dtr_deductions
                        LEFT JOIN new_deductions_regular
                        ON dtr_deductions.deduction_regular_id=new_deductions_regular.deduction_regular_id
                        WHERE dtr_deductions.dtr_id='.$dtr_id.' AND (new_deductions_regular.employee_id = '.$employee_id.' OR is_deduct = 1)) AS a
                        ON refdeduction.deduction_id = a.deduction_id
                        WHERE refdeduction.is_deleted=0
            ');
                            $query->result();

                          return $query->result();
    }
}
?>
