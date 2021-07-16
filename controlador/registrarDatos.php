<?php
include_once("../modelo/acciones.php");
$nombre_anime=trim($_POST['nombre_anime']);
$numero_capitulo=trim($_POST['numero_capitulo']);
$nombre_captitulo=trim($_POST['nombre_captitulo']);
$clave_capitulo=trim($_POST['clave_capitulo']);
$tipo_capitulo=trim($_POST['tipo_capitulo']);
$m= new Acciones();
$registro=$m->registrarDatos($nombre_anime,$numero_capitulo,$clave_capitulo,$nombre_captitulo,$tipo_capitulo);
echo $registro;
?>
