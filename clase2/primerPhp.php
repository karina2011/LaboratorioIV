<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;

    foreach($parameters as $parameterName=>$parameterValue)
    {
        echo $parameterName . ': ' . $parameterValue . '<br>' ;
    }
    $numero=array();
    $numero['nombre']='karina';
    $numero['curso']='comision 1';
    echo "<pre>";
    var_dump($numero);
    echo "</pre>";
    
?>