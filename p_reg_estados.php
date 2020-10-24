<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Alta_estado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Usted ha registrado el estado de <?php        
	$nombre = $_POST['tf_nombree'];
	$str = strtoupper($nombre);
	echo $str;
?>.</p>
<p align="center"><strong>Gracias!</strong></p><?php 
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $SQL= "insert into estados(nombree) values('$str');";
   $rs =mysql_query($SQL,$link); 
   if (!$rs){
       die('Consulta no válida: ' . mysql_error());
   }
   
   mysql_close($link); 
   header("Location:registro_de_estados.php"); 
?>
</body>
</html>
