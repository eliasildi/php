<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
<?php

$par=$_POST["Planificación y Administración de Redes"];
$iso=$_POST["Implantación de Sistemas Operativos"];
$fh=$_POST["Fundamentos de Hardware"];
$bd=$_POST["Gestión de Bases de Datos"];
$lnd=$_POST["Lenguajes de Marca y Sistemas de Gestión de Información"];
$fol=$_POST["Formación y Orientación Laboral"];
$aso=$_POST["Administración de Sistemas Operativos"];
$asgbd=$_POST["Administraci&oacute;n de Sistemas Gestores de Bases de Datos"];
$iaw=$_POST["Implantaci&oacute;n de Aplicaciones Web"];
$sri=$_POST["Servicios de Red e Internet"];
$sad=$_POST["Seguridad y Alta Disponibilidad"];
$eie=$_POST["Empresa e Iniciativa Emprendedora"];
$pasr=$_POST["Proyecto de Administración de Sistemas Informáticos en Red"];
$fctr=$_POST["Formaci&oacute;n en Centros de Trabajo"];

$fct=$_POST["titula"];


if ($fctr==CONV)
{
	$fctr=5;

if ($pasr==CONV)
{
	$pasr=5;
if ($eie==CONV)
{
	$eie=5;
if ($sad==CONV)
{
	$sad=5;
if ($sri==CONV)
{
	$sri=5;
if ($iaw==CONV)
{
	$iaw=5;
if ($asgbd==CONV)
{
	$asgbd=5;
if ($aso==CONV)
{
	$aso=5;
if ($fol==CONV)
{
	$fol=5;

if ($lnd==CONV)
{
	$lnd=5;
if ($fh==CONV)
{
	$fh=5;
if ($iso==CONV)
{
	$iso=5;
if ($bd==CONV)
{
	$bd=5;
}
if ($par==CONV)
{
	$par=5;
}




if ($bd=>5) and ($par=>5)and ($iso=>5) and($fh=>5)and($lnd=>5)and($fol=>5)
{
$fct=Si;
$prom1=($par+$iso+$fh+$bd+$lnd+$fol)/6;
}
else
{
	$fct=No;
	$prom1=0;
}

if ($aso=>5) and ($asgbd=>5)and ($iaw=>5) and($sri=>5)and($sad=>5)and($eie=>5)and($pasr=>5)and($fctr=>5)
{
$fct=Si;
$prom2=($aso+$asgbd+$iaw+$sri+$sad+$eie+$pasr+$fctr)/8;
}
else
{
	$fct=No;
	$prom2=0;
}

if ($prom1=>5) and ($prom2=>5){
$fct=Si;
$nfo=($prom1+$prom2)/2
}
else
{
	$fct=No;
	$nfo=0;
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
				<td><INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Planificación y Administración de Redes"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Implantación de Sistemas Operativos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Fundamentos de Hardware" disabled="disabled" /><br />
					<INPUT
					size="58" TYPE="TEXT" NAME="" VALUE="Gestión de Bases de Datos"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Lenguajes de Marca y Sistemas de Gestión de Información"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Formación y Orientación Laboral" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Administración de Sistemas Operativos" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME="ade"
					VALUE="Administraci&oacute;n de Sistemas Gestores de Bases de Datos"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT"
					NAME="imw" VALUE="Implantaci&oacute;n de Aplicaciones Web"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Servicios de Red e Internet" disabled="disabled" /><br />
					<INPUT
					size="58" TYPE="TEXT" NAME=""
					VALUE="Seguridad y Alta Disponibilidad" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Empresa e Iniciativa Emprendedora" disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT" NAME=""
					VALUE="Proyecto de Administración de Sistemas Informáticos en Red"
					disabled="disabled" /><br />
					<INPUT size="58" TYPE="TEXT"
					NAME="fct" VALUE="Formaci&oacute;n en Centros de Trabajo"
					disabled="disabled" />
				</td>
				<td align="center">
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE=""
					disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT"
					VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME=""
					TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3"
					NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT
					size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
				</td>
				<td align="center"><br /> <br /> <br /> <br /> <br /> <br /> <br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
					<INPUT size="3" NAME="" TYPE="TEXT" VALUE="" disabled="disabled" /><br />
				</td>
			</tr>
			<tr>
				<td>Promedio del curso:</td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE=""
					disabled="disabled" />
				</td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE=""
					disabled="disabled" />
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Titula ?
				<INPUT size="2" TYPE="TEXT"
					VALUE="" disabled="disabled" /><br /> Nota Final Obtenida :
					<INPUT
					size="5" TYPE="TEXT" VALUE="" disabled="disabled" />
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
