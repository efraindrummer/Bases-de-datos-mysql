<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Registro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
.Estilo2 {font-size: large}
.Estilo3 {font-size: large; color: #0000FF; }
.Estilo4 {color: #000000}
-->
</style>
</head>

<body>
<p align="center" class="Estilo1 Estilo2">Registre el estudiante jefe de equipo:</p>
<form name="form1" method="post" action="procesa_jefe_equipo.php">
  <table width="502" border="1" align="center">
    <tr>
      <td width="166"><label>Evento:</label></td>
      <td width="320"><select name="s_evento">
        <?php 
	  			 include("conexion.php"); 
  				 $link=Conecta_DB(); 
  				 $Query="select IDE, NOMBREE from EVENTO";
  				 $result=mysql_query($Query,$link); 
	  			 while($row = mysql_fetch_array($result)) { 
     				 printf("<option value='%s'>%s</option>", $row["IDE"],$row["NOMBREE"]); 
 		  } 
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><label>Equipo que representa: </label></td>
      <td><select name="s_equipo">
	  <?php 
	   $link=Conecta_DB(); 
  				 $Query="select IDEQ, NOMBREEQ from EQUIPO";
  				 $result=mysql_query($Query,$link); 
	  			 while($row = mysql_fetch_array($result)) { 
     				 printf("<option value='%s'>%s</option>", $row["IDEQ"],$row["NOMBREEQ"]); 
 		  } 
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><span class="Estilo4">Matricula:</span></td>
      <td><input type="text" name="tf_mat" value="ingrese matricula" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td><span class="Estilo4">Nombre(s):</span></td>
      <td><input name="tf_nombre" type="text" id="tf_nombre3" value="ingrese nombre(s)" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><input name="tf_apellido" type="text" id="tf_apellido4" value="ingrese apellidos" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Carrera</td>
      <td><select name="s_carrera" id="s_carrera">
        <option value="IDM">Ingenier&iacute;a en Dise&ntilde;o Multimedia</option>
        <option value="ISC">Ingenier&iacute;a en Sistemas Computacionales</option>
        <option value="ICO">Ingenier&iacute;a en Computaci&oacute;n</option>
        <option value="ITCC">Ingenier&iacute;a en Tecnolog&iacute;as de C&oacute;mputo y Comunicaciones</option>
      </select></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><input name="tf_numero" type="text" id="tf_numero5" value="Numero" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input name="tf_email" type="text" id="tf_email" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Enviar">
        <input type="reset" name="Submit2" value="Limpiar"></td>
    </tr>
  </table>
</form>
<hr>
<p class="Estilo3">Ya registrados:</p>
<p><?php 
   //include("conexion.php"); 
   $link=Conecta_DB(); 
   $myQuery="select DISTINCT B.MATRICULA, B.NOMBREA, B.APELLIDOA, B.TELA, B.CARRERA, C.NOMBREEQ from ALUMNO A, ALUMNO B, EQUIPO C WHERE A.MATRICULA_JEFE=B.MATRICULA AND B.IDEQ=C.IDEQ";
   $result=mysql_query($myQuery,$link); 
?> 
<TABLE width="887" BORDER=1 CELLPADDING=1 CELLSPACING=1> 
      <TR><TD width="68">Matricula</TD><TD width="156"><span class="Estilo1">Nombres</span></TD><TD width="145"><span class="Estilo1">Apellidos</span></TD><TD width="102"><span class="Estilo1">&nbsp;Tel&eacute;fono&nbsp;</span></TD><TD width="77"><span class="Estilo1">&nbsp;Carrera&nbsp;</span></TD><TD width="178"><span class="Estilo1">&nbsp;Equipo&nbsp;</span></TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["MATRICULA"],$row["NOMBREA"],$row["APELLIDOA"],$row["TELA"],$row["CARRERA"],$row["NOMBREEQ"]); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table>  </p>
<hr>
<p>&nbsp;</p>
</body>
</html>
