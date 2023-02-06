<?php
require_once '../models/goles.model.php';
$newobject = new Goles;
$record = $newobject->mostrarGoles();
require_once '../view/html/goles.php';
?>