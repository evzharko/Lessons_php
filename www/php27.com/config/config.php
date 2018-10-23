<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.10.2018
 * Time: 10:31
 */

require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'connectdb.php';
//define("update",$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'admin_panel' . DIRECTORY_SEPARATOR . 'update.php'); - не посню как
// писать правильно ч еременной для константы

$res = mysqli_query($mysqli, "SELECT * FROM users");

// all products
$row_all_assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);


