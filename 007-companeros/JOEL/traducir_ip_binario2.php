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

				$tabla=array(128,64,32,16,8,4,2,1); //usar para pasar de Decimal a Binario y biceversa.
				$almacen1=array(); // creamos un almacen para cada casilla.
				$almacen2=array(); // creamos un almacen para cada casilla.
				$almacen3=array(); // creamos un almacen para cada casilla.
				$almacen4=array(); // creamos un almacen para cada casilla.
				$totalarray=count($tabla)-1;  //total posiciones del array
				$i=0; //posiciones del array
				$valorip=$_POST["ippos1"]; //valor del momento en el cuadro
				
				//Conversion de Decimal a binario:
				
				while ($i <= $totalarray) { // si $i es menor o igual que el total de posiciones del array ENTRA.

					
						if ($valorip >= $tabla[$i]) { //si el valor del momento en el cuadro es mayor o igual que $tabla[$i]
								$almacen1[$i]=1; //se escribe 1
								$valorip=$valorip-$tabla[$i]; //y valor del campo se le resta el valor del array en la posicion de $i.
								$i++;	
									
								
						}
						
						elseif ($valorip == 0) { //si no se cumple la condicion anterior y el valor del campo es 0
								$almacen1[$i]=0; //se escribe 0
								$i++; //se incrementa $i para que se salga del bucle.
								 
																		
						}
						
						
						else { // si tampoco se cumplen las 2 condiciones anteriores, el campo es menor que $tabla, entonces
								 $almacen1[$i]=0; //se escribe un 0
								 $i++; // y se incrementa $i para comparar el nuevo $valorip con el del siguente valor del array 
								 
						}
						
						
						
				}
				
				
				
				
				$i=0; //posiciones del array
				$valorip=$_POST["ippos2"]; //valor del momento en el cuadro
				
				
				while ($i <= $totalarray) { // si $i es menor o igual que el total de posiciones del array ENTRA.

					
						if ($valorip >= $tabla[$i]) { //si el valor del momento en el cuadro es mayor o igual que $tabla[$i]
								$almacen2[$i]=1; //se escribe 1
								$valorip=$valorip-$tabla[$i]; //y valor del campo se le resta el valor del array en la posicion de $i.
								$i++; // incrementamos
									
								
						}
						
						elseif ($valorip == 0) { //si no se cumple la condicion anterior y el valor del campo es 0
								$almacen2[$i]=0;//se escribe 0
								$i++;//se incrementa $i para que se salga del bucle.
								 
																		
						}
						
						
						else { // si tampoco se cumplen las 2 condiciones anteriores, el campo es menor que $tabla, entonces
								 $almacen2[$i]=0; //se escribe un 0
								 $i++;  // y se incrementa $i para comparar el nuevo $valorip con el del siguente valor del array 
								 
						}
						
						
						
				}
				
				
				
				$i=0; //posiciones del array
				$valorip=$_POST["ippos3"]; //valor del momento en el cuadro
				
				
				while ($i <= $totalarray) { // si $i es menor o igual que el total de posiciones del array ENTRA.

					
						if ($valorip >= $tabla[$i]) { //si el valor del momento en el cuadro es mayor o igual que $tabla[$i]
								$almacen3[$i]=1; //se escribe 1
								$valorip=$valorip-$tabla[$i]; //y valor del campo se le resta el valor del array en la posicion de $i.
								$i++;	
									
								
						}
						
						elseif ($valorip == 0) { //si no se cumple la condicion anterior y el valor del campo es 0
								$almacen3[$i]=0; //se escribe 0 
								$i++; //se incrementa $i para que se salga del bucle.
								
																		
						}
						
						
						else { // si tampoco se cumplen las 2 condiciones anteriores, el campo es menor que $tabla, entonces
								 $almacen3[$i]=0; //se escribe un 0
								 $i++; // y se incrementa $i para comparar el nuevo $valorip con el del siguente valor del array 
								 
						}
						
						
						
				}
				
				
				$i=0; //posiciones del array
				$valorip=$_POST["ippos4"]; //valor del momento en el cuadro
				
				
			while ($i <= $totalarray) { // si $i es menor o igual que el total de posiciones del array ENTRA.

					
						if ($valorip >= $tabla[$i]) { //si el valor del momento en el cuadro es mayor o igual que $tabla[$i]
								$almacen4[$i]=1; //se escribe 1
								$valorip=$valorip-$tabla[$i]; //y valor del campo se le resta el valor del array en la posicion de $i.
								$i++; //incrementamos 
									
								
						}
						
						elseif ($valorip == 0) { //si no se cumple la condicion anterior y el valor del campo es 0
								$almacen4[$i]=0; //se escribe 0
								$i++; //se incrementa $i para que se salga del bucle.
								
																		
						}
						
						
						else { // si tampoco se cumplen las 2 condiciones anteriores, el campo es menor que $tabla, entonces
								 $almacen4[$i]=0; //se escribe un 0
								 $i++; // y se incrementa $i para comparar el nuevo $valorip con el del siguente valor del array)
								 
						}
	    		}
	    		
	    		
	    		// La conversion de Binario a Decimal aqui debajo.
	    		
	    		
	    		
		}
		
		
		if (isset($_POST["btraducir"])) {
			$tabla=array(1,2,4,8,16,32,64,128);
			$almacenbi1=0; // creamos un almacen para cada casilla.
			$almacenbi2=0; // creamos un almacen para cada casilla.
			$almacenbi3=0; // creamos un almacen para cada casilla.
			$almacenbi4=0; // creamos un almacen para cada casilla.
			$i=0; //posiciones del array
			$valorbi=$_POST["bipos1"]; //array de caracteres
			$contarcaracteres=strlen($valorbi);
			$entero=(int)(($contarcaracteres)-1);
			
		
			while ($i <= $entero ) {
		
				if ($valorbi[$i] == 1) {
		
					$almacenbi1=$almacenbi1+$tabla[$i];
					$i++;
						
				}
					
				elseif  ($valorbi[$i] == 0) {
						
					$i++;
						
				}
		
				else {
						
					break;
		
				}
			}
				
			$i=0;
			$valorbi2=$_POST["bipos2"]; //array de caracteres
			$contarcaracteres=strlen($valorbi2);
			$entero=(int)(($contarcaracteres)-1);
			while ($i <= $entero ) {
					
				if ($valorbi2[$i] == 1) {
						
					$almacenbi2=$almacenbi2+$tabla[$i];
					$i++;
		
				}
					
				elseif  ($valorbi2[$i] == 0) {
		
					$i++;
		
				}
					
				else {
		
					break;
						
				}
			}
				
				
			$i=0;
			$valorbi3=$_POST["bipos3"]; //array de caracteres
			$contarcaracteres=strlen($valorbi3);
			$entero=(int)(($contarcaracteres)-1);
			while ($i <= $entero ) {
					
				if ($valorbi3[$i] == 1) {
		
					$almacenbi3=$almacenbi3+$tabla[$i];
					$i++;
						
				}
					
				elseif  ($valorbi3[$i] == 0) {
						
					$i++;
						
				}
					
				else {
						
					break;
		
				}
			}
				
				
				
			$i=0;
			$valorbi4=$_POST["bipos4"]; //array de caracteres
			$contarcaracteres=strlen($valorbi4);
			$entero=(int)(($contarcaracteres)-1);
			while ($i <= $entero ) {
					
				if ($valorbi4[$i] == 1) {
						
					$almacenbi4=$almacenbi4+$tabla[$i];
					$i++;
		
				}
					
				elseif  ($valorbi4[$i] == 0) {
		
					$i++;
		
				}
					
				else {
		
					break;
						
				}
			}
		
		}
		

		
		
		

		
		?>
		
		<FORM ACTION="traducir_ip_binario2.php" METHOD=POST>
		
		<table border="1" width="73%" cellspacing="0" cellpadding="0" align="center">
		
		<tr align="center">
		<td>&nbsp IP en Decimal &nbsp</td>
		<td><INPUT size="3" NAME="ippos1" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["ippos1"] == ""))  { echo $almacenbi1; } elseif (isset($_POST["btraducir"]) && ($_POST["ippos1"] != "")) { echo $_POST["ippos1"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos2" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["ippos2"] == ""))  { echo $almacenbi2; } elseif (isset($_POST["btraducir"]) && ($_POST["ippos2"] != "")) { echo $_POST["ippos2"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos3" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["ippos3"] == ""))  { echo $almacenbi3; } elseif (isset($_POST["btraducir"]) && ($_POST["ippos3"] != "")) { echo $_POST["ippos3"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos4" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["ippos4"] == ""))  { echo $almacenbi4; } elseif (isset($_POST["btraducir"]) && ($_POST["ippos4"] != "")) { echo $_POST["ippos4"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; } ?>"></td>
		
		</tr>
		
		<tr align="center">
		<td>&nbsp IP en Binario &nbsp</td>
		<td><INPUT size="8" NAME="bipos1" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["bipos1"] == "")) { echo $almacen1[0].$almacen1[1].$almacen1[2].$almacen1[3].$almacen1[4].$almacen1[5].$almacen1[6].$almacen1[7]; } elseif (isset($_POST["btraducir"]) && ($_POST["bipos1"] != "")) { echo $_POST["bipos1"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }  ?>"></td>
		<td><INPUT size="8" NAME="bipos2" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["bipos2"] == "")) { echo $almacen2[0].$almacen2[1].$almacen2[2].$almacen2[3].$almacen2[4].$almacen2[5].$almacen2[6].$almacen2[7]; } elseif (isset($_POST["btraducir"]) && ($_POST["bipos2"] != "")) { echo $_POST["bipos2"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }  ?>"></td>
		<td><INPUT size="8" NAME="bipos3" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["bipos4"] == "")) { echo $almacen3[0].$almacen3[1].$almacen3[2].$almacen3[3].$almacen3[4].$almacen3[5].$almacen3[6].$almacen3[7]; } elseif (isset($_POST["btraducir"]) && ($_POST["bipos3"] != "")) { echo $_POST["bipos3"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }  ?>"></td>
		<td><INPUT size="8" NAME="bipos4" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"]) && ($_POST["bipos4"] == "")) { echo $almacen4[0].$almacen4[1].$almacen4[2].$almacen4[3].$almacen4[4].$almacen4[5].$almacen4[6].$almacen4[7]; } elseif (isset($_POST["btraducir"]) && ($_POST["bipos4"] != "")) { echo $_POST["bipos4"]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }  ?>"></td>
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