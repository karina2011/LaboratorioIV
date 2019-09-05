<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';
print_r($_GET);
echo '</pre>';

function a($param1 = null, $param2 = null) {
    echo 'Función a';
    if($param1) echo " con $param1";
    if($param2) echo " y $param2";
}
function b($param1 = null, $param2 = null, $param3 = null) {
    echo 'Functión b';
    if($param1) echo " con $param1";
    if($param2) echo " y $param2";
    if($param3) echo " y $param3";
}

function c($param1 = null) {
    echo 'Función c';
    if($param1) echo " con $param1";
}

echo empty(null);

$action = $_GET['action'];

if(isset($_GET['params']) && !empty($_GET['params'])) {
    $params = $_GET['params'];

    call_user_func_array($action, $params);
} else {
    call_user_func($action);
}
