<?php
    require_once '../models/goles.model.php';
    $newobject = new Goles;
    $newobject->guardarGoles($_POST);
    
    require_once '../view/html/goles.php';
?>
