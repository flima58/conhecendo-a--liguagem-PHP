# Conhecendo à linguagem PHP
São apenas exercícios para estudo, onde irei aprender o que são variáveis, operadores, includes e requires 


<h3>Declaração de váriaveis</h3>

<p>Variaveis não podem começar com numeros, carcteres especiais a não ser o undeline ( _ ), 
e é uma boa pratica quando se a varíavel tiver mais de uma palavra, 
a segunda palavra deve começar com letra maiúscula</p>


<span style="color:blue;">Tipos Básicos</span><br/>

$anoNascimento = 1998; //Inteiro		

$nomeCompleto = "Francisco de Assis Lima "; //String

$sexo = "F"; //Caractere

$altura = 1.75; //float ou Double (Número real)

$bloqueado = true; //boolean



<span style="color:green;">Tipos compotas</span><br/>

<p>Os tipos compostos são o Array e o Objeto</p>


<h6>Array</h6>
$frutas = array('Maça','Laranja', 'Banana', 'Uva'); 

$dados = array('nome' => 'Francisco',
               'idade' => 22,
               'cidade' => 'São Paulo'); // Array


<h6>Objeto</h6>

$nascimento = new DateTime();

var_dump($nascimento);

<span style="color:Yellow;"> Tipos especiais</span><br/>

<p>Tipos especiais e resource e NULL</p>

$nulo = Null




* Para executarmos uma variavel usamos o ECHO.

Ex: 
   echo $nome; //executa a variavel
       
       
* Para visualizarmos os dados de uma variavel, usaremos o método VAR_DUMP

Ex: 
   var_dump($nome); //Mostra o valor e quantos caracteres estão sendo usado

______________________________________________________________________________________________________


<h3>Apagar e verificar se a váriavel existe</h3>

Limpar uma variavel, usamos o método UNSET e para ver se a variavel existe, podemos usar o ISSET. 

$nome = "Francisco";

unset($nome);// Apaga a variavel


if(isset($nome)){

//Verifica se a variavel existe

   echo $nome;
}


_________________________________________________________________________________________________________

<h1>Concatenação</h1>

<p>Para concatener variaveis é necessario com (.) ou com chaves ({}), como o exemplo abaixo</p>

<p> $nomeCompleto = "Meu nome é {$nome} {$sobrenome}";</p>
<p>$nomeCompleto = "Meu nome é".$nome." ". $sobrenome;</p>

______________________________________________________________________________________________________

<h1>Escopo de Variável</h1>

<p>Variáveis que estão fora do escopo não podem ser acessadas, a não ser que eu use a palavra resevada GLOBAL (Temos que colcoar isso por função).</p>


<h6>Exemplo</h6>

  $nome = "Francisco";

   function teste(){

      global $nome;
      echo $nome;

   }


   function teste2(){

    global $nome;

    echo "<br>Agora no teste2: ".$nome;
   }

   teste();
   teste2()
 _____________________________________________________________________________________________

 <h1>Operadores no PHP</h1>

 <p> 1 - Operadores de atribuição ( = )</p>
 <span>Exemplo: $nome = "Francisco"; O Igual quer dizer que o Valor (Francisco) está sendo atribuido a variável $nome </span>