<?php

function teste(){
    $x = 0;
    $x++;
    echo "$x <br>";
}

teste();
teste();
teste();

function testeStetic(){
    static $x = 0;
    echo "$x <br>";
    $x++;
}

testeStetic();
testeStetic();
testeStetic();
?>