<?php
require_once '../models/encuentros.model.php';
$newobject = new Encuentros;
if ($_GET)
    $var = $_GET['encuentroid'];
    $newobject->eliminarEncuentros($var);
    $record = $newobject->mostrarEncuentros();

require_once '../view/html/encuentros.php';

?>