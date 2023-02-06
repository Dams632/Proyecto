<?php
    require_once '../models/equipos.modelo.php';
        $objeto= new Equipos;
        $recordT = $objeto->listarTecnicos();
    //require_once '../view/Ciudades.php';
    
?>