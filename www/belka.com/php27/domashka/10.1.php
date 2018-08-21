<?php
echo "Lesson 10.1 <br><br>";

$a = 6;
$b = 6;
$c = 2;

$a1 = 13;
$b1 = 13;
$c1 = 2;

$a2 = 21;
$b2 = 21;
$c2 = 2;

function a ($a, $b, $c, $a1, $b1, $c1, $a2, $b2, $c2) {
	$x = ((sqrt ($a) + $b) / $c) 
	+ ((sqrt ($a1) + $b1) / $c1)
	+ ((sqrt ($a2) + $b2) / $c2);
	return $x;
};

echo "x = " . round((a($a, $b, $c, $a1, $b1, $c1, $a2, $b2, $c2))) . "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////////////////

$a = 5;
$b = 7;

$c = 12;
$d = 8;

$e = 31;
$g = 2;

function b ($a, $b, $c, $d, $e, $g) {
	$x = (($a) + sqrt ($a)) / ( sqrt ($b) + $b) 
	+ (($c) + sqrt ($c)) / ( sqrt ($c) + $d) 
	+ (($e) + sqrt ($e)) / ( sqrt ($g) + $g);
	return $x;
};

echo "x = " . round((b($a, $b, $c, $d, $e, $g))) . "<hr>";
