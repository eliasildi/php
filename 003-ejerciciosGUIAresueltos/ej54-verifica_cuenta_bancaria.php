<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Verificar si una cuenta bancaria es correcta</p>
	<?php

	if ( isset($_POST['enviado']) )  {
		if ( (strlen($_POST["entidad"] == 4)) AND
				(strlen($_POST["oficina"] == 4)) AND
				(strlen($_POST["dc"] == 2)) AND
				(strlen($_POST["cuenta"] == 10)) ) {
			$sumadig1 = 0;
			$entidad = $_POST["entidad"];
			$oficina = $_POST["oficina"];
			$dc = $_POST["dc"];

			$sumadig1 = $sumadig1 + $entidad[0] * 4;
			$sumadig1 = $sumadig1 + $entidad[1] * 8;
			$sumadig1 = $sumadig1 + $entidad[2] * 5;
			$sumadig1 = $sumadig1 + $entidad[3] * 10;

			$sumadig1 = $sumadig1 + $oficina[0] * 9;
			$sumadig1 = $sumadig1 + $oficina[1] * 7;
			$sumadig1 = $sumadig1 + $oficina[2] * 3;
			$sumadig1 = $sumadig1 + $oficina[3] * 6;

			$sumadig1 = (int)($sumadig1 % 11);

			$digito1 = 11 - $sumadig1;
			if ( $digito1 == 10 )
				$digito1 = 1;

			if ( $digito1 == (int)$dc[0])   // ($digito1 === $dc[0])
			{
				$cuenta = $_POST["cuenta"];
				$sumadig2 = 0;
				$sumadig2 = $sumadig2 + $cuenta[0] * 1;
				$sumadig2 = $sumadig2 + $cuenta[1] * 2;
				$sumadig2 = $sumadig2 + $cuenta[2] * 4;
				$sumadig2 = $sumadig2 + $cuenta[3] * 8;
				$sumadig2 = $sumadig2 + $cuenta[4] * 5;
				$sumadig2 = $sumadig2 + $cuenta[5] * 10;
				$sumadig2 = $sumadig2 + $cuenta[6] * 9;
				$sumadig2 = $sumadig2 + $cuenta[7] * 7;
				$sumadig2 = $sumadig2 + $cuenta[8] * 3;
				$sumadig2 = $sumadig2 + $cuenta[9] * 6;
					
				$sumadig2 = (int)($sumadig2 % 11);
				$digito2 = 11 - $sumadig2;
				if ( $digito2 == 10 )
					$digito2 = 1;
				if ( $digito2 == (int)$dc[1] )
					print "OK... La cuenta de banco es correcta<br />";
				else
					print "Error...Segundo digito de control es err&oacute;neo<br />";
			}
			else
				print "Error...Primer digito de control es err&oacute;neo<br />";
		}
		else
			print "Error...La longitud de los campos no es la adecuada<br />";
	}
	else
{ ?>
	<FORM ACTION="ej54-verifica_cuenta_bancaria.php" METHOD=POST>
		Entidad: 	<INPUT NAME="entidad" size="4" MAXLENGTH="4" TYPE="TEXT" VALUE="" />
		Oficina:	<INPUT NAME="oficina" size="4" MAXLENGTH="4" TYPE="TEXT" VALUE="" />
		DC: 		<INPUT NAME="dc" size="2" MAXLENGTH="2" TYPE="TEXT" VALUE="" />
		Cuenta:		<INPUT NAME="cuenta" size="10" MAXLENGTH="10" TYPE="TEXT" VALUE="" />
		<br /> <br />
		<input type="hidden" name="enviado" value="1" /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar">
	</FORM>
	<?php	
}
?>
</body>
</html>
