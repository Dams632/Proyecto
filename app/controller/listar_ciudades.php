<?php
    require_once '../models/ciudades.model.php';
        $objeto= new Ciudades;
        $recordss=$objeto->mostrarCiudades();
    //require_once '../view/Ciudades.php';
    
?>