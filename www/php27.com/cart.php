<?php

require_once "function/fun_cart.php";

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
        Цена товара <input type="number" min="0" name="price" required="required"/> <br><br>
        <button type="submit"  name="submit">Посчитать сумму</button> <br><br>
        <?
        echo cart_sum($_POST['count'],$_POST['price']);
        ?>
    </form>
</div>

</body>
</html>

