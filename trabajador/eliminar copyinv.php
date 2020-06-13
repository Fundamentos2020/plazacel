
<?php
require_once('../BaseDatos.php');
require_once('../Inventario.php');


if(!empty($_GET)){
    $id_contacto = $_GET['id_contacto'];
    $contacto = Inventario::where('id',$id_contacto)->first();
    $contacto = Inventario::find($id_contacto);

        $contacto->delete();
    header('Location: registro_inventario.php');
  
}
?>
