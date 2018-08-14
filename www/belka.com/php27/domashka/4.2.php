<?php
echo "Lesson 4.2 <br><br>";

$x = rand(-2, 2);
echo "x = " . $x . "<br>";

if ($x > 0) {
    $y = sin(pow($x, 2));
} else {
    $y = 1 + (2 * pow(sin($x), 2));
}
echo "y = " . $y;