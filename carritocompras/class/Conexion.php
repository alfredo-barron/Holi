<?php

class Conexion
{
	public static function db_connect()
	{
		$mysqli= new mysqli("localhost","root","augustrush13");
		$mysqli->select_db("carrocompras");

		return $mysqli;
	}
}
?>