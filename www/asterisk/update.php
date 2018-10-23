<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 18.10.18
 * Time: 15:00
 * Производится изменения данных пользователей
 */

require_once './config/config_asterisk.php';

$query_select = "SELECT * FROM sip_peers WHERE id =" . $_GET['id'];

$res_select = mysqli_query($link_asterisk, $query_select);
$row_select = mysqli_fetch_assoc($res_select);

if (isset($_POST['update_users'])) {

    $id = $_GET['id'];
    $fullname = $_POST['fullname'];
    $sip = $_POST['sip'];
    $secret = $_POST['secret'];
    $mac_ip_phone = $_POST['mac_ip_phone'];

    $query = 'UPDATE sip_peers SET fullname = ' . "'" . $fullname . "'" . "," .
        " name = " . "'" . $sip . "'" . "," .
        " secret = " . "'" . $secret . "'" . "," .
        " mac_ip_phone = " . "'" . $mac_ip_phone . "'" .
        " WHERE id = " . "'" . $id . "'";

    $res = mysqli_query($link_asterisk, $query);
    //var_dump($query);
    header('Location: sip_control.php');
}


?>

<html>
<form action="" method="post">
    <p><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"></p>
    <p><input type="text" name="fullname" value="<?php echo $row_select['fullname'] ?>"></p>
    <p><input type="text" name="sip" value="<?php echo $row_select['name'] ?>"></p>
    <p><input type="text" name="secret" value="<?php echo $row_select['secret'] ?>"></p>
    <p><input type="text" name="mac_ip_phone" value="<?php echo $row_select['mac_ip_phone'] ?>"></p>
    <p><input type="submit" name="update_users" value="update"></p>
</form>
</html>