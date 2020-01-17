<?php

class RefPaymentType_model extends CORE_Model {
    protected  $table="ref_payment_type";
    protected  $pk_id="ref_payment_type_id";
    protected  $tabletocheck="emp_rates_duties";
    function __construct() {
        parent::__construct();
    }



}
?>