<?php

$a = 4;
$b = "t";
$c = "text";

echo $a + $b;

var_dump($c);

$cars = [
    "Peugeot", 
    "Chevrolet", 
    "Ford",
    123,
    [
        [
            "Adrian",
            "quiero-este" => 12345
        ],
        "b", 
        "c"
    ]
];

echo '<pre>';
print_r($cars);
echo '</pre>';

echo $cars['4']['0']['quiero-este']; 

echo '<br/>' . date("d/m/y");