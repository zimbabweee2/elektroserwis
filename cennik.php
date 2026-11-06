<?php
const VAT = 0.23;

$nazwa = "procesor ryzen 5 3600x";
$netto = 300;
$ilosc = 3;
$brutto = $netto * (1 + VAT);
$wartosc = $brutto * $ilosc;
$rabat = 0.10;
$cenarabatowa = $brutto / (1 + $rabat);

echo "
    <table border=1>
        <tr> 
            <th> Nazwa</th> 
            <th> Netto</th>
            <th> Brutto</th>
            <th> ilosc</th>
            <th> Wartość</th>
            <th> rabat</th>
        </tr>
        <tr>
            <td>" . $nazwa . "</td>
            <td>" . number_format($netto, 2, ",", ".") . "zł" . "</td>
            <td>" . number_format($brutto, 2, ",", ".") . "zł" . "</td>
            <td>" . $ilosc . "</td>
            <td>" . number_format($wartosc, 2, ",", ".") . "zł" . "</td>
            <td>" . number_format($cenarabatowa, 2, ",", ".") . "zł" . "</td>
        </tr>
    </table>
";  
?>
