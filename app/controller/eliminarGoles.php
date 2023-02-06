<?php
require_once '../models/goles.model.php';
$newobject = new Goles;
if ($_GET)
    $var = $_GET['golesid'];
    $newobject->eliminarGoles($var);
    $record = $newobject->mostrarGoles();

require_once '../view/html/goles.php';

?>