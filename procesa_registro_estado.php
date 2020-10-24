<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Alta_estado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>Usted ha registrado el estado de <?php        
	$nombre = $_GET['tf_nombree'];
	$str = strtoupper($nombre);
	echo $str;
?>.</p>
 
</body>
</html>
