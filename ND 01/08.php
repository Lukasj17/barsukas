<!-- Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. -->

<?php

$price = 1;
$candleCount = rand(5, 3000);
$lotPrice = $price * $candleCount;

if ($candleCount > 1000 && $candleCount < 2000) {
    $price = $price * 0.97;
}
if ($candleCount > 2000) {
    $price = $price * 0.94;
}

echo "Jei perkame $candleCount zvakiu, tai vienos zvakes kaina bus $price <br>" . "Jei perkame $candleCount zvakiu, tai visu zvakiu kaina bus " . $candleCount * $price . '€' ;
