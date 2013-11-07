<? 
echo "Iniciamos Fibonacci<p>"; 
$f1 = 1; 
$f2 = 1; 
echo $f1."<br>"; 
while ($f1 <= 10) { 
    echo $f2."<br>"; 
    $f2=$f2+$f1; 
    $f1=$f2-$f1; 
} 
echo "<p>Fin Fibonacci"; 
?> 