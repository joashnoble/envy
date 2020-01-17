<?php

class TemporaryOtherEarnings_model extends CORE_Model {
    protected  $table="new_otherearnings_regular";
    protected  $pk_id="oe_regular_id";
    protected  $tabletocheck="";

    function __construct() {
        parent::__construct();
    }

    function checkifretroexist($employee_id) {
      $check_retro=$this->db->query('SELECT COUNT(oe_regular_id) as countcheck FROM new_otherearnings_regular WHERE employee_id='.$employee_id.' AND is_deleted=0 AND is_temporary=1 AND earnings_id=7');
                                        $verify_count = $check_retro->result();
                                        return $verify_count[0]->countcheck;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }
}
?>