<?php
    require_once '../models/goles.model.php';
    $newobject = new Goles;
    $newobject->guardarGoles($_POST);
    header("Location: ../view/goles.php");
?>
