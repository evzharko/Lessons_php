<?php
require_once "function/fun_cart.php";
echo $_SESSION['login'];


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
            <?php echo $errors['product']; ?>
            <select name="product">
                <option value="0">Вберите товар</option>
                <option value="1">Ботинки</option>
                <option value="2">Шлепки</option>
                <option value="3">Плавки</option>
            </select><br><br>
            Кол-во товара<br>
            <input type="number" min="0" name="count" required="required"/> <br><br>
            <button type="submit" name="checksumm">Посчитать сумму</button>
            <br><br> Сумма к оплате <?php $_SESSION['cart']['sum']; ?>
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
//var_dump($_POST['product']);
