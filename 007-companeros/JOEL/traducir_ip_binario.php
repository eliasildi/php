<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
		<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>Programaci&oacute;n en PHP</title>
		</head>
		<body>

		<center><h4><b>Ejercicio (IP / BINARIO) realizado por Joel Chávez Perdomo</b></h4></center><br />
		
		<?php 
		
		if (isset($_POST["btraducir"])) {

				$tabla=array(128,64,32,16,8,4,2,1);
				$totalarray=count($tabla)-1;  //total array
				$i=0; //posiciones del array
				$j=1;
				$valorip=$_POST["ippos".$j]; //valor del momento en el cuadro
				
				
				while ($i <= $totalarray) { // si $i es menor o igual que el total de posiciones del array ENTRA.

					
						if ($valorip >= $tabla[$i]) { //si el valor del momento en el cuadro es mayor o igual que $tabla[$i]
								echo "1"; //se escribe 1
								$valorip=$valorip-$tabla[$i]; //y valor del campo se le resta el valor del array en la posicion de $i.
								$i++;	
									
								
						}
						
						elseif ($valorip == 0) { //si no se cumple la condicion anterior y el valor del campo es 0
								echo "0"; //se escribe 0
								 $i++;//se incrementa $i para que se salga del bucle.
								 //¿¿¿¿se incrementa $j para que pase al siguiente cuadro a convertir a binario.?????
																		
						}
						
						
						else { // si tampoco se cumplen las 2 condiciones anteriores, el campo es menor que $tabla[0], entonces
								 echo "0"; //se escribe un 0
								 $i++;
								
								  // y se incrementa $i para comparar el nuevo $valorip con el del siguente valor del array ($tabla[1])
								 
						}
						
						
						
						
				}
				

					
				
		}

		
		?>
		
		<FORM ACTION="traducir_ip_binario.php" METHOD=POST>
		
		<table border="1" width="73%" cellspacing="0" cellpadding="0" align="center">
		
		<tr align="center">
		<td>&nbsp IP en Decimal &nbsp</td>
		<td><INPUT size="3" NAME="ippos1" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $_POST["ippos1"]; } else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos2" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $_POST["ippos2"]; } else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos3" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $_POST["ippos3"]; } else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos4" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $_POST["ippos4"]; } else { echo ""; } ?>"></td>
		
		</tr>
		
		<tr align="center">
		<td>&nbsp IP en Binario &nbsp</td>
		<td><INPUT size="8" NAME="bipos1" MAXLENGTH="8" TYPE="TEXT" VALUE=""></td>
		<td><INPUT size="8" NAME="bipos2" MAXLENGTH="8" TYPE="TEXT" VALUE=""></td>
		<td><INPUT size="8" NAME="bipos3" MAXLENGTH="8" TYPE="TEXT" VALUE=""></td>
		<td><INPUT size="8" NAME="bipos4" MAXLENGTH="8" TYPE="TEXT" VALUE=""></td>
		</tr>
		
		<tr>
			<td colspan="5" rowspan="4" align="center">
			<INPUT NAME="btraducir" TYPE="SUBMIT" VALUE="TRADUCIR">&nbsp&nbsp&nbsp&nbsp&nbsp
			<INPUT NAME="bborrar" TYPE="RESET" VALUE="BORRAR">
			</td>
		</tr>
		
		</table>
		</FORM>
		</body>
		</html>