<?php
define('ROOT', __DIR__ . '/../');

spl_autoload_register(function($class) {

    echo $class;

    $class = str_replace('\\', '/class.', $class);

    include(ROOT . strtolower($class) . '.php');

});