<?php

//Include config
require_once('config/config.php');

//Helper files
require_once('helpers/system_helper.php');

//autoloader
function spl_autoload_register($class_name){
    require_once('libraries/'.$class_name.'php');
}
