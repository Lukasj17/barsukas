<!-- Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus. -->


<?php

$one = rand(0, 100);
$two = rand(0, 100);
$three = rand(0, 100);
$count = 3;
$vidurkis = ($one + $two + $three) /  3;


echo "Pirmas sk = $one <br> Antras sk = $two <br> Trecias sk = $three <br><br>";
echo 'Vidurkis = ' . round($vidurkis, 0) . '<br>';

if ($one < 10 || $one > 90) {
    $one = 0;
    $count--;
}

if ($two < 10 || $two > 90) {
    $two = 0;
    $count--;
}   
if ($three < 10 || $three > 90) {
    $three = 0;
    $count--;
}

echo '<br>';
echo 'Vidurkis be netinkamu skaiciu = ' . round(($one + $two + $three) / $count, 0) . '<br>';