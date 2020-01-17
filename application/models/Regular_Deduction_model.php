<?php

class Regular_Deduction_model extends CORE_Model {
    protected  $table="new_deductions_regular";
    protected  $pk_id="deduction_regular_id";

    function __construct() {
        parent::__construct();
    }

    function get_regular_deduction($deduction_regular_id=null){
        $query = $this->db->query("SELECT 
                new_deductions_regular.*,
                employee_list.*,
                CONCAT(employee_list.first_name,
                        ' ',
                        middle_name,
                        ' ',
                        employee_list.last_name) AS full_name,
                refdeduction.*,
                refdeductiontype.*,
                DATE_FORMAT(new_deductions_regular.starting_date,
                        '%m/%d/%Y') AS starting_date,
                DATE_FORMAT(new_deductions_regular.ending_date,
                        '%m/%d/%Y') AS ending_date,
                (CASE
                    WHEN
                        (SELECT 
                                COALESCE(SUM(deduction_amount), 0)
                            FROM
                                pay_slip_deductions
                            WHERE
                                deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                    THEN
                        new_deductions_regular.loan_total_amount - ((SELECT 
                                COALESCE(SUM(deduction_amount), 0)
                            FROM
                                pay_slip_deductions
                            WHERE
                                deduction_regular_id = new_deductions_regular.deduction_regular_id))
                    ELSE new_deductions_regular.loan_total_amount
                END) AS deduction_total_amount
            FROM
                new_deductions_regular
                    LEFT JOIN
                employee_list ON employee_list.employee_id = new_deductions_regular.employee_id
                    LEFT JOIN
                refdeduction ON refdeduction.deduction_id = new_deductions_regular.deduction_id
                    LEFT JOIN
                refdeductiontype ON refdeductiontype.deduction_type_id = refdeduction.deduction_type_id
            WHERE
                new_deductions_regular.is_deleted = FALSE
                    AND new_deductions_regular.is_temporary = FALSE
                    ".($deduction_regular_id==null?"":" AND new_deductions_regular.deduction_regular_id = $deduction_regular_id")."");
        return $query->result();
    }


    function verify_loan_status($deduction_regular_id) {
      $verify_loan=$this->db->query('SELECT COUNT(deduction_regular_id) as countstatus FROM pay_slip_deductions WHERE deduction_regular_id='.$deduction_regular_id);
                                        $verify_temp = $verify_loan->result();
                                        return $verify_temp[0]->countstatus;
                                        //it will return whether it is true or false
    }

    function checkifloanexists($employee_id,$deduction_id,$deduction_regular_id=null) {
      $check_loan=$this->db->query("SELECT 
                        COALESCE(MAX((CASE
                            WHEN main.deduction_total_amount > 0 THEN 1
                            ELSE 0
                        END)),0) AS countcheck
                FROM
                    (SELECT 
                        (CASE
                                WHEN
                                    (SELECT COALESCE(SUM(deduction_amount), 0) FROM pay_slip_deductions
                                        WHERE deduction_regular_id = new_deductions_regular.deduction_regular_id) > 0
                                THEN
                                    new_deductions_regular.loan_total_amount - ((SELECT 
                                            COALESCE(SUM(deduction_amount), 0)
                                        FROM
                                            pay_slip_deductions
                                        WHERE
                                            deduction_regular_id = new_deductions_regular.deduction_regular_id))
                                ELSE new_deductions_regular.loan_total_amount
                            END) AS deduction_total_amount
                    FROM
                        new_deductions_regular
                    WHERE
                        is_deleted = 0
                            AND new_deductions_regular.deduction_status_id = 1
                            ".($deduction_regular_id == null?"":" AND deduction_regular_id!=$deduction_regular_id")."
                            AND employee_id = $employee_id
                            AND deduction_id = $deduction_id) AS main");
            
                            $verify_count = $check_loan->result();
                            return $verify_count[0]->countcheck;
    }

    function checkifloanexists_1($employee_id,$deduction_id,$deduction_regular_id=null) {
      $query=$this->db->query("SELECT *
                    FROM
                        new_deductions_regular
                    WHERE
                        is_deleted = 0
                            AND new_deductions_regular.deduction_status_id = 1
                            ".($deduction_regular_id == null?"":" AND deduction_regular_id!=$deduction_regular_id")."
                            AND employee_id = $employee_id
                            AND deduction_id = $deduction_id");
            
        return $query->result();
    }


    function getloanemployee($deduction_regular_id) {
        $query = $this->db->query("SELECT 
                    ndr.*, 
                    CONCAT(el.first_name,' ',el.middle_name,' ',el.last_name) as full_name,
                    rd.deduction_desc
                FROM new_deductions_regular ndr
                    LEFT JOIN employee_list el ON el.employee_id = ndr.employee_id
                    LEFT JOIN refdeduction rd ON rd.deduction_id = ndr.deduction_id
                    WHERE ndr.deduction_regular_id=$deduction_regular_id 
                        AND ndr.is_deleted=0");
        return $query->result();
    }
}
?>
