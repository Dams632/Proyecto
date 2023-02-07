<?php
    require_once "../models/encuentros.model.php";
    $newobjet=new Encuentros;
    //$editando = $_GET['txtcodigo'];
    $newobjet->actualizarEncuentros($_POST);
    header("Location: ../view/encuentro.php");
    
?>