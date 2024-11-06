<?php

$x = 12;//global
echo "$x <br>";

function teste1(){
    $x = 29;//local
    echo "$x <br>";
}

teste1();

function teste2(){
    $x = 90;//local
    echo "$x <br>";
}

$x = 20;//global

teste2();
teste1()
?>