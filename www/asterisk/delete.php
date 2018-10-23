<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 18.10.18
 * Time: 15:00
 * Удаляет номера с базы
 */

require_once './sip_control.php';

$query_delete = "DELETE FROM sip_peers WHERE id =" . $_GET['id'];

$res = mysqli_query($link_asterisk, $query_delete);

header('Location: ./list_peers.php')

?>