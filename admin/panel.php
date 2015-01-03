<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include '../func/funciones.php';
include 'login.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Panel De Administracion</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header_wrapper">
  <div id="header">
    <div id="site_title">
      <h1>
        <?php include ('ya.php'); ?>
      </h1>
    </div>
   <strong class="MANTRA"> </strong>
   <div id="site_title2">
     <h1><strong class="MANTRA">SISTEMA DE GESTION DE FORMATOS UTC PENSION 65</strong></h1>
   </div>
   <p>&nbsp;</p>
   <strong class="MANTRA">
   <p>&nbsp;</p>
   </strong>
  </div>
  <!-- end of header -->
</div>
<!-- end of menu_wrapper -->
<div id="menu_wrapper">
  <div id="menu">
    <ul>
      <li><a href="destruir.php" class="current">SALIR</a></li>
      <li><a href="personal.php">PERSONAL</a></li>
      <li><a href="ubigeo.php">UBIGEO</a></li>
      <li><a href="../cap.php">MENU3</a></li>
      <li><a href="../gra.php">MENU4</a></li>
      <li><a href="panel.php">INICIO</a></li>
    </ul>
  </div>
  <!-- end of menu -->
</div>
<div id="content_wrapper"><!-- end of sidebar -->
  <div id="content">
    <div class="content_box_panel">
      <h2>OPCIONES</h2>

  
<div class="cleaner_h20">
<form action="registrando_usuarios.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="fecha" value="<?php echo date("Y-m-d H:i:s");?>">
 
      </form>
</div>
      <div class="cleaner"></div>
    </div>
    <div class="content_box_bottom"></div>
    <div class="content_box">
      <h2>Mapa - Web</h2>
      <div class="cleaner"></div>
    </div>
    <div class="content_box_bottom"></div>
  </div>
  <!-- end of content -->
  <div class="cleaner"></div>
</div>
<div id="footer_wrapper">
  <div id="footer">
    <ul class="footer_menu">
      <li><a href="#">INICIO</a></li>
      <li><a href="#">DIPLOMADOS</a></li>
      <li><a href="#">ESPECIALIZACIÓN PROFESIONAL</a></li>
      <li><a href="#">CURSOS DE CAPACITACIÓN</a></li>
      <li><a href="#">CURSOS GRATUITOS</a></li>
      <li class="last_menu"><a href="#">CONTACTO</a></li>
    </ul>
    Copyright &copy; 2014 <a href="http://www.kuraka.net/">kuraka.net</a></div>
</div>
</body>
</html>
