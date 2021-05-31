<!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->


<?php

$name = 'Lukas';
$surname = 'Juskenas';
$birthDate = '1996';
$todaysDate = '2021';

echo "As esu $name $surname, man yra " . $todaysDate - $birthDate . ' metai';