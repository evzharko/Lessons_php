<?
require "config2.php";
session_start();

    if (isset($_POST['login_but']))
    {
        $errors = [];
        $user = "Select * From belka.admin_users Where email = ?";
        $stmt = $db->prepare($user);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(1, $email);

        $email = 'ev.zharko@gmail.com';
        $stmt->execute();

        echo "<pre>";
        foreach ($stmt as $l){
            print_r($l);
        }
        if ($user)
        {
            // логин существует
            echo 'ok';
        } else
        {
            $errors[] = 'Такого пользователя не существует';
        }
        if ( ! empty($errors) )
        {
            echo array_shift($errors);
        }

    }

?>
<!--
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
-->