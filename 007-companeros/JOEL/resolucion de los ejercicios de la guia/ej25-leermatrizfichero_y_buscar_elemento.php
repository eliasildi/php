<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Lectura de una matriz de un fichero y b&uacute;squeda de un elemento
		en ella</p>
	<br />

	<?php	

	if ( isset($_POST['enviado']) )
	{

		// los datos de la matriz se lee de un fichero
		// la matriz en este fichero se ponen por filas
		// es decir que en el fichero hay tantas filas como las que hay en la matriz

		$nrofilas = 0;
		$fp = fopen("ej25-datos_matriz.txt", "r");
		while ( ($filaleida = fgets($fp,50) ) )
		{
			$nrocolumnas = 0;

			$valorleido = strtok($filaleida, " \n");
			while ($valorleido !== false)
			{
				$matriz[$nrofilas][$nrocolumnas] = (int)$valorleido;
				$nrocolumnas++;
				$valorleido = strtok(" \n");
			}
			$nrofilas++;
		}
		fclose($fp);

		if ( $nrofilas == 0 )
			print "No ha introducido datos en el fichero<br />";
		else
		{
			// búsqueda de la primera aparicion de un elemento
			// si quisieramos buscar todas las apariciones del elemento
			// no haría falta usar la variables $encontrado

			$valorbuscar = (int)( $_POST["numero"] );

			for ($i=0; $i < $nrofilas ; $i++)
			{
				for ($j=0;  $j < $nrocolumnas; $j++)
				{
					if ($valorbuscar == $matriz[$i][$j])
					{
						print "Encontrado el n&uacute;mero en posicion ($i,$j) <br />";
						break(2);
					}
				}
			}
			if ( $i == $nrofilas )
				print 'El número no está en la matriz';
		}
	}
	else
	{
		?>
	<!-- aquí va el formulario -->

	<FORM ACTION="ej25-leermatrizfichero_y_buscar_elemento.php" METHOD=POST>
		Introduzca un n&uacute;mero: <INPUT NAME="numero" MAXLENGTH="9"
			TYPE="TEXT" VALUE="" /><br /> <input type="hidden" name="enviado"
			value="1" /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
