<?php
    require_once "../models//goles.model.php";
    $newobjet=new Goles;
    $editando = $_GET['golesid'];
if (!$_POST)
    $var=$newobjet->buscarDato($editando);
    require_once "../view/html/goles.php";
if ($_POST)
    $record=$newobjet->actualizarGoles($_POST);
    

?>