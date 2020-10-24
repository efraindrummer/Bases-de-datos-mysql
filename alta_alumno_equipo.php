<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Registro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
.Estilo3 {font-size: large; color: #0000FF; }
.Estilo4 {color: #000000}
-->
</style>
</head>

<body>
<h3 align="center" class="Estilo4">Registro de alumno(a):</h3>
<form name="form1" method="post" action="procesa_alumno_equipo.php">
  <p align="center" class="Estilo1">Relacione el evento,  el equipo y el jefe de equipo: </p>
  <table width="442" border="1" align="center">
    <tr>
      <td width="113"><label>Evento:</label></td>
      <td width="313"><select name="s_evento" id="s_evento" onChange="window.location.reload();">
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
      <td><label>Equipo: </label></td>
      <td><select name="s_equipo" id="s_equipo" onChange="window.location.reload();">
	  <?php 
	   $link=Conecta_DB(); 
  				 $Query="select IDEQ, NOMBREEQ from EQUIPO";
  				 $result=mysql_query($Query,$link); 
	  			 while($row = mysql_fetch_array($result)) { 
     				 printf("<option value='%d'>%s</option>", $row["IDEQ"],$row["NOMBREEQ"]); 
 		  } 
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Jefe de Equipo: </td>
      <td><input name="tf_jefe" type="text" id="tf_jefe" value="matricula jefe" size="10" maxlength="10"></td>
    </tr>
  </table>
  <p align="center" class="Estilo1">Ingrese sus datos:</p>
  <table width="472" border="1" align="center">
    <tr>
      <td width="121"><span class="Estilo4">Matricula:</span></td>
      <td width="335"><input type="text" name="tf_mat" id="tf_mat" value="ingrese matricula" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td><span class="Estilo4">Nombres:</span></td>
      <td><input name="tf_nombre" type="text" id="tf_nombre" value="ingrese nombre(s)" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><input name="tf_apellido" type="text" id="tf_apellido" value="ingrese apellidos" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td>Carrera:</td>
      <td><select name="s_carrera" id="s_carrera">
        <option value="IDM">Ingenier&iacute;a en Dise&ntilde;o Multimedia</option>
        <option value="ISC">Ingenier&iacute;a en Sistemas Computacionales</option>
        <option value="ICO">Ingenier&iacute;a en Computaci&oacute;n</option>
        <option value="ITCC">Ingenier&iacute;a en Tecnolog&iacute;as de C&oacute;mputo y Comunicaciones</option>
      </select></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><input name="tf_numero" type="text" id="tf_numero" value="Numero" size="10" maxlength="10"></td>
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
  <p>&nbsp;</p>
</form>

</body>
</html>
