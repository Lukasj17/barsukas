<!-- Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. -->


<?php

$beBalsiu = '';

$str1 = 'An American in Paris';
$str2 = "Breakfast at Tiffany's";
$str3 = '2001: A Space Odyssey';
$str4 = "It's a Wonderful Life";

$netinkamosRaides = array();
$netinkamosRaides [1] = '/a/';
$netinkamosRaides [2] = '/A/';
$netinkamosRaides [3] = '/e/';
$netinkamosRaides [4] = '/E/';
$netinkamosRaides [5] = '/I/';
$netinkamosRaides [6] = '/i/';
$netinkamosRaides [7] = '/o/';
$netinkamosRaides [8] = '/O/';
$netinkamosRaides [9] = '/u/';
$netinkamosRaides [10] = '/U/';
$netinkamosRaides [11] = '/Y/';
$netinkamosRaides [12] = '/y/';



$tinkamasVariantas1 = preg_replace($netinkamosRaides, $beBalsiu, $str1);
$tinkamasVariantas2 = preg_replace($netinkamosRaides, $beBalsiu, $str2);
$tinkamasVariantas3 = preg_replace($netinkamosRaides, $beBalsiu, $str3);
$tinkamasVariantas4 = preg_replace($netinkamosRaides, $beBalsiu, $str4);

echo $tinkamasVariantas1 . '<br>' . $tinkamasVariantas2 . '<br>' . $tinkamasVariantas3 . '<br>' . $tinkamasVariantas4;