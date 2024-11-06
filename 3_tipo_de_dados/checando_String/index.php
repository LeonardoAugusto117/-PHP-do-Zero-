<?php

 $str = "Leonardo";
 $num = 12;


if(is_string( $str)){// Função is_string, valida o que esta dentro das chaves é uma string

    echo "Verdadeiro, o $str é um nome verdadeiro";
}

echo "<br>";

if(is_int(12)){// False
    echo "Verdadeiro, a variavel $num é um numero verdadeiro";
}

echo "<br>";

echo "<br>";
if(is_int(12) && is_string($str)){// com variavel
    echo "ambos são verdadeiros verdadeiro";
}
?>