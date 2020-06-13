<?php

require_once('../BaseDatos.php');
require_once('../Trabajador.php');

$encontrado = true;
if(!empty($_POST)){
 /*   $usuario = $capsule->table('usuarios')->where($_POST['username'], $_POST['password']);*/

 $trab = Trabajador::all();
 foreach($trab as $c){
     if($c->usuario == $_POST['id'] && $c->password == $_POST['password']){
         
         header('Location: ./trabajador/index-trabajador.php');
     }
 }
 $encontrado = false;


}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de Sesion Trabajador</title>
        <link rel="stylesheet" href="sesiontraba.css">

    </head>
    <body>
    <form id="form" action="sesiontraba.php" method="POST">
    <img src="../assets/plazacel-logo.jpg" alt="" id="barril">
        <h2>PLAZACEL</h2>
        <h1>Trabajador</h1>
        <div class="user">
        <div class="img">
            <img src="../imagenes/trabajador.svg" alt="usuario">
        </div>
        <div class="datos">
        <div>
                <label for="ID trabajador" >Usuario</label>
                <input type="text" id="usuario" name="id">
            
        </div>
        <div>
                <label for="contraseña" >Contraseña</label>
                <input type="password" id="contraseña" name="password"> 
        </div>
        </div>
        </div>
        <div class="reg">
        <div>
            <input type="submit" id="iniciosesion" value="Iniciar sesion" >  
        </div>
        <a href="../index.php"><img id="sesion" src="../imagenes/home.png" alt="user"></a>
        <?php if($encontrado == false)  : ?>
     <p>Nombre de usuario/contraseña no valido</p>
<?php endif ?>
        </div>
       
    </form>

    </body>
</html>