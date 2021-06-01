<!-- Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. -->

<?php

$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

echo "1. orginalus tekstas: <h5>$string1</h5>" . '<br>';
echo "2. orginalus tekstas: <h5>$string2</h5>" . '<br>';

$string1 = explode(" ", $string1);
$string2 = explode(" ", $string2);

$zodziuKiekis = count($string1);
$zodziuKiekis2 = count($string2);

$countOf5 = 0;
$countOf52 = 0;

for ($i = 0; $i < $zodziuKiekis; $i++){
    if (strlen($string1[$i]) <= 5) {
        $countOf5++;
    }
}

for ($x = 0; $x < $zodziuKiekis2; $x++){
    if (mb_strlen($string2[$x]) <= 5) {
        $countOf52++;
    }
}

echo "1. zodziu, trumpesniu arba lygiu 5 yra: $countOf5" . '<br>';
echo "2. zodziu, trumpesniu arba lygiu 5 yra: $countOf52";
