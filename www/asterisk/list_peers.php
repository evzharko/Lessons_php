<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 22.10.18
 * Time: 14:43
 * Вывод существующих номеров, отображает участие в очередях звонков
 */

require_once './sip_control.php';
?>

<a href="new_peers.php">Добавить новый номер</a><p>
<a href="reboot.php">Сервис для перезагрузки телефонов</a>

<p>
<table border="1">
    <tr>
        <td>ФИО</td>
        <td>SIP номер</td>
        <td>Пароль</td>
        <td>Mac адрес телефона</td>
        <td>Обновить данные</td>
        <td>Удалить SIP</td>
        <td>Участие в очереди звонков</td>

    </tr>
    <tr>
        <?php foreach ($row_peers as $value): ?>
    <tr>
        <td><?php echo $value['fullname']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['secret']; ?></td>
        <td><?php echo $value['mac_ip_phone']; ?></td>
        <td><a href="update.phpd=<?php echo $value['id']; ?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
        <td><?php if (in_array($value['name'], $result_array)) {?>
                <input type="checkbox" value="queue" checked>
            <?php } else {?>
                <input type="checkbox" value="queue">
            <?php }; ?></td>
    </tr>
    <?php endforeach; ?>
    </tr>

</table>
