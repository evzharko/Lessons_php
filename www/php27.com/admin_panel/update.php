<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.10.2018
 * Time: 12:23
 */

require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

$id = $_GET['id'];

// update products
$query_select = 'SELECT * FROM users WHERE id =' . $id;

$res = mysqli_query($mysqli, $query_select);
$row = mysqli_fetch_assoc($res);

if (isset($_POST['update_users'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = 'UPDATE php27.users SET name =' . "'" . $name . "'" . ',' .
        'email =' . "'" . $email . "'" . ',' .
        'phone =' . "'" . $phone . "'" . ',' .
        'password =' . "'" . $password . "'" .
        'WHERE id =' . "'" . $id . "'";

    $res = mysqli_query($mysqli, $query);
    header('Location: ./products.php');
}

?>

<html>
<meta charset="utf-8">
<form action="" method="post">
    <p><input name="id" type="hidden" value="<?php echo $_GET['id'] ?>"></p>
    <p><input name="name" value="<?php echo $row['name'] ?>" placeholder="Имя"></p>
    <p><input type="email" value="<?php echo $row['email'] ?>" name="email" placeholder="email"></p>
    <p><input name="phone" value="<?php echo $row['phone'] ?>" placeholder="Телефон"></p>
    <p><input type="password" value="<?php echo $row['password'] ?>" name="password" placeholder="password"></p>
    <p><input type="submit" name="update_users" value="update"></p>
</form>
</html>