<?php

if(is_int(5)){// Função is_int, valida o que esta dentro das chaves é um numero inteiro
    echo "verdadeiro";
}
$a = 5;
echo "<br>";

if(is_int("5")){// False
    echo "False";
}$a = 5;

echo "<br>";

$a = 5;
echo "<br>";
if(is_int($a)){// com variavel
    echo "verdadeiro";
}

?>