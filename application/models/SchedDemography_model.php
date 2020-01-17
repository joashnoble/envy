<?php

class SchedDemography_model extends CORE_Model {
/*    protected  $table="schedule_employee";
    protected  $pk_id="schedule_employee_id";*/

    function __construct() {
        parent::__construct();
    }

    function getschedemography($filter_value,$filter_value2) {
        $employee_filter = ($filter_value2 == "all") ? "" : "AND se.employee_id=".$filter_value2;
        $query = $this->db->query("SELECT m.*,GROUP_CONCAT(CONCAT(m.`date`,'=',m.shift_id))as data_serial

        FROM
        (SELECT

            se.employee_id,se.pay_period_id,
            se.sched_refshift_id,se.`date`,
            rp.pay_period_start,rp.pay_period_end,
            CONCAT(el.first_name,' ',el.middle_name,' ',el.last_name) as full_name,
            dept.department,



                GROUP_CONCAT(

                    se.sched_refshift_id

                    SEPARATOR ':'
                )

             as shift_id

        FROM `schedule_employee`  as se

        INNER JOIN refpayperiod as rp ON rp.pay_period_id=se.pay_period_id
        LEFT JOIN employee_list as el ON el.employee_id=se.employee_id
        LEFT JOIN emp_rates_duties as erd ON erd.employee_id=se.employee_id
        LEFT JOIN ref_department as dept ON dept.ref_department_id=erd.ref_department_id


        WHERE  se.is_deleted=0 AND se.pay_period_id=".$filter_value." ".$employee_filter."

        GROUP BY employee_id,se.`date`)as m GROUP BY m.employee_id ORDER BY m.department ASC, m.full_name ASC");

                                return $query->result();

    }


}
?>
