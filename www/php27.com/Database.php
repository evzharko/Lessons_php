<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 07.11.2018
 * Time: 20:44
 */

class Database
{
    private static $link;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        self::connect();
    }

    /**
     * @return mysqli
     */
    public function connect()
    {
        if (self::$link) {
            return self::$link;
        }
        self::$link = mysqli_connect("mysql", "root", "password", "php27");
        return self::$link;
    }
}

class Qb extends Database
{

    public function select($sql)
    {
        $res = mysqli_query($this->connect(), $sql);
        $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
        return $row;
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

$select = $db->select("Select * From products");
foreach ($select as $item) {
    echo $item['full_name'] . '<br>';

}

