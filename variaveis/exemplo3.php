<?php
//Vamos aprender concatenação 

$nome = "Francisco";
$sobrenome ="Lima";

$nomeCompleto = $nome ." ". $sobrenome;
echo $nomeCompleto;

echo "<br/>";

$nomeCompleto = "Meu nome é {$nome} {$sobrenome}";
echo $nomeCompleto;


?>