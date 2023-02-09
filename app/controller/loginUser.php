<?php
require_once "../models/login.model.php";
$object = new login;
print_r($_POST);
$record=$object->login($_POST);

require_once '../view/login.php';
?>