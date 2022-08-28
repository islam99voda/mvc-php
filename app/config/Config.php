<?php
//DIRECTORY_SEPARATOR     put " , " at the end of path
define("BASE_PATH",dirname(dirname(dirname( __FILE__))).DIRECTORY_SEPARATOR); //mvcالأساسي بتاع المشروع اللي اخره  pathال
define("APP_PATH",BASE_PATH. 'app'. DIRECTORY_SEPARATOR); 
define("VIEWS_PATH",APP_PATH.'views'.DIRECTORY_SEPARATOR);
define("CONTROLLER_PATH",APP_PATH.'controllers'.DIRECTORY_SEPARATOR);
define("MODELS_PATH",APP_PATH.'models'.DIRECTORY_SEPARATOR);
define("CORE_PATH",APP_PATH.'core'.DIRECTORY_SEPARATOR);
define("CONFIG_PATH",APP_PATH.'config'.DIRECTORY_SEPARATOR);
define("EXCEPTIONS_PATH",APP_PATH.'exceptions'.DIRECTORY_SEPARATOR);
