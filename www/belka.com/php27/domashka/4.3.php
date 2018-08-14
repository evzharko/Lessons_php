<?php
echo "Lesson 4.3 <br><br>";

$x = rand(-6,6);
$y = rand(-6,6);

echo "x = " . $x . "<br> y = " . $y . "<br>";

if ($x > 4 && $y <> 0) {
    echo "Область 2";
} else {
    echo "Область 1";
}