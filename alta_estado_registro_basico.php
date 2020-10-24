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
<p align="center" class="Estilo1 Estilo2">Registre los estados participantes:</p>
<form name="form1" method="get" action="procesa_estado_registro.php">
  <table width="307" border="1" align="center">
    <tr>
      <td width="68"><label><span class="Estilo4">Nombre:</span></label>
      </td>
      <td width="223"><input name="tf_nombree" type="text" id="tf_nombree" value="ingrese el nombre del estado" maxlength="35"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $result=mysql_query("select * from estado",$link); 
?> 
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
      <TR><TD width="20">&nbsp;Id</TD><TD width="101"><span class="Estilo1">&nbsp;Nombre&nbsp;</span></TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>", $row["ide"],$row["nombree"]); 
   } 
   //mysql_free_result($result); 
   //mysql_close($link); 
?> 
</table>  </p>
<hr>
<p>&nbsp;</p>
</body>
</html>
