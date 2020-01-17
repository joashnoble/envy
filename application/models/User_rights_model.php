<?php

class User_rights_model extends CORE_Model
{
    protected  $table = "user_rights"; //table name
    protected  $pk_id = "user_rights_id"; //primary key id
    protected  $fk_id="user_group_id";


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }




}




?>