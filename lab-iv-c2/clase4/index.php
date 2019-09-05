<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Practica 4</title>
</head>
<body>

    <div class="container">
        <form method="post" action="classController/controllerPersona/index.php">
            <div class="form-group">
                <label for="ctrl-nombre">Nombre</label>
                <input id="ctrl-nombre" type="text" class="form-control" name="nombre" />
            </div>

            <div class="form-group">
                <label for="ctrl-apellido">Apellido</label>
                <input id="ctrl-apellido" type="text" class="form-control" name="apellido" />
            </div>

            <div class="form-group">
                <label for="ctrl-nacionalidad">Nacionalidad</label>
                <select class="form-control" id="ctrl-nacionalidad" name="nacionalidad">
                    <option value="" disabled selected>Seleccionar país</option>
                    <option value="arg">Argentino</option>
                    <option value="uru">Uruguayo</option>
                    <option value="chi">Chileno</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Estado civil</label>
                <label for="radio-casado">
                    <input id="radio-casado" type="radio" value="casado" name="ec"> casado
                </label>
                <label for="radio-soltero">
                    <input id="radio-soltero" type="radio" value="soltero" name="ec"> soltero
                </label>
            </div>

            <div class="form-group">
                <label for="">Preferencias</label>
                <label>
                    <input type="checkbox" value="musica" name="pref[]"> Música
                </label>
                <label>
                    <input type="checkbox" value="deporte" name="pref[]"> Deporte
                </label>
                <label>
                    <input type="checkbox" value="arte" name="pref[]"> Arte
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <hr/>


        <form action="classController/controllerMovimientos">
            <div class="form-group">
                <label for="">Action</label>
                <select name="action" id="">
                <option value="" disable></option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">
                    <input type="checkbox" name="params[]" value="r1"> R1
                </label>
                <label>
                    <input type="checkbox" name="params[]" value="r2"> R2
                </label>
                <label for="">
                    <input type="checkbox" name="params[]" value="l1"> L1
                </label>
                <label>
                    <input type="checkbox" name="params[]" value="l2"> L2
                </label>

                <button type="submit" class="btn btn-primary">Enviar</button>
                
            </div>
        </form>
    </div>

    
</body>
</html>