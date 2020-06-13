<?php

require_once('../BaseDatos.php');
require_once('../Inventario.php');

if(!empty($_POST)){
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $imagen=$_FILES["imagen"]["name"];
    $categoria=$_POST['categoria'];
    

    $prod = new Inventario;
    $prod->nombre = $nombre;
    $prod->cantidad = $cantidad;
    $prod->precio = $precio;
    $prod->image=$imagen;
    $prod->categoria=$categoria;
    $prod->save();

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
        
            <form method="POST" action="agregar_inventario.php" enctype="multipart/form-data">
            <img src="../imagenes/barril.png" alt="">
        <h2>BIE®LADEN</h2>
        <h1>Inventario</h1>
                    <label for="nombre">Nombre del producto</label>
                    <br>
                    <input type="text" id="nombre" size="auto" required name="nombre">
                    <br>
                    <br>
                    <label for="categoria">categoria</label>
                    <br>
                    <select id="categoria" required name="categoria">

                    <option>Celular</option>
                    <option>Accesorio</option>
                    <option>Pieza</option>




                   
                    </select>
                    <br>
                    <br>
                    <label for="cantidad">Cantidad</label>
                    <br>
                    <input type="text" id="cantidad" size="20" name="cantidad">
                    <br>
                    <br>
                    <label for="precio">Precio</label>
                    <br>
                    <input type="text" id="precio"size="20" name="precio">
                    <br>
                    <br>
                    <strong>Imagen:</strong><input type="file" name="imagen" id="imagen">
                    <br>
                    <br>
                    <input type="submit" value="Agregar producto">
            </form>
                
        </div>

    </body>

</html>