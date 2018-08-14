<?php
//Сгенерировать случайно 2 масива чисел. Вывести совпадающие значения (те которые в обоих массивах) и те которые есть только во втором.
/*for($i=0;$i<2;$i++){
$array1[]=rand(0,5);
$array2[]=rand(0,5);
}

echo "Вывод первого масива </br>"	;
for($i=0;$i<2;$i++){
print $array1[$i];
print"<br>";
}
echo "<hr> Вывод второго масива </br>"	;

for($i=0;$i<2;$i++){
print $array2[$i];
print"<br>";
}

echo "<hr> Вывод совпадающих значений </br>"	;

$arr3=[];
foreach ($array1 as $value1) {
foreach ($array2 as $value2) {
if ($value1 === $value2){
$arr3[$value1] = $value1;
}
}
}

print_r($arr3);
*/

//Генерим двухмерный массив (матрицу), нужно найти сумму элементов выше главной диагонали
echo '<table border=1px>';
for ($i = 0; $i < 3; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 3; $j++) {
        $array1[$i][$j] = rand(0, 5);
        print '<td>' . $array1[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i < $j) {
            $sum += $array1[$i][$j];
        }
    }
}
echo $sum;


//echo $array1;
/*echo "<pre>";
var_dump($array_1);
*/


