<!-- Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį. -->



<?php
$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';



echo 'Epizodo nr. ' . preg_replace('/[^0-9]/', '', $string);
