<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Codigo ASCII tabulado</title>
</head>
<body>
	<h3 align="center">Tabla de los código ASCII del 32 al 127</h3>

	<!--los códigos ascii del 32 hasta el 126-->

	<TABLE align="center" border="1">
		<tr>
			<td align="center" width="30"></td>
			<td align="center" width="30">0</td>
			<td align="center" width="30">1</td>
			<td align="center" width="30">2</td>
			<td align="center" width="30">3</td>
			<td align="center" width="30">4</td>
			<td align="center" width="30">5</td>
			<td align="center" width="30">6</td>
			<td align="center" width="30">7</td>
			<td align="center" width="30">8</td>
			<td align="center" width="30">9</td>

			<?php

			for ($i=32; $i <= 126; $i++) {
				if (($i % 10) == 2) {?>
		</tr>
		<tr>
			<td align="center" width="30"><?php echo $i; ?></td>
			<?php
	            }
			?>
			<td align="center" width="30"><?php echo chr($i); ?></td>
			<?php
        }
?>
		</tr>
	</TABLE>
</body>
</html>
