<?php
require_once '../models/usuarios.model.php';
$newobject = new Usuario;
$record = $newobject->mostrarUsuarios();
require_once '../view/html/crudUsuarios.php';
?>