<?php
echo "Lesson 11.30 <br><br>";

$clas = 43;

echo "<pre>";

	for ($i = 1; $i < $clas; $i++) { 
	$array_j[$i] = rand(1,300);
}

//var_dump($array_j);

$sum_child = 0;

foreach ($array_j as $value) {
	$sum_child += $value;
}

if ($sum_child > 999) {
	$child = "Число учеников $sum_child это четырехзначное число";
} else {
	$child = "Число учеников $sum_child это трехзначное число";
}

echo "$child";
