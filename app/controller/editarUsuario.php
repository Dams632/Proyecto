<?php
    require_once "../models/usuarios.model.php";
    $newobjet=new Usuario;
    $editando = $_GET['userid'];
print_r($_POST);
if (!$_POST)
    $var=$newobjet->buscarDato($editando);
    require_once "../view/html/editaruser.php";
if ($_POST)
    $record=$newobjet->actualizarUsuarios($_POST);

?>