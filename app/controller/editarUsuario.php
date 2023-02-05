<?php
    require_once "../models/usuarios.model.php";
    $newobjet=new Usuario;
    $editando = $_GET['userid'];
if (!$_POST)
    $var=$newobjet->buscarDato($editando);
    print_r($var);
    require_once "../view/html/editaruser.php";
if ($_POST)
    $record=$newobjet->actualizarUsuarios($_POST);

?>