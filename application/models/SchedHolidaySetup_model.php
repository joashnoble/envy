<?php

class SchedHolidaySetup_model extends CORE_Model {
    protected  $table="sched_holiday_setup";
    protected  $pk_id="sched_holiday_setup_id";

    function __construct() {
        parent::__construct();
    }

    function applysetuptoschedule () {
        $query = $this->db->query("UPDATE schedule_employee
                                  SET schedule_employee.ref_day_type_id = (
                                      SELECT ref_day_type.ref_day_type_id
                                      FROM sched_holiday_setup
                                      LEFT JOIN ref_day_type ON
                                      ref_day_type.ref_day_type_id=sched_holiday_setup.ref_day_type_id
                                      WHERE sched_holiday_setup.date = schedule_employee.date
                                  );");
        $query1 = $this->db->query("UPDATE schedule_employee
                                    SET schedule_employee.ref_day_type_id = 1
                                    WHERE ref_day_type_id=0
                                    ");
    }

    function ifdateexist($date) {
      $check_date=$this->db->query('SELECT sched_holiday_setup_id FROM sched_holiday_setup WHERE sched_holiday_setup.date="'.$date.'"');
                                        return $check_date->result();
                          				//it will return whether it is true or false
    }


}
?>
