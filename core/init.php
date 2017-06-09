<?php

//Include config
require_once('config/config.php');

//Helper files
require_once('helpers/system_helper.php');

//autoloader
spl_autoload_register(function($class_name){
    require_once('libraries/'.$class_name.'.php');
});

?>
