<?php
echo "Lesson 11.37 <br><br>";

echo "<pre>";

	for ($i = 0; $i < 3; $i++) { 
	$array_j[$i] = rand(8,100);
}

var_dump($array_j);

$chet = 0;
echo "Четные элементы ";
for ($i = 0; $i < 3; $i++) { 

	if ($array_j[$i] % 2 == 0) {
	echo "$array_j[$i] ";
	}	
	
}

echo "<hr>";

$chet = 0;
echo "Все элемнты оканчивающиеся нулем ";
for ($i = 0; $i < 3; $i++) { 

	if ($array_j[$i] % 10 == 0) {
	echo "$array_j[$i] ";
	}	
	
}


