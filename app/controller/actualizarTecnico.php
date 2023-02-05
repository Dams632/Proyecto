<?php
   require_once '../models/tecnicos.model.php';
   $objeto= new Tecnicos;
   $id_tecnico = $_POST['id_tecnico'];
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $edad = $_POST['edad'];
   $objeto->actualizarTecnico($id_tecnico, $nombres, $apellidos, $edad);
   header("Location: ../view/tecnico.php");
    
?>