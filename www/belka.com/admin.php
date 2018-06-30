<?php
include_once('config.php');

if (isset($_SESSION['login_user']))
    {
        echo 'Добро пожаловать' . " " .$_SESSION['login_user'];
        echo "<hr>";
        echo "<a href='/logout.php'>Выйти</a>";

        //http://django-suit.readthedocs.io/en/develop/wysiwyg.html
    }



    else
{
    print 'Вы не авторизированы, <a href=\'login.php\'>авторизация</a>';
}
/*include_once('login.php.php');
 Как сюда вывести мея пользователя?
*/
?>





