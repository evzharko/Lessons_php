<?php
require_once "add_cart.php";
echo $_SESSION['login'];
$count = [];

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
            <?php echo $errors['count']; ?>
            Кол-во товара<br>
            <input type="number" min="0" name="count" required="required"/> <br><br>
            <button type="submit" name="checksumm">Посчитать сумму</button><br><br>
            <?php foreach ($_SESSION['cart']['items'] as $items) {
                $count[$items['name']] += $items['count'];
            };?>
            <br><br> Количество обуви:
            <table>
                <?php foreach ($count as $key => $keyCount) {
                    echo '<tr><td>'.$key.'</td><td>'.$keyCount.'</td></tr>'.'<br>';
                };?>
            </table>
            <br><br> Сумма к оплате <?php echo $_SESSION['cart']['sum']; ?>
            <br><br>
        </form>
    </div>

    </body>
    </html>

<?php
/*$orders = [
    [
        'name' => 'Ботинки',
        'count' => 5
    ],
    [
        'name' => 'Шлепки',
        'count' => 2
    ],
    [
        'name' => 'Ботинки',
        'count' => 4
    ],
];

$count['Ботинки'] += 5;
$count['Шлепки'] += 2;
$count['Ботинки'] += 4;

$count = [
        'Ботинки' => 9,
        'Шлепки' => 2

]*/;
/*
<?php
            foreach ($_SESSION['cart']['items'] as $items) {
                echo $items['name'];
            };
            ?>
*/
/*if (isset($_POST['submit'])) {
    echo cart_sum($_POST['count'], $_POST['price']);
}*/
echo '<pre>';
//var_dump($_SESSION['cart']['items']);
