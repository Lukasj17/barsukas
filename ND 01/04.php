<!-- Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  -->

<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a + $b > $c && $a + $c > $b && $c + $b > $a) {
    echo "a = $a <br> b = $b <br> c = $c <br> Trikampi sudaryti galima";
} else {
    echo "a = $a <br> b = $b <br> c = $c <br> Trikampio sudaryti negalima";
}