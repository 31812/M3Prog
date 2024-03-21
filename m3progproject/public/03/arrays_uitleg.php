<?php

$dagen = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"];

echo count($dagen);
echo "<br>";
array_push($dagen, "nog een dag");
echo "<br>";
print_r($dagen);
echo "<br>";
sort($dagen);
echo "<br>";
echo implode($dagen);