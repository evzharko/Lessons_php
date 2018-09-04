<?php
require_once "function/fun_cart.php";
echo $_SESSION['login'];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = ['sum' => 0, 'items' => []];
}


?>
    <html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
    </head>

    <body>

    <div>
        <h1>Cart</h1>
        <form method="POST" action="">
            Кол-во товара <input type="number" min="0" name="count" required="required"/> <br><br>
            Цена товара <input type="text" name="price" required="required"/> <br><br>
            <button type="submit" name="submit">Посчитать сумму</button>
            <br><br> К оплате <?php $_SESSION['cart']['sum']; ?>
            <br><br>
        </form>
    </div>

    </body>
    </html>

<?php

/*if (isset($_POST['submit'])) {
    echo cart_sum($_POST['count'], $_POST['price']);
}*/
echo '<pre>';

