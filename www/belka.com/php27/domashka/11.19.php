<?php
echo "Lesson 11.19 <br><br>";

$array = [1, 2, 3];
$a = 20;
echo "<pre>";

echo "Определить сумму всех элементов массива <br>";

for ($i = 0; $i < 3; $i++) {
    $array1[$i] = rand(0, 5);
    print $array1[$i];
}
echo "<br>";

for ($i = 0; $i < 3; $i++) {
    $sum += $array[$i];
}

echo 'Сумма элементов масива ' . $sum;

/*
foreach ($array as $key => $value) {
    $value += $array[$key];
    echo $value;
}*/