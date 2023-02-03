<?php
require_once "../models/canchas.model.php";
echo json_encode(Canchas::mostrarCanchas());
