<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>C&aacute;lculo del n&uacute;mero m&aacute;gico de un n&uacute;mero</p>
	<?php

	if ( isset($_POST['boton']) ) { // procesa el formulario
	$num_magico = (int)$_POST["numero"];
	while ($num_magico > 9) {
		$aux = $num_magico;
		$sumadigitos = 0;
		while ($aux != 0) {
			$sumadigitos += $aux % 10;
			$aux = (int)($aux / 10);
		}
		$num_magico = $sumadigitos;
	}
}
?>
	<form ACTION="ej51-calcular_numero_magico.php" METHOD=POST>
		Introduzca un n&uacute;mero : <INPUT NAME="numero" size="8"
			MAXLENGTH="8" TYPE="TEXT"
			VALUE="<?php if (isset($_POST["numero"])) echo $_POST["numero"]; else echo ""; ?>" /><br />
		<br /> Su n&uacute;mero m&aacute;gico es : <INPUT NAME="numero"
			size="2" MAXLENGTH="2" TYPE="TEXT"
			VALUE="<?php if (isset($num_magico)) echo $num_magico; else echo ""; ?>"
			disabled="disabled" /><br /> <br /> <INPUT NAME="boton" TYPE="SUBMIT"
			VALUE="Enviar"><br />
	</FORM>

</body>
</html>
