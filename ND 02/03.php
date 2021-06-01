<!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. -->

<?php

$name = 'Zach';
$surname = 'Galifianakis';
$initials = $name[0] . $surname[0];

echo "Aktoriaus inicialai - $initials";