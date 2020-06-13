<?php
ob_start("ob_gzhandler");

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database="proyecto";
 
$qry = mysqli_connect($servername,$username,$password);
mysqli_select_db($qry,$database);
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
$qry=mysqli_query($qry,"select * from inventario order by nombre asc");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="./css/header.css" type="text/css">
    <link rel="stylesheet" href="productos.css" type="text/css">
    <link rel="stylesheet" href="./css/fondo.css" type="text/css">
    <link rel="stylesheet" href="./css/footer.css" type="text/css">
</head>
    <body>
    <?php include("header.inc.php")?>
        <main>
        <div class=lista>
                <h1 align="center">Productos</h1>
                <table  align="center" cellpadding="5" cellspacing="2" >
                        <?php echo SID ?>
                        <?php
                        while($row=mysqli_fetch_assoc($qry)){
                        ?>
                        <tr valign="middle" class="catalogo">
                        <td><img src="./imagenes/productos/<?php echo $row['image']?>" width="160px" height="170px"></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td><?php echo $row['categoria'] ?></td>
                        </tr>
                        <?php } ?>
                    
                </table>
                </div>
        
        </main>
        <?php include("footer.inc.php")?>
    </body>
</html>

<?php
ob_end_flush();
?>


