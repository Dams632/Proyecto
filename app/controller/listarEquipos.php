<?php
    require_once '../models/equipos.modelo.php';
        $objeto= new Equipos;
       // $object= new Tecnicos;
        //$id_tecnico = $_GET['id_tecnico'];
       $recordss = $objeto->mostrarEquipos();
//$res = $object->mostrarNombre($id_tecnico);
?>