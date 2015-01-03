<?php 
include("../func/funciones.php");
//include('login.php');
if($adminCorrecto and $loginCorrecto) { 
echo "<div id='admin'>".$NombreUsuarioL." 
                           <!-- <a href='destruir.php'>Salir</a> <a href='ventas.php'>Ventas</a>--> 
                          </div>"; 
		}elseif($loginCorrecto) 
		{
			 echo "<div id='admin'><b>".$NombreUsuarioL; 
                         }
// si soy el amo  chvr Y SINO solo saludo al USUARIO
		 else { echo "El sistema no te ha reconocido";
		?> <SCRIPT LANGUAGE="javascript"> 
        location.href = "barado.php"; 
        </SCRIPT> <? 
	} 
?>
