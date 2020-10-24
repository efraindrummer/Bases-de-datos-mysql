<?php 
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $id = $_GET['id'];
   $SQL= "delete from estado where ide=$id;";
   $rs =mysql_query($SQL,$link); 
   if (!$rs){
       die('Borrado no válido: ' . mysql_error());
   }
   
   mysql_close($link); 
   header("Location:borrado_estados_get.php"); 
?>