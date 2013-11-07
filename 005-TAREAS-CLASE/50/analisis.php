<?php
$number_a=$_POST['numero1'];
$number_b=$_POST['numero2'];
$number_c=$_POST['numero3'];
$number_d=$_POST['numero4'];
$number_e=$_POST['numero5'];
$number_f=$_POST['numero6'];
$number_g=$_POST['numero7'];
$number_h=$_POST['numero8'];
$number_i=$_POST['numero9'];
$number_j=$_POST['numero10'];

$division=array("$number_a", "$number_b", "$number_c", "$number_d", "$number_e", "$number_f", "$number_g", "$number_h", "$number_i", "$number_j");

$elementnumber=count($division);

$resultado=$number_a+$number_b+$number_c+$number_d+$number_e+$number_f+$number_g+$number_h+$number_i+$number_j/$elementnumber;

echo "El resultado obtenido es $resultado"
?>


