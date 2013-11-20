<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Calcular salario de un trabajador</p>
	<?php

	$horastrabajadas = (float)( $_POST["nrohoras"] );
	$costeporhoras = (float)( $_POST["costeporhora"] );
	$porc_SS = (int)( $_POST["cotizacion"] );
	$Bruto = $horastrabajadas * $costeporhoras;
	$dctoSS = $Bruto * ( $porc_SS / 100.0 );
	if ( $Bruto < 1000 )
		$porc_IRPF = 3;
	elseif (( $Bruto >= 1000 ) and ( $Bruto <= 1499 ))
	$porc_IRPF = 6;
	elseif (( $Bruto >= 1500 ) and ( $Bruto <= 1999 ))
	$porc_IRPF = 9;
	else
		$porc_IRPF = 12;
	$dctoIRPF = $Bruto * ( $porc_IRPF / 100 );
	$Neto = $Bruto - $dctoSS - $dctoIRPF;
	print "Detalle de la N&oacute;mina<br /><br />";
	print "Nombre del trabajador: ". $_POST["nombre"]."<br/><br />";
	print "Desglose de importes <br /><br />";
	printf("El salario bruto es = %.2f <br />",$Bruto);
	printf("El descuento por Seg Social es = %.2f <br />", $dctoSS);
	printf("El porcentaje de IRPF aplicado es = %.2f<br />", $porc_IRPF);
	printf("El descuento por IRPF es = %.2f <br />", $dctoIRPF);
	printf("El salario neto es = %.2f <br />",$Neto);

	?>
</body>
</html>
