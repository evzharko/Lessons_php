<?
include ('config.php');

$res = $db->query("Select * from admin_users");
echo $res;
?>