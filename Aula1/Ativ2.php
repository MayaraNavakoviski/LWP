<?php

$Num1 = 0;
$Num2 = 0;
$Num3 = 0;

function calcularMedia($Num1, $Num2, $Num3){
    $media = ($Num1 + $Num2 + $Num3) / 3;
    return $media;
}

echo "<h1> Média <h1>";
echo calcularMedia(100, 100, 100) . "<br>";
echo calcularMedia(99, 99, 99) . "<br>";
echo calcularMedia(80, 80, 80) . "<br>";