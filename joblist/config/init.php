<?php

//config
require_once 'config.php';

//auto load classes


spl_autoload_register(function($class_name) {
    include 'lib/' . $class_name . '.php';
});

 ?>
