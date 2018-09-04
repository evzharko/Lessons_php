<?php

require_once "lib/work_sesion.php";
require_once "lib/products.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = ['sum' => 0, 'items' => []];
}
if (!empty($_POST)) {
    if (isset($_POST['product']) && $_POST['product'] != 0) {
        $product = $_POST['product'];
    } else {
        echo 'Выберите товар';
    }
    //https://youtu.be/i99_PgElHhs?t=7336
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


