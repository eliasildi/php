<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicios de PHP</title>
</head>
<body>
	<h2>Generacio&acute;n de enlaces</h2>
	<br />

	<?php

	// en el fichero de datos cada línea es de la siguiente forma:
	//
	// nombre de la empresa;nombre dirección web --sin http://
	//

	$fp = fopen("ej44-datos_empresas.txt", "r");
	while ( ($filaleida = fgets($fp,1024) ) ){
	$empresa = strtok($filaleida, ";\n");
	$direccion = strtok(";\n");
	?>
	<a href="<?php echo "http://".$direccion; ?>" target="_blank"><?php echo "Visite ... ".$empresa; ?>
	</a>
	<br />
	<br />
	<?php	
}
fclose($fp);
?>
</body>
</html>
