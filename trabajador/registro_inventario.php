
<?php
require_once('../BaseDatos.php');
require_once('../Inventario.php');

$productos = Inventario::all();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="registro_inventario.css">
    <link rel="stylesheet" href="header.css" type="text/css">
    <link rel="stylesheet" href="../css/fondo.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
</head>

<body>
    <?php include("header.inc.php")?>
    <main>
    <div class="lista">
    <h2>Inventario</h2>
    <div class="inventario">
    <table border="0 " cellspacing="2" cellpadding="5" align="center">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
         foreach($productos as $c):?>
            <!--echo '<li>' . $c->nombre . '</li>';-->
        <tr>
            <td><img src="../imagenes/productos/<?php echo $c->image?>" width="60px" height="70px"></td>
            <td>
                <?php echo $c->nombre; ?>
                <!-- <?= $c->nombre?>-->
            </td>
            <td><?php echo $c->categoria;?></td>
            <td>
                <?php echo $c->precio; ?>
            </td>
            <td>
                <?php echo $c->cantidad; ?>
            </td>
            <td><a href="modificar.php?id_contacto=<?=$c->id?>">Modificar</a></td>
            <td><a href="eliminar copyinv.php?id_contacto=<?=$c->id?>">Eliminar</a></td>
            
        </tr>
         
    
    <?php endforeach ?>
        </tbody>

    </table>
    <br>
    <input type="submit" value="Agregar producto" onClick="window.location = 'agregar_inventario.php';"id="addtraba">
    </div>
    </div>
    </main>
    <?php include("footer.inc.php")?>
</body>
</html>