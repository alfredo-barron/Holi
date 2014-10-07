<?php session_start();?>
<html>
<head>
    <title>Carrito de Compras</title>
	<link href="css/estilos.css" type="text/css" rel="stylesheet"> 
</head>

<body>

<?php

//Agregamos la Cabecera ala Pagina
 include('includes/header.php');
 require_once('class/Catalogo.php');
 
 $isbn=$_GET['isbn'];
 
 $obj= new Catalogo();
 $libro=$obj->get_detalles_libro($isbn);
?>

<h2><?php echo $libro[0]['descripcion'];?></h2>

<?php
if (is_array($libro))
{	
?>
<table>

<tr>

<td>
<img src="<?php echo $libro[0]['imagen']; ?>" border="0"/>
</td>

<td>

<ul>

<li><b>ISBN:</b> <?php echo $libro[0]['id_instrumento'];?>
<li><b>Nuestro Precio:</b> <?php echo $libro[0]['precio'];?>
<li><b>Descripcion:</b> <?php echo $libro[0]['descripcion'];?>

</ul>

</td>

</tr>

</table>
<?php
}
else
  echo "Los detalles de este libro no pueden ser mostrados en este momento.";
  echo "<hr>"; 
?>


<a href="ver_carrito.php?new=<?php echo $libro[0]['id_instrumento']; ?>">
<img src="images/icono-carrito-de-compras.jpg" border="0">
</a>

</body>

</html>