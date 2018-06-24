<?

/* В этом файле производим подключение к базе данных
   http://www.pixelcom.crimea.ua/pdo-dlya-php-i-mysql.html
*/

// Подклчюение к базе данных
$host='mysql';
$database='belka';
$user='root';
$password='password';

try {
    $db = new PDO("mysql:host=$host;database=$database",$user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}

if (!$db) {
    echo "<br>Ошибка подключения к базе данных";
}
