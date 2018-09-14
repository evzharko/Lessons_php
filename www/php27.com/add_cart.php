<?php

if (isset($_POST['add_to_card']))
{
    if (isset($_SESSION['shopping_cart']))
    {
        $item_array_id = array_column($_SESSION['shopping_cart'], "item_id");
        if (!in_array($_GET['id'], $item_array_id))
        {
            $count = count($_SESSION['shopping_cart']);
            $item_array =
                [
                    'item_id' => $_GET['id'],
                    'item_name' => $_POST['hidden_name'],
                    'item_price' => $_POST['hidden_price'],
                    'item_quantity' => $_POST['quantity']
                ];
            $_SESSION['shopping_cart']['count'] = $item_array;
        } else
        {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else {
        $item_array =
            [
                'item_id' => $_GET['id'],
                'item_name' => $_POST['hidden_name'],
                'item_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['quantity']
            ];
        $_SESSION['shopping_cart'][0] = $item_array;
    }
}


/*
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
    }
if (empty($errors)) {
    $product = $products1[$product];
    $_SESSION['cart']['sum'] += $product['coast'] * $count;
    $_SESSION['cart']['items'][] = ['name' => $product['name'], 'count' => $count];
}*/
/*echo '<pre>';
var_dump($_POST);*/


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
