<?php

class TemporaryDeduction_model extends CORE_Model {
    protected  $table="deductions_temporary";
    protected  $pk_id="deduction_temporary_id";
    protected  $tabletocheck="";

    function __construct() {
        parent::__construct();
    }


}
?>