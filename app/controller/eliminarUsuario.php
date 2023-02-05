<?php
require_once '../models/usuarios.model.php';
$newobject = new Usuario;
if ($_GET)
    $var = $_GET['userid'];
    echo $var;
    $newobject->eliminarUsuarios($var);
    $record = $newobject->mostrarUsuarios();

require_once '../view/html/crudUsuarios.php';

?>