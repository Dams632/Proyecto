<?php
    require_once '../models/ciudades.model.php';
        $objeto= new Ciudades;
        $cod_ciudad = $_GET['txtcodigo'];
    $objeto->eliminarCiudades($cod_ciudad);
        
   require_once '../view/Ciudades.php';
    
?>