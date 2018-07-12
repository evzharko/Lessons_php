<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 05.07.2018
 * Time: 20:47
 */

ini_set('display_errors', true);
error_reporting(E_ALL);

$host = '192.168.0.33';
$dbname = 'zabbix';
$user = 'reactor';
$password = 'hwth5t3gq3hawgrger';

//$group = $_GET['g'] ?? null;

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $error) {
    echo $error->getMessage();
}

$query_group = "
SELECT 
	DISTINCT(gr.groupid), gr.name, tf.dns, tf.ip, INET_ATON (tf.ip) as ip1
FROM 
	hosts ho
JOIN hosts_groups hs ON hs.hostid=ho.hostid
JOIN groups gr ON gr.groupid=hs.groupid
JOIN interface tf ON tf.hostid=ho.hostid
WHERE 
	tf.ip LIKE '192.168.%'
ORDER BY ip1;
	";

$result_group = $db->query($query_group);

//Выводим список select
echo "<select name='group' id='select'>";

$array = [];
foreach ($result_group as $item_group) {
    //Зансоим в масив для следующего прохода foreach
    //Берем айди группы
    $group = $_GET["g"];
    $array[] = $item_group;
    //Select остаеться на той группе которая выбрана
    $selected = $group == $item_group['groupid'] ? 'selected' : null;
    //Для выбора группы
    echo "<option $selected value='{$item_group['groupid']}'>{$item_group['name']}</option>";
}


echo "</select>";

echo "
          <style type=\"text/css\">
               table {
                border: 1px solid black;
                border-collapse: collapse;
               }
               td, th {
                border: 1px #989898  solid; 
                text-align: center; 
                padding: 4px; 
               }
               th {
                background: beige;
                height: 15px; 
                vertical-align: bottom; 
                padding: 0; 
               }
          </style>
          <form method='post' action=''>
          <table>
          <tr><th>DNS</th><th>IP</th><th>NEW IP</th><tr>
";

foreach ($array as $row) {l

    //Сортируем данные группы
    if (!$group || ($group && $row['groupid'] == $group))
        echo "
           <tr>
           <td>" . $row['dns'] . "</td>
           <td>" . $row['ip'] . "</td>
           <td><input type='text' name='new_ip[{$row['ip']}]' placeholder='new ip'></td>
           </tr>
           ";
}
echo "</table></br><button type=\"submit\" name=\"change\">Внести изменения</button></form>";

if (isset($_POST['change'])) {

    $ips = (isset($change) && is_array($change)) ? $_POST['new_ip'] : [];
    $old_ip = $row['ip'];

    $query_update = "
UPDATE 
  interface 
SET";

  $update = $db->prepare($query_update);

  foreach ($ips as $ip=>$val){
      $qry.="$ip='$val'";
      echo $qry;
  }

  $qry.="Where ip = '':old_ip''";
    echo "<pre>";
    var_dump($_POST);


}

?>

    </br>

<?php
//Скриптом ловим айдишку и далее ловим ее GET
?>
    <script>
        document.getElementById('select').addEventListener('change', function (e) {
            document.location.href = '?g=' + e.target.value;
        })
    </script>

<?


?>