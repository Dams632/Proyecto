<?php
    require_once '../models/usuarios.model.php';
    $newobject = new Usuario;
    $newobject->guardarUsuarios($_POST);
    
    require_once '../view/html/insertarUsuario.php';
?>
