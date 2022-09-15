<?php
/*
 * Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto 
 * (resultado de la multiplicación) de ellos o al contrario
 */
$numero1=8;
$numero2=15;

if (($numero1+$numero2)>($numero1*$numero2)) 
    echo "la suma es mayor que el producto";
elseif (($numero1+$numero2)==($numero1*$numero2))
echo "la suma es igual que el producto";
else 
    echo " el producto es mayor que la suma";
?>