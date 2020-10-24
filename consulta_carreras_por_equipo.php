<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Consulta</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h4 align="center">Mostrar el total de alumnos por equipo</h4>
<form name="form1" method="post" action="consulta_carreras_por_equipo.php">
  <table width="369" border="0" align="center">
    <tr>
      <td width="182"><div align="right">Selecciones el equipo:</div></td>
      <td width="177"><select name="s_equipo"><?php 
	 			 include("conexion.php"); 
  				 $link=Conecta_DB(); 
  				 $Query="select IDEQ, NOMBREEQ from EQUIPO";
  				 $result=mysql_query($Query,$link); 
	  			 while($row = mysql_fetch_array($result)) { 
     				 printf("<option value='%d'>%s</option>", $row["IDEQ"],$row["NOMBREEQ"]); 
 		  } 
	  mysql_free_result($result); 
      mysql_close($link); 
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Enviar"></td>
    </tr>
  </table>
</form>
<hr>
<?php 
 	if(!empty($_POST['s_equipo'])){	
			     $idequipo = $_POST['s_equipo'];
				 $link=Conecta_DB(); 
  				 $Query="CALL calcula_carreras_por_equipo($idequipo);";
  				 $result=mysql_query($Query,$link);
	print("<table width='300' border='0' align='center'>");
	print("<tr><td>Carrera</td><td>Total</td></tr>");
	$sum=0;				 
				  while($row = mysql_fetch_row($result)) { 
   				   printf("<tr><td>%s</td><td><div align='center'>%d</div></td></tr>", $row[0],$row[1]); 
				   $sum = $sum + $row[1];
   } 
   print("<tr><td>Total de estudiantes:</td><td><div align='center'>$sum</div></td></tr>");
   print(" </table>");
   mysql_free_result($result); 
   mysql_close($link); 
				 
				 
				 
   }
?>

<p>&nbsp;</p>
</body>
</html>
