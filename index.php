<?php
    include_once './db/connection.php';
    $conexion = new conexion();
    //Validar la informacion enviada por el metodo POST
    if (isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["telefono"]) &&
        isset($_POST["correo"]) && isset($_POST["facebook"]) &&
        isset($_POST["licenciatura"]) && isset($_POST["bachillerato"]) && isset($_POST["semestre"])){
     	$conexion -> insertarAlumno($_POST["nombre"], $_POST["apellidos"], $_POST["telefono"],
                                    $_POST["correo"] , $_POST["facebook"], $_POST["licenciatura"], $_POST["bachillerato"], $_POST["semestre"]);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/png" href="images/favicon-dorado.png">
    <title>Regísto Ferias</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper center">
            <img src="images/escudo-tehuacan.png" alt="Escudo Universidad Mesoamericana Plantel Tehuacán">
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <form action="index.php" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m12 l6"> <!-- Nombre -->
                        <input type="text" name="nombre" class="validate" id="nombre" required>
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input type="text" name="apellidos" class="validate" id="apellidos" required>
                        <label for="apellidos">Apellidos:</label>
                    </div>
                    <div class="input-field col s12 m12 l4">
                        <input type="tel" name="telefono" class="validate" id="telefono" required>
                        <label for="telefono">Teléfono:</label>
                    </div>
                    <div class="input-field col s12 m12 l4">
                        <input type="email" name="correo" class="validate" id="correo">
                        <label for="correo" data-error="Ingresa un correo valido" data-success="Correo valido.">Correo:</label>
                    </div>
                    <div class="input-field col s12 m12 l4">
                        <input type="text" name="facebook" class="validate" id="facebook">
                        <label for="facebook">Facebook:</label>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <input type="text" name="licenciatura" class="autocomplete validate" id="licenciatura" required>
                        <label for="licenciatura">Licenciatura de interés:</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input type="text" name="bachillerato" class="validate" id="bachillerato" required>
                        <label for="bachillerato">Bachillerato:</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input type="text" name="semestre" class="validate" id="semestre" required>
                        <label for="semestre">Semestre:</label>
                    </div>
                    <div class="input-field center">
                        <button type="submit" name="enviar" class="btn waves-effect waves-light btn-color col s12">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/autocomplete.js"></script>
</body>
</html>
