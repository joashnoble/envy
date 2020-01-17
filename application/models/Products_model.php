<?php

class Products_model extends CORE_Model {
    protected  $table="products";
    protected  $pk_id="product_id";

    function __construct() {
        parent::__construct();
    }


    function getDepartment()
    {
        $query = $this->db->query('SELECT department_name FROM departments');
        return $query->result();
    }

    function getCode() {
        $query = $this->db->query('SELECT product_code FROM products');
        return $query->result();
    }
}
?>