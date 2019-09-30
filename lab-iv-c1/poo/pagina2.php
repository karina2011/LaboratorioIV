<?php 

session_start();
echo '<pre>';
print_r($_SESSION);
echo '<pre>';

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
    <h1>Pagina 2</h1>
    <nav>
        <ul>
            <li>
                <a href="pagina3.php">Ir a pagina 3</a>
            </li>
        </ul>
    </nav>
</body>
</html>