<?php

class RefPosition_model extends CORE_Model {
    protected  $table="ref_position";
    protected  $pk_id="ref_position_id";
    protected  $tabletocheck="emp_rates_duties";

    function __construct() {
        parent::__construct();
    }

}
?>