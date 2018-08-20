<?php
echo "Lesson 11.28 <br><br>";

$day = 3;

echo "<pre>";

	for ($i = 0; $i < $day; $i++) { 
	$array_j[$i] = rand(10,-10);
}

var_dump($array_j);

$sum = 0; 

foreach ($array_j as $value) {
	$sum += $value;
}

if ($sum > 0) {
	$polozhitelnoe = "Сумма элементов масима положительная $sum";
} else {
	$polozhitelnoe = "Сумма элементов масима отрицательная $sum";
}

echo $polozhitelnoe;
