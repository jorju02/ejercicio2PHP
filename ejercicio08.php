<?php
/*
 * Diseñar un programa que determine la cantidad total a pagar por una llamada
 *  telefónica de acuerdo a las siguientes premisas
 */
$minutos=5;

if ($minutos<=3) 
    echo "10 centimos";
else 
    echo (10+(5*($minutos-3)))." centimos";


?>