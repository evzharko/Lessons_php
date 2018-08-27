<?php
echo "Lesson 10.9 <br><br>";

$a = 2;
$b = 4;
$c = 4;
$p = $a+$b+$c;


function dlina ($p, $a, $b, $c) {
	$s = sqrt ($p*($p-$a)*($p-$b)*($p-$c));
	return $s;
}

echo "Периметр $p <br>" . (dlina($p,$a,$b,$c));
