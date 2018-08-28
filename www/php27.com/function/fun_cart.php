<?php

$count = 0;
$price = 0;
//$sum = 0;

function cart_sum($count, $price)
{
    if ($count < 0 || $price < 0 || is_float($count)) {
        echo "Цена или кол-во товара не может быть меньше 0";
    } else {
        $sum = $count * $price;
        return "Сумма покупки " . $sum;
    }

}
