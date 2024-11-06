<?php

class Pessoa {

    function falar(){
        echo "Ola Mundo";
    }
    
}


$nome = new Pessoa();

// Agora você pode definir a propriedade, pois ela existe na classe
$nome-> nome1 = "Leonardo";

echo $nome->nome_author;

echo "<br>";

$Nome->falar();

?>