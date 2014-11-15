<?php
  if(getenv('DATABASE_URL') != false){
  $dbopts = parse_url(getenv('DATABASE_URL'));
  $dbname = ltrim($dbopts['path'],'/');
  $host = $dbopts['host'];
  $port = $dbopts['port'];
  $user = $dbopts['user'];
  $pass = $dbopts['pass'];
  } else {
	$host="localhost";
	$user="postgres";
	$pass="";
	$dbname='carritocompras';
  }
  $conn = pg_connect("host=".$host." user=".$user." dbname=".$dbname." password=".$pass);
  if (!$conn)
  {
    echo "<hr>";
    echo "Hay un error en la conexion";
    exit;
  }
?>
