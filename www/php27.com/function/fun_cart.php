<?php


function cart_sum($count, $price)
{
    if ($count != (int)$count) {
        echo 'Кол-во товара должно быть равно единице';
    } else {
        if ($count <= 0 || $price <= 0) {
            echo "Цена или кол-во товара не может быть меньше 0";
        } else {
            $sum = $count * $price;
            return "Сумма покупки " . $sum;
        }
    }

}
