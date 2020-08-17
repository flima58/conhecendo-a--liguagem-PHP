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


 <p> 2 - Operadores aritméticos</p>

<p>Os operadores aritméticos são usados para resolver expressões matematicas</p>

<ul>
   <li> + -> Soma</li>
   <li> - -> Subtração</li>
   <li> / -> Divisão</li>
   <li> * -> Multiplicação</li>
   <li> % -> Modulo (Faz uma divisão e pega o resto, ou seja faz a divisão com numeros inteiros) </li>
</ul>


 <p>Exemplo de como pode ser usado as expressões </p>

$soma = $n1 + $n2;
echo $soma."<br>";

// Também podemos fazer a operação coforme abaixo, para economozarmos na memoria com variaveis
$n1 += $n2;
echo $n1;

<p>Assim podemos usar para todas as expressões.</p>

<p> 2 - Operadores de comparação</p>

<ul>
   <li> > (Maior) </li>
   <li> < (Menor)</li>
   <li> >= (Maior ou igual)</li>
   <li> <= (Menor ou igual)</li>
   <li> && (E) </li>
   <li> || (OU)</li>
   <li> == (Igual)</li>
   <li> === (Identico)</li>
   <li> != OU <> (Diferente)</li>
   <li>!== (Vendo se as variaveis não são identicas </li>
   <li>! $a (Se a variavel ou a expressão for verdadeira, acaba ficando falsa, e se for falsa, fica verdadeira) </li>
</ul>

<h6>Operador Spaceship</h6>

<p>a expressão se monta dessa forma $a <=> $b</p>

<ul>
   <li>( -1 ) - Aparece se a primeira variavel for menor que a segunda</li>
   <li>(  0 ) - Aparece se a primeira variavel for igual a segunda</li>
   <li>(  1 ) - Aparece se a primeira variavel for maior que a segunda</li>
</ul>

<h6>Operador Null Coalesce </h6>

<p> Esse operador verífica em qual variavel tem algum valor que não seja NULL priemiro</p>

<p>$n1 = NULL;</p>
<p>$n2 = NULL;</p>
<p>$n3 = 2;</p>

<br>

<p>echo $n1 ?? $n2 ?? $n3;</p>

<p>No caso acima a variavel que será imprimida será a $n3</p>

<p> 3 - Operadores de incremento e decremento</p>

 <ul>
   <li>$a++ (Ele executa e depois incrementa)</li>
   <li>++$a (Ele incrementa depois executa)</li>
   <li>$a-- (Ele executa e depois decrementa)</li>
   <li>--$a (Ele decrementa e depois executa</li>
 </ul>


 ________________________________________________________________________________________

 <h3>Manipular String</h3>

 <p> Nesse tópico, vamos apresentar algumas funções manipulo string</p>

<h6>A diferença entre aspas</h6>

<p>Se eu fizer um echo e colocar aspas duplas ( " " ), eu consigo colocar as variaveis dentro das aspas, caso eu coloque aspas simples ( ' ' ), aparece qual variavel estou usando, ela entende que tudo é texto.</p>

<strong>Exemplo</strong>

<div>
echo "<p>$nome $sobrenome</p>";<br>
echo '<p>$nome $sobrenome</p>';
</div>

<h6>Funções para string</h6>

<strong>STRTOUPPER</strong>

<p>Essa função deixa todas as letras  dentro da váriavel Maiuscula.</p>
<p>$nome1 = "francisco";</p>
<p>echo strtoupper($nome1);</p>

<strong>STRTOLOWER</strong>

<p>Essa função deixa todas as letras  dentro da váriavel Minuscula.</p>
<p>$nome2 = "FRANCISCO";</p>
<p>echo strtolower($nome2);</p>


<strong>UCWORDS e UCFIRST</strong>

<p>Uma funções tem como objetivo deixar todas as primeiras letras de uma frase Maiuscula (UCWORDS), e a outra tem como deixar a primeira letra de uma frase, Maiucula (UCFIRST)</p>

<p>$frase = "O rato roeu a ropa do rei de roma"</p>

<p>echo ucwords($frase); --  deixa primeira letra de todas as palavras em maiuscula</p>
<p><strong>Impressão:</strong> O Rato Roeu A Ropa Do Rei De Roma</p>

<br>

<p>echo ucfirst($frase) -- Deixa a primeira letra da frase maiuscula</p>
<p><strong>Impressão:</strong> O rato roeu a ropa do rei de roma</p>

<strong>STR_REPLACE</strong>

<p>caso você pecise substituir algo de uma variavel, o str_replace é uma boa opção, ele funciona desse modo.</p>

<p>$nome = "Francisco"</p>
<p>$nome = str_replace('o' (* O caractere que deve ser procurado*),'0'(*O caractere para qual deve ser substituido*), $nome (*Varívael onde deve ser pesquisado*))</p>


<strong>STRPOS e </strong>
<p>Pega a posição da palavra de você pesquisou.</p>

<p>Exemplo:</p>

<p>$frase2 = "O rato roeu a ropa do rei de roma";</p>
<p>$posi = strpos($frase2 **Variavel onde a função vsai procurar**, 'roeu' ** Qual palavra a função vai procurar**);</p>
<p>echo "Posição: ".$posi;</p>

<strong></strong>

<p>Pegar caracteres que estão antes da posição mencionada.</p>
<p>Exemplo:</p>

<p>$frase2 = "O rato roeu a ropa do rei de roma";</p>
<p>$palavra = "roeu";</p>
<p>$posi = strpos($frase2,$palavra );</p>

<p>$text = substr($frase,0 /*Apartir do 0 eu quero procurar o text*/, $posi /*até onde quero ir*/ );</p>

<p>Para pegar todo o texto depois da palavra mãe </p>

<p>$text2 = substr($frase, $posi + strlen($palavra), strlen($frase));</p>

