<?php
    require_once "../models/encuentros.model.php";
    $newobject = new Encuentros;
    $newobject->guardarEncuentros($_POST);
    require_once '../view/html/encuentros.php';
?>