<?php

class RefSchedPay_model extends CORE_Model {
    protected  $table="sched_refpay";
    protected  $pk_id="sched_refpay_id";
    protected  $tabletocheck="schedule_employee";

    function __construct() {
        parent::__construct();
    }

    


}
?>