<?php
/* В этом файле производим подключение к базе данных*/

// Подклчюение к базе данных
$host = 'mysql';
$database = 'php27';
$user = 'root';
$password = 'password';

try {
    $db27 = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $db27->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}


sql = "SELECT * FROM products";

$stmt = $db27->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

foreach ($stmt as $item) {
    echo '<pre>' . $item['short_name'];
}

/*function query()
{

    $sql = "Select * from products";

    $stmt = $db27->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
    var_dump($stmt);
}*/


//echo connect();
//echo query('Select * from products');