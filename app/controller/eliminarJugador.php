<?php
    require_once '../models/jugadores.model.php';
        $objeto= new Jugadores;
        $id_jugador = $_GET['txtcodigo'];
    $objeto->eliminarJugador($id_jugador);
        
   require_once '../view/jugadores.php';
    
?>