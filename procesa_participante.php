 <?php 
 
 if(!empty($_POST['tf_nombre'])){      
	$nombre = $_POST['tf_nombre'];
	$apellido = $_POST['tf_apellido'];
	$telefono = $_POST['tf_numero'];
	$idevento = $_POST['s_evento'];
	
	$nombre = strtoupper($nombre);
	$apellido = strtoupper($apellido);
	$telefono = strtoupper($telefono);
	$idevento = (int) $idevento;

   include("conexion.php"); 
   $link=Conecta_DB(); 
   $SQL= "insert into RESPONSABLE(NOMBRER, APELLIDOR, TELR, IDE) values('$nombre','$apellido','$telefono',$idevento);";
   $rs =mysql_query($SQL,$link); 
   if (!$rs){
       die('Inserción no válida: ' . mysql_error());
   }
   mysql_free_result($result); 
   mysql_close($link); 
 }
   header("Location:alta_participante.php"); 
?>

