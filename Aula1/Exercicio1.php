<?php 

$cores =[];

$cores[0] = "yellow";
$cores[1] = "blue";
$cores[2] = "black";
$cores[3] = "green";
$cores[4] = "red";
$cores[5] = "purple";
$cores[6] = "gray";
$cores[7] = "brown";

for ($i=0; $i < 8; $i++) { 
    echo '<div style="background-color: ' . $cores[$i] . '; width: 100px; height: 100px;"></div>';
}

