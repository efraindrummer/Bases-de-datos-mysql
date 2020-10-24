<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Actualizar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<div align="center">
  <h4>&nbsp;</h4>
    <?php 
   $id = $_POST["s_estado"];
   include("conexion.php");
   $link   = Conecta_DB();
   $SQL    = "select ide, nombree from estado where ide=$id;";
   $result = mysql_query($SQL,$link);
   $row = mysql_fetch_row($result); 
?>
Solo puede modificar el nombre: </div>
<form name="form2" method="post" action="p_update_estados_modificar.php">
  <table width="200" border="1" align="center">
    <tr>
      <td><div align="right">id:</div></td>
      <td valign="middle">
        <div align="left">
		 <input name="tf_iden" id="tf_iden"   type="text" value="<?php echo $row[0]; ?>" size="25" maxlength="20" disabled>
         <input type="hidden" name="hiddenField" id="hiddenField" value="<?php echo $row[0]; ?>">
        </div></td>
    </tr>
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td>
        <div align="left">
		<input name="tf_nomb" id="tf_nomb" type="text" value="<?php echo $row[1]; ?>" size='45' maxlength='45'>         
      </div></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td>
        <div align="center">
          <input type="submit" name="Submit" value="Enviar">
          <input type="reset" name="Submit2" value="Restablecer">
        </div></td>
    </tr>
  </table>
<div align="center"></div>
</form>
<p>&nbsp;</p>
</body>
</html>
