<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Registro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
-->
</style>
</head>

<body>
<p align="center" class="Estilo1">Registre los estados participantes</p>
<form name="form1" method="POST" action="p_reg_estados.php">
  <table width="200" border="1" align="center">
    <tr>
      <td><label>Nombre:</label>
      </td>
      <td><input name="tf_nombree" type="text" id="tf_nombree" size="45" maxlength="45"></td>
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
<p>Ya registrados:</p>
<?php 
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $result=mysql_query("select * from estado order by nombree asc",$link); 
?> 
   <TABLE width="255" BORDER=1 CELLPADDING=1 CELLSPACING=1> 
      <TR><TD width="247">&nbsp;Nombre&nbsp;</TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%s&nbsp;</td></tr>", $row["nombree"]); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table> 
<p>&nbsp;</p>
</body>
</html>
