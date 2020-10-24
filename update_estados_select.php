<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Select</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h3 align="center">Seleccione el registro a modificar:<?php 
 
   include("conexion.php");
   $link = Conecta_DB();
   $SQL ="select * from estado order by nombree asc;";
   $result = mysql_query($SQL,$link);
?></h3>
<form name="form1" method="post" action="p_update_estados_select.php">
  <table width="363" border="0" align="center">
    <tr>
      <td width="239" align="right">Modificar el estado de: </td>
      <td width="114"><select name="s_estado" id="s_estado">
        <?php 
	    while($row = mysql_fetch_array($result)) { 
    		  printf("<option value='%d'>%s</option>", $row["ide"], $row["nombree"]);  
  		 } 
  		// mysql_free_result($result); 
  		// mysql_close($link); 
	 	 
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right"><input type="submit" name="Submit"  value="Modificar"></td>
      <td align="left"><input type="reset" name="Submit2"  value="Restablecer"></td>
    </tr>
  </table>
</form>
 
</body>
</html>
