<?php

$ass = ['Nome' => "João", 'Idade' => 17, 'Cargo' => "Analista"];

echo "<br>";
print_r($ass);
echo "<br>";
echo $ass['Nome'];

$ass1 = ['Nome' => "Leonardo", 'Idade' => 23, 'Cargo' => "Analista"];

echo "<br>";
print_r($ass);
echo "<br>";
echo $ass1['Nome'];

echo "<br>";
echo "<br>";

if($ass1['Idade'] >= 18){
    echo "Ele é maior de idade";
}

echo "<br>";
if($ass['Idade'] >= 18){
    echo "Ele é menor de idade";
}
?>