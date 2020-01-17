<?php

class SchedDTR_model extends CORE_Model {
    protected  $table="schedule_employee";
    protected  $pk_id="schedule_employee_id";

    function __construct() {
        parent::__construct();
    }

    function getscheddtr($employee_id,$pay_period_id) {
        $query = $this->db->query("SELECT b.*,ref_day_type_id,
(CASE
	WHEN b.ref_day_type_id = 1 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_day,
(CASE
	WHEN b.ref_day_type_id = 2 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_sunday,
(CASE
	WHEN b.ref_day_type_id = 3 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_holiday,
(CASE
	WHEN b.ref_day_type_id = 4 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as special_holiday,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_regular_holiday,
(CASE
	WHEN b.ref_day_type_id = 6 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_special_holiday,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=1 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as regular_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=2 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=3 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as regular_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=4 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as special_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=5 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_regular_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=6 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_special_hol_ot,
(CASE
	WHEN b.ref_day_type_id = 1 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_nsd,
(CASE
	WHEN b.ref_day_type_id = 2 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_sunday_nsd,
(CASE
	WHEN b.ref_day_type_id = 3 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 4 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as special_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_regular_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_special_hol_nsd
 FROM (SELECT
	t.fullname,t.employee_id,t.date,t.payperiod,t.clock_in,t.clock_out,t.breaktime,t.ref_day_type_id,t.daytype,t.ot_in,t.time_in,t.time_out,t.nsd_start,t.nsd_end,
    CASE
        WHEN clock_in <= time_in THEN 0
        ELSE TIMESTAMPDIFF(MINUTE, time_in, clock_in)
    END AS timelate,
    ottime,
    CASE
        WHEN ((totalattendedhours / 60) - (breaktime)) >= (totalhours / 60) - (breaktime) THEN COALESCE(ROUND((totalhours / 60) - (breaktime), 2),0)
        ELSE COALESCE(ROUND(((totalattendedhours / 60) - (breaktime)),2),
                0)
    END AS newhour


FROM
    (SELECT ref_day_type.ref_day_type_id,ref_day_type.daytype,
		CONCAT(refpayperiod.pay_period_start, ' ~ ', refpayperiod.pay_period_end) AS payperiod,
        TIMESTAMPDIFF(MINUTE, clock_in, clock_out) AS totalattendedhours,
            clock_in,
            clock_out,
            TIMESTAMPDIFF(MINUTE, time_in, time_out) AS totalhours,
            ROUND(TIME_TO_SEC(break_time) / 60 / 60, 2) AS breaktime,
            COALESCE(TIMESTAMPDIFF(HOUR, time_out, ot_out), 0) AS ottime,
            date,
            time_in,
            time_out,
            total,ot_in,nsdsetup.nsd_start,nsdsetup.nsd_end,schedule_employee.employee_id,
            CONCAT(first_name,' ',middle_name,' ',last_name) as fullname
    FROM
        schedule_employee
	CROSS JOIN
	  nsdsetup
    LEFT JOIN employee_list ON schedule_employee.employee_id = employee_list.employee_id
    LEFT JOIN refpayperiod ON schedule_employee.pay_period_id = refpayperiod.pay_period_id
    LEFT JOIN ref_day_type ON ref_day_type.ref_day_type_id = schedule_employee.ref_day_type_id
    WHERE
        schedule_employee.employee_id = ".$employee_id."
            AND schedule_employee.pay_period_id = ".$pay_period_id."
            AND schedule_employee.is_deleted = 0) AS t
) as b");
        return $query->result();

    }

    // function getscheddtr($employee_id,$pay_period_id) {
    //     $query = $this->db->query("SELECT CASE WHEN clock_in <= time_in THEN 0 ELSE TIMESTAMPDIFF(MINUTE,time_in,clock_in) END as timelate,
    //                                 ottime,
    //                                 CASE WHEN ((totalattendedhours/60)-(breaktime)) >= (totalhours/60)-(breaktime) THEN ROUND((totalhours/60)-(breaktime),2)
    //                                  ELSE ROUND(((totalattendedhours/60)-(breaktime)),2) END as newhour,
    //                             t.fullname,t.*,ROUND((totalattendedhours/60)-(breaktime),2) as tfinalhours,
    //                             ROUND(TIME_TO_SEC(total) / 60 /60,2) as totalhrs
    //                             FROM
    //                             (SELECT TIMESTAMPDIFF(MINUTE,clock_in,clock_out) as totalattendedhours,clock_in,clock_out,
    //                             TIMESTAMPDIFF(MINUTE,time_in,time_out) as totalhours, ROUND(TIME_TO_SEC(break_time) / 60 /60,2) as breaktime ,
    //                             COALESCE(TIMESTAMPDIFF(MINUTE,time_out,ot_out),0) as ottime,
    //                             	CONCAT(first_name,' ',middle_name,' ',last_name) as fullname,
    //                                 CONCAT(refpayperiod.pay_period_start,'-',refpayperiod.pay_period_end) as payperiod,date,time_in,time_out,total
    //                                 FROM schedule_employee
    //                             	LEFT JOIN employee_list
    //                             	ON schedule_employee.employee_id=employee_list.employee_id
    //                             	LEFT JOIN refpayperiod
    //                             	ON schedule_employee.pay_period_id=refpayperiod.pay_period_id
    //                               WHERE schedule_employee.employee_id='".$employee_id."' AND schedule_employee.pay_period_id=".$pay_period_id." AND
    //                                schedule_employee.is_deleted=0) as t");
    //     return $query->result();
    //
    // }

    function getdtrsummary($pay_period_id) {
        $query = $this->db->query("SELECT sa.employee_id,sa.ref_department_id,sa.fullname,sa.ecode,SUM(sa.newhour) as newhour,sa.payperiod,
			SUM(sa.timelate) as timelate,
			SUM(sa.regular_day) as regular_day,
			SUM(sa.regular_sunday) as regular_sunday,
			SUM(sa.regular_holiday) as regular_holiday,
			SUM(sa.special_holiday) as special_holiday,
			SUM(sa.sunday_regular_holiday) as sunday_regular_holiday,
			SUM(sa.sunday_special_holiday) as sunday_special_holiday,
			SUM(sa.regular_ot) as regular_ot,
			SUM(sa.sunday_ot) as sunday_ot,
			SUM(sa.regular_hol_ot) as regular_hol_ot,
			SUM(sa.special_hol_ot) as special_hol_ot,
			SUM(sa.sunday_regular_hol_ot) as sunday_regular_hol_ot,
			SUM(sa.sunday_special_hol_ot) as sunday_special_hol_ot,
			SUM(sa.regular_nsd) as regular_nsd,
			SUM(sa.regular_sunday_nsd) as regular_sunday_nsd,
			SUM(sa.regular_hol_nsd) as regular_hol_nsd,
			SUM(sa.special_hol_nsd) as special_hol_nsd,
			SUM(sa.sunday_regular_hol_nsd) as sunday_regular_hol_nsd,
			SUM(sa.sunday_special_hol_nsd) as sunday_special_hol_nsd
 FROM
(SELECT b.*,
(CASE
	WHEN b.ref_day_type_id = 1 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_day,
(CASE
	WHEN b.ref_day_type_id = 2 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_sunday,
(CASE
	WHEN b.ref_day_type_id = 3 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_holiday,
(CASE
	WHEN b.ref_day_type_id = 4 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as special_holiday,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_regular_holiday,
(CASE
	WHEN b.ref_day_type_id = 6 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_special_holiday,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=1 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as regular_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=2 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=3 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as regular_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=4 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as special_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=5 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_regular_hol_ot,
(CASE
	WHEN b.ot_in = 1 AND b.ref_day_type_id=6 AND b.time_in
    NOT BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.ottime

	ELSE 0.00
  END) as sunday_special_hol_ot,
(CASE
	WHEN b.ref_day_type_id = 1 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_nsd,
(CASE
	WHEN b.ref_day_type_id = 2 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_sunday_nsd,
(CASE
	WHEN b.ref_day_type_id = 3 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as regular_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 4 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as special_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_regular_hol_nsd,
(CASE
	WHEN b.ref_day_type_id = 5 AND b.time_in
    BETWEEN CONCAT(EXTRACT(YEAR FROM b.time_in),
	  '-',
	  EXTRACT(MONTH FROM b.time_in),
	  '-',
	  EXTRACT(DAY FROM b.time_in),
	  ' ',
	  b.nsd_start) AND CONCAT(EXTRACT(YEAR FROM b.time_out),
	  '-',
	  EXTRACT(MONTH FROM b.time_out),
	  '-',
	  EXTRACT(DAY FROM b.time_out),
	  ' ',
	  b.nsd_end) THEN b.newhour

	ELSE 0.00
  END) as sunday_special_hol_nsd
 FROM (SELECT
	t.ref_department_id,t.fullname,t.ecode,t.employee_id,t.date,t.payperiod,t.clock_in,t.clock_out,t.breaktime,t.ref_day_type_id,t.daytype,t.ot_in,t.time_in,t.time_out,t.nsd_start,t.nsd_end,
    CASE
        WHEN clock_in <= time_in THEN 0
        ELSE TIMESTAMPDIFF(MINUTE, time_in, clock_in)
    END AS timelate,
    ottime,
    CASE
        WHEN ((totalattendedhours / 60) - (breaktime)) >= (totalhours / 60) - (breaktime) THEN COALESCE(ROUND((totalhours / 60) - (breaktime), 2),0)
        ELSE COALESCE(ROUND(((totalattendedhours / 60) - (breaktime)),2),
                0)
    END AS newhour


FROM
    (SELECT ref_day_type.ref_day_type_id,ref_day_type.daytype,
		CONCAT(refpayperiod.pay_period_start, '-', refpayperiod.pay_period_end) AS payperiod,
        TIMESTAMPDIFF(MINUTE, clock_in, clock_out) AS totalattendedhours,
            clock_in,
            clock_out,
            TIMESTAMPDIFF(MINUTE, time_in, time_out) AS totalhours,
            ROUND(TIME_TO_SEC(break_time) / 60 / 60, 2) AS breaktime,
            COALESCE(TIMESTAMPDIFF(HOUR, time_out, ot_out), 0) AS ottime,
            date,
            time_in,
            time_out,
            total,ot_in,nsdsetup.nsd_start,nsdsetup.nsd_end,schedule_employee.employee_id,
            CONCAT(first_name,' ',middle_name,' ',last_name) as fullname,ref_department.ref_department_id,employee_list.ecode
    FROM
        schedule_employee
	CROSS JOIN
	  nsdsetup
    LEFT JOIN employee_list ON schedule_employee.employee_id = employee_list.employee_id
    LEFT JOIN emp_rates_duties ON emp_rates_duties.employee_id = employee_list.employee_id
    LEFT JOIN ref_department ON ref_department.ref_department_id = emp_rates_duties.ref_department_id
    LEFT JOIN refpayperiod ON schedule_employee.pay_period_id = refpayperiod.pay_period_id
    LEFT JOIN ref_day_type ON ref_day_type.ref_day_type_id = schedule_employee.ref_day_type_id
    WHERE schedule_employee.pay_period_id = ".$pay_period_id."
            AND schedule_employee.is_deleted = 0

            ) AS t
) as b ) as sa
GROUP BY sa.employee_id");
        return $query->result();

    }

    function getscheddtrdetailed($filter_value,$filter_value2) {
        $employee_filter = ($filter_value2 == "all") ? "" : "AND se.employee_id=".$filter_value2;
        $query = $this->db->query("SELECT m.*,GROUP_CONCAT(CONCAT(m.`date`,'=',ROUND(IF(thour=0,0.00,thour),2),' ~ ',ROUND(COALESCE(IF(ottime=0,0.00,ottime) / 60,0.00),2)))as data_serial,
        ROUND(SUM(temp),2) as totalhour,SUM(ROUND(COALESCE(ottime / 60,0.00),2)) as total_ot

        FROM
        (SELECT

            se.employee_id,se.pay_period_id,
            se.sched_refshift_id,se.`date`,
            rp.pay_period_start,rp.pay_period_end,
            CONCAT(el.first_name,' ',el.middle_name,' ',el.last_name) as full_name,
            dept.department,dept.ref_department_id,
        CASE WHEN ( (TIMESTAMPDIFF(MINUTE,clock_in,clock_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				>=
				( (TIMESTAMPDIFF(MINUTE,time_in,time_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				THEN ( (TIMESTAMPDIFF(MINUTE,time_in,time_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				ELSE
				( (TIMESTAMPDIFF(MINUTE,clock_in,clock_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				END as temp,TIMESTAMPDIFF(MINUTE,time_out,ot_out) as ottime,
          GROUP_CONCAT(
				CASE WHEN ( (TIMESTAMPDIFF(MINUTE,clock_in,clock_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				>=
				( (TIMESTAMPDIFF(MINUTE,time_in,time_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				THEN ( (TIMESTAMPDIFF(MINUTE,time_in,time_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				ELSE
				( (TIMESTAMPDIFF(MINUTE,clock_in,clock_out)/60)-(TIME_TO_SEC(break_time) / 60 /60) )
				END

				SEPARATOR ':'
			)

             as thour

        FROM `schedule_employee`

        as se


        INNER JOIN refpayperiod as rp ON rp.pay_period_id=se.pay_period_id
        LEFT JOIN employee_list as el ON el.employee_id=se.employee_id
        LEFT JOIN emp_rates_duties as erd ON erd.employee_id=se.employee_id
        LEFT JOIN ref_department as dept ON dept.ref_department_id=erd.ref_department_id


        WHERE se.is_in=1 AND se.is_out=1 AND  se.is_deleted=0 AND se.pay_period_id=".$filter_value." ".$employee_filter."

        GROUP BY employee_id,se.`date`)as m GROUP BY m.employee_id ORDER BY m.full_name ASC,m.department ASC");

                                return $query->result();

    }

}
?>
