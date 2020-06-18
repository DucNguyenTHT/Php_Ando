<?php

    spl_autoload_register(function($classname){
        include ('classes/'.$classname.'.php');
    });

    $rout = new rout;
?>