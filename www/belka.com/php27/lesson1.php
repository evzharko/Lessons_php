<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 13.08.2018
 * Time: 20:18
 */


// Вывести 2 двухзначных слайчайных числа и подсчитать их сумму, разницу и произведения


$a = rand (10,99);
$b = rand (10,99);
$c = rand (10,99);
echo "$a </br> $b";
echo "<hr>";
$sum = $a+$b;
$mnog = $a*$b;

$dev = $b-$a;
if ($a>$b) {
	$dev = $a-$b;
}

echo "$a, $b, $c";

if ($a<$b) {
	$max = $b;
	$min = $a;
} else {
	$max = $a;
	$min = $b;
}

if ($c>$max){
	$max = $c;
}

if ($c<$min){
	$min = $c;
}

$avg = round(($a+$b+$c)/3);
/*echo "<hr>";
if ($a%2==0) {
	echo $a;
}
echo "<hr>";
if ($b%2==0) {
	echo $b;
}
echo "<hr>";
if ($c%2==0) {
	echo $c;
}

$chet = $a%2;
 */
echo "<hr>";

echo "Корзина <br>";

$sum_k = ($a+$b+$c);
if ($sum_k>100){
	$sum_k *= 0.95;
}
echo "<hr>";

echo "Определить высокосный год <br>";
$year = 1704;

$first =$year%400 == 0;
$second = $year%100 == 0;
$three = $year%4 == 0;

if($first||(!$first&&!$second&&$three) ){
	echo "Год высокосный";
}
else{
	echo "Год не высокосный";
}
/*
if ($first){
	echo $year;
} elseif ($second) {
	echo "Год не высокосный";
}
elseif ($three) {
	echo "Год высокосный";
} else {
	echo "Год не высокосный";
}
*/


?>

<div>
Сумма <?php echo $sum. ' ' . '</br>'; ?>
Разница <?php echo $dev. ' ' . '</br>'; ?>
Умножение <?php echo $mnog. ' ' . '</br>'; ?>

Максимальное значение a,b <?php echo $max. ' ' . '</br>'; ?>
Минимальное значение b,c <?php echo $min. ' ' . '</br>'; ?>
Среднее значение a,b,c <?php echo $avg. ' ' . '</br>'; ?>
Процент <?php echo $sum_k. ' ' . '</br>'; ?>

</div>
