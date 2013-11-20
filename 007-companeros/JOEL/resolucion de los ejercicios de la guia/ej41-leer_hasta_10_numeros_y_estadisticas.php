<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n -- Ejercicio 41</title>
</head>
<body>
	<p>Lectura de 10 n&uacute;meros y c&aacute;lculo de estad&iacute;sticas</p>
	<br />
	<?php

	if ( isset($_POST['boton']) ) {
	$i = 0;
	$cant = 0;
	$suma = 0;
	$min = 99999;
	$max = -99999;
	while ($i < 10) {
		$valor_string = trim($_POST["n".(string)$i]);
		if ($valor_string !== "") {
			$cant++;
			$numero = (int)$valor_string;
			$suma += $numero;
			if ($numero > $max)
				$max = $numero;
			if ( $numero < $min )
				$min = $numero;
		}
		$i++;
	}
	$media = $suma / $cant;
}
?>

	<FORM ACTION="ej41-leer_hasta_10_numeros_y_estadisticas.php"
		METHOD=POST>
		<TABLE>
			<TR>
				<TD>num 01 : <INPUT NAME="n0" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n0"])) echo $_POST["n0"] ; else echo ""; ?>" /><br />
					num 02 : <INPUT NAME="n1" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n1"])) echo $_POST["n1"] ; else echo ""; ?>" /><br />
					num 03 : <INPUT NAME="n2" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n2"])) echo $_POST["n2"] ; else echo ""; ?>" /><br />
					num 04 : <INPUT NAME="n3" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n3"])) echo $_POST["n3"] ; else echo ""; ?>" /><br />
					num 05 : <INPUT NAME="n4" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n4"])) echo $_POST["n4"] ; else echo ""; ?>" /><br />
					num 06 : <INPUT NAME="n5" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n5"])) echo $_POST["n5"] ; else echo ""; ?>" /><br />
					num 07 : <INPUT NAME="n6" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n6"])) echo $_POST["n6"] ; else echo ""; ?>" /><br />
					num 08 : <INPUT NAME="n7" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n7"])) echo $_POST["n7"] ; else echo ""; ?>" /><br />
					num 09 : <INPUT NAME="n8" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n8"])) echo $_POST["n8"] ; else echo ""; ?>" /><br />
					num 10 : <INPUT NAME="n9" MAXLENGTH="6" SIZE="6" TYPE="TEXT"
					VALUE="<?php if (isset($_POST["n9"])) echo $_POST["n9"] ; else echo ""; ?>" /><br />
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
