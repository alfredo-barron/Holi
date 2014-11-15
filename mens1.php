<?php
include 'conexion.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holi, Cat&aacute;logos</title>
<meta name="keywords" content="accordion, portfolio, web design, free css template, templatemo.com" />
<meta name="description" content="Accordion Theme, Portfolio, free CSS template" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

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

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/estrella.png">

<script type="text/JavaScript" src="js/slimbox2.js"></script>

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
            </ul>
            <br style="clear: left" />
        </div> <!-- end of menu -->
    </div> <!-- end of top -->
</div> <!-- end of top wrapper -->

<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">

        <div class="gallery_box">
            <?php
                $query = "SELECT * FROM productos WHERE id=19";
                $result = pg_query($conn,$query);
                while ($f=pg_fetch_array($result)){
                 ?>
            <div class="col col_2">
            <a href="./productos/<?php echo $f['imagen'];?>" rel="lightbox[portfolio]"><img src="./productos/<?php echo $f['imagen'];?>" width= "300 px" height= "300 px" alt="Image 01" class="image_frame" /></a>
            </div>
            <div class="col col_2 no_margin_righ">
                <h5><?php echo $f['nombre'];?></h5></br>
                <p><?php echo $f['descripcion'];?></p>
                <h6>Precio: <?php echo $f['precio'];?></h6>
                </br>
                </br>
                <a href="./blog.php?id=<?php echo $f['id']?>">Añadir al carrito</a>
                <?php
                 }
                ?>
            </div>
            <div class="cleaner"></div>
        </div>
        <div class="gallery_box no_margin_right">
             <?php
                $query = "SELECT * FROM productos WHERE id=20";
                $result = pg_query($conn,$query);
                while ($f=pg_fetch_array($result)){
                 ?>
            <div class="col col_2">
            <a href="./productos/<?php echo $f['imagen'];?>" rel="lightbox[portfolio]"><img src="./productos/<?php echo $f['imagen'];?>" width= "300 px" height= "300 px" alt="Image 01" class="image_frame" /></a>
            </div>
            <div class="col col_2 no_margin_righ">
                <h5><?php echo $f['nombre'];?></h5></br>
                <p><?php echo $f['descripcion'];?></p>
                <h6>Precio: <?php echo $f['precio'];?></h6>
                </br>
                </br>
                <a href="./blog.php?id=<?php echo $f['id']?>">Añadir al carrito</a>
                <?php
                 }
                 ?>
            </div>
            <div class="cleaner"></div>
        </div>
        <div class="gallery_box">
            <?php
                $query = "SELECT * FROM productos WHERE id=21";
                $result = pg_query($conn,$query);
                while ($f=pg_fetch_array($result)){
                 ?>
            <div class="col col_2">
            <a href="./productos/<?php echo $f['imagen'];?>" rel="lightbox[portfolio]"><img src="./productos/<?php echo $f['imagen'];?>" width= "300 px" height= "300 px" alt="Image 01" class="image_frame" /></a>
            </div>
            <div class="col col_2 no_margin_righ">
                <h5><?php echo $f['nombre'];?></h5></br>
                <p><?php echo $f['descripcion'];?></p>
                <h6>Precio: <?php echo $f['precio'];?></h6>
                </br>
                </br>
                <a href="./blog.php?id=<?php echo $f['id']?>">Añadir al carrito</a>
                <?php
                 }
                 ?>
            </div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
        <div class="pagging">
            <ul>
                <li><a href="mens.php" target="_parent">Anterior</a></li>
                <li><a href="mens.php" target="_parent">1</a></li>
                <li><a href="mens1.php" target="_parent">2</a></li>
                <li><a href="mens2.php" target="_parent">3</a></li>
                <li><a href="mens3.php" target="_parent">4</a></li>
                <li><a href="mens4.php" target="_parent">5</a></li>
                <li><a href="mens2.php" target="_parent">Siguiente</a></li>
            </ul>
        </div>

        <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of main wrapper -->
<div id="templatemo_footer">
    <div class="col col_3">
        <a href="https://www.facebook.com/holiventa"><img src="images/facebook.png" title="Facebook" alt="Facebook" /></a>
    </div>

     <div class="col col_32 copyright no_margin_righ">
        Copyright © 2014 <a href="https://www.facebook.com/holiventa">HOLI</a> | Designed by <a href="https://www.facebook.com/BarronPro" target="_parent">Barr&oacute;n PRO</a>
    </div>

    <div class="cleaner"></div>
</div> <!-- end of footer -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>


