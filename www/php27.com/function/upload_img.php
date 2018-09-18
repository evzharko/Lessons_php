<?php

/*
 *
 * Файл ложим в папку /uploads/files/
 * Если папки нет создаем ее. Файл называем датой и временем его загрузки.
 *
 * */

// Имя файла в временной папке
$tmp_name = $_FILES['upload_avatart']['tmp_name'];
// Берем тип файла (jpeg, png, gif)
$file_name = pathinfo($_FILES['upload_avatart']['type']);
// Берем разширение файла
$get_type = $file_name['filename'];
// Смотрим какую ошибку выдало при загрузке файла
$errorCode = $_FILES['upload_avatart']['error'];

// Путь куда сохранять картинки
$uploaddir = './uploads/files';
// Генерим имя файла
$nowdate = date('Ymdhm');
// Сохраням файл в паке с сгенерированым именем
$new_file_name = $nowdate . '.' . $get_type;
// Полный путь сохраненной картинки
$save_img_path = "$uploaddir/$new_file_name";

// Переменные для размеров картинок 600х200, 100х100, 200х200
$new_width_100 = 100;
$new_height_100 = 100;

$new_width_200 = 200;
$new_height_200 = 200;

$new_width_600 = 600;
$new_height_600 = 600;

// Проверим на ошибки
if ($_FILES['upload_avatart'])
{
    if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($tmp_name)) {

        // Массив с названиями ошибок
        $errorMessages = [
            UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
            UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
            UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
            UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
            UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
            UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
            UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
        ];

        // Зададим неизвестную ошибку
        $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';

        // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
        //$outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
        if (isset($errorMessages[$errorCode]))
        {
            $outputMessage = $unknownMessage;
        }
        // Выведем название ошибки

        var_dump($_FILES);
        die($outputMessage);
    }
}

// Возвращает mime-тип
$finfo = finfo_open(FILEINFO_MIME_TYPE); // возвращает mime-тип

if (!$finfo) {
    echo "Открытие базы данных fileinfo не удалось";
    exit();
}

// Получим MIME-тип
if (isset($tmp_name))
{
    $mime = (string) finfo_file($finfo, $tmp_name);
}

//Закрываем ресурс
finfo_close($finfo);

// Проверим ключевое слово image (image/jpeg, image/png и т. д.)
if ($_FILES['upload_avatart'])
{
    if (strpos($mime, 'image') === false)
        die ('Это не изображение');

}

// Переместим картинку с новым именем и расширением в папку /files
if ($_FILES['upload_avatart'])
{
    if (is_dir($uploaddir))
    {
        if (move_uploaded_file($tmp_name, "$uploaddir/$new_file_name"))
        {
            echo 'Файл успешно загружен на сервер.';
            chmod($save_img_path, 0777); // Назначаем права 777 на файл
            //var_dump(getimagesize($save_img_path));
        } else
        {
            echo 'Не удалось записать файл на диск.';
        }
    } else
    {
        mkdir($uploaddir); // Создаем папку на сервере
        chmod($uploaddir, 0777); // Назначаем права 777 на папку

        if (move_uploaded_file($tmp_name, "$uploaddir/$new_file_name"))
        {
            echo 'Файл успешно загружен на сервер.';
            chmod($save_img_path, 0777); // Назначаем права 777 на файл
        } else
        {
            echo 'Не удалось записать файл на диск.';
        }
    }
}

//Изменяем размер картинки
$im = '111.jpg';
list($old_width,$old_height) = getimagesize($save_img_path);

$thumb = imagecreatetruecolor($new_width_100, $new_height_100);
$source = imagecreatefromjpeg($save_img_path);

imagecopyresized($thumb, $source, 0, 0, 0, 0, $new_width_100, $new_height_100, $old_width, $old_height);

echo '<pre>';

//imagejpeg($thumb);
move_uploaded_file($save_img_path, "$uploaddir/$im");
//var_dump(move_uploaded_file($thumb, "$uploaddir/$im"));



//var_dump(list($old_width,$old_height) = getimagesize($save_img_path););

