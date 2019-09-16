<?php
include('../header.php');

if(isset($_POST)) {
    $usr = $_POST['usr'];
    $pass = $_POST['pass'];
}

if(isset($usr) && $usr == 'admin' && isset($pass) && $pass == 'admin') {

    session_start();

    $newUser = new models\Persona($usr, $pass);

    $_SESSION['usr'] = $newUser;

    unset($_SESSION['pepe']);

    $_SESSION['int'] = 4;

    include('../biografia.php');     

} else {

    $newUser = null;

    $_SESSION['usr'] = null;

    header('Location: ../index.php');
    
}