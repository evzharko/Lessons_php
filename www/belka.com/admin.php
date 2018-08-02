<?php
include_once('config.php');

if (isset($_SESSION['login_user'])) {
    $messages = "Добро пожаловать";
    //http://django-suit.readthedocs.io/en/develop/wysiwyg.html
} else {
    print 'Вы не авторизированы, <a href=\'login.php\'>авторизация</a>';
}
/*include_once('login.php');
 Как сюда вывести мея пользователя?
*/



?>

<link rel="stylesheet" href="css/style_admin_my.css">
<!--<link rel="stylesheet" href="css/bootstrap.css">-->
<?= $messages . " " . $_SESSION['login_user']; ?>

<div>
    <hr>
    <form>
        <table>
            <tr>
                <th>Картинка</th>
                <th>Дата</th>
                <th>Названи поста</th>
                <th>Содержимое поста</th>
                <th>Вывод поста</th>
            </tr>
            <?php foreach (Posts_admin() as $post_admin): ?>
                <tr>
                    <td>
                        <img src="<?= $post_admin['images']; ?>">
                    </td>
                    <td>
                        <?= $post_admin{'data_create'}; ?>
                    </td>
                    <td>
                        <?= $post_admin{'title'}; ?>
                    </td>
                    <td>
                        <?= $post_admin{'body'}; ?>
                    </td>
                    <td>


                    </td>
                </tr>

            <?php echo "<pre>"; var_dump($post_admin); ?>
            <?php endforeach; ?>
        </table>
    </form>
</div>

<?= "<a href='/logout.php'>Выйти</a>"; ?>










