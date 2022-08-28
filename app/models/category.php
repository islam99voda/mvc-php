<?php

class Category{


    private $table = "categories";
    private $db;

    public function __construct()
    {
        require_once CORE_PATH.'Database.php';
        $this->db = new Database;
    }

    public function gatAll(){
        return $this->db->query("SELECT * FROM $this->table ");
    }

}