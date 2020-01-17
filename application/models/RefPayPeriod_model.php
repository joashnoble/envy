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

    function get_all_rpp($sdate,$edate){
        $sql = "SELECT 
            rpp.*
        FROM
            refpayperiod rpp
            WHERE rpp.is_deleted = FALSE
            AND pay_period_start BETWEEN '".$sdate."' AND '".$edate."'";
        return $this->db->query($sql)->result();     
    }

    function getpayperioddesc($pay_period_id){
      $query = $this->db->query('SELECT CONCAT(pay_period_start," ~ ",pay_period_end) as pay_period FROM refpayperiod 
        WHERE pay_period_id='.$pay_period_id.' AND is_deleted=0');
        return $query->result();
    }

    function getpayperiod(){
      $query = $this->db->query("SELECT CONCAT(pay_period_start,' ~ ',pay_period_end) as period, pay_period_id FROM refpayperiod WHERE is_deleted = 0 ORDER BY pay_period_id DESC");
    return $query->result();
    }

    function getperiod($getperiod){
      $query = $this->db->query("SELECT CONCAT(DATE_FORMAT(pay_period_start,'%d %M %Y'),'  to  ',DATE_FORMAT(pay_period_end, '%d %M %Y')) as period, pay_period_id FROM refpayperiod WHERE is_deleted = 0 AND pay_period_id=".$getperiod);
    return $query->result();
    }

    function get_payroll_transaction($pay_period_id,$ref_department_id="all"){
      $query = $this->db->query("SELECT 
            COUNT(dtr.employee_id) as count,
            el.bank_account_isprocess as type,
            (CASE WHEN el.bank_account_isprocess = 1 THEN 'ATM' ELSE 'CASH' END) as transaction_type,
            erd.ref_department_id
        FROM
            pay_slip ps 
            LEFT JOIN daily_time_record dtr ON dtr.dtr_id = ps.dtr_id
            LEFT JOIN employee_list el ON el.employee_id = dtr.employee_id
            LEFT JOIN emp_rates_duties erd ON erd.emp_rates_duties_id = el.emp_rates_duties_id
            WHERE dtr.pay_period_id = $pay_period_id
            ".($ref_department_id=='all'?"":" AND erd.ref_department_id = $ref_department_id")."
            GROUP BY el.bank_account_isprocess
            ORDER BY transaction_type ASC");
    return $query->result();
    }    

    function get_ndr($start_date,$end_date){
      $sql = "SELECT 
            *
        FROM
            new_deductions_regular
            WHERE '".$end_date."' BETWEEN starting_date AND ending_date
            AND is_deleted = FALSE";
      return $this->db->query($sql)->result();
    }
    
}
?>