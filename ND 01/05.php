<!-- Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). -->


<?php

$first = rand(0, 2);
$second = rand(0, 2);
$third = rand(0, 2);
$fourth = rand(0, 2);
$nuliuKiekis = 0;
$vienetuKiekis = 0;
$dvejetuKiekis = 0;

if ($first === 0) {
    $nuliuKiekis++;
} elseif ($first === 1) {
    $vienetuKiekis++;
} elseif ($first === 2) {
    $dvejetuKiekis++;
}

if ($second === 0) {
    $nuliuKiekis++;
} elseif ($second === 1) {
    $vienetuKiekis++;
} elseif ($second === 2) {
    $dvejetuKiekis++;
}

if ($third === 0) {
    $nuliuKiekis++;
}   elseif ($third === 1) {
    $vienetuKiekis++;
}  elseif ($third === 2) {
    $dvejetuKiekis++;
}


if ($fourth === 0) {
    $nuliuKiekis++;
}   elseif ($fourth === 1) {
    $vienetuKiekis++;
}  elseif ($fourth === 2) {
    $dvejetuKiekis++;
}


echo "1sk = $first <br> 2sk = $second <br> 3sk = $third <br> 4sk = $fourth <br> <br> Nuliu kiekis = $nuliuKiekis <br> Vienetu kiekis = $vienetuKiekis <br> Dvejetu kiekis = $dvejetuKiekis";


