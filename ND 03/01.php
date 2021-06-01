<!-- Naršyklėje nupieškite linija iš 400 “*”. 
1. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
2. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;  -->


<?php

echo '<h4>-------1.1--------</h4>';

$star = '';
$count = 0;


while ($count <= 400) {
    $star .= '*';
    $count++;
}


?>
<style>

span {
    display: inline-block;
    width: 100%;
    overflow-wrap: break-word;

}
</style>
<span><?php echo $star ?></span>

<?php

echo '<h4>-------1.2--------</h4>';

$star = '';

for ($i = 0; $i < 8; $i++){

$count = 0;

while ($count < 50) {
    $star .= '*';
    $count++;
} 
$star .= '<br>';
}
?>
<span><?php echo $star ?></span>
