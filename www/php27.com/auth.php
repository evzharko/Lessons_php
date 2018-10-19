<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.10.2018
 * Time: 11:22
 */
require_once './config/config.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $save = $_POST['save'];

//var_dump(date('Y-m-d H:i:s'));

    $query = 'INSERT INTO php27.users (name, email, phone, password, create_date, update_data)'
        . 'VALUES (' . "'" . $name . "'" . ','
        . "'" . $email . "'" . ','
        . "'" . $phone . "'" . ','
        . "'" . $password . "'" . ','
        . 'NOW()' . ','
        . 'NOW())';

    $res = mysqli_query($mysqli, $query);
}

var_dump(mysqli_error($mysqli));

?>

<html>
<form action="auth.php" method="post">
    <p><input name="name" placeholder="Имя"></p>
    <p><input type="email" name="email" placeholder="email"></p>
    <p><input name="phone" placeholder="Телефон"></p>
    <p><input type="password" name="password" placeholder="password"></p>
    <p><input type="submit" name="save" value="Save"></p>
</form>
</html>
