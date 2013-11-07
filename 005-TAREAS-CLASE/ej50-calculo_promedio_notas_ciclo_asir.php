<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
<?php

$contenido=$_POST;

function limpiarForm(){
	unset($contenido);
}


if (isset($_POST['boton1'])) {
$boton1 = $_POST['boton1'];
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$n4 = $_POST['nota4'];
$n5 = $_POST['nota5'];
$n6 = $_POST['nota6'];
$n7 = $_POST['nota7'];
$n8 = $_POST['nota8'];
$n9 = $_POST['nota9'];
$n10 = $_POST['nota10'];
$n11 = $_POST['nota11'];
$n12 = $_POST['nota12'];
$n13 = $_POST['nota13'];
$fct = $_POST['nota14'];
$mediaprimero = ($n1+$n2+$n3+$n4+$n5+$n6)/(6);
$mediasegundo = ($n7+$n8+$n9+$n10+$n11+$n12+$n13)/(7);
$sumatodas=$n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13;
//las array no me fueron bien ni los bicles al final opte por muchos if
//$x=array('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13');
//$i=0;
//if ($x[$i] <5) {
//	$titula='NO';
//	$media=0;
//	}
// PROBLEMAS QUE AUN HAY:
// si escribo conv y le doy a calcular, la media no da bien, hay que volver a darle a calcular
// el reset solo borra al principio
//
if (($n1=='CONV') or ($n1=='conv')) {$n1=5;} if (($n2=='CONV') or  ($n2=='conv')) {$n2=5;} if (($n3=='CONV') or  ($n3=='conv')) {$n3=5;}
if (($n4=='CONV') or  ($n4=='conv')) {$n4=5;} if (($n5=='CONV') or  ($n5=='conv')) {$n5=5;} if (($n6=='CONV') or  ($n6=='conv')) {$n6=5;}
if (($n7=='CONV') or  ($n7=='conv')) {$n7=5;} if (($n8=='CONV') or  ($n8=='conv')) {$n8=5;} if (($n9=='CONV') or  ($n9=='conv')) {$n9=5;}
if (($n10=='CONV') or  ($n10=='conv')) {$n10=5;} if (($n11=='CONV') or  ($n11=='conv')) {$n11=5;} if (($n12=='CONV') or  ($n12=='conv')) {$n12=5;}
if (($n13=='CONV') or ($n13=='conv')) {$n13=5;}


if (($fct == 'APTO') or ($fct == 'apto')) {
	$media = ($mediaprimero+$mediasegundo)/2;
	$titula='SI';
	}

if (($fct=='NO APTO') or ($fct=='no apto')) {
	$media=0;
	$titula='NO';
	}

if (($mediaprimero<5) OR ($mediasegundo<5)) {
	$media=0;
	$titula='NO';
	}

}
?>
	<FORM ACTION="ej50-calculo_promedio_notas_ciclo_asir.php" METHOD=POST>
		<table border="1">
			<tr>
				<td>Nombre del Alumno</td>
				<td colspan="2"><INPUT NAME="alumno" size="50" MAXLENGTH="50" TYPE="TEXT" VALUE="" /><br />
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
					<INPUT size="3" NAME="nota1" TYPE="TEXT"   VALUE="<?php if (isset($n1)) echo $n1; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota2" TYPE="TEXT"   VALUE="<?php if (isset($n2)) echo $n2; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota3" TYPE="TEXT"   VALUE="<?php if (isset($n3)) echo $n3; else echo 0; ?>" /><br />
					<INPUT size="3"	NAME="nota4" TYPE="TEXT"   VALUE="<?php if (isset($n4)) echo $n4; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota5" TYPE="TEXT"   VALUE="<?php if (isset($n5)) echo $n5; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota6" TYPE="TEXT"   VALUE="<?php if (isset($n6)) echo $n6; else echo 0; ?>" /><br />
					<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
				</td>
				<td align="center"><br /> <br /> <br /> <br /> <br /> <br /> <br />
					<INPUT size="3" NAME="nota7" TYPE="TEXT"   VALUE="<?php if (isset($n7)) echo $n7; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota8" TYPE="TEXT"   VALUE="<?php if (isset($n8)) echo $n8; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota9" TYPE="TEXT"   VALUE="<?php if (isset($n9)) echo $n9; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota10" TYPE="TEXT"   VALUE="<?php if (isset($n10)) echo $n10; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota11" TYPE="TEXT"   VALUE="<?php if (isset($n11)) echo $n11; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota12" TYPE="TEXT"   VALUE="<?php if (isset($n12)) echo $n12; else echo 0; ?>" /><br />
					<INPUT size="3" NAME="nota13" TYPE="TEXT"   VALUE="<?php if (isset($n13)) echo $n13; else echo 0; ?>" /><br />
					<INPUT size="12; ?>" NAME="nota14" TYPE="TEXT" VALUE="<?php if (isset($fct)) echo $fct; else echo 'APTO/NO APTO'; ?>" /><br />
				</td>
			</tr>
			<tr>
				<td>Promedio del curso:</td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE="<?php if (isset($boton1)) echo $mediaprimero;?>" disabled="disabled" />
				</td>
				<td align="center"><INPUT size="5" TYPE="TEXT" VALUE="<?php if (isset($boton1)) echo $mediasegundo;?>" disabled="disabled" />
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Titula ?
					<INPUT size="2" TYPE="TEXT"	VALUE="<?php if (isset($boton1)) echo $titula;?>" disabled="" /><br /> Nota Final Obtenida :
					<INPUT size="5" TYPE="TEXT" VALUE="<?php if (isset($boton1)) echo $media;?>" disabled="" />
				</td>
			</tr>
			<tr align="center">
				<td colspan="3">
					<INPUT NAME="boton1" TYPE="SUBMIT" VALUE="Calcular">
		<! NO BORRA <INPUT NAME="boton2" TYPE="RESET" VALUE="Borrar">
					<input type="submit" name="Limpiar" id="Limpiar" value="Borrar"/>
					
					
					<br />
				</td>
			</tr>
		</table>
	</FORM>
</body>
</html>