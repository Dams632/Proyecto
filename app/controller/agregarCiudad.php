<?php
     require_once '../models/ciudades.model.php';
     $objeto= new Ciudades;
     $cod_ciudad = $_POST['cod_ciudad'];
     $nombre = $_POST['nombre'];
    $objeto->guardarCiudad($cod_ciudad, $nombre);
     header("Location: ../view/ciudades.php");
?>