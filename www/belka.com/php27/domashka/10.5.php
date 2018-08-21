<?php
echo "Lesson 10.5 <br><br>";

$x = 2;
$y = 3;

function si ($x) {
	if ($x < 0) {
		$x = -1;
	} else {
		$x = 1;
		return $x;
	}
	if ($x = 0) {
	   $x = 0;
	}  return $x;
}

echo (si($x))+$y;

//