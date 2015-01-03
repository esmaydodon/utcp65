<?php 
session_start(); extract($_REQUEST); 
//include ("includes/header.php");
include("../func/funciones.php");
        $nickN = quitar($_POST["usuario_text"]); 
        $passN = quitar($_POST["pass_text"]);
		//$idlocal = quitar($_POST["local"]);
        $tipoUsuario = quitar($_POST["tipoUsuario"]);//1 admin FALTA AGREGAR FILTAR POR ADMIN O CT O PRO
     if( $nickN != "" && $passN != "" ) 
       { 
        $result = dime("SELECT idusuarios,pass_usuario,tipos_usuarios_idtipos_usuarios FROM usuarios WHERE nick_usuario='$nickN'   and estado_usuario='1'");      
        if($row = mysql_fetch_array($result)) //si devuelve filas entonces si existe las melas estas 
        { 
        if($row['pass_usuario'] == $passN) //ahora comprobamos si el pass_textword es correcto
        {setcookie("usNick",$nickN,time()+3600); 
        setcookie("usPass",$passN,time()+3600);
        //setcookie("idlocal",$idlocal,time()+3600);      
     }       
 if ($row['tipos_usuarios_idtipos_usuarios']=="1") {
     ?>
    <link href="../impre.css" rel="stylesheet" type="text/css" />
 <div align="center">
          <p><img src="../imagenes/loader.gif"   /></p>
          <p><span><span>ADMINISTRADOR, Ingreso Exitoso</span>.</span> 
              </div>
            <SCRIPT LANGUAGE="javascript"> 
			       location.href = "panel.php"; 
            </SCRIPT>      
         <?php
 }elseif ($row['tipos_usuarios_idtipos_usuarios']=="2" OR $row['tipos_usuarios_idtipos_usuarios']=="3" OR $row['tipos_usuarios_idtipos_usuarios']=="4") {
            ?>
    <link href="../impre.css" rel="stylesheet" type="text/css" />

       <div align="center">
          <p><img src="../imagenes/loader.gif"   /></p>
          <p><span><span>PERSONAL Ingreso exitoso</span>.</span> 
              </div>
            <SCRIPT LANGUAGE="javascript"> 
			       location.href = "personal_panel.php"; 
            </SCRIPT>      
         <?php                     
                        }
  
        } 
        else 
        { 
        echo "pass_textword incorrecto"; 
        } 
        } 
        else{ 
       echo "usuario_text no existente en la base de datos"; 
		 ?>
		    <SCRIPT LANGUAGE="javascript"> 
        location.href = "barado.php"; 
            </SCRIPT>
		    <?php 
        } 
 ?>
          </p>
</div>