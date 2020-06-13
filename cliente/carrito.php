<?php
session_start();
//Iniciamos o retomamos la
//sesión
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
//La asignamos a la variable
//$carro si existe o ponemos a false $carro
//en caso contrario
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="carrito.css" type="text/css">
    <link rel="stylesheet" href="../css/fondo.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <title>Carrito de Compras</title>
</head>
<body>
    <?php include('header.inc.php');?>
    <main>
        <div class="lista">
        <h1>Carrito</h1>
    <?php
if($carro){
//si el carro no está vacío,
//mostramos los productos
?>
<table border="0" cellspacing="2" cellpadding="5" align="center">
<tr bgcolor="#e3b04b" class="tit">
<td></td>
<td >Producto</td>
<td>Categoria</td>
<td >Precio</td>
<td  align="center">Cantidad de Unidades</td>
<td align="center">Borrar</td>
<td  align="center">Actualizar</td>
</tr>
<?php
$color=array("#ffffff","#F0F0F0");
$contador=0;
//las 2 líneas anteriores
//sirven sólo para hacer
//una tabla con colores
//alternos
$suma=0;
//antes de recorrer todos
//los valores de la matriz
//$carro, ponemos a cero la
//variable $suma, en la que
//iremos sumando los subtotales
//del costo de cada item por la
//cantidad de unidades que se
//especifiquen
foreach($carro as $k => $v){
//recorremos la matriz que tiene
//todos los valores del carro,
//calculamos el subtotal y el
// total
$subto=$v['cantidad']*$v['precio'];
$suma=$suma+$subto;
$contador++;
//este es el contador que usamos
//para los colores alternos
?>
<form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'>
<td><img src="../imagenes/productos/<?php echo $v['imagen']?>" width="100px" height="110px"></td>
<td ><?php echo $v['nombre'] ?></td>
<td ><?php echo $v['tipo'] ?></td>
<td ><?php echo $v['precio'] ?></td>
<td align="center">
<input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
<td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="../imagenes/trash.png" width="12" height="14" border="0"></a></td>
<td align="center">
<input name="imageField" type="image" src="../imagenes/actualizar.png" width="20" height="20" border="0"></td>
</tr></form>
<?php
//por cada item creamos un
//formulario que submite a
//agregar producto y un link
//que permite eliminarlos
}
?>
</table>
<div align="center"><span class="prod">Total de Artículos: <?php echo count($carro);
//el total de items va a ser igual
//a la cantidad de elementos que
//tenga la matriz $carro, valor
//que obtenemos con la función
//count o con sizeof
?></span>
</div><br>
<div align="center"><span class="prod">Total: $<?php echo number_format($suma,2);
//mostramos el total de la variable
//$suma formateándola a 2 decimales
?></span>
</div><br>
<div align="center"><a href=pago.php><button type="button" id="pago">Finalizar compra</button> </a> </div>
<div align="center"><span class="prod">Continuar la selección de productos</span>
<a href="productos.php?<?php echo SID;?>">
<img src="../imagenes/continuar.png" width="30" height="30" border="0"></a>
</div>
<?php }else{ ?>
<p align="center"> <span class="prod">No hay productos seleccionados</span>
<a href="productos.php?<?php echo SID;?>">
<img src="../imagenes/continuar.png" width="30" height="30" border="0"></a>
<?php }?>
</p>
    </div>
    </main>

    <?php include('footer.inc.php');?>

</body>
</html>