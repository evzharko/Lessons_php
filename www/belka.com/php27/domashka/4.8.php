<?php
echo "Lesson 4.8 <br><br>";

$varkmf = 'футах';
$varkm = 'километрах';
$km = rand(1,100);
$fut = rand(1,1000000);

echo "Растояние в километрах : " . $km . "<br>";
echo "Растояние в футах : " . $fut . "<br>";

$metr = $fut*0.305;
$kmf = $metr/1000;

echo "Растояние в километрах (переведено из футов) : " . round($kmf) . "<br><br>";

if ($kmf > $km){
    $max = $kmf;
    $max = "Растояние ф " . $varkmf . " больше чем растояние в " . $varkm;
} else {
    $min = $kmf;
    $min = "Растояние в " . $varkm . " больше чем растояние в " . $varkmf;
}

echo $max;
echo $min;


