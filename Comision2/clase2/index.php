<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $edad=1;

            echo $edad;

            $edad="Adrian $edad";

            echo $edad;

            $persona=["1","2",3,"nombre"=>"Adrian",$edad=>"otra cosa"];

            echo '<pre>';
            print_r($persona);
            echo '</pre>';
        ?>
        <h3>usando var_dump</h3>
        <?php
            echo '<pre>';
            var_dump($persona);
            echo '</pre>';
        ?>
    </div>   
    <form action="procesar.php" method="POST">
        <br>
        <label for="texto">texto</label>
        <input type="text" name="te1" id="">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="">
        <br>
        <label for="email">email</label>
        <input type="email" name="em1" id="">
        <br>
        <label for="date">date</label>
        <input type="date" name="da1" id="">
        <br>
        <label for="numero">numero</label>
        <input type="number" name="nu1" id="">
        <br>
        <label for="button">button</label>
        <button><img src="images.jpg" width=40 heigth=40>imagen</button>
        <br>
        <label for="submit">submit</label>
        <input type="submit" name="su1" id="">
    </form> 

</body>
</html>