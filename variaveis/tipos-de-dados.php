<?php

//Criar variaveis auto-explicativas  

/** Tipos básicos**/

$nomeCompleto = "Francisco de Assis Lima "; //String
$sexo = "F"; //Caractere 

$anoNascimento = 1998; //Inteiro
$altura = 1.75; //float ou Double (Número real)
$bloqueado = true ;//boolean



/** Tipos compostos**/


////Array

$frutas = Array('Uva', 'Melancia', 'Abacate', 'Maça');

echo $frutas [1];


//// Objeto

$nascimento = new DateTime();

var_dump($nascimento);


//** Tipos especias **//

// Tipos especiais e resource e NULL, 


$arquivo = fopen("exemplo3.php","r");
//var_dump($arquivo);


$nulo = NULL;


/* Variaveis não podem começar com numeros, carcteres especiais a não ser o undeline ( _ ), 
e é uma boa pratica quando se a varíavel tiver mais de uma palavra, 
a segunda palavra deve começar com letra maiúscula */



?>