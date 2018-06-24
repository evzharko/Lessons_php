<?
    require "config.php";

    $data = $_POST;

?>

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
    <form method="post" action="admin.php">
        <input type="email" name="usermail" placeholder="exmaple@email.com" required="required" />
        <input type="password" name="password" placeholder="password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

</body>
</html>