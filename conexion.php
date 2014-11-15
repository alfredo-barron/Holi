<?php
	$host="localhost";
	$user="postgres";
	$pass="";
	$dbname='carritocompras';
  $conn = pg_connect("host=".$host." user=".$user." dbname=".$dbname." password=".$pass);
  if (!$conn)
  {
    echo "<hr>";
    echo "Hay un error en la conexion";
    exit;
  }
?>
