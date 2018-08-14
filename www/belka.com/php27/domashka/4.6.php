<?php
echo "Lesson 4.6 <br><br>";

$a = rand(-1000,1000)/rand(1,100);
$b = rand(-1000,1000)/rand(1,100);

echo 'Первого числа ' . $a . "<br>";
echo 'Второго числа ' . $b . "<br><br>";

if ($a > $b) {
    $max = $a;
    $min = $b;
} else {
    $min = $a;
    $max = $b;
}

echo 'Самое большое (максимальное) : ' . $max;
echo '<br>';
echo 'Самое маленькое (минимальное) : ' . $min;