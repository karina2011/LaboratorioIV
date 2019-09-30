<!DOCTYPE html> 
<html>
<head>
    <title>Segunda clase</title>
</head>
<body>
    
    <div>
        <?php
            $edad = 1; 
            

            $edad = "Adrian $edad";

            //echo $edad;

            $persona = ["1", "2", 3, "nombre" => "Adrian", "Karina", $edad => "Otra cosa"];

            echo '<pre>';
            print_r($persona);
            var_dump($persona);
            echo '</pre>';

            echo $persona[0];

        ?>
    </div>

</body>
</html>