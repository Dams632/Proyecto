<?php
     require_once '../models/jugadores.model.php';
     $objeto= new Jugadores;
     $id_jugador = $_POST['id_jugador'];
     $nombres = $_POST['nombres'];
     $apellidos = $_POST['apellidos'];
     $dorsal = $_POST['dorsal'];
     $edad = $_POST['edad'];
     $posicion = $_POST['posicion'];
     $cod_equipo = $_POST['cod_equipo'];

    $objeto->guardarJugadores($id_jugador, $nombres, $apellidos, $dorsal, $edad, $posicion, $cod_equipo);
     header("Location: ../view/jugadores.php");
?>