<?php

session_start();

$login = $_POST['login'];

if ($login) {
    $_SESSION['login'] = $login;
}
