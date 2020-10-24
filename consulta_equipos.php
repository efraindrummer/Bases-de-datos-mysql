<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Consultas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
 <h4 align="center">Consulta los participantes en el equipo.</h4>
 <form name="form3" method="post" action="consulta_equipos.php">
   <table width="336" border="0" align="center">
     <tr>
       <td width="186">Seleccione el equipo:</td>
       <td width="140">
         <select name="s_equipo"><?php 
		      include("conexion.php");
              $link = Conecta_DB();
              $SQL ="select IDEQ, NOMBREEQ from EQUIPO";
			  //echo $SQL;
  			  $result = mysql_query($SQL,$link);
			  while($row = mysql_fetch_array($result)) { 
    		       printf("<option value='%d'>%s</option>", $row["IDEQ"], $row["NOMBREEQ"]);  
  		       } 
			    mysql_free_result($result); 
  		        mysql_close($link); 
		 ?>
          </select>
       </td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>
         <input type="submit" name="Submit2" value="Enviar">
       </td>
     </tr>
   </table>
 </form>
 <hr>
 <?php 
if(!empty($_POST['s_equipo'])){
  print("<p align='center'>&nbsp;</p>");
  print(" <table width='200' border='0' align='center'>");
  print(" <tr>");
  print(" <td colspan='2'>Profesor del equipo:</td>");
  print(" </tr>");
  print(" <tr> ");   
 			 $link = Conecta_DB();
			 $s_eq = $_POST['s_equipo'];
			 $s_eq = (int) $s_eq;
              $SQL ="select NOMBRER, APELLIDOR from RESPONSABLE natural join EQUIPO where IDEQ=$s_eq";
			 // echo $SQL;
  			  $result = mysql_query($SQL,$link);
			  while($row = mysql_fetch_array($result)) { 
    		       printf("<td>%s</td><td>%s</td>", $row["NOMBRER"], $row["APELLIDOR"]);  
  		       } 
			    mysql_free_result($result); 
  		        mysql_close($link); 
  print(" </tr>");  
  print(" </table>");
}
  
 
    
   if(!empty($_POST['s_equipo'])){
  	 	print("<p>&nbsp;</p>");
  		print(" <table width='400' border='0' align='center'>");
		print(" <tr>");
 		print("   <td colspan='2'>Alumnos participantes :</td>");
 		print(" </tr>");
   
   
   
    		$link = Conecta_DB();
			 $s_eq = $_POST['s_equipo'];
			 $s_eq = (int) $s_eq;
              $SQL ="select NOMBREA, APELLIDOA from ALUMNO natural join EQUIPO where IDEQ=$s_eq order by NOMBREA asc";
			 // echo $SQL;
  			  $result = mysql_query($SQL,$link);
			  while($row = mysql_fetch_array($result)) { 
    		       printf("<tr><td width='150'>%s</td><td width='150'>%s</td> </tr>", $row["NOMBREA"], $row["APELLIDOA"]);  
  		       } 
			    mysql_free_result($result); 
  		        mysql_close($link); 
  }
  
print(" </table>");
  ?>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
</body>
</html>
