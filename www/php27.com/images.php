<?php
require_once 'function/upload_img.php'
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name='upload_avatart'>
    <button>Загрузить фото</button>
    <pre>
        <?php var_dump($_FILES);?>
</form>
</body>
</html>
