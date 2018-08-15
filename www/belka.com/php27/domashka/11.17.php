<?php
echo "Lesson 11.17 <br><br>";

$array = [1,2,3,4,5];
$a = 4;
echo "<pre>";

echo 'Умножили на 2 <br>';
foreach ($array as $value) {
	$value *= 2;
	var_dump($value);
}

echo "<br>";

echo 'Отняли 4 <br>';
foreach ($array as $value) {
	$value -= $a;
	var_dump($value);
}

echo "<br>";

echo 'Разделить на первый элемент <br>';
foreach ($array as $value) {
	$value /= $array[1];
	var_dump($value);
}

