<?php


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = ['sum' => 0, 'items' => []];
}

$count = 1;

$errors = [];
if (!empty($_GET)) {
    if (isset($_GET['add_cart']) && $_GET['add_cart'] != 0) {
        $product = $_GET['add_cart'];
    } else {
        $errors['product'] = 'Выберите товар <br>';
    }
    /*if (isset($_GET['count']) && $_POST['count'] != 0) {

    } else {
        $errors['count'] = 'Выберите кол-во товара <br>';
    }*/
    if (empty($errors)) {
        $product = $products1[$product];
        $_SESSION['cart']['sum'] += $product['coast'] * $count;
        $_SESSION['cart']['items'][] = ['name' => $product['name'], 'count' => $count];
    }
    /*echo '<pre>';
    var_dump($_POST);*/

}
echo "<pre>";
var_dump($_GET['add_cart']);



/*
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

*/
