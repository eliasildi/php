<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Desglose del tiempo dado en segundos</p>
	<?php

	if ( isset($_POST['boton']) ) { // procesa el formulario
		$nro_seg = (int)$_POST["segundos"];
		printf ("Los %d segundos se desglosan as&iacute;:<br /><br />", $nro_seg);
		if ($nro_seg <= 0)
			die("Debe introducir un número mayor que 0");
		$factor_conversion["mes"] = 2592000;  // 1 mes de 30 días
		$factor_conversion["semana"] = 604800; // 1 semana
		$factor_conversion["dia"] = 86400; // 1 día
		$factor_conversion["hora"] = 3600; // 1 hora
		$factor_conversion["minuto"] = 60; // 1 minuto
		$factor_conversion["segundo"] = 1; // 1 segundo

		// en el foreach de abajo utilizamos un nuevo operador ?:

		// expresion_a_evaluar ? valor_devolver_si_true : valor_a_devolver_si_false;

		foreach ($factor_conversion as $unidad => $numero) {
			$cociente = (int)($nro_seg / (int)$numero);
			if ($cociente != 0) {
			echo $cociente;
			echo " ".$unidad.( $cociente == 1 ? " " : ( $unidad == "mes" ? "es" : "s"));
			$nro_seg = $nro_seg - ($cociente * (int)$numero);
			if ($nro_seg != 0)
				echo "; ";
		}
		}
	}
	else {   // cerramos el código de php para mostrar el formulario
?>
	<form ACTION="ej46-desglose_segundos.php" METHOD=POST>
		Introduzca el n&uacute;mero de segundos: <INPUT NAME="segundos"
			size="10" MAXLENGTH="10" TYPE="TEXT" VALUE="0" /><br /> <INPUT
			NAME="boton" TYPE="SUBMIT" VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
