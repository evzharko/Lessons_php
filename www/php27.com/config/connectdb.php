<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 19.10.2018
 * Time: 20:03
 */

$host = 'mysql';
$database = 'php27';
$login = 'root';
$password = 'password';

$mysqli = mysqli_connect($host, $login, $password, $database);

if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL " . mysqli_connect_error();
}

