<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Verificar si una frase es palindrome</p>
	<?php

	// en este caso el formulario se incluye en el mismo fichero
	// php. Debemos saber cuando el formulario se debe mostrar
	// y cuando se llama al mismo fichero para procesarlo.
	// en este caso utilizamos una variable oculta por la que
	// preguntaremos si se le ha asignado valor alguno.
	//
	// para eso utilizamos la función isset( variable ) que devuelve TRUE
	// si a la función se le ha asignado algún valor.

	if ( isset($_POST['enviado']) ) { // procesa el formulario
		$frase = $_POST["frase"];

		$i = 0;
		$j = strlen($frase) - 1;
		$palindrome = true;
		while (($j > $i) and ( $palindrome )) {
			if ($frase[$i] == $frase[$j]) {
			$i++;
			$j--;
		}
		elseif ( $frase[$i] == ' ')
		$i++;
		elseif ($frase[$j] == ' ')
		$j--;
		else
			$palindrome = false;
		}
		if ( $palindrome == true )
			print 'La frase ES palindrome<br />';
		else
			print 'La frase NO es palindrome<br />';
	}
	else {   // cerramos el código de php para mostrar el formulario
?>

	<!-- aquí va el formulario -->

	<form ACTION="ej21-frasepalindrome ver3.php" METHOD=POST>
		Introduzca una frase: <INPUT NAME="frase" size="60" MAXLENGTH="60"
			TYPE="TEXT" VALUE="" /><br /> <input type="hidden" name="enviado"
			value="1" /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
