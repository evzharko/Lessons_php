<?php

/*
 *
 * Файл ложим в папку /uploads/files/
 * Если папки нет создаем ее. Файл называем датой и временем его загрузки.
 *
 * */

ini_set('display_errors', true);
error_reporting(E_ALL);
// Путь куда сохранять картинки
$uploaddir = './uploads/files';
// Генерим имя файла
$nowdate = date('Ymdhm');

// Переменные для размеров картинок 600х200, 100х100, 200х200

// Проверим на ошибки
if (isset($_FILES['upload_avatart']))
{
// Имя файла в временной папке
$tmp_name = $_FILES['upload_avatart']['tmp_name'];
// Берем тип файла (jpeg, png, gif)
$file_name = pathinfo($_FILES['upload_avatart']['type']);
// Смотрим какую ошибку выдало при загрузке файла
$errorCode = $_FILES['upload_avatart']['error'];
// Берем разширение файла
$get_type = $file_name['filename'];
// Сохраням файл в паке с сгенерированым именем
$new_file_name = $nowdate . '.' . $get_type;
// Полный путь сохраненной картинки
$save_img_path = "$uploaddir/$new_file_name";


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
if (isset($_FILES['upload_avatart']))
{
    if (strpos($mime, 'image') === false)
        die ('Это не изображение');

}

// Переместим картинку с новым именем и расширением в папку /files
if (isset($_FILES['upload_avatart']))
{
    if (is_dir($uploaddir))
    {
        move_file($tmp_name,$save_img_path);
    } else
    {
        mkdir($uploaddir); // Создаем папку на сервере
        chmod($uploaddir, 0777); // Назначаем права 777 на папку
        move_file($tmp_name,$save_img_path);
    }
}

function move_file ($tmp_name, $uploaddir)
{
    if (move_uploaded_file($tmp_name, "$uploaddir"))
    {
        echo 'Файл успешно загружен на сервер.';
        chmod($uploaddir, 0777); // Назначаем права 777 на файл
        uploadResizeImages(600,200);

    } else
    {
        echo 'Не удалось записать файл на диск.';
    }
}


function uploadResizeImages ($width,$height)
{
    // Генерируем имя и путь откуда взять файл
    $uploaddir = './uploads/files';
    // Берем тип файла (jpeg, png, gif)
    $file_name = pathinfo($_FILES['upload_avatart']['type']);
    // Берем разширение файла
    $get_type = $file_name['filename'];
    // Генерим имя файла
    $nowdate = date('Ymdhm');
    // Сохраням файл в паке с сгенерированым именем
    $new_file_name = $nowdate . '.' . $get_type;
    $save_img_path = "$uploaddir/$new_file_name";

    if ($width=100)
    {
        $new_file_name_thum = "$uploaddir/thum_100_$new_file_name"; // Задаем путь и новое имя для изображения
    }
    if ($width=200)
    {
        $new_file_name_thum = "$uploaddir/thum_200_$new_file_name"; // Задаем путь и новое имя для изображения
    }
    if ($width=600)
    {
        $new_file_name_thum = "$uploaddir/thum_600_$new_file_name"; // Задаем путь и новое имя для изображения
    }

    $images = new Imagick($save_img_path); //Создаем копию оригинала картинки
    $images->adaptiveResizeImage($width,$height); // Задаем размер нового изображения
    $images->writeImage($new_file_name_thum); // Сохраняем изображение с новым именем
    $images->destroy();
    chmod($new_file_name_thum, 0777); // Назначаем права 777 на файл

}