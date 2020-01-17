<?php

class EmergencyContact_model extends CORE_Model {
    protected  $table="emp_emergency_contact_details";
    protected  $pk_id="emp_emergency_contact_details_id";

    function __construct() {
        parent::__construct();
    }

    function update_emergency_contact($employee_id){
        $sql = "UPDATE emp_emergency_contact_details SET is_active=0 WHERE employee_id=$employee_id";
       $this->db->query($sql);
    }

    function get_emergency_contact($employee_id){
        $sql = "SELECT * FROM emp_emergency_contact_details WHERE employee_id = $employee_id AND is_active = TRUE AND is_deleted = FALSE";
       return $this->db->query($sql)->result();
    }


}
?>