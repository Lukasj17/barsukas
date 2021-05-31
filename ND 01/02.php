<!-- Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->


<?php


$first = rand(0, 4);
$second = rand(0, 4);
$divzero = false;
if ($first > $second) {
    if ($second !== 0) {
        $result = $first / $second;
    } else {
        $divzero = true;
        echo "pirmas skaicius = $first; antras skaicius = $second; mažesnis skaičius = 0; dalyba iš 0 negalima!";
    }
} elseif ($first !==0) {
    $result = $second / $first;
    } else {
        $divzero = true;
        echo "pirmas skaicius = $first; antras skaicius = $second; mažesnis skaičius = 0; dalyba iš 0 negalima!";
    }

if(!$divzero) {
    echo "pirmas skaicius = $first; antras skaicius = $second; Rezultatas:" . round($result, 2) . ";";
}