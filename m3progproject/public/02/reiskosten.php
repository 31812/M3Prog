<?php

$afstand = 1085.73;
$prijsBenzine = 1.89;
$treinPrijs = 60;
$tankInhoud = 50;
$literVerbruikt = $afstand / ($tankInhoud * 15)  * $tankInhoud;
$aantalKerenTankenOnafgerond = $afstand / ($tankInhoud * 15);
$aantalKerenTankenAfgerond = ceil($aantalKerenTankenOnafgerond);
$reisKosten = $aantalKerenTankenAfgerond * $tankInhoud * $prijsBenzine;

if($reisKosten > $treinPrijs){
    echo "ik ga met de trein";
} else {
    echo "ik ga met de auto";
}

echo "<br>";

echo "de afstand van Amsterdam naar Bordeaux is {$afstand} km";
echo "<br>";
echo "de totale prijs met de auto is {$reisKosten} euro";
echo "<br>";
echo "ik verbruik {$literVerbruikt} liter benzine";
echo "<br>";
echo "ik moet {$aantalKerenTankenOnafgerond} aantal keren tanken dus rond ik het af op {$aantalKerenTankenAfgerond} keer tanken"

?>