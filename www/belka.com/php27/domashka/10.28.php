<?php
echo "Lesson 10.28 <br><br>";

$string1 = 'ннн';
$string2 = 'Привет, у учеников сегодня праздник';
$need   = 'н';

$pos      = strripos($string1, $need);

if ($pos === false) {
    echo "К сожалению, ($needle) не найдена в ($string1)";
} else {
    echo "Найдено ($need) ($pos) раз";
}