<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicio 04 del examen</title>
</head>
<body>
	<h2 align="center">Hoja de Gastos Bimestrales</h2>
	<?php

	function SV($x1, $x2)
	{
		$suma = $x1 + $x2;
		return $suma;
	}

	?>
	<form ACTION="ej56-ejercicio_4_examen.php" METHOD=POST>
		<TABLE align="center" border="1">
			<tr>
				<th align="center" width="150">Gastos por meses</th>
				<th align="center" width="100">Enero</th>
				<th align="center" width="100">Febrero</th>
				<th align="center" width="100">Total Bimestral</th>
			</tr>
			<tr>
				<th align="center" width="150">Luz</th>
				<td align="center" width="100"><INPUT NAME="f1c1" SIZE="4"
					MAXLENGTH="4" TYPE="TEXT"
					VALUE="<?php if (isset($_POST['f1c1'])) echo $_POST['f1c1']; ?>" />
				</td>
				<td align="center" width="100"><INPUT NAME="f1c2" SIZE="4"
					MAXLENGTH="4" TYPE="TEXT"
					VALUE="<?php if (isset($_POST['f1c2'])) echo $_POST['f1c2']; ?>" />
				</td>
				<td align="center" width="100"><INPUT NAME="tf1" SIZE="5"
					MAXLENGTH="5" TYPE="TEXT"
					VALUE="<?php
						      if ( isset($_POST['f1c1']) and
							   isset($_POST['f1c2']) )
							echo SV($_POST['f1c1'],$_POST['f1c2']); ?>"
					disabled="disabled" /></td>
			</tr>
			<tr>
				<th align="center" width="150">Agua</th>
				<td align="center" width="100"><INPUT NAME="f2c1" SIZE="4"
					MAXLENGTH="4" TYPE="TEXT"
					VALUE="<?php if (isset($_POST['f2c1'])) echo $_POST['f2c1']; ?>" />
				</td>
				<td align="center" width="100"><INPUT NAME="f2c2" SIZE="4"
					MAXLENGTH="4" TYPE="TEXT"
					VALUE="<?php if (isset($_POST['f2c2'])) echo $_POST['f2c2']; ?>" />
				</td>
				<td align="center" width="100"><INPUT NAME="tf2" SIZE="5"
					MAXLENGTH="5" TYPE="TEXT"
					VALUE="<?php
						      if ( isset($_POST['f2c1']) and
							   isset($_POST['f2c2']) )
							echo SV($_POST['f2c1'],$_POST['f2c2']); ?>"
					disabled="disabled" /></td>
			</tr>
			<tr>
				<th align="center" width="150">Total Gastos</th>
				<td align="center" width="100"><INPUT NAME="tc1" SIZE="5"
					MAXLENGTH="5" TYPE="TEXT"
					VALUE="<?php
						      if ( isset($_POST['f1c1']) and
							   isset($_POST['f2c1']) )
							echo SV($_POST['f1c1'],$_POST['f2c1']); ?>"
					disabled="disabled" /></td>
				<td align="center" width="100"><INPUT NAME="tc2" SIZE="5"
					MAXLENGTH="5" TYPE="TEXT"
					VALUE="<?php
						      if ( isset($_POST['f1c2']) and
							   isset($_POST['f2c2']) )
							echo SV($_POST['f1c2'],$_POST['f2c2']); ?>"
					disabled="disabled" /></td>
				<td align="center" width="100"><INPUT NAME="tsf" SIZE="5"
					MAXLENGTH="5" TYPE="TEXT"
					VALUE="<?php
						      if ( isset($_POST['f1c1']) and
							   isset($_POST['f2c1']) and
							   isset($_POST['f1c2']) and
							   isset($_POST['f2c2']) )
							echo SV($_POST['f1c1']+$_POST['f2c1'],$_POST['f1c2']+$_POST['f2c2']); ?>"
					disabled="disabled" /></td>
			</tr>
			<tr>
				<td align="center" colspan="4"><INPUT NAME="boton1" TYPE="SUBMIT"
					VALUE="Calcular"></td>
			</tr>
		</TABLE>
	</FORM>

</body>
</html>
