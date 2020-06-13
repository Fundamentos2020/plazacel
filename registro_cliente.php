<?php

require_once('BaseDatos.php');
require_once('Usuario.php');

if(!empty($_POST)){
    $nombre = $_POST['first-name'];
    $apellido = $_POST['last-name'];
    $correo = $_POST['email'];
    $fecha = $_POST['fecha'];
    $domicilio = $_POST['domicilio'];
    $user = $_POST['user'];
    $password = $_POST['password'];

    $cli = new Usuario;
    $cli->nombre = $nombre;
    $cli->apellido = $apellido;
    $cli->correo = $correo;
    $cli->fecha = $fecha;
    $cli->domicilio = $domicilio;
    $cli->usuario = $user;
    $cli->password = $password;
    $cli->tipo = 3;
    $cli->save();

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cliente</title>
    <link rel="stylesheet" href="cliente/registro_cliente.css">
</head>

<body>
    
    <div class="caja1">
        <form method="POST" action="registro_cliente.php">
        
            <h1>Registro</h1>
            
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
                    <label for="user">Usuario</label>
                    <br>
                    <input type="text" name="user" id="user" size="60" required>
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
                     <div class="caja7">Al hacer click en el botón Aceptar, acepta nuestros</div>
                     <div class="caja5"> <a href="">Terminos y Condiciones</a> Y <a href="">Politica de privacidad</a> </div>
                    


                </div>
           
        
        </form>
    </div>
</body>

</html>