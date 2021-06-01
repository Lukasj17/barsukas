<!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. -->

<?php

$name = 'Jim';
$surname = 'Carrey';

echo "Aktoriaus vardas - $name, o pavarde - $surname <br>";

if (strlen($name) < strlen($surname)) {
    echo "Nurodyto aktoriaus trumpesnis yra vardas - $name <br>";
} elseif (strlen($surname) < strlen ($name)){
    echo "Nurodyto aktoriaus trumpesne yra pavarde - $surname";
}
