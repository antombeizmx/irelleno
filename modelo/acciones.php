<?php
require_once("conexion.php");
date_default_timezone_set('America/Mexico_City');
Class Acciones
{
	public function registrarDatos($nombre_anime,$numero_capitulo,$clave_capitulo,$nombre_captitulo,$tipo_capitulo)
	{
		$objeto = new Host();
		$conexion = $objeto->connect();
		$sql="INSERT INTO informacion_animes(nombre_anime,numero_capitulo,clave_capitulo,nombre_captitulo,tipo_capitulo) values(:nombre_anime,:numero_capitulo,:clave_capitulo,:nombre_captitulo,:tipo_capitulo)";
		$parametros = $conexion->prepare($sql);
		$parametros->bindParam(":nombre_anime", $nombre_anime); 
		$parametros->bindParam(":numero_capitulo", $numero_capitulo); 
		$parametros->bindParam(":nombre_captitulo", $nombre_captitulo); 
		$parametros->bindParam(":clave_capitulo", $clave_capitulo); 
		$parametros->bindParam(":tipo_capitulo", $tipo_capitulo); 
		if ($parametros->execute())
		{
			return "listo";
		}
		else
		{
			return "Error";
		}
	}
	public function consulta_animes($nombre_anime,$numero_capitulo,$nombre_captitulo)
	{
		$objeto = new Host();
		$conexion = $objeto->connect();
		$sql="SELECT * FROM informacion_animes WHERE nombre_anime=:nombre_anime AND numero_capitulo=:numero_capitulo OR nombre_anime=:nombre_anime AND nombre_captitulo=:nombre_capitulo";
		$parametros = $conexion->prepare($sql);
		$parametros->bindParam(":nombre_anime", $nombre_anime); 
		$parametros->bindParam(":numero_capitulo", $numero_capitulo); 
		$parametros->bindParam(":nombre_capitulo", $nombre_captitulo); 
		if($parametros->execute())
		{
			$numero_filas=$parametros->rowCount();
			if($numero_filas==0)
			{
				return json_encode("no hay coincidencias");
			}
			else
			{
				$datos= $parametros->fetchAll(PDO::FETCH_ASSOC);
				return json_encode($datos);
			}
		}
	}
	public function consulta_nombre_animes()
	{
		$objeto = new Host();
		$conexion = $objeto->connect();
		$sql="SELECT DISTINCT nombre_anime FROM informacion_animes";
		$parametros = $conexion->prepare($sql);
		if($parametros->execute())
		{
			$numero_filas=$parametros->rowCount();
			if($numero_filas==0)
			{
				return json_encode("no hay coincidencias");
			}
			else
			{
				$datos= $parametros->fetchAll(PDO::FETCH_ASSOC);
				$cuenta = count($datos);
				return json_encode($datos);
			}
		}
	}
}
?>
