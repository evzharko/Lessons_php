<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 22.10.18
 * Time: 12:50
 * Создание нового номера
 */

require_once './sip_control.php';

foreach ($row_peers as $values) {

    $exceptions_sip[] = (int)$values['name'];
}

/*
Исключающие SIP номера
    100 - Входящие на Polygator(Work)
    137 - Входящие на Polygator(Satellites)
    200-.. - Группы созвездий
    400-.. - Голосовая почта, служебные номера
*/
array_push($exceptions_sip, 100, 137, ...range(200, 299), ...range(400, 499));

$array_range = range(101, 700); // Дипазон для поиска свободного sip номера
$array_diff_sip = array_diff($array_range, $exceptions_sip);

if (isset($_POST['create_users'])) {

    $fullname = $_POST['fullname'];
    $sip = $_POST['sip_peers_list'];
    $secret = $_POST['secret'];
    $mac_ip_phone = $_POST['mac_ip_phone'];
    $model_phone = $_POST['model_phone'];
    $sip_peers_list = $_POST['sip_peers_list'];
    $logo = $_POST['logo'];

    $query_insert_sip = 'INSERT INTO asterisk.sip_peers (fullname, name, secret, username, logo, mac_ip_phone, model_phone, pickupgroup, context, host, permit, callgroup, allow) 
            VALUE ('
        . "'" . $fullname . "'"
        . "," . "'" . $sip . "'"
        . "," . "'" . $secret . "'"
        . "," . "'" . $fullname . "'"
        . "," . "'" . $logo . "'"
        . "," . "'" . $mac_ip_phone . "'"
        . "," . "'" . $model_phone . "'"
        . "," . "'" . '1' . "'"
        . "," . "'" . 'reactor' . "'"
        . "," . "'" . 'dynamic' . "'"
        . "," . "'" . '10.10.0.0/20' . "'"
        . "," . "'" . '1' . "'"
        . "," . "'" . 'alaw;ulaw;gsm;g729;g723' . "'"
        . ');';

    $res = mysqli_query($link_asterisk, $query_insert_sip);

    /* Обработка ошибок при добавлении пользователя */
    if (mysqli_error($link_asterisk)) {
        $string_error = mysqli_error($link_asterisk);
    } else {
        $string_succesfull = 'Пользователь с номером ' . $sip . ' создан';
    }
}

?>

<a href="list_peers.php">Список номеров</a>
<p>
    <html>
    <form action="" method="post">
        Список свободных sip номеров <select name='sip_peers_list' id='select'>
            <?php foreach ($array_diff_sip as $values): ?>
                <option value="<?php echo $values ?>"><?php echo $values ?></option>
            <?php endforeach; ?>
        </select>
<p><input type="text" name="fullname" required placeholder="ФИО"></p>
<p><input type="text" name="secret" required placeholder="Пароль"></p>
<p><input type="text" name="mac_ip_phone" required placeholder="mac_ip_phone""></p>
<p><input type="text" name="model_phone" required placeholder="Модель телефона""></p>
<p><input type="text" name="logo" required placeholder="Логотип в телефоне""></p>
<p><input type="submit" name="create_users" value="Создать пользователя"></p>
<?php echo $string_error, $string_succesfull; ?>
</form>
</html>
