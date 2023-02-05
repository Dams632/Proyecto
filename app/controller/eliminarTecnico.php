<?php
    require_once '../models/tecnicos.model.php';
        $objeto= new Tecnicos;
        $id_tecnico = $_GET['txtcodigo'];
    $objeto->eliminarTecnico($id_tecnico);
        
   require_once '../view/tecnico.php';
    
?>