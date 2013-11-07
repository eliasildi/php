<?php
#con funcion str_replace
$x=str_replace(' ', '',"dabale arroz a la zorra el abad");
$i=0;
$j=strlen($x)-1;

while ($i <= $j) {
	if ($x[$i]==$x[$j]) {
            $i++;
            $j--;
        }
        else {
            echo "La frase no es palindroma";
            break 2;
        }
}

if ($i >= $j) {
    echo "La frase es palindroma";
}
?>