<?php


class HomeController{
    public function index($id){  
        require_once VIEWS_PATH .'/pages/index.php';
    }

    public function show(){
        echo "show from........." . __CLASS__;
    }
}