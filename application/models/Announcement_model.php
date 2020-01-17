<?php

class Announcement_model extends CORE_Model {
    protected  $table="announcement_post";
    protected  $pk_id="announcement_post_id";

    function __construct() {
        parent::__construct();
    }

    function get_list_of_announcement($announcement_post_id = 0) {
        $query = $this->db->query("SELECT
                ap.announcement_post_id, 
                ap.announcement_title,
                ap.announcement, 
                ap.branch_id, 
                ap.department_id,
                ap.group_id,
                DATE_FORMAT(ap.date_created,'%m-%d-%Y ~ %h:%i %p') as datetime_created,
                CASE 
                    WHEN ap.branch_id < 0 THEN 'N/A'
                    WHEN ap.branch_id = 0 THEN 'All Branch'
                    ELSE rb.branch
                END as branch,
                CASE 
                    WHEN ap.department_id < 0 THEN 'N/A'
                    WHEN ap.department_id = 0 THEN 'All Department'
                    ELSE rd.department
                END as department,
                CASE 
                    WHEN ap.group_id < 0 THEN 'N/A'
                    WHEN ap.group_id = 0 THEN 'All Group'
                    ELSE rg.group_desc
                END as group_desc
                FROM 
                    announcement_post as ap 
                LEFT JOIN ref_branch as rb 
                    ON rb.ref_branch_id = ap.branch_id
                LEFT JOIN ref_department as rd
                    ON rd.ref_department_id = ap.department_id
                LEFT JOIN refgroup as rg 
                    ON rg.group_id = ap.group_id
                WHERE 
                    ap.is_deleted=0
                AND
                    IF(".$announcement_post_id." = 0, 0=0, ap.announcement_post_id = ".$announcement_post_id.")");
        $query->result();
        return $query->result();
    }

}
?>