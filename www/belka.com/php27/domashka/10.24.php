<?php
echo "Lesson 10.24 <br><br>";

$a = rand(1,100);
$b = rand(1,100);

//echo "$a <br> $b";

function vklid ($a, $b) {
	if ($a > $b) {
		$max = $a%$b;
	}else {
		$max = $b%$a;
	}
	return $max;
}

echo (vklid($a,$b));
