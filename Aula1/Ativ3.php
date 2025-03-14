<?php 


$array1 = array("base" => 10, 
               "altura" => 5);

$array2 = array("base" => 20,
               "altura" => 15);

$array3 = array("base" => 30,
                "altura" => 20);


/*
Pode ser feito assim: 

$base = [10, 20, 30];
$altura = [5, 15, 20];

Ou Assim:
$base[0] = 10;
$altura[0] = 5;

$base[1] = 20;
$altura[1] = 15;

$base[2] = 30; 
$altura[2] = 20;
*/


$area = [];

for ($i = 0; $i < count($base); $i++) {  
    $area[$i] = $base[$i] * $altura[$i];
}


echo "<h2> Áreas dos Retângulos </h2>";

for ($i = 0; $i < count($area); $i++) {  
    echo "Retângulo ".($i+1).": ". $area[$i]." m²<br>";
}

// Count: Conta todos os elementos em um array quando usado com um array. 
