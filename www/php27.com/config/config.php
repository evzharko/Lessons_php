<?php
/* В этом файле производим подключение к базе данных*/
//require_once 'work_sesion.php';
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


$sql = "SELECT * FROM products";

$stmt = $db27->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);


/*Вывод айдишки товара */
$id = "SELECT id FROM products";

$id = $db27->query($id);
$id->setFetchMode(PDO::FETCH_ASSOC);

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