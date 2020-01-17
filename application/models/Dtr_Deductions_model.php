<?php

class Dtr_Deductions_model extends CORE_Model {
    protected  $table="dtr_deductions";
    protected  $pk_id="dtr_deduction_id";
    protected  $fk_id="dtr_id";

    function __construct() {
        parent::__construct();
    }


}
?>