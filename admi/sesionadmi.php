<?php

require_once('../BaseDatos.php');
require_once('../Administrador.php');

$encontrado = true;
if(!empty($_POST)){
 /*   $usuario = $capsule->table('usuarios')->where($_POST['username'], $_POST['password']);*/

 $admi = Administrador::all();
 foreach($admi as $c){
     if($c->usuario == $_POST['usu'] && $c->password == $_POST['pass']){
         
         header('Location: index.php');
     }
 }
 $encontrado = false;


}


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio de Sesion Administrador</title>
        <link rel="stylesheet" href="sesionadmi.css">

    </head>
    <body>
    <form id="form" action="sesionadmi.php" method="POST">

    <img src="../assets/plazacel-logo.png" alt="" id="barril">
        <h2>BIE®LADEN</h2>
        <h1>Administrador</h1>
        <div class="user">
        <div class="img">
            <img src="../imagenes/administrador.svg" alt="usuario">
        </div>
        <div class="datos">
        <div>
                <label for="usuario" >Usuario</label>
                <input type="text" id="usuario" name="usu">
            
        </div>
        <div>
                <label for="contraseña" >Contraseña</label>
                <input type="password" id="contraseña" name="pass">
        </div>
        </div>
        </div>
        <div class="reg">
        <div>
            <input type="submit" id="iniciosesion" value="Iniciar sesion"> <!--onClick="window.location ='./MenuAdmi.php';"-->

        </div>
        <a href="../index.php"><img id="sesion" src="../imagenes/home.png" alt="user"></a>
        <?php if($encontrado == false)  : ?>
     <p>Nombre de usuario/contraseña no valido</p>
<?php endif ?>
        </div>
       
    </form>

    </body>
</html>