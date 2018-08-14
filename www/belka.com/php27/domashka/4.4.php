<?php
echo "Lesson 4.4 <br><br>";

$x = rand(-6,6);
$y = rand(-6,6);

echo "x = " . $x . "<br> y = " . $y . "<br>";

if ($y > 2 && $x <> 0) {
    echo "Область 1";
} else {
    echo "Область 2";
}