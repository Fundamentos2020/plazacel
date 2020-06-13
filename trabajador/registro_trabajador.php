
<?php

require_once('../BaseDatos.php');
require_once('../Usuario.php');

if(!empty($_POST)){
    $nombre = $_POST['first-name'];
    $apellido = $_POST['last-name'];
    $id = $_POST['usuario'];
    $correo = $_POST['email'];
    $fecha = $_POST['fecha'];
    $domicilio = $_POST['domicilio'];
    $password = $_POST['password'];

    $traba = new Usuario;
    $traba->nombre = $nombre;
    $traba->apellido = $apellido;
    $traba->usuario =$id;
    $traba->correo = $correo;
    $traba->fecha = $fecha;
    $traba->domicilio = $domicilio;
    $traba->password = $password;
    $traba->tipo = 2;
    $traba->save();

    header('Location: ../admi/trabajadores.php');
    

}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Trabajador</title>
    <link rel="stylesheet" href="registro_trabajador.css">
</head>

<body>
    
    <div class="caja1">
        <form method="POST" action="registro_trabajador.php">
        <h1>Registro de trabajador</h1>
            <div class="caja3">
                    <label for="first-name">Nombre</label>
                    <br>
                    <input type="text" name="first-name" id="first-name" size="60" required>
                    <br>
                    <br>
                    <label for="last-name">Apellido</label>
                    <br>
                    <input type="text" name="last-name" id="last-name" size="60" required>
                    <br>
                    <br>
                    <label for="ID trabajador">ID Trabajador</label>
                    <input type="text" name="usuario" id="ID" size="60" required>
                    <br>
                    <br>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" size="60" required>
                    <br>
                    <br>
                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" id="domicilio" size="60" required>
                    <br>
                    <br>
                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="text" name="fecha" id="fecha" size="60" required>
                    <br>
                    <br>
                    <label for="password">Contraseña</label>
                    <br>
                    <input type="password" name="password" id="password" size="60" required>
                    <br>
                    <br>
                     <input class="caja4" type="submit" value="Aceptar" id="send-to-server" size="10" >
                     <br>
            <br>
            
        </form>
    </div>
</body>

</html>