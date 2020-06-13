<?php

require_once('../BaseDatos.php');
require_once('../Inventario.php');


if(!empty($_GET)) {
    $id_contacto = $_GET['id_contacto'];
    $producto = Inventario::where('id',$id_contacto)->first();
    $producto->save();
}

if(!empty($_POST)) {
    $id_contacto = $_POST['id_contacto'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    $producto = Inventario::find($id_contacto);
    /*$contacto = new Contacto;*/
    $producto->nombre = $nombre;
    $producto->cantidad = $cantidad;
    $producto->precio = $precio;
   // 
    $producto->save();
    header('Location: registro_inventario.php');
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inventario</title>
        <link rel="stylesheet" href="agregar_inventario.css">
    </head>
    <body>
        
        <div class="todo">
        
            <form method="POST" action="modificar.php">
            <img src="../assets/plazacel-logo.png" alt="">
        <h2>PLAZACEL</h2>
        <h1>Inventario</h1>
        <input type="hidden" name="id_contacto" value="<?=$producto->id?>">
                    <label for="nombre">Nombre del producto</label>
                    <br>
                    <input type="text" id="nombre" size="45" required name="nombre" value="<?=$producto->nombre?>">
                    <br>
                    <br>
                    <label for="cantidad">Cantidad</label>
                    <br>
                    <input type="text" id="cantidad" size="20" name="cantidad" value="<?=$producto->cantidad?>">
                    <br>
                    <br>
                    <label for="precio">Precio</label>
                    <br>
                    <input type="text" id="precio"size="20" name="precio" value="<?=$producto->precio?>">
                    <br>
                    <br>
                    <input type="submit" value="Agregar producto">
            </form>
                
        </div>

    </body>

</html>