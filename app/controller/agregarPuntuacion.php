<?php
     require_once '../models/puntuacion.model.php';
     $objeto= new Puntuacion;
    
     $par_jugados = $_POST['par_jugados'];
     $victorias = $_POST['victorias'];
     $derrotas = $_POST['derrotas'];
     $empates = $_POST['empates'];
     $puntos = $_POST['puntos'];
     $cod_equipo = $_POST['cod_equipo'];
    $objeto->guardarPuntuacion($cod_equipo, $par_jugados, $victorias, $derrotas, $empates, $puntos);
     header("Location: ../view/puntuacion.php");
?>