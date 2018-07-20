<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 17.07.2018
 * Time: 22:34
 */

function Top_Posts()
{
    global $db;

    $query = "
SELECT 
	*
FROM
	posts
WHERE 
    view > 0
ORDER BY view DESC";

    $stmt = $db->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;

//    foreach ($stmt as $item) {
//        //echo  $item['title'];
//        /*$var = $item['title'];
//        $var1 = $item['body'];
//        return array('val' => $var, 'val1' => $var1);*/
//        yield $item;
//    }

}
/*echo "<pre>";
echo "<pre>";
var_dump(Posts());
var_dump($item);
var_dump(Posts());*/

/*foreach (Posts() as $post)
{
    echo $post['title'];
    echo $post['body'];
}*/


?>