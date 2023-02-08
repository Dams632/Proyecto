<?php
require_once "../models/login.model.php";
$object = new login;
$record=$object->login($_POST);

require_once '../view/login.php';
?>