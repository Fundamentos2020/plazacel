
<?php
require_once('../BaseDatos.php');
require_once('../Usuario.php');

$trabajador = Usuario::all();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Trabajadores</title>
    <link rel="stylesheet" href="registro_inventario.css">
    <link rel="stylesheet" href="header.css" type="text/css">
    <link rel="stylesheet" href="../css/fondo.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
</head>

<body>
    <?php include("header.inc.php")?>
    <main>
    <div class="lista">
    <h2>Trabajadores</h2>
    <div class="inventario">
    <table border="0 " cellspacing="2" cellpadding="5" align="center">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Id trabajdor</th>
                <th>Contraseña</th>
                <th>Correo</th>
                <th>domicilio</th>
                <th>Fecha de nacimiento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($trabajador as $c):?>
            <!--echo '<li>' . $c->nombre . '</li>';-->
            <?php if($c->tipo == 2):?>
        <tr>
            <td>
                <?php echo $c->nombre; ?>
                <!-- <?= $c->nombre?>-->
            </td>
            <td>
                <?php echo $c->apellido; ?>
            </td>
            <td>
                <?php echo $c->usuario; ?>
            </td>
            <td>
                <?php echo $c->password; ?>
            </td>
            <td>
                <?php echo $c->correo; ?>
            </td>
            <td>
                <?php echo $c->domicilio; ?>
            </td>
            <td>
                <?php echo $c->fecha; ?>
            </td>
            <td><a href="../eliminar.php?id_contacto=<?=$c->id?>">Eliminar</a></td>
            
        </tr>
         
        <?php endif ?>
    <?php endforeach ?>
        </tbody>

    </table>
    <br>
    <input type="submit" value="Agregar Trabajador" onClick="window.location = '../trabajador/registro_trabajador.php';" id="addtraba">
    </div>
    </div>
    </main>
    
    <?php include("footer.inc.php")?>
</body>

</html>