<?php
require_once '../models/encuentros.model.php';
$newobject = new Encuentros;
$record = $newobject->mostrarEncuentros();
require_once '../view/html/encuentros.php';
?>