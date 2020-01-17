<?php

class RefLeave_model extends CORE_Model {
    protected  $table="ref_leave_type";
    protected  $pk_id="ref_leave_type_id";

    function __construct() {
        parent::__construct();
    }

    function checkifused($ref_leave_type_id,$table='ref_leave_type') {
    	$query = $this->db->query('SELECT * FROM '.$table.'
    		 INNER JOIN emp_leaves_entitlement ON ref_leave_type.ref_leave_type_id=emp_leaves_entitlement.ref_leave_type_id
    		 WHERE emp_leaves_entitlement.is_deleted=0 AND ref_leave_type.ref_leave_type_id='.$ref_leave_type_id.' LIMIT 1
    		');
                            $query->result();
                           		
                          return $query->result();
    }


}
?>