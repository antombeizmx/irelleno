<?php
include_once("../modelo/acciones.php");
$nombre_captitulo = $_POST['capitulo'];
$nombre_anime = $_POST['anime'];
$numero_capitulo = $_POST['numero'];
// $nombre_captitulo = "356";
// $nombre_anime = "One Piece";
// $numero_capitulo = "356";
$modelo = new Acciones();
$peticion=$modelo->consulta_animes($nombre_anime,$numero_capitulo,$nombre_captitulo);
echo $peticion;
?>