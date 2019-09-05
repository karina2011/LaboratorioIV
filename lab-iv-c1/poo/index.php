<?php

spl_autoload_register(function($pepe) {
    $a = explode('\\', $pepe);

    // include($a['0'] . '/' . $a['1'] . '.php');
    include(str_replace('\\', '/', $pepe) . '.php');
    // include();
});



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include('Controllers/Person.php');
// include('Models/Person.php');

use Models\Person as M_Person;
use Controllers\Person as C_Person;

$a = new M_Person();
echo '<br>';
$a = new C_Person();
// $b = new Controllers\Person();



