<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.10.2018
 * Time: 12:23
 */

require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

$query_delete = 'DELETE FROM users WHERE id =' . $_GET['id'];

$res = mysqli_query($mysqli, $query_delete);


$res = mysqli_query($mysqli, $query_delete);
header('Location: ./products.php');


?>