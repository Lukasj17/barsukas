<!-- Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. -->

<?php

$string = 'An American in Paris';
$noA = str_ireplace('a', "*", $string);

echo $noA;