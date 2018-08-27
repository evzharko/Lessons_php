<?php

echo $_POST['login'];

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Auth Users</title>
    <link href="css/style_admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>

<div class="login">
    <h1>Auth Users</h1>
    <form method="POST" action="">
        <input type="text" name="login" placeholder="example" required="required"/>
        <input type="password" name="password" placeholder="password" required="required"/>
        <button type="submit" name="login_but" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

</body>
</html>
