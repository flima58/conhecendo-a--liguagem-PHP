<?php

$n1 = 5 ;
$n2 = 3;

/* SOMA */
echo "<h1>SOMA</h1>";
$soma = $n1 + $n2;
echo "<p>$n1 + $n2 = ".$soma."</p>";

// Também podemos fazer a operação coforme abaixo, para economozarmos na memoria com variaveis
$n1 += $n2;
//echo $n1."<br>";



/* SUBTRAÇÃO */
echo "<h1>SUBTRAÇÃO</h1>";
$subtração = $n1 - $n2;

echo "<p>$n1 - $n2 = ".$subtração."</p>";


/* Divisão */
echo "<h1>DIVISÃO</h1>";
$divisao = $n1 / $n2;
echo "<p> $n1 / $n2 = ".$divisao."</p>";


/*Multiplicação */
echo "<h1>MULTIPLICAÇÃO</h1>";

$mult = $n1 * $n2;
echo "<p>$n1 * $n2 = ". $mult."</p>";

/*Modulo */
echo "<h1>MODULO</h1>";

$modulo = $n1 % $n2;
echo "<p>".$modulo."</p>";

echo "<H1>Exponenciação</H1>";
$expo = $n1 ** $n2;

echo "<p>$n1 elevado $n2 = ".$expo."</p>"; 

?>