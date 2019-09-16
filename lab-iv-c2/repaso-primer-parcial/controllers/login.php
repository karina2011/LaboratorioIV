<?php
include('../header.php');

$usr = $_POST['usr'];
$pass = $_POST['pass'];

if($usr == 'admin' && $pass == 'admin') {

    session_start();

    $newUser = new models\Persona($usr, $pass);

    $_SESSION['usr'] = $newUser;

    include('../biografia.php');

} else {

    $newUser = null;

    include('../index.php');
    
}