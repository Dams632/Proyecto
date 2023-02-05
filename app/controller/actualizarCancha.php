<?php
   require_once '../models/canchas.model.php';
   $objeto= new Canchas;
   $cod_cancha = $_POST['cod_cancha'];
   $nombre = $_POST['nombre'];
   $capacidad = $_POST['capacidad'];
   $objeto->actualizarCancha($cod_cancha, $nombre, $capacidad);
   header("Location: ../view/canchas.php");
    
?>