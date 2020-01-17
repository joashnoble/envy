<?php

class Leavefiled_model extends CORE_Model {
    protected  $table="emp_leaves_filed";
    protected  $pk_id="emp_leaves_filed_id";

    function __construct() {
        parent::__construct();
    }

    function getleavesfiled($active_year,$employee_id,$emp_leaves_entitlement_id) {
    	$this->db->where('employee_id', $employee_id);
    	$this->db->where('emp_leaves_entitlement_id', $emp_leaves_entitlement_id);
    	$this->db->where('emp_leave_year_id', $active_year);
    	/*$this->db->select('emp_leaves_entitlement_id');*/
    	$this->db->select_sum('total');
        $query = $this->db->get('emp_leaves_filed');
        foreach($query->result() as $row)  
        {
        	$total_leave=$row->total;
        }              
         return $total_leave;
    }

    function get_listofrequestleaves(){
        $query = $this->db->query("SELECT 
                        ref_leave_type.leave_type, 
                        emp_leaves_filed.emp_leaves_filed_id,
                        emp_leaves_filed.emp_leave_year_id,
                        emp_leaves_filed.employee_id,
                        emp_leaves_filed.total,
                        emp_leaves_filed.ref_leave_type_id,
                        DATE_FORMAT(emp_leaves_filed.date_filed,'%m-%d-%Y') as date_filed,
                        emp_leaves_filed.purpose,
                        DATE_FORMAT(emp_leaves_filed.date_time_from,'%m-%d-%Y') as date_time_from,
                        DATE_FORMAT(emp_leaves_filed.date_time_to,'%m-%d-%Y') as date_time_to,
                        emp_leaves_filed.total,
                        CASE emp_leaves_filed.status 
                          WHEN 1 THEN 'Approved' 
                          WHEN 2 THEN 'Declined'  
                          ELSE 'Pending' 
                        END as status,
                        CONCAT(employee_list.first_name,' ',employee_list.middle_name,' ',employee_list.last_name) as fullname
                    FROM 
                        emp_leaves_filed 
                    LEFT JOIN ref_leave_type
                        ON ref_leave_type.ref_leave_type_id = emp_leaves_filed.ref_leave_type_id
                    LEFT JOIN employee_list 
                        ON employee_list.employee_id = emp_leaves_filed.employee_id
                    WHERE 
                        emp_leaves_filed.status = 0
                ");

        $query->result();
        return $query->result();
    }

        function get_listofrequestleavebyid($leave_id){
        $query = $this->db->query("SELECT 
                        ref_leave_type.leave_type, 
                        emp_leaves_filed.emp_leaves_filed_id,
                        emp_leaves_filed.emp_leave_year_id,
                        emp_leaves_filed.employee_id,
                        emp_leaves_filed.total,
                        emp_leaves_filed.ref_leave_type_id,
                        DATE_FORMAT(emp_leaves_filed.date_filed,'%m-%d-%Y') as date_filed,
                        emp_leaves_filed.purpose,
                        DATE_FORMAT(emp_leaves_filed.date_time_from,'%m-%d-%Y') as date_time_from,
                        DATE_FORMAT(emp_leaves_filed.date_time_to,'%m-%d-%Y') as date_time_to,
                        emp_leaves_filed.total,
                        CASE emp_leaves_filed.status 
                          WHEN 1 THEN 'Approved' 
                          WHEN 2 THEN 'Declined'  
                          ELSE 'Pending' 
                        END as status,
                        CONCAT(employee_list.first_name,' ',employee_list.middle_name,' ',employee_list.last_name) as fullname
                    FROM 
                        emp_leaves_filed 
                    LEFT JOIN ref_leave_type
                        ON ref_leave_type.ref_leave_type_id = emp_leaves_filed.ref_leave_type_id
                    LEFT JOIN employee_list 
                        ON employee_list.employee_id = emp_leaves_filed.employee_id
                    WHERE 
                        emp_leaves_filed.emp_leaves_filed_id = ".$leave_id."
                    AND 
                        emp_leaves_filed.status = 0
                ");

        $query->result();
        return $query->result();
    }


}
?>