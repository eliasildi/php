<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Lectura y comprobaci&oacute;n de NIF</p>
	<?php

	// array con los valores de las letras del NIF

	$letranif="TRWAGMYFPDXBNJZSQVHLCKE"; // una manera más sencilla

	if ( isset($_POST["enviado"]) )  {
		$nifalm = strtoupper( $_POST["nif"] );
		if ( strlen( $nifalm ) == 9 ) {
		$numero = substr($nifalm, 0, 8);
		$resto = (int)($numero % 23);
		if ( $nifalm[8] == $letranif[$resto] )
			print "El NIF $nifalm es correcto. <br/>";
		else
			print "El NIF $nifalm NO es correcto.<br/>";
	}
	else
		print "Error...el nif no es de tamaño adecuado <br />";
	}
	else
{ ?>
	<form ACTION="ej52-comprobar_nif.php" METHOD=POST>
		Introduzca el NIF: <INPUT NAME="nif" MAXLENGTH="9" SIZE="9"
			TYPE="TEXT" VALUE="" /><br /> <input type="hidden" name="enviado"
			value="1" /><br /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
