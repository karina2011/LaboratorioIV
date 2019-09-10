<?php



spl_autoload_register(function($class) {
    include(str_replace("\\", "/", $class) . '.php');
});


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use Controllers\Person as C_Person;
use Models\Person as M_Person;

$c_perosn = new C_Person(); 
echo '<br>';
$m_perosn = new M_Person();

session_start();
$_SESSION['var'] = "Adrian";
$_SESSION['var2'] = "Adrian";
$_SESSION['var3'] = "Adrian";
$_SESSION['var4'] = "Adrian";
$_SESSION['var5'] = "Adrian";
$_SESSION['var6'] = "Adrian";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="pagina2.php?var=Adrian">Ir a pagina 2</a>
            </li>
        </ul>
    </nav>
</body>
</html>