<?php

$getal = 65.41111;
$getal2 = 45.79999;
$afgerond1 = ceil($getal);
$afgerond2 = floor($getal2);
echo "Als je {$getal} afrond naar boven dan krijg je: {$afgerond1}";
echo "<br>";
echo "Als je {$getal2} afrond naar beneden dan krijg je: {$afgerond2}" . "<br>";

$randgetal1 = rand(10,100);
$randgetal2 = rand(10,100);
$randgetal3 = rand(10,100);

$randopgeteld = $randgetal1 + $randgetal2;

echo $randopgeteld / $randgetal3;