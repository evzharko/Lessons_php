<?php
//После первого удаления товара в масим больше двух товаров не добавляется.

if (isset($_POST['add_to_card']))
{
    if (isset($_SESSION['shopping_cart']))
    {
        $count = ($_GET['id']);
        $item_array_id = array_column($_SESSION['shopping_cart'], 'item_id'); // Берем айди товара с масива если корзина существует.
        if (!in_array($_GET['id'], $item_array_id))
        {


            $item_array =
                [
                    'item_id'        => $_GET['id'],
                    'item_name'      => $_POST['hidden_name'],
                    'item_price'     => $_POST['hidden_price'],
                    'item_quantity'  => $_POST['hidden_quantity']
                ];
            $_SESSION['shopping_cart'][$count] = $item_array;
        } else
        {
//  Если товар в корзине выполянем дейсвия (сейчас говорим, что товар уже добавлен)
//  Нужно сделать чтобы кол-во добавляллось к уже существующему кол-ву.
            //echo '<script>alert("Item Already Item")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else // Если корзина не создана
    {

        $item_array =
            [
                'item_id'        => $_GET['id'],
                'item_name'      => $_POST['hidden_name'],
                'item_price'     => $_POST['hidden_price'],
                'item_quantity'  => $_POST['hidden_quantity']
            ];
        $_SESSION['shopping_cart'][$count] = $item_array;
    }
}

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'delete')
    {
        foreach ($_SESSION['shopping_cart'] as $key => $item)
        {
            if ($item['item_id'] == $_GET['id'])
            {
                unset($_SESSION['shopping_cart'][$key]);
                //echo '<script>alert("Item Removed ")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
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
