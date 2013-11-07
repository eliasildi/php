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
		$nifalm = strtoupper( $_POST["nie"] );
		if ( strlen( $nifalm ) == 9 ) {
			if ( ($nifalm[0] == 'X') OR ($nifalm[0] == 'Y') OR ($nifalm[0] == 'Z') ) {
				switch ($nifalm[0]) {
					case "X":
						$numero = (int)substr($nifalm, 1, 7);
						break;
					case "Y":
						$numero = (int)("1".substr($nifalm, 1, 7));
						break;
					case "Z":
						$numero = (int)("2".substr($nifalm, 1, 7));
						break;
				}
				$resto = (int)($numero % 23);
				if ( $nifalm[8] == $letranif[$resto] )
					print "El NIE $nifalm es correcto. <br/>";
				else
					print "El NIE $nifalm NO es correcto.<br/>";
			}
			else
				print "Error...el nie debe comenzar por X, Y ó Z<br />";
		}
		else
			print "Error...el nie no es de tamaño adecuado <br />";
	}
	else
{ ?>
	<form ACTION="ej53-comprobar_nie.php" METHOD=POST>
		Introduzca el NIE: <INPUT NAME="nie" size="9" MAXLENGTH="9"
			TYPE="TEXT" VALUE="" /><br /> <input type="hidden" name="enviado"
			value="1" /><br /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
