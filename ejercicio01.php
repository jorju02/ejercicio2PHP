

<?php
/*Ejercicio 01: Hacer un programa que contenga dos números distintos en sendas variables y los sume.
 A continuación mostrar el resultado de la suma, la resta, la multiplicacion, division y modulo. Guarde como ejercicio01.php.*/


$numUno=6;
$numDos=14;


echo $numUno." + ".$numDos." = ".($numUno+$numDos)."<br>";

echo $numUno." - ".$numDos." = ".($numUno-$numDos)."<br>";
echo $numUno." * ".$numDos." = ".($numUno*$numDos)."<br>";
echo $numUno." / ".$numDos." = ".($numUno/$numDos)."<br>";
echo "El resto de la division de ".$numUno." y ".$numDos." es: ".($numUno%$numDos);
?>