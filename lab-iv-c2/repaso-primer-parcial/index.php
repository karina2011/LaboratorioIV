<?php

use controllers\Personas as C_Personas;
use models\Persona as M_Persona;


include_once('header.php'); ?>


<form method="POST" action="controllers/login.php">

    <div class="form-group">
        <label for="">Usuario: </label>
        <input type="text" name="usr" />
    </div>

    <div class="form-group">
        <label for="">Contraseña: </label>
        <input type="text" name="pass" />
    </div>

    <button type="submit">Login</button>

</form>





<?php include('footer.php'); ?>