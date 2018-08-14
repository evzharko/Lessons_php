<?php
echo "Lesson 4.5 <br><br>";

echo "Рисунок a <br><br>";
$xa = rand(0, 5);
$ya = 2;

if ($xa > 2) {
    $ya1 = $ya;
} else {
    $ya1 = $xa;
}

echo "При значении x = " . $xa . "<br>";
echo "Получаем значение y = " . $ya1 . "<hr><br>";

/////////////////////////////////////////////////////////////////////

echo "Рисунок b <br><br>";

$xb = rand(0,5);
$yb = -3;

if ($xb > 3) {
    $yb1 = $yb;
}else{
    $yb1 = -$xb;
}

echo "При значении x = " . $xb . "<br>";
echo "Получаем значение y = " . $yb1;