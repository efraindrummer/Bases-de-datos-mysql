<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Borrado EG</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<H1>Ejemplo de borrado de registros en las bases de datos con PHP y MySQL</H1> 
<?php 
   include("conexion.php"); 
   $link=Conecta_DB(); 
   $result=mysql_query("select * from estado order by nombree asc",$link); 
?> 
   <TABLE width="644" BORDER=1 CELLPADDING=1 CELLSPACING=1> 
      <TR>
        <TD width="68">
          <div align="center">Id</div></TD>
        <TD width="323">
          <div align="center">Nombre&nbsp;</div></TD>
        <TD width="117">
          <div align="center">Borrar&nbsp;</div></TD>
        <TD width="117">
          <div align="center">Editar&nbsp;</div></TD>
      </TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td><div align='center'><a href=borra.php?id=%d>Borra</a></div></td><td><div align='center'><a href=edita.php?id=%d>Edita</a></div></td></tr>", $row["ide"],$row["nombree"],$row["ide"],$row["ide"]); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table> 
</body>
</html>
