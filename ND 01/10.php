<!-- Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. -->

<?php

$hours = rand(0, 12);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

echo "dabartinis laikas: $hours : $minutes : $seconds <br><br>";

$addedSeconds = rand(0, 300);

echo "Pridedamos sekundes: $addedSeconds";
