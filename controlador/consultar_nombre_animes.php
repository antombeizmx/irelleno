<?php
include_once("../modelo/acciones.php");
$modelo = new Acciones();
$peticion=$modelo->consulta_nombre_animes();
echo $peticion;
?>