<?php

# Mostrar la salida de las vistas al usuario y las acciones que el usuario envie al controlador
require_once "controladores/controller.php";
require_once "modelos/model.php";

$mvc = new MvcController();
$mvc->plantilla();

?>