<?php

session_start();

$login = $_POST['login'];

$_SESSION['login'] = $login;