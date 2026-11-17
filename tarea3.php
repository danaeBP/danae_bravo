<?php
echo "<center><h1> OPERADORES LÓGICOS EN PHP 7 </h1></center>";
echo "<hr>";

$x=10;
$y=2;
$z=0;

echo "<h2><center> OPERADORES ARITMETICOS</center></h2>";echo "<hr>";
echo "La suma de x+y sería : ", $x+$y; echo"<br>";
echo "La resta de x-y seria : ", $x-$y; echo "<br>";
echo "La multiplicación de x*y sería : ", $x*$y; echo"<br>"; 
echo "La división de x/y sería : ",$x/$y; echo"<br>";
echo "El residuo de x%y sería : ",$x%$y; echo"<br>";
echo "La potencia de x a la y sería : ", $x**$y; echo"<br>";
echo "<hr>";
echo "<h2><center> OPERADORES DE COMPARACIÓN </center></h2>";echo "<hr>";

$f=10;
$n=20;


if (($f and $n)==30){
echo "la suma es correcta"; 
}else{
echo"la suma NO es correcta";
}
 
?>
