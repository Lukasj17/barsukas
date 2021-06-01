<!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. -->

<?php

$name = 'Zach';
$surname = 'Galifianakis';
$lastLetters = substr($name, -3) . ' ' . substr($surname, -3);

echo "Trys paskutines vardo ir pavardes raides - $lastLetters";