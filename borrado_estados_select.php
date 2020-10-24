<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Select</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>Seleccione el registro a eliminar:<?php 
 
   include("conexion.php");
   $link = Conecta_DB();
   $SQL ="select * from estado order by nombree asc;";
   $result = mysql_query($SQL,$link);
?></p>
<form name="form1" method="post" action="borrado_estados_select.php">
  <table width="200" border="0">
    <tr>
      <td>Elimina a: </td>
      <td><select name="s_estado" id="s_estado">
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
      <td><input type="submit" name="Submit" value="Eliminar"></td>
      <td><input type="reset" name="Submit2" value="Restablecer"></td>
    </tr>
  </table>
  </form>
  <?php 
  // REFRESH EN LA PRIMERA OCASION
  		//$id = $_POST["s_estado"];
		if(!empty($_POST["s_estado"])) {
			$id = $_POST["s_estado"];
			$link=Conecta_DB(); 
 		    $SQL= "delete from estado where ide=$id;";
  			$rs =mysql_query($SQL,$link); 
   			if (!$rs){
       			die('Borrado no válido: ' . mysql_error());
  			 }
  			 mysql_close($link);
		}
  ?>
</body>
</html>
