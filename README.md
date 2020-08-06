# Conhecendo à linguagem PHP
São apenas exercícios para estudo, onde irei aprender o que são variáveis, operadores, includes e requires 


<h1>Declaração de váriaveis</h1>
$anoNascimento = 1998; //Inteiro		

$nomeCompleto = "Francisco de Assis Lima "; //String

$sexo = "F"; //Caractere

$altura = 1.75; //float ou Double (Número real)

$feliz = true; //boolean



* Para executarmos uma variavel usamos o ECHO.

Ex: 
   echo $nome; //executa a variavel
       
       
* Para visualizarmos os dados de uma variavel, usaremos o método VAR_DUMP

Ex: 
   var_dump($nome); //Mostra o valor e quantos caracteres estão sendo usado

______________________________________________________________________________________________________

<h1>Apagar e verificar se a váriavel existe</h1>

Limpar uma variavel, usamos o método UNSET e para ver se a variavel existe, podemos usar o ISSET. 

$nome = "Francisco";

unset($nome);// Apaga a variavel


if(isset($nome)){

//Verifica se a variavel existe

   echo $nome;
}


_______________________________________________________________________________

