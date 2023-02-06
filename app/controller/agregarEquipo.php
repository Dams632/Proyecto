<?php
     require_once '../models/equipos.modelo.php';
     $objeto= new Equipos;
     $cod_equipo = $_POST['cod_equipo'];
     $nombre = $_POST['nombre'];
     $cod_ciudad = $_POST['cod_ciudad'];
     $id_tecnico = $_POST['id_tecnico'];
     $objeto->guardarEquipos($cod_equipo, $nombre, $cod_ciudad, $id_tecnico);
     header("Location: ../view/equipos.php");
?>