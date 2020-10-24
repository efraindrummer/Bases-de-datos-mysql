 <?php 
    include("conexion.php"); 
 if(!empty($_POST['tf_mat'])){
    
    $matricula= $_POST['tf_mat'];
	$nombre   = $_POST['tf_nombre'];
	$apellido = $_POST['tf_apellido'];
	$telefono = $_POST['tf_numero'];
	$email    = $_POST['tf_email'];
	$mat_jefe = $_POST['tf_jefe'];
	
	$carrera  = $_POST['s_carrera'];
	$idevento = $_POST['s_evento'];
	$idequipo = $_POST['s_equipo'];
	
	$nombre   = strtoupper($nombre);
	$apellido = strtoupper($apellido);
	
	$idevento = (int) $idevento;
	$idequipo = (int) $idequipo;


   $link=Conecta_DB(); 
   $SQL= "insert into ALUMNO(MATRICULA,MATRICULA_JEFE,NOMBREA,APELLIDOA,CARRERA,TELA,EMAILA,IDEQ,IDE) values('$matricula','$mat_jefe','$nombre','$apellido','$carrera','$telefono','$email',$idequipo,$idevento);";
   $rs =mysql_query($SQL,$link); 
   //echo $SQL;
   if (!$rs){
       die('Inserción no válida: ' . mysql_error());
   }
   mysql_close($link); 
 }
   //header("Location:alta_alumno_equipo.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Registrado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
-->
</style>
</head>

<body>
<h3 align="center" class="Estilo3 Estilo1">Usted ya ha sido registrado!</h3>
<p><?php 
   	  $idevento = (int) $idevento;
	  $idequipo = (int) $idequipo;

	   $link=Conecta_DB(); 
	   $myQuery="select MATRICULA, NOMBREA, APELLIDOA, TELA, CARRERA from ALUMNO natural join EQUIPO where IDEQ=$idequipo and IDE=$idevento order by APELLIDOA asc";
	   $result=mysql_query($myQuery,$link); 
	  // echo $myQuery;
	   if (!$result){
          die('Consulta no válida: ' . mysql_error());
       }
?> 
<TABLE width="887" BORDER=1 CELLPADDING=1 CELLSPACING=1 align="center"> 
      <TR><TD width="107" class="Estilo4">Matricula</TD>
      <TD width="243"><span class="Estilo4">Apellidos</span></TD>
	  <TD width="226"><span class="Estilo4">Nombres</span></TD>
	  <TD width="152"><span class="Estilo4">&nbsp;Tel&eacute;fono&nbsp;</span></TD>
	  <TD width="131"><span class="Estilo4">&nbsp;Carrera&nbsp;</span></TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["MATRICULA"],$row["APELLIDOA"],$row["NOMBREA"],$row["TELA"],$row["CARRERA"]); 
   } 
   mysql_close($link); 
?> 
</table>  
</p> 
<div align="center">
  <h3 class="Estilo1"><a href="principal.php" target="_parent">Regresar</a></h3>
</div>
</body>
</html>













