<?php


require_once('BaseDatos.php');
require_once('Usuario.php');

$encontrado = true;
if(!empty($_POST)){
 /*   $usuario = $capsule->table('usuarios')->where($_POST['username'], $_POST['password']);*/

 $usuario = Usuario::all();
 foreach($usuario as $c){
     if($c->usuario == $_POST['nombre'] && $c->password == $_POST['password']){
         
        if($c->tipo == 1){
            header('Location: ./admi/index.php');
        }
        else if($c->tipo == 2){
            header('Location: ./trabajador/index-trabajador.php');
        }
        else if($c->tipo == 3){
            header('Location: ./cliente/index-user.php');
        }
         
     }
 }
 $encontrado = false;


}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de Sesion</title>
        <link rel="stylesheet" href="log-in.css">
    </head>
    <body>
        
        <form id="form" action="log-in.php" method="POST">
<img src="./assets/plazacel-logo.png" alt="">
<h2>PLAZACEL</h2>
<h1>Log-In</h1>
<div class="user">
<div class="img">
    <img src="./imagenes/usuario.svg" alt="usuario">
</div>
<div class="datos">
<div>
        <label for="usuario" >Usuario</label>
        <input type="text" id="usuario" name="nombre">
    
</div>
<div>
        <label for="contraseña" >Contraseña</label>
        <input type="password" id="contraseña" name="password">
</div>
</div>
</div>
<div class="reg">
<div>
    <p>¿Aun no tienes cuenta?<a href="./registro_cliente.php">Registrate aqui</a></p>
</div>
<div>
    <input type="submit" id="iniciosesion" value="Iniciar sesion">
</div>
<?php if($encontrado == false)  : ?>
     <p>Nombre de usuario/contraseña no valido</p>
<?php endif ?>  
</div>
 
</form>
         
    </body>
</html> 