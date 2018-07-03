
<?php
//!/usr/bin/php
// Генерируем отчет по задействованию gsm и ip-каналов по телефонии

// Подклчюение к базе данных

$host='saturn';
$database='asterisk';
$user='ubuntos';
$password='ubuntos';

try {
    $db = new PDO("mysql:host=$host;database=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $error){
    echo $error->getMessage();
}

$query0 = "SELECT * FROM" . " " . $database . ".peers_out_time_month WHERE peer_out NOT like 'beeline%' AND peer_out NOT like 'inter%'" ;
$query1 = "SELECT * FROM" . " " . $database . ".peers_out_time_month WHERE peer_out like 'beeline%' OR peer_out like 'inter%'" ;
$result = $db->query($query0);
$result = $db->query($query1);

// Проверка, если есть значения выполнять код дальше.
//if ($result->rowCount() > 0)
// Вывод значений с базы.
    foreach ($result as $row) {
    echo "saturn-vm " . $row['peer_out'] . "_" . $row['dcontext'] . " " . $row['minutes'] . '</br>';
   }



/*

$result_new=mysql_query("SELECT peers_out_time_month.* FROM peers_out_time_month WHERE peer_out like 'beeline%' OR peer_out like 'inter%'");
$n = mysql_num_rows($result_new);
for($i=0;$i<$n;$i++) $message.= "saturn-vm " .mysql_result($result_new,$i,peer_out). " " .mysql_result($result_new,$i,minutes). "\r\n";

$result2=mysql_query("SELECT peers_out_time_month_detail.* FROM peers_out_time_month_detail");
$n = mysql_num_rows($result2);

//$message.= "| Код | Оператор/Город | Время(мин) |";

for($i=0;$i<$n;$i++) $message.= "saturn-vm ".mysql_result($result2,$i,cod).  " " .mysql_result($result2,$i,minutes)."\r\n";

$result3=mysql_query("SELECT peers_out_time_month_ip.* FROM peers_out_time_month_ip");
$n = mysql_num_rows($result3);

//$message.= "<br>ip-каналы:<br>"; 
//$message.= "| Город | Время(мин) |";

for($i=0;$i<$n;$i++) $message.= "saturn-vm ".mysql_result($result3,$i,name_old). " " .mysql_result($result3,$i,minutes). "\r\n";

//$message.= "</table>";
//$message.= "<br>Подробнo:<br>"; 

$result4=mysql_query("SELECT peers_out_time_month_ip_detail.* FROM peers_out_time_month_ip_detail");
$n = mysql_num_rows($result4);

//$message.= "| Номер | Канал | Город | Время(мин) |";

for($i=0;$i<$n;$i++) $message.= "saturn-vm ".mysql_result($result4,$i,number)."_".mysql_result($result4,$i,peer_name)." ".mysql_result($result4,$i,minutes)."\r\n";

//$message.= "<br><b>Входящие звонки</b><br>";

$result5=mysql_query("SELECT peers_in_time_month.* FROM peers_in_time_month Where not peer_in = ''");
$n = mysql_num_rows($result5);

//$message.= "<tr><td><b>Шлюз/ip-канал</b></td><td><b>Время(мин)</b>";

for($i=0;$i<$n;$i++) $message.= "saturn-vm ".mysql_result($result5,$i,peer_in). " " .mysql_result($result5,$i,"time(min)")."\r\n";

 file_put_contents('/tmp/channels', $message);
 $cmd = 'zabbix_sender -vv -z 192.168.0.33 -i /tmp/channels';
 echo `$cmd`;
*/
?>
