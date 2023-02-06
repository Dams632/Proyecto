<?php
    require_once '../models/equipos.modelo.php';
        $objeto= new Equipos;
        $cod_equipo= $_GET['txtcodigo'];
    $objeto->eliminarEquipos($cod_equipo);
        
   require_once '../view/equipos.php';
    
?>