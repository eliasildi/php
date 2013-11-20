<?php

//que reccorra  los numeros y pare si ve un numero negativo y diga en que posición esta.
$x[0]=-10;
$x[1]=-25;
$x[2]=14;
$x[3]=37;
$x[4]=8;
$x[5]=4;
$x[6]=-13;

//ESta funcion devuelve los numeros de elementos del array (7).
$n=count($x);
$i=0;


while ($i<$n) {
	if ($x[$i]<0){
		echo"En la posición $i es $x[$i]<br />";
		break;
	}
	else {
		$i=$i+1;
	}
}

if ($i==$n) {
	echo "No hay numeros negativos<br />";
}

//hacerlo con el for en casa

//hacerlo con do while luego poner todos los negativos

do {
	if ($x[$i]<0) {
echo "En la posición $i está el numero $x[$i]<br />";
break;	
}
else {
	$i=$i+1;
	}
	}
while ($i<$n);

if ($i==$n) {
	echo "No hay numeros negativos<br />";
}



//luego poner todos los negativos
$cantnegativos=0; //esta variable cuenta los numeros negativos que hay del array.
do {
	if ($x[$i]<0) {
		echo "En la posición $i está el numero $x[$i]<br />";
		$cantnegativos=$cantnegativos+1; // si hay un negativo lo suma 
}

//aqui habia un else pero se kita para ke siempre se cumpla y haga esta instruccion.
	$i=$i+1;

}
while ($i<$n);

echo "Hay $cantnegativos numeros negativos en el ARRAY<br />";






// caracteres

$frase="Hola como estan";
$n=strlen($frase); //devuelve el numero de caracteres de un string

for ($i=0; $i<$n; $i=$i+1){
	echo "$frase[$i]<br />";
}












?>