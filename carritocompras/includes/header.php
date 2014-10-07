<?php
//Captutamos las viarbles de sesion y lo almacenamos en variables.
if(isset($_SESSION['item']))
$items=$_SESSION['items'];
else
$items="0";

if(isset($_SESSION['total']))
$total=number_format($_SESSION['total'],2);
else
$total="0.00";
//Si no llega ningun valor, inicializamos las variables en 0 y 0.00 respectivamente


?>
<table width=100% border=0 cellspacing = 0 bgcolor=#cccccc>
 
<tr>
  
  <td rowspan = 2>
  	<a href = "index.php"><img src="images/Book-O-Rama.gif" alt="Bookorama" border=0
       align=left valign=bottom height = 60 width = 247></a>
  </td>
  
  <td align = right valign = bottom>
	<?php
	//Mostramos la cantidad de items en el carrito
	echo "Total Items=". $items;
	?>
  </td>
  
  <td align = right rowspan = 2 width = 135>
	<a href="ver_carrito.php?<?php echo SID; ?>">
		<img src="images/CARRITO_DE_COMPRAS.gif" width="135" border="0"/>
	</a> 
  </td>
 
</tr>
  
<tr>
   
  <td align = right valign = top>	
	<?php
	//Mostramos el total a pagar por el usuario.
	 echo "Total S/." . $total;
	?>
  </td>
  
</tr>

</table>