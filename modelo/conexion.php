<?php
class Host
{
	public function connect()
	{
		$usuario="root";
		$password="";
		$host="localhost";
		$db="animes_db";
		$conexion= new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $password);
		return $conexion;
	}
}
?>
