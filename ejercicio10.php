<?php
/*
 *Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). 
 *Necesito que el programa que calcule tiempo me falta para coger dicho avión, 
 *dependiendo de la hora actual.
 */

$fecha1= new DateTime();
$fecha2= DateTime::createFromFormat("Y-m-d H:i","2022-12-15 08:03");
$diff = $fecha1->diff($fecha2);

echo "Fecha actual: ".$fecha1->format('Y-m-d H:i:s');
echo "<br>";
echo "Fecha de la salida: ".$fecha2->format('Y-m-d H:i:s');
echo "<br>";
echo "<br>";


echo "Para irme de vacaciones me quedan... ".$diff->format('%a Dias , %h horas y %i minutos');

?>