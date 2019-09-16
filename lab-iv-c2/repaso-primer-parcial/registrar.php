<?php

use controllers\Personas as C_Personas;


include('header.php');

?>


<form method="POST" action="">

    <div class="form-group">
        <label for="">Nombre: </label>
        <input type="text" name="nombre" />
    </div>

    <div class="form-group">
        <label for="">Email: </label>
        <input type="email" name="email" />
    </div>

    <div class="form-group">
        <label for="">Rol: </label>
        <input type="text" name="rol" />
    </div>

    <button type="submit">Enviar</button>
    
</form>


<?php
$controllersPersonas = new C_Personas();


include('footer.php');