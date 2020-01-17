<?php

class RefTaxCode_model extends CORE_Model {
    protected  $table="reftaxcode";
    protected  $pk_id="tax_id";

    function __construct() {
        parent::__construct();
    }

    function updateAllRecords() {
    	$sql = "UPDATE emp_leave_year SET active_year = 0";
    	return $this->db->query($sql);
    }

    function gettaxcode() {
        $query = $this->db->query('SELECT tax_id,tax_code FROM reftaxcode WHERE is_deleted=0 LIMIT 6');
                                
                          return $query->result();
    }

}
?>