<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>

<?php 
$i=1;
$almacenarnotas1=0;
$almacenarnotas2=0;

if (isset($_POST["boton1"])) {

	while ($i <= 6) {
		
	$sumanotas1=$_POST["n".$i];
	
		if ($_POST["n".$i] == "CONV") {
			
			
			$conv=5;
			$almacenarnotas1=$almacenarnotas1+$conv;
		}
		

		
	$almacenarnotas1=$almacenarnotas1+$sumanotas1;
	$i++;
	
	while ( ($i > 6) && ($i <= 14) ) {
		
		$sumanotas2=$_POST["n".$i];
		
			if ($_POST["n".$i] == "CONV") {
			
			
			$conv=5;
			$almacenarnotas2=$almacenarnotas2+$conv;
		}
		
			if (($i == "14") && ($_POST["n14"] == "APTO")) {
		
				$numanotas2=5;
}

			if (($i == "14") && ($_POST["n14"] == "NO APTO")) {

				echo "No se puede calcular el promedio es NO APTO en la FCT";
				break;
}


		$almacenarnotas2=$almacenarnotas2+$sumanotas2;
		$i++; 
		
}
		
}
		
}




?>
	<FORM ACTION="ej50-calculo_promedio_notas_ciclo_asir.php" METHOD=POST>
		<table border="1">
			<tr>
				<td>Nombre del Alumno</td>
				<td colspan="2"><INPUT NAME="alumno" size="50" MAXLENGTH="50"
					TYPE="TEXT"
					VALUE="" /><br />
				</td>
			</tr>
			<tr>
				<td>Módulos CFGS ASIR</td>
				<td>Notas 1º Curso</td>
				<td>Notas 2º Curso</td>
			</tr>
			<tr>
				<td><INPUT size="58" TYPE="TEXT" NAME="" VALUE="Planificación y Administración de Redes" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Implantación de Sistemas Operativos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Fundamentos de Hardware" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Gestión de Bases de Datos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Lenguajes de Marca y Sistemas de Gestión de Información" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Formación y Orientación Laboral" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Administración de Sistemas Operativos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="ade" VALUE="Administraci&oacute;n de Sistemas Gestores de Bases de Datos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="imw" VALUE="Implantaci&oacute;n de Aplicaciones Web" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Servicios de Red e Internet" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Seguridad y Alta Disponibilidad" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Empresa e Iniciativa Emprendedora" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="" VALUE="Proyecto de Administración de Sistemas Informáticos en Red" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="fct" VALUE="Formaci&oacute;n en Centros de Trabajo" disabled="disabled" />
				</td>
				<td align="center">
					<INPUT size="3" NAME="n1" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n1"]; }?>" /><br />
					<INPUT size="3" NAME="n2" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n2"]; }?>" /><br />
					<INPUT size="3" NAME="n3" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n3"]; }?>" /><br />
					<INPUT size="3" NAME="n4" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n4"]; }?>" /><br />
					<INPUT size="3" NAME="n5" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n5"]; }?>" /><br />
					<INPUT size="3" NAME="n6" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n6"]; }?>" /><br />
					<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
				</td>
				<td align="center"><br /> <br /> <br /> <br /> <br /> <br /> <br />
					<INPUT size="3" NAME="n7" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n7"]; }?>" /><br />
					<INPUT size="3" NAME="n8" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n8"]; }?>" /><br />
					<INPUT size="3" NAME="n9" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n9"]; }?>" /><br />
					<INPUT size="3" NAME="n10" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n10"]; }?>" /><br />
					<INPUT size="3" NAME="n11" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n11"]; }?>" /><br />
					<INPUT size="3" NAME="n12" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n12"]; }?>" /><br />
					<INPUT size="3" NAME="n13" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n13"]; }?>" /><br />
					<INPUT size="3" NAME="n14" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $_POST["n14"]; }?>" /><br />
				</td>
			</tr>
			<tr>
				<td>Promedio del curso:</td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $almacenarnotas1 / 6; } ?>" disabled="disabled" /></td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE="<?php if (isset($_POST["boton1"])) { echo $almacenarnotas2 / 7; } ?>" disabled="disabled" /></td>
			</tr>
			<tr>
				<td colspan="3" align="center">Titula ?
					<INPUT size="2" NAME="" TYPE="TEXT" 
					VALUE="<?php if ((isset($_POST["boton1"]) && ($_POST["n14"] == "APTO")) OR (($almacenarnotas1 / 6) >= (5)) OR (($almacenarnotas2 / 7) >= (5)))  { echo "Si"; } 
						  		 elseif ((isset($_POST["boton1"]) && ($_POST["n14"] == "NO APTO") OR (($almacenarnotas1 / 6) < (5)) OR (($almacenarnotas2 / 7) < (5))))  { echo "No";}?>" disabled="disabled" /><br /> Nota Final Obtenida :
					<INPUT size="5" TYPE="TEXT" VALUE="" disabled="disabled" />
				</td>
			</tr>
			<tr align="center">
				<td colspan="3"><INPUT NAME="boton1" TYPE="SUBMIT" VALUE="Calcular">
								<INPUT NAME="boton2" TYPE="RESET" VALUE="Borrar"><br />
				</td>
			</tr>
		</table>
	</FORM>

</body>
</html>
