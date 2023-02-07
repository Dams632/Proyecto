<?php
    require_once '../models/puntuacion.model.php';
        $objeto= new Puntuacion;
        $cod_equipo = $_GET['txtcodigo'];
    $objeto->eliminarPuntuacion($cod_equipo);
        
   require_once '../view/puntuacion.php';
    
?>