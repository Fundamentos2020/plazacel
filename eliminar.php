<?php
require_once('BaseDatos.php');
require_once('Usuario.php');


if(!empty($_GET)){
    $id_contacto = $_GET['id_contacto'];
    $contacto = Usuario::where('id',$id_contacto)->first();
    $contacto = Usuario::find($id_contacto);

        $contacto->delete();
    header('Location: trabajadores.php');
  
}
?>
