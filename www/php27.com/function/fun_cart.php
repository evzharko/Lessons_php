<?php

require_once "lib/work_sesion.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = ['sum' => 0, 'items' => []];
}

function cart_sum($count, $price)
{

    $str = (string)(int)$count;

    // Проверяем чтобы зашли только значения. Например 2,5 распознаст как строку, а 2.5 как дробное значения.
    if ($count !== $str) {
        echo 'Кол-во товара должно быть больше либо равно единице';
    } else {
        if ($count <= 0 || $price <= 0) {
            echo "Цена или кол-во товара не может быть меньше 0";
        } else {
            $sum = $count * $price;
            return "Сумма покупки " . $sum;
        }
    }

}


