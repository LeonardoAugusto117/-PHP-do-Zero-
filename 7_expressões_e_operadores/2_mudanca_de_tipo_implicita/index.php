<?php

    $a = 5 / 2;
    echo "$a <br>";

    if(is_float(5/2)){
        echo"É um float  <br>";
    }


    //Utilizando o perador .(ponto para concatenar) 

    if(is_string(5 . 2)){
        echo "É um String  <br>";
    }

    $nome = "Leonardo";
    $sobreNome = "Augusto";

    $nomeCompleto =  $nome . " " . $sobreNome;

    echo  $nomeCompleto;
    echo "<br>";
?>