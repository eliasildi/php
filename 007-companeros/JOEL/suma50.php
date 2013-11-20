<?php

//suma de los numeros hasta 50.
$valor=1;
$suma=0;
while ($valor<=3){
	
	$suma=$suma+$valor;
	$valor=$valor+1;
}
echo "La suma da $suma <br />";

?>

<?php

//calcular factorial de un numero:

$n=5;
$fact=1;
$cont=1;

while ($cont<=$n) {
	$fact=$fact*$cont;
	$cont=$cont+1;
}

echo "El factorial de $n es igual a $fact<br />";


?>


<?php


for ($i=1;$i<=$n;$i=$i+1){
	$fact=$fact*$i;
}
echo "El factorial de $n es $fact<br />";


?>

<?php
$fact=1;
$n=4;
$cant=1;
do {
	$fact=$fact*$cant;
	$cant=$cant+1;
}
while ($cant<=$n)


?>


<?php
//Serie fibonacci.

$n=20;
$a=0;
$b=1;
$c=0;
 while ($c<=$n) {
	echo "$c<br />";
	$a=$b;
	$b=$c;
	$c=$a+$b;
	}
?>

echo "Fin de la serie";







