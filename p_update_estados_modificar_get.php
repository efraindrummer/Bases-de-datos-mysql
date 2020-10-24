<?php 

 		    $ide = $_POST["tf_iden"];
		    $nom = $_POST["tf_nomb"];
			$iden = $_POST["hiddenField"];
			echo "El id es=".$ide;
			echo "El nombre es=".$nom;
			$num = (int) $iden;
			include("conexion.php");
			$str = strtoupper($nom);
			echo "En alta es=".$str;
			echo "El integer es=".$num;
			$link=Conecta_DB(); 
 		    $SQL= "update estado set nombree='$str' where ide=$num";
  			$rs =mysql_query($SQL,$link); 
   			if (!$rs){
       			die('Borrado no válido: ' . mysql_error());
  			 }
  			 mysql_close($link);
	         header("Location:borrado_estados_get.php"); 
?>
