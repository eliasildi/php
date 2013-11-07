<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n -- Ejercicio 42</title>
</head>
<body>
	<p>Lectura de n&uacute;meros de fichero y c&aacute;lculo de
		estad&iacute;sticas</p>
	<br />
	<?php

	if ( isset($_POST['boton']) ) {
		$fp = @fopen($_POST["fichero"], "r") or
		die ('No existe el archivo "'.$_POST["fichero"].'"<br />');
		//$i = 0;
		$cant = 0;
		$suma = 0;
		$min = 99999;
		$max = -99999;
		while (! feof($fp) ) {
		$numero = (int)fgets($fp, 1024);
		$cant++;
		$suma += $numero;
		if ($numero > $max)
			$max = $numero;
		if ( $numero < $min )
			$min = $numero;
		//$i++;
    }
    $media = $suma / $cant;
    fclose($fp);
	}
	?>

	<FORM ACTION="ej42-leer_numeros_fichero_y_estadisticas.php" METHOD=POST>
		<TABLE>
			<TR>
				<TD>nombre del fichero : <INPUT NAME="fichero" MAXLENGTH="35"
					SIZE="35" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["fichero"])) echo $_POST["fichero"]; else echo ""; ?>" /><br />
					<br />
				</TD>
				<TD align="right">Cant Elementos : <INPUT NAME="cant" size="8"
					MAXLENGTH="8" TYPE="TEXT"
					VALUE="<?php if (isset($cant)) printf("%d", $cant); else echo ""; ?>"
					disabled /><br /> Suma Elementos : <INPUT NAME="suma" size="8"
					MAXLENGTH="8" TYPE="TEXT"
					VALUE="<?php if (isset($suma)) printf("%.2f", $suma); else echo ""; ?>"
					disabled /><br /> Media Elementos : <INPUT NAME="media" size="8"
					MAXLENGTH="8" TYPE="TEXT"
					VALUE="<?php if (isset($media)) printf("%.2f", $media); else echo ""; ?>"
					disabled /><br /> Valor M&iacute;nimo : <INPUT NAME="min" size="8"
					MAXLENGTH="8" TYPE="TEXT"
					VALUE="<?php if (isset($min)) printf("%.2f", $min); else echo ""; ?>"
					disabled /><br /> Valor M&aacute;ximo : <INPUT NAME="max" size="8"
					MAXLENGTH="8" TYPE="TEXT"
					VALUE="<?php if (isset($max)) printf("%.2f", $max); else echo ""; ?>"
					disabled />
				</TD>
			</TR>
			<TR align="center">
				<TD colspan="2"><INPUT TYPE="SUBMIT" NAME="boton" VALUE="Calcular"><br />
				</TD>
			</TR>
		</TABLE>
	</FORM>
</body>
</html>
