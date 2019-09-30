<?php
$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
];
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
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $key => $person) { ?>
                <tr>
                    <?php foreach ($person as $k => $data) { ?>
                        <td><?= $data; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $key => $person) { ?>
                <tr>
                    <td><?= $person['name']; ?></td>
                    <td><?= $person['age']; ?></td>
                    <td><?= $person['sex']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>