<?php
    include_once('config.php');
    //Делаем разлогинивание, очищаем и удаляем сесию.
    unset($_SESSION['login']);
    session_destroy();
    header('location: login.php');

?>