<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 17.07.2018
 * Time: 22:34
 */
include "../config.php";

function Posts()
{
    require("../config.php");
    $query = "
SELECT 
	*
FROM
	posts";

    $stmt = $db->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt as $item) {
        /*$var = $item['title'];
        $var1 = $item['body'];
        return array('val' => $var, 'val1' => $var1);*/
        return $item;
    }

}
echo "<pre>";
/*echo "<pre>";
var_dump(Posts());*/
//var_dump($item);
var_dump(Posts());
Posts();



?>