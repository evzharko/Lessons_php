<?php
echo "Lesson 11.21 <br><br>";

echo "<pre>";
	for ($i=1; $i < 32; $i++) { 
	$array_j[$i] = rand(0,10);
}

$sum = 0;

foreach ($array_j as $value) {
	$sum += $value; 
}

echo $sum;