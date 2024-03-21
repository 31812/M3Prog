<?php

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden fahrenheit = {$celsius} graden celsius. <br/>";

$celsius = 12;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

$celsius = 13;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden Celsius = {$kelvin} kelvin. <br/>";

$fahrenheit = 70;
$kelvin = ($fahrenheit - 32) * 5/7;
echo "{$fahrenheit} graden fahrenheit = {$kelvin} kelvin. <br/>";

?>