<?php

spl_autoload_register(function($className) {
    
    $classPath =  str_replace("\\", "/", __DIR__."/class//".$className);
    require $classPath.".php";
});

?>