<?php
require_once "../models/usuarios.model.php";
echo json_encode(Usuario::mostrarUser());
?>