<?php

class Response{
    public static function _404(){
        return http_response_code(404);
    }
    public static function redirect(){
        return header("location:home/index/1");
    }
}