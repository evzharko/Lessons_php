<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 07.11.2018
 * Time: 20:44
 */

class Connect
{
    private static $link;
    public $host;
    public $login;
    public $password;
    public $database;

    /**
     * @param $host
     * @param $login
     * @param $password
     * @param $database
     * @return mysqli
     */
    public static function getInstance($host, $login, $password, $database)
    {
        if (self::$link) {
            return self::$link;
        }
        self::$link = mysqli_connect($host, $login, $password, $database);

        if(mysqli_connect_error(self::$link)){
            echo "Не удалось подключиться к MySQL " . mysqli_connect_error();
        }
        return self::$link;
    }
}

class Qb extends Connect
{

    public function execute($sql)
    {
        $login = 'root';
        $host = 'mysql';
        $password = 'password';
        $database = 'php27';

        $stmt = self::getInstance($host, $login, $password, $database)->prepare($sql);
        //var_dump('<pre>',$stmt->execute());
        return $stmt->execute();
    }

    public function select($sql)
    {
        $exe = $this->execute($sql);

        var_dump($sql);
        $result = mysqli_fetch_all($exe, MYSQLI_ASSOC);

        if($result === false){
            return [];
        }

        return $result;

    }

    public function update()
    {

    }

    public function insert()
    {

    }

    public function delete()
    {

    }
}

$db = new Qb();
$products = $db->select("Select * From products");
echo $products;

/*$select = $db->select("Select * From products");
foreach ($select as $item) {
    echo $item['full_name'] . '<br>';

}
*/
