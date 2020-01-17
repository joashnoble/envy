<?php

class Regular_Deduction_model extends CORE_Model {
    protected  $table="new_deductions_regular";
    protected  $pk_id="deduction_regular_id";

    function __construct() {
        parent::__construct();
    }

    function verify_loan_status($deduction_regular_id) {
      $verify_loan=$this->db->query('SELECT COUNT(deduction_regular_id) as countstatus FROM pay_slip_deductions WHERE deduction_regular_id='.$deduction_regular_id);
                                        $verify_temp = $verify_loan->result();
                                        return $verify_temp[0]->countstatus;
                          				//it will return whether it is true or false
    }

    function checkifloanexists($employee_id,$deduction_id) {
      $check_loan=$this->db->query('SELECT COUNT(deduction_regular_id) as countcheck FROM new_deductions_regular WHERE employee_id='.$employee_id.' AND is_deleted=0 AND deduction_id='.$deduction_id);
                                        $verify_count = $check_loan->result();
                                        return $verify_count[0]->countcheck;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }

    function getloanemployee($deduction_regular_id) {
      $employeeloan=$this->db->query('SELECT employee_id FROM new_deductions_regular WHERE deduction_regular_id='.$deduction_regular_id.' AND is_deleted=0');
                                        $employee_loan = $employeeloan->result();
                                        return $employee_loan[0]->employee_id;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }
}
?>
