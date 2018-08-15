<?php
echo "Lesson 11.19 <br><br>";

$array = [1,2,3,4,5];
$a = 20;
echo "<pre>";
 
echo "Определить сумму всех элементов массива <br>";
foreach ($array as $value) {
	//$value += $array[];
	echo $value;
}


echo "<br>";

echo "Увеличить на  число $a <br>";
foreach ($array as $value) {
	$value += $a;
	var_dump($value);
}

echo "<br>";

echo 'Разделить на первый элемент <br>';
foreach ($array as $value) {
	$value /= $array[1];
	var_dump($value);
}