<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 18.10.18
 * Time: 16:10
 * Подклчюение к базам данных
 */

/* Подключение к серверу MySQL */
$link_asterisk = mysqli_connect(
    'saturn',  /* Хост, к которому мы подключаемся */
    'ubuntos',       /* Имя пользователя */
    'ubuntos',   /* Используемый пароль */
    'asterisk');     /* База данных для запросов по умолчанию */

if (!$link_asterisk) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$link_work = mysqli_connect(
    'test02db',  /* Хост, к которому мы подключаемся */
    'root',       /* Имя пользователя */
    'password',   /* Используемый пароль */
    'work-utf');     /* База данных для запросов по умолчанию */

if (!$link_work) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}


