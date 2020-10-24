<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Listado de estados</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1> 
<?php 
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $result=mysql_query("select * from estado order by nombree asc",$link); 
?> 
   <TABLE width="132" BORDER=0 CELLPADDING=1 CELLSPACING=1> 
      <TR><TD>&nbsp;Id</TD><TD>&nbsp;Nombre&nbsp;</TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>", $row["ide"],$row["nombree"]); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table> 
</body>
</html>
