<?php
/*
 * Definir un número en una variable y decir a qué nota le corresponde.
 */
$nota = 6.8;

if ($nota >= 1 && $nota <= 4.9)
    echo "SUSPENSO";
elseif ($nota >= 5 && $nota <= 5.9)
    echo "SUFICIENTE";
elseif ($nota >= 6 && $nota <= 6.9)
    echo "BIEN";
elseif ($nota >= 7 && $nota <= 8.9)
    echo "MUY BIEN";
elseif ($nota >= 9 && $nota <= 10)
    echo "SOBRESALIENTE";
else
    echo "ERROR";
?>