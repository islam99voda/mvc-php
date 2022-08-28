<?php
//Modle
class Database{

    private $conn;
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "laravel_test");
    }

    public function query($sql){
        $result = $this->conn->query($sql);
        $row = $result->fetch_all();
        return $row;
    }


}