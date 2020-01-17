<?php

class Payslip_model extends CORE_Model {
    protected  $table="pay_slip";
    protected  $pk_id="pay_slip_id";

    function __construct() {
        parent::__construct();
    }

    function get_payslip($filter_payperiod, $filter_dept, $filter_branch){

        $dept = ($filter_dept != "all") ? "AND dptmt.ref_department_id=$filter_dept" : "";
        $branch = ($filter_branch != "all") ? "AND erd.ref_branch_id=$filter_branch" : "";

        $query = $this->db->query('SELECT
                              CONCAT(el.first_name," ",el.middle_name," ",el.last_name) AS fullname,
                              rpp.pay_period_start,
                              rpp.pay_period_end,
                              ps.*,
                              rpp.pay_period_start,
                              rpp.pay_period_end,
                              psdsss.sss_deduction,
                              psdphil.philhealth_deduction,
                              psdpagibig.pagibig_deduction,
                              psdwtax.wtax_deduction,
                              psdsssloan.sssloan_deduction,
                              psdpagibigloan.pagibigloan_deduction,
                              psdcooploan.cooploan_deduction,
                              psdcoopcontrib.coopcontribution_deduction,
                              psdcashadvance.cashadvance_deduction,
                              COALESCE(ROUND(psoeall.allowance, 2), 0) AS allowance,
                              COALESCE(ROUND(psoea.adjustment, 2), 0) AS adjustment,
                              COALESCE(ROUND(psoec.other_earnings, 2), 0) AS other_earnings,
                              psdcalamityloan.calamityloan_deduction,
                              psod.other_deductions,
                              dptmt.department,
                              pymt.payment_type,
                              brnch.branch,
                              brnch.description,
                              dtr.*,
                              (COALESCE(psdsss.sss_deduction, 0) + COALESCE(psdphil.philhealth_deduction,0) + COALESCE(psdpagibig.pagibig_deduction,0) + COALESCE(psdwtax.wtax_deduction,0) + COALESCE(psdsssloan.sssloan_deduction,0) + COALESCE(psdpagibigloan.pagibigloan_deduction,0) + COALESCE(psdcashadvance.cashadvance_deduction,0) + COALESCE(ps.minutes_late_amt,0) + COALESCE(psdcooploan.cooploan_deduction,0) + COALESCE(psdcoopcontrib.coopcontribution_deduction,0) + COALESCE(psdcalamityloan.calamityloan_deduction,0) + COALESCE(psod.other_deductions,0) + COALESCE(ps.days_wout_pay_amt,0) ) AS total_deduct

                          FROM
                              pay_slip AS ps
                                  LEFT JOIN
                              daily_time_record AS dtr ON ps.dtr_id = dtr.dtr_id
                                  LEFT JOIN
                              employee_list AS el ON dtr.employee_id = el.employee_id
                                  LEFT JOIN
                              emp_rates_duties AS erd ON el.employee_id = erd.employee_id
                                  LEFT JOIN
                              ref_department AS dptmt ON dptmt.ref_department_id = erd.ref_department_id
                                  LEFT JOIN
                              ref_branch AS brnch ON brnch.ref_branch_id = erd.ref_branch_id
                                  LEFT JOIN
                              ref_payment_type AS pymt ON pymt.ref_payment_type_id = erd.ref_payment_type_id
                                  LEFT JOIN
                              refpayperiod AS rpp ON dtr.pay_period_id = rpp.pay_period_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, SUM(earnings_amount) AS allowance
                              FROM
                                  pay_slip_other_earnings
                              WHERE
                                  earnings_id = 1
                              GROUP BY pay_slip_id) AS psoeall ON ps.pay_slip_id = psoeall.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, SUM(earnings_amount) AS adjustment
                              FROM
                                  pay_slip_other_earnings
                              WHERE
                                  earnings_id = 2
                              GROUP BY pay_slip_id) AS psoea ON ps.pay_slip_id = psoea.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, SUM(earnings_amount) AS other_earnings
                              FROM
                                  pay_slip_other_earnings
                              WHERE
                                  earnings_id != 1 AND earnings_id != 2
                              GROUP BY pay_slip_id) AS psoec ON ps.pay_slip_id = psoec.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS sss_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 1) AS psdsss ON ps.pay_slip_id = psdsss.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS philhealth_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 2) AS psdphil ON ps.pay_slip_id = psdphil.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS pagibig_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 3) AS psdpagibig ON ps.pay_slip_id = psdpagibig.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS wtax_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 4) AS psdwtax ON ps.pay_slip_id = psdwtax.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS sssloan_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 5) AS psdsssloan ON ps.pay_slip_id = psdsssloan.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS pagibigloan_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 6) AS psdpagibigloan ON ps.pay_slip_id = psdpagibigloan.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS cashadvance_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 7) AS psdcashadvance ON ps.pay_slip_id = psdcashadvance.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS cooploan_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 8) AS psdcooploan ON ps.pay_slip_id = psdcooploan.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, (deduction_amount) AS calamityloan_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 12) AS psdcalamityloan ON ps.pay_slip_id = psdcalamityloan.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id, SUM(deduction_amount) AS other_deductions
                              FROM
                                  pay_slip_deductions
                              LEFT JOIN refdeduction ON refdeduction.deduction_id = pay_slip_deductions.deduction_id
                              WHERE
                                  refdeduction.deduction_type_id != 1
                                      AND refdeduction.deduction_type_id != 2
                                      AND refdeduction.deduction_type_id != 4
                                      AND active_deduct = TRUE
                              GROUP BY pay_slip_id) AS psod ON ps.pay_slip_id = psod.pay_slip_id
                                  LEFT JOIN
                              (SELECT
                                  pay_slip_id,
                                      (deduction_amount) AS coopcontribution_deduction
                              FROM
                                  pay_slip_deductions
                              WHERE
                                  deduction_id = 9) AS psdcoopcontrib ON ps.pay_slip_id = psdcoopcontrib.pay_slip_id
                          WHERE
                              erd.active_rates_duties = 1
                          AND
                              rpp.pay_period_id='.$filter_payperiod.' '.$dept.' '.$branch.'
                          ORDER BY fullname');
    return $query->result();
    }
}
?>
