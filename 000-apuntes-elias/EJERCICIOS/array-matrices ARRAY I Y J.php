<?php


$x=array(17,18,25,24,3,7,6,9);
$n=count($x);
$suma=0;
for ($i=0; $i<$n; $i++) {
	$suma=$suma+$x[$i];
}
$prom=$suma/$n;
echo"El promedio es $prom<br />";




//INVERTIMOS LOS NUMEROS DEL ARRAY. Y PA TAREA ORDENARLOS.

$x=array(17,18,25,24,3,7,6,9);
$j=count($x)-1; // El numero de la posicion de los elementos es el numero de posicion -1.
$i=0;

while ($i<$j) {
	$auxiliar=$x[$i];
	$x[$i]=$x[$j];
	$x[$j]=$auxiliar;
	$i=$i+1;
	$j=$j-1;
}

$n=count($x);
for ($i=0; $i<$n; $i=$i+1){
	echo "$x[$i]<br />";
}

echo "------------------------------<br />";
//ORDENARLOS NUMEROS

$x=array(17,23,13,9,100,24,11);

$i=0;
$j=0;
$n=count($x);

while ($i<($n-1)){
	$j=$i+1;
	while ($j<$n){
		if ($x[$i]>$x[$j]){
			$aux=$x[$i];
			$x[$i]=$x[$j];
			$x[$j]=$aux;
			
		}
		$j=$j+1;
	}
$i=$i+1;
}

for ($i=0; $i<$n; $i=$i+1){
		echo "$x[$i]<br />";
}


$x=array(array(3,7,1,8),array(1,4,5,6));

$nfilas=count($x); //devuelve el numero de filas del array.
$ncol=count($x[0]); //devuelve el numero de elementos(columnas) del array.











?>
