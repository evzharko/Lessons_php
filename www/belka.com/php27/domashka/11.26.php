<?php
echo "Lesson 11.26 <br><br>";

$day = 29;

echo "<pre>";
	for ($i = 1; $i < $day; $i++) { 
	$array_j[$i] = rand(0,5);
}

//var_dump($array_j);

$sum = 0;
$avg = 0;

foreach ($array_j as $value) {
	$sum += $value;
	$avg = round($sum/28,2);
}

echo "Сумма за месяц $sum <br>";
echo "Среднее за месяц $avg <br>";
