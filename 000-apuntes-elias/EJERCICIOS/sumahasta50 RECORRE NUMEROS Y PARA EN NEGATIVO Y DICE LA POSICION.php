<?php

//Mostrar los numeros del 0 al 50.

$valorinicial=1;
$suma=0;

while ($valorinicial<=50) {
		$suma=$suma+$valorinicial;
		$valorinicial=$valorinicial+1;
}

echo "La suma de los numeros del 1 al 50 es $suma.<br />";


//Calcular factorial de 1 numero (de 4 es 24).

$incre=1;
$calculo=1;

while ($calculo<4) {
		$calculo++;
		$incre=$incre*$calculo;
}

echo "El factorial de 4 es $incre.<br />";


//Serie fibonacci.

$num=15;
$cont1=0;
$cont2=1;
$cont3=0;

while ($cont3<=15) {
	echo "$cont3<br />";
	$cont1=$cont2;
	$cont2=$cont3;
	$cont3=$cont1+$cont2;
}

//que reccorra  los numeros y pare si ve un numero negativo y diga en que posición esta.

$x=array(10,25,14,-37,8,4,13);

$posiciones=count($x)-1;

$i=0;

while ($i<=$posiciones) {
	
	if ($x[$i]<=0){
		echo "El numero negativo de la posicion: $i es el numero $x[$i].<br />";
		break;
		}
	
			else {
				$i++;
			}
			
			
			
			
			
			
			
			if ($i==$posiciones) {
				echo "No hay numeros negativos.<br />";
			}	
				
}



//que reccorra  los numeros y pare donde vea un numero negativo y diga en que posición esta y 
//siga buscando y también elprocentaje de nºnegativos.

$x=array(10,25,14,-37,8,4,-13);

$posiciones=count($x)-1;

$i=0;

$contador=0;

$posicionesP=count($x);

while ($i<=$posiciones) {

	if ($x[$i]<=0){
		echo "El numero negativo de la posicion: $i es el numero $x[$i].<br />";
		$i++;
		$contador++;
		
	}
	

	elseif ($i<$posiciones) {
		$i++;
		}
		
		else {
			echo "No hay numeros negativos<br />";
		}
		
}

echo "El total de numeros negativos es: $contador<br />";
$porcentaje=$posicionesP*$contador/100;
echo "El porcentaje de numeros negativos es del: $porcentaje%.<br />";
















?>