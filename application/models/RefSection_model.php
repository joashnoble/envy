<?php

class RefSection_model extends CORE_Model {
    protected  $table="ref_section";
    protected  $pk_id="ref_section_id";
    protected  $tabletocheck="emp_rates_duties";

    function __construct() {
        parent::__construct();
    }


}
?>