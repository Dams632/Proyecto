<?php
    require_once "../models/encuentros.model.php";
    $newobjet=new Encuentros;
    $editando = $_GET['encuentroid'];
if (!$_POST)
    $var=$newobjet->buscarDato($editando);
    require_once "../view/html/editarEncuentros.php";
if ($_POST)
    print_r($_POST);
    $record=$newobjet->actualizarEncuentros($_POST);

?>