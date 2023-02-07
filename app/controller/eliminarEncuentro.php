<?php
require_once '../models/encuentros.model.php';
$newobject = new Encuentros;
if ($_GET)
    $var = $_GET['txtcodigo'];
    $newobject->eliminarEncuentros($var);
    $record = $newobject->mostrarEncuentros();

    header("Location: ../view/encuentro.php");

?>