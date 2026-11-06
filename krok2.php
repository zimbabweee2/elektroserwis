<?php
const VAT = 0.23;

$netto = 800;
$brutto = $netto * (1 + VAT);
$raty  = intdiv(1000, 300);
$calych = 1000 % 300;
$potega = 2 ** 10;

$ilosc = 5;
$ilosc += 3;
$ilosc++;

$opis = "Procesor";
$opis .= " Ryzen 5 1600";

echo "Produkt: $opis<br>";
echo 'Produkt: $opis<br>';

?>
