<?php 

$X = 0;
$Y = 0;

for ($i= 20; $i < 70; $i++) { 
    if ($i % 2 == 0) {
        $X += $i;
    }
    else {
       
        $Y += $i;
    }

}

echo "<h2> Soma de números pares: </h2>";
    
echo " A soma de todos os números pares de 20 a 70 são: <br>";
echo $X . "<br>";

echo "<h2> Soma de números ímpares: </h2>";

echo " A soma de todos os números ímpares de 20 a 70 são: <br>";
echo $Y += $i;