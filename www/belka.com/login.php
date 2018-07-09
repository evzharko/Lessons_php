<?php
require "config.php";


    if (isset($_POST['login_but']))
    {
        $login_but = $_POST['login_but'];
        $login = $_POST['usermail'];
        $password = md5($_POST['password']);
        //$errors = [];
        $user = "Select * From admin_users Where email = ? AND password = ?";
        $stmt = $db->prepare($user);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        /*$stmt->bindParam(1, $login);
        $stmt->bindParam(2, $password);
        */
        /* Второй варинат реализации
        $stmt->bindParam(":login", $login);
        $stmt->bindParam(":password", $password);
        */

        $stmt->execute(array($login,$password));
/* Почему не поллучается так?
    if ($stmt['email']=$login)
    {
        echo'1';
    }
*/
        if ($stmt->rowCount())
        {
            // Как в сессию всунуть сразу весь масив?
            $_SESSION['login_user']=$login;
            header('location: admin.php');
        }
        else
        {
            $errors[] = 'Логин или пароль введены не верно';
        }

        if (isset($errors) )
        {
            echo array_shift($errors);
        }
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login Control Panel</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>

<div class="login">
    <h1>Control Panel</h1>
    <form method="post" action="">
        <input type="email" name="usermail" placeholder="exmaple@email.com" required="required" />
        <input type="password" name="password" placeholder="password" required="required" />
        <button type="submit" name="login_but" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

</body>
</html>
