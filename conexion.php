<?php 
function Conecta_DB() 
{ 
   if (!($link=mysql_connect("localhost","master","masterchef"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("proyectoxx",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

?> 