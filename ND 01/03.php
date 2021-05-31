<!-- Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.  -->

<?php


$first = rand(0, 25);
$second = rand(0, 25);
$third = rand(0, 25);


if ($first < $second && $second < $third || $first > $second && $second > $third) {
    
    echo "vidurinis skaicius yra antras - $second";

} elseif ($second < $first && $first < $third || $second > $first && $first > $third) {
     
    echo "vidurinis skaicius yra pirmas - $first";
} elseif ($first < $third && $third < $second || $third < $first && $third > $second) {
    
    echo "vidurinis skaicius yra trecias - $third";
} elseif ($first == $second || $first == $third || $second == $third) {

    echo 'yra du vienodi skaiciai, negalima isrinkti vidurinio';
}


echo '<br>';
echo "pirmas random skaicius - $first <br>";
echo "antras random skaicius  - $second <br>";
echo "trecias random skaicius  - $third <br>";