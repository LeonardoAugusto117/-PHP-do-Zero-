<?php

    $nome = "Leonardo"; // Global
    echo" $nome <br>";

    function alteraNome(){
        global $nome;//Acessa variavel global
        $nome = "João";
        echo "$nome <br>";
    }

    alteraNome();

    function alteraNome2(){
        global $nome;//Acessa variavel global
        $nome = "Pedro";
        echo "$nome <br>";
    }

    $nome = "Thiago";
    echo" $nome <br>";
    alteraNome();
    alteraNome2();
?>