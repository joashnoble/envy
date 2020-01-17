<?php

class Entitlement_model extends CORE_Model {
    protected  $table="emp_leaves_entitlement";
    protected  $pk_id="emp_leaves_entitlement_id";

    function __construct() {
        parent::__construct();
    }

    function getEntitlement($employee_id=null,$emp_leaves_entitlement_id=null){
        $query = $this->db->query("SELECT
                main.*,
                main.total_received_balance as received_balance, 
                (main.total_grant - main.total_received_balance) as current_balance
             FROM
            (SELECT 
                ele.*, rlt.leave_type,
                (SELECT COALESCE(SUM(total),0) 
                    FROM emp_leaves_filed 
                    WHERE 
                        is_deleted = FALSE
                        AND emp_leaves_entitlement_id = ele.emp_leaves_entitlement_id AND emp_leaves_filed.status=2) as total_received_balance
            FROM
                emp_leaves_entitlement ele 
                LEFT JOIN ref_leave_type rlt ON rlt.ref_leave_type_id = ele.ref_leave_type_id
                WHERE 
                    ele.is_deleted = FALSE
                    ".($employee_id==null?"":" AND ele.employee_id = $employee_id")."
                    ".($emp_leaves_entitlement_id==null?"":" AND ele.emp_leaves_entitlement_id = $emp_leaves_entitlement_id").") as main");
        return $query->result();
    }

    function gettotalgrantthisyear($active_year,$emp_leaves_entitlement_id) {
        $this->db->where('emp_leaves_entitlement_id', $emp_leaves_entitlement_id);
        $this->db->where('emp_leave_year_id', $active_year);
        /*$this->db->select('emp_leaves_entitlement_id');*/
        $this->db->select_sum('total_grant');
        $query = $this->db->get('emp_leaves_entitlement');
        foreach($query->result() as $row)  
        {
            $total_leave_grant=$row->total_grant;
        }              
         return $total_leave_grant;
    }

    function get_available_leave($employee_id,$active_year){
        $query = $this->db->query("SELECT
                        main.*,
                        (main.total_grant - main.total_received_balance) as current_balance
                    FROM
                    (SELECT 
                        ele.*,
                        (SELECT COALESCE(SUM(total), 0) FROM emp_leaves_filed WHERE
                                emp_leaves_entitlement_id = ele.emp_leaves_entitlement_id
                                    AND is_deleted = FALSE AND emp_leaves_filed.status=2) AS total_received_balance
                    FROM
                        emp_leaves_entitlement ele
                            LEFT JOIN
                        ref_leave_type rlt ON rlt.ref_leave_type_id = ele.ref_leave_type_id
                    WHERE
                        ele.employee_id = $employee_id
                            AND ele.emp_leave_year_id = $active_year
                            AND ele.is_deleted = FALSE) as main");
        return $query->result();
    }

}
?>