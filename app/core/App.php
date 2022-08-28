<?php
//controller
class App{

    private $url;
    private $controller;
    private $method;
    private $params = [];

    public function __construct()
    {
        $this->url = $this->parsUrl();
        $this->controller =  ucfirst($this->url[0]) . "controller"; //controler/
        $this->method = ucfirst($this->url[1]);  //method/
        $this->params[] = $this->url[2]; //store parameter

        //fire the controler //if controller not exist
        if( file_exists(CONTROLLER_PATH.$this->controller.".php")){
            $this->method = $this->url[1];
            // $this->params[] = $this->url[2];
            require_once CONTROLLER_PATH.$this->controller.".php";
            $class = new $this->controller;
            call_user_func_array([$class,$this->method],$this->params);
        }else{
            require_once CORE_PATH.'Response.php';
            Response::_404();
            echo "not found";
        }
    }



    public function parsUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode("/",$url);
            return $url;
        }
    }

}