<?php
echo "Lesson 11.19 <br><br>";

$array = [1, 2, 3];
$a = 20;
echo "<pre>";
var_dump(pow($array[2], 2));


//Генерим масив с слуйчайными числами
for ($i = 0; $i < 7; $i++) {
    $array1[$i] = rand(0, 5);
    print $array1[$i];
}
echo "<br>";

for ($i = 0; $i < 7; $i++) {
    $sum += $array1[$i];
}

echo 'Сумма элементов масива ' . $sum . '<br>';

//
$pro = 1;
for ($i = 0; $i < 7; $i++) {
    $pro *= $array1[$i];
}

echo 'Произведение элементов масива ' . $pro . '<br>';

//

for ($i = 0; $i < 7; $i++) {
    $sumk += pow($array1[$i], 2);
    
}
echo 'Сумма квадратов всех элементов масива ' . $sumk . '<br>';

for ($i = 0; $i < 6; $i++) {
    $sum6 += $array1[$i];
    
}
echo 'Сумма шести первых элементов ' . $sum6 . '<br><br>';

for ($i = 0; $i < 7; $i++) {
    $sum1 += $array1[$i];
    $avg = $sum1/7;
}

echo 'Среднее арифметическое всех элементов ' . $avg . '<br>';
