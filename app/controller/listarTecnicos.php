<?php
    require_once '../models/tecnicos.model.php';
        $objeto= new Tecnicos;
        $record=$objeto->mostrarTecnicos();
    
?>