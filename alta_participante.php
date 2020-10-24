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
<p align="center" class="Estilo1 Estilo2">Registre los nuevos profesores participantes:</p>
<form name="form1" method="post" action="procesa_participante.php">
  <table width="307" border="1" align="center">
    <tr>
      <td width="68"><label><span class="Estilo4">Nombre:</span></label>
      </td>
      <td width="223"><input name="tf_nombre" type="text" id="tf_nombre" value="ingrese el nombre del profesor" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Apellido:</td>
      <td><input name="tf_apellido" type="text" id="tf_apellido" value="ingrese el apellido del profesor" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><input name="tf_numero" type="text" id="tf_numero" value="Numero" size="10" maxlength="45"></td>
    </tr>
    <tr>
      <td>Evento:</td>
      <td><select name="s_evento"><?php 
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
   $myQuery="select * from responsable";
   $result=mysql_query($myQuery,$link); 
?> 
<TABLE width="661" BORDER=1 CELLPADDING=1 CELLSPACING=1> 
      <TR><TD width="31">&nbsp;Id</TD><TD width="188"><span class="Estilo1">&nbsp;Nombres&nbsp;</span></TD><TD width="173"><span class="Estilo1">&nbsp;Apellidos&nbsp;</span></TD><TD width="95"><span class="Estilo1">&nbsp;Tel&eacute;fono&nbsp;</span></TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["IDR"],$row["NOMBRER"],$row["APELLIDOR"],$row["TELR"]); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table>  </p>
<hr>
<p>&nbsp;</p>
</body>
</html>
