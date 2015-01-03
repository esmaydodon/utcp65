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
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
$("#listar_personal").click(function(evento){
     $("#formulario_personal").css("display", "none");
     $("#lista_personal").css("display", "block");
   });	
});
</script>
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
      <h2>PERSONAL</h2><div class="content_box_bottom">
  <span id="listar_personal" onclick="listarPersonalUtc()">LISTAR PERSONAL</span>
  </div>
<div class="cleaner_h20" id="contenedor_personal">
    <div id="formulario_personal" class="formulario_personal">
<form action="registrando_usuarios.php" method="post" enctype="multipart/form-data">
      <table border="0">
<tr>
<td>NOMBRES Y APELLIDOS:</td>
<td><input name="nombre_usuario" type="text" id="nombre_usuario" size="50"></td>
</tr>
<tr>
<td>DNI:</td><td>
<input name="dni_suario" type="text" id="dni_suario" size="50">
</td>
</tr>
<tr>
<td>EMAIL :</td>
<td><input name="email_usuario" type="text" id="email_usuario" size="50"></td>
</tr>
<tr>
<td>DIRECCION:</td>
<td><input name="direccion_usuario" type="text" id="direccion_usuario" size="50"></td>
</tr>
<tr>
<td>TELEFONO:</td><td>
<input name="telefono_usuario" type="text" id="telefono_usuario" size="50"></td>
</tr>
<tr>
<td>SEXO:</td><td>
  <select id ='SEXO' name='SEXO' class='select'>
	     <option value='0'>Seleccione </option>
	     <option value='1'>Mascuino </option>
	     <option value='2'>Femanino </option>
	  </select>
</td>
</tr>

<tr>
<td>CARGO:</td><td>
<?php
$consulata_tipo2=dime('select idtipos_usuarios,nombre_tipo_usuario from  tipos_usuarios; ');
    echo"<select id ='tipoUsuario' name='tipoUsuario' class='select'>
	     <option value='0'>Seleccione Cargo</option>";
		while($local=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idtipos_usuarios']."'>".$local['nombre_tipo_usuario']."</option>";}
	echo"</select></br>";
        ?>
</td>
</tr>
<tr>
<td>USUARIO:</td><td>
<input name="nick_usuario" type="text" id="nick_usuario" size="50">
</td>
</tr>
<tr>
<td>CONTRASEÑA:</td><td>
<input name="pass_usuario" type="text" id="pass_usuario" size="50">
</td>
</tr>
<tr>
  <td>FECHA:</td>
  <td><?php echo date('l jS \of F Y h:i:s A');?><br></td>
</tr>
<tr>
    <td><input type="submit" value="Enviar" onclick="listarPersonalUtc()"></td>
</tr>
</table>
<input type="hidden" name="phpmailer">
<input type="hidden" name="estado_usuario" value="1">
    <input type="hidden" name="fecha" value="<?php echo date("Y-m-d H:i:s");?>">
 
      </form>
</div>
    <div id="lista_personal" class="lista_personal">lista personal</div>
      <div class="cleaner"></div>
      </div>
    </div>
    
    <div class="content_box">
      <h2>-.-</h2>
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
