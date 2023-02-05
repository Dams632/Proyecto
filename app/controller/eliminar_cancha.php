<?php
    require_once '../models/canchas.model.php';
        $objeto= new Canchas;
        $cod_cancha = $_GET['txtcodigo'];
        $objeto->eliminarCancha($cod_cancha);
        $query=$objeto->eliminarCancha($cod_cancha);
        if($query){
    header("Location: ../view/canchas.php");
        }
        
   // require_once '../view/prueba.php';
    
?>