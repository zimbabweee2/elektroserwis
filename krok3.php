<?php
$zformularza = "12.50";

$cena = (float) $zformularza;
$szt = (int) "3 sztuki";
$zle = (float) "12.50";

var_dump($cena, $szt, $zle);
var_dump(is_numeric("12.50"), is_numeric("12.50"), is_numeric("abc"));
echo number_format(1234.5, 2, ',', ' ') . "zł";
?>
