<?php
require_once '../models/goles.model.php';
$newobject = new Goles;
if ($_GET)
    $var = $_GET['txtcodigo'];
    $newobject->eliminarGoles($var);
    header("Location: ../view/goles.php");

?>