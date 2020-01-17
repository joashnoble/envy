<?php

class AdvancedSettings_model extends CORE_Model {
    protected  $table="system_settings_default_deductions";
    protected  $pk_id="default_id";

    function __construct() {
        parent::__construct();
    }
}
?>