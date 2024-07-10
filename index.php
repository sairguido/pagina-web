<?php

require_once 'modelo/header.php'; 
require_once 'modelo/conexion.php';
require_once "modelo/enlaces.php";
require_once "modelo/crud.php";
require_once "controller/controller.php";
#require_once "modelo/ventitel.php";

$mvc = new MvcController();
$mvc -> pagina();

isset($_GET['enviar'])? $_GET['enviar']:"";

?>