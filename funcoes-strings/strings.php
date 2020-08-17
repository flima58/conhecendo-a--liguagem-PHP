<?php


//Diferença das Aspas

$nome = "Francisco";

$sobrenome = 'Lima';


/* Se eu fizer um echo e colocar aspas duplas ( " " ), eu consigo colocar as variaveis dentro das aspas, caso eu coloque aspas simples ( ' ' ), aparece qual variavel estou usando, ela entende que tudo é texto.*/

    echo "<p>$nome $sobrenome</p>";
    echo '<p>$nome $sobrenome</p>';

/************************************** STRTOUPPER **************************************************/

$nome1 = "francisco";
echo strtoupper($nome1);

echo "<br>";

$nome2 = "FRANCISCO";
echo strtolower($nome2);


/***********************************  UCWORDS e UCFIRST *********************************************/

//Deixar as primeiras letras de uma frase ou palavra em maiusculas 

$frase = "O rato roeu a ropa do rei de roma";

echo ucwords($frase);// deixa primeira letra de todas as palavras em maiuscula
echo"<br>";
echo ucfirst($frase);//Deixa a primeira letra da frase maiuscula 



/********************************************** STR_REPLACE ******************************************/

$subNome = "Francisco";
$subNome = str_replace('o', '0',$subNome);
$subNome = str_replace('i', '1',$subNome);

echo "<br>";
echo $subNome;  


/********************************************* STRPOS ****************************************/


$frase2 = "O rato roeu a ropa do rei de roma";

$palavra = 'roeu';

$posi = strpos($frase2, $palavra);



$text = substr($frase,0 /*Apartir do 0 eu quero procurar o text*/, $posi );

echo '<br>';
echo $text;
echo '<br>';

$text2 = substr($frase, $posi + strlen($palavra), strlen($frase));


echo $text2;




?>