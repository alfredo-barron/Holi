<?php
    session_start();
    include './conexion.php';
    if(isset($_SESSION['carrito'])){
        if(isset($_GET['id'])){
                    $arreglo=$_SESSION['carrito'];
                    $encontro=false;
                    $numero=0;
                    for($i=0;$i<count($arreglo);$i++){
                        if($arreglo[$i]['Id']==$_GET['id']){
                            $encontro=true;
                            $numero=$i;
                        }
                    }
                    if($encontro==true){
                        $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                        $_SESSION['carrito']=$arreglo;
                    }else{
                        $nombre="";
                        $precio=0;
                        $imagen="";
                        $re=mysql_query("select * from productos where id=".$_GET['id']);
                        while ($f=mysql_fetch_array($re)) {
                            $nombre=$f['nombre'];
                            $precio=$f['precio'];
                            $imagen=$f['imagen'];
                        }
                        $datosNuevos=array('Id'=>$_GET['id'],
                                        'Nombre'=>$nombre,
                                        'Precio'=>$precio,
                                        'Imagen'=>$imagen,
                                        'Cantidad'=>1);

                        array_push($arreglo, $datosNuevos);
                        $_SESSION['carrito']=$arreglo;

                    }
        }




    }else{
        if(isset($_GET['id'])){
            $nombre="";
            $precio=0;
            $imagen="";
            $re=mysql_query("select * from productos where id=".$_GET['id']);
            while ($f=mysql_fetch_array($re)) {
                $nombre=$f['nombre'];
                $precio=$f['precio'];
                $imagen=$f['imagen'];
            }
            $arreglo[]=array('Id'=>$_GET['id'],
                            'Nombre'=>$nombre,
                            'Precio'=>$precio,
                            'Imagen'=>$imagen,
                            'Cantidad'=>1);
            $_SESSION['carrito']=$arreglo;
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holi, Compras</title>
<meta name="keywords" content="accordion, blog theme, web design, templatemo, free CSS, HTML" />
<meta name="description" content="Accordion, Blog Theme, free HTML CSS layout from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="shortcut icon" href="images/estrella.png">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>

</head>
<body>

<div id="templatemo_top_wrapper">
    <div id="templatemo_top">
        <div id="site_title"><a href="index.php"><img src="images/holirun.png" width="130px"></a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Inicio</a>
                    <!-- <ul>
                        <li><a>Damas</a></li>
                        <li><a>Caballeros</a></li>
                        <li><span class="bottom"><a href="http://es.photohq.com" title="Haga clic aquí para abrir"  target="_blank"><img src="images/templatemo_menu_bottom.png" alt="Haga clic aquí para abrir from es.photohq.com" title="Haga clic aquí para abrir" /></a></span></li>
                    </ul> -->
                </li>
                <li><a>Cat&aacute;logos</a>
                    <ul>
                        <li><a href="ladies.php">Damas</a></li>
                        <li><a href="mens.php">Caballeros</a></li>
                        <li><span class="bottom"><a href="http://es.photohq.com" title="Haga clic aquí para abrir"  target="_blank"><img src="images/templatemo_menu_bottom.png" alt="Haga clic aquí para abrir from es.photohq.com" title="Haga clic aquí para abrir" /></a></span></li>
                    </ul>
                </li>
                <li><a href="about.php"><span></span>Diseños</a>
                   <!-- <ul>
                        <li>Sub menu 1</a></li>
                        <li>Sub menu 2</a></li>
                        <li>Sub menu 3</a></li>
                        <li>Sub menu 4</a></li>
                        <li>Sub menu 5</a></li>
                        <li><span class="bottom"></span></li>
                    </ul> -->
                </li>
                <li><a href="blog.php">Compras</a></li>
                <li><a href="contact.php">Contacto</a></li>
                 <div align="center"> <a href="./blog.php" class="carrito" title="Ver carrito de compras">
                <img src="./imagenes/carrito.png"></a></div>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of menu -->
    </div> <!-- end of top -->
</div> <!-- end of top wrapper -->

<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper">
   <header>
        <h1 class="car">Carrito de compras</h1>
        </a>
    </header>
    <section>
        <?php
            $total=0;
            if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
            
            $total=0;
            for($i=0;$i<count($datos);$i++){
                
    ?>
                <div class="producto">
                    <center>
                        <img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
                        <span><?php echo $datos[$i]['Nombre'];?></span><br>
                        <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                        <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
                        <span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                        
                    </center>
                </div>
            <?php
                $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
            }
                
            }else{
                echo '<center><h2>No has añadido ningun producto</h2></center>';
            }
            echo '<center><h2>Total: '.$total.'</h2></center>';
        
        ?>
        <center><a href="./carrito.php">Ver catalogo</a></center>
        
        

        
    </section>
</div> <!-- end of main wrapper -->

<div id="templatemo_footer">
	<div class="col col_3">
        <a href="#"><img src="images/facebook.png" title="Facebook" alt="Facebook" /></a>
        <a href="#"><img src="images/flickr.png" title="Flickr" alt="Flickr"/></a>
        <a href="#"><img src="images/twitter.png" title="Twitter" alt="Twitter"/></a>
        <a href="#"><img src="images/youtube.png" title="Youtube" alt="Youtube"/></a>
        <a href="#"><img src="images/feed.png" title="RSS" alt="RSS"/></a>
	</div>
	
      <div class="col col_32 copyright no_margin_righ">
        Copyright © 2013 <a href="https://www.facebook.com/holiventa">HOLI</a> | Designed by <a href="https://www.facebook.com/BarronPro" target="_parent">Barr&oacute;n PRO</a>
    </div>
    
    <div class="cleaner"></div>
</div> <!-- end of footer -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>