<?php
    echo 'Todo bien';
    require_once '../models/usuarios.model.php';
    $username = $_POST['username'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    echo 'Hola ' . $nombre;
    $newobject = new Usuario;
    
    require_once '../view/html/insertarUsuario.php';
?>
