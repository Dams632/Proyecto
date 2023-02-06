<?php
    require_once '../models/jugadores.model.php';
        $objeto= new Jugadores;
       // $cod_equipo= ;
    $record = $objeto->mostrarJugadores();
    
?>