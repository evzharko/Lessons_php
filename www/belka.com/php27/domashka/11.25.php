<?php
echo "Lesson 11.25 <br><br>";

echo "<pre>";
	for ($i = 1; $i < 31; $i++) { 
	$array_j[$i] = rand(0,10);
}

//var_dump($array_j);

$sum_dekada_1 = 0;

for ($i = 1; $i < 11; $i++) {
    $sum_dekada_1 += $array_j[$i];
}

$sum_dekada_2 = 0;

for ($i = 11; $i < 20; $i++) {
    $sum_dekada_2 += $array_j[$i];
}

$sum_dekada_3 = 0;

for ($i = 20; $i < 30; $i++) {
    $sum_dekada_3 += $array_j[$i];
}

echo "За первую декаду $sum_dekada_1 <br>";
echo "За вторую декаду $sum_dekada_2 <br>";
echo "За третью декаду $sum_dekada_3 <br>";