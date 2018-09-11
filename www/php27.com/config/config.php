<?php
session_start();
/* В этом файле производим подключение к базе данных*/

// Подклчюение к базе данных
$host='mysql';
$database='belka';
$user='root';
$password='password';

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}
