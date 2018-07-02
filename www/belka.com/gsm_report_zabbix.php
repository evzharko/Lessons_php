#!/usr/bin/php
<?php
// Генерируем отчет по задействованию gsm и ip-каналов по телефонии

//define('MAIN_PATH', '/var/www/work-v3');

// Парсинг файла настроек

//$commonData = parse_ini_file(MAIN_PATH.'/_data/settings.ini', true);
// Подключение файла функций
//require MAIN_PATH.'/_data/common_functions.php';
// Подключае автозагрузчик наши классов в том числе и Twig
//require_once MAIN_PATH.'/_data/autoloader.php';

mb_internal_encoding('UTF-8');
setlocale(LC_ALL, 'ru_RU.UTF-8');

$host="127.0.0.1";
$user="ubuntos";
$pwd="ubuntos";
$db=mysql_connect($host,$user,$pwd);
mysql_select_db("asterisk",$db);
//$message= "<b>Исходящие звонки в текущем месяце</b><br>"; 
//$message.= "<br>GSM-каналы:<br>"; 
$result=mysql_query("SELECT peers_out_time_month.* FROM peers_out_time_month  WHERE peer_out NOT like 'beeline%' AND peer_out NOT like 'inter%'");
$n = mysql_num_rows($result);
//$message.= "|Шлюз | Направление | Время(мин) |";
for($i=0;$i<$n;$i++) $message.= "saturn-vm " .mysql_result($result,$i,peer_out). "_". mysql_result($result,$i,dcontext). " " .mysql_result($result,$i,minutes). "\r\n";

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
?>
