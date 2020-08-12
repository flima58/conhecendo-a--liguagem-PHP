<?php
   
     $nome = "Francisco";


     var_dump($ip);
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

?>