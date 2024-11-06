<?php

if(is_float(5.324)){// Função is_int, valida o que esta dentro das chaves é um numero inteiro
    echo "verdadeiro";
}

echo "<br>";

if(is_float("5")){// False
    echo "False";
}

echo "<br>";

echo "<br>";
if(is_float("5.34")){// com variavel
    echo "verdadeiro";
}
?>