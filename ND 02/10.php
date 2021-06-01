<!-- Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai. -->


<?php

$randomLetters = 'abcdefghijklmnopqrstuvwxyz' . 'ABCDEFGHIJKLMNOPRSTUVWXYZ';

$randomWord = str_shuffle($randomLetters);


echo  '3 atsitiktines raides: ' . $randomWord [1] . $randomWord [2] . $randomWord [3];