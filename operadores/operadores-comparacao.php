<?php


$a =  30;
$b =  30;

$n1 = NULL;
$n2 = 3;
$n3 = 2;


var_dump($a > $b);

/* Operador Spaceship */
var_dump($a <=> $b);

/*Operador Null Coalesce */
echo $n1 ?? $n2 ?? $n3;




?>