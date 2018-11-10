<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 10.11.2018
 * Time: 9:41
 */

class Connect
{
    private static $link;
    public $host;
    public $login;
    public $password;
    public $database;

    /**
     * @return mysqli
     */
    public static function getInstance()
    {
        if (self::$link) {
            return self::$link;
        }
        self::$link = mysqli_connect('127.0.0.1', 'root', '', 'php27');

        if (mysqli_connect_error(self::$link)) {
            echo "Не удалось подключиться к MySQL " . mysqli_connect_error();
        }
        return self::$link;
    }
}

class Qb
{
    /** @var  mysqli */
    private $db;
    private $sql;
    private $select;
    private $from;
    private $where = 'WHERE 1=1 ';
    protected $table_name = '';

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb()
    {
        $this->db = Connect::getInstance();

    }

    /**
     * Qb constructor.
     */
    public function __construct()
    {
        $this->setDb();

        $this->from(strtolower(get_class($this)) . 's');
    }


    public function get()
    {

        if (empty($this->select)) {
            $this->select();
        }
        $this->sql = $this->select . $this->from;
//        var_dump($this->sql);die();
        $stmt = $this->db->stmt_init();
        $stmt->prepare($this->sql);
        $stmt->execute();
        /* привязываем результаты к переменным */
        $res = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        foreach ($res as $rowkey => $row) {
            foreach ($row as $key => $value) {
                $this->$key = $value;
            }
        }
        return true;
    }


    public function first()
    {

        if (empty($this->select)) {
            $this->select();
        }
        $this->sql = $this->select . $this->from .' LIMIT 1 ';
        $stmt = $this->db->stmt_init();
        $stmt->prepare($this->sql);
        $stmt->execute();
        /* привязываем результаты к переменным */
        $res = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        foreach ($res as $rowkey => $row) {
            foreach ($row as $key => $value) {
                $this->$key = $value;
            }
        }
        return true;
    }
    public function select(array $fields = [])
    {
        $this->select = 'SELECT ';
        if (empty($fields)) {
            $this->select .= '* ';
            return $this;
        }

        $this->select .= implode(',', $fields);

        return $this;
    }

    public function from($table)
    {
        $this->from = ' FROM ' . $table;

        return $this;
    }

    public function where(array $q)
    {

        foreach ($q as $key => $value) {
            $this->where = $key . '= ' . $value;
        }
    }
}

class User extends Qb
{
//    protected $table_name = 'users';

public function getInfo(){
    return $this->name.' '. $this->phone;
}
}

$user = new User();

$user->first();

echo $user->getInfo();
//echo $products;

/*$select = $db->select("Select * From products");
foreach ($select as $item) {
    echo $item['full_name'] . '<br>';

}
*/
