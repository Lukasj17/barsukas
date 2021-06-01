<!-- Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. -->

<?php


$string = 'An American in Paris';
$totalA = substr_count(strtolower ($string), 'a');

echo $totalA;