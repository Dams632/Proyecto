<?php
    require_once '../models/canchas.model.php';
        $objeto= new Canchas;
        $recordss=$objeto->mostrarCanchas();
    //require_once '../view/prueba.php';
    
?>