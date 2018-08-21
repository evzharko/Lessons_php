<?php
echo "Lesson 10.4 <br><br>";

$a = 3;
$b = 2;

if ($a > 3 * $b) {
	$r = 3 * $b;
} else {
	$r = $a;
}

if (2*($a-$b) > (2*$b)) {
	$r = 2 * $b;
} else {
	$r = (2 * $a) - $b;
}

echo "Без функции " . $r . "<hr>";


$x = 30;
$y = 20;

function min1 ($x, $y) {
	if ($x > $y) {
		return $x;
	} else {
		return $y;
	}
};

echo "С функцией Z = " . ((min1 ($x, 3 * $y)) * (min1 (2 * $a-$b, 2 * $b)));
//(min($x, 3 * $y)) min (2  $a-$b, 2 * $b);