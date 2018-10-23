<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 12.10.18
 * Time: 12:24
 * Файл отвечает за удаленную перезагрузку телефонов
 */

if ($_POST['reboot'])
{

    foreach (range($_POST['ip_start'], $_POST['ip_finish']) as $number)
    {
        $username = '';
        $password = '';
        $URL = "http://10.10.8.$number/admin/reboot";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        $result = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
        curl_close($ch);

        if ($status_code === 200)
        {
            $succes_reboot = 'Телефон с IP 10.10.8.' . $number . ' перезагружен.<br>';
        } else
        {
            $fail_reboot = 'Телефон с IP 10.10.8.' . $number . ' не был перезагружены.<br>';
        }
    }
}

?>

<a href="list_peers.php">Список номеров</a><p>

<html>
<form action="" method="POST">
    <p><input type="text" name="ip_start" placeholder="Начальный ip диапазон"></p>
    <p><input type="text" name="ip_finish" placeholder="Конечный ip диапазон"></p>
    <p><input type="submit" value="Перегрузить телефоны" name="reboot"/></p>
    <?php echo $succes_reboot, $fail_reboot?>
</form>
</html>