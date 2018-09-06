<?php

require_once "lib/work_sesion.php";
require_once "lib/products.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = ['sum' => 0, 'items' => []];
}

$product = $_POST['product'];https://youtu.be/i99_PgElHhs?t=7438

/*Вывод оишбок если товар или кол-во товара не было выбрано*/
function errorsPost ($_POST['product']){

}

$errors = [];
if (!empty($_POST)) {
    if (isset($_POST['product']) && $_POST['product'] != 0) {
        $product = $_POST['product'];
    } else {
        $errors['product'] = 'Выберите товар <br>';
    }
    if (isset($_POST['count']) && $_POST['count'] != 0) {
        $product = $_POST['count'];
    } else {
        $errors['count'] = 'Выберите кол-во товара <br>';
    }
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


