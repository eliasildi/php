<?php
$x = array(10, 25, 14, 37, 8,4,13);
$n=count ($x);
$i= 0; //$i es el q lleva la posicion
while ($i<$n)
{
	if ($x[$i]<0)
		{
		echo "en la posicion $i el valor es $x[$i]<br/>";
		break;
		}
	else
		{
		$i=$i+1;
		}
}

if ($i==$n)
	{
	echo "no hay numeros negativos<br/>";
	}
?>