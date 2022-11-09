<?php
require_once "controlador/plantilla.controlador.php";
require_once "controlador/datos.controlador.php";
require_once "vista/dompdf-2.0.1/dompdf/autoload.inc.php";
require_once "modelo/rutas.php";
require_once "modelo/datos.modelo.php";
$plantilla = new controladorplantilla();
$plantilla -> ctrtraerplantilla();
