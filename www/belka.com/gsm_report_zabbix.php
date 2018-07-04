
<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
//!/usr/bin/php
// Генерируем отчет по задействованию gsm и ip-каналов по телефонии

// Подклчюение к базе данных

$host='192.168.0.12';
$database='asterisk';
$user='ubuntos';
$password='ubuntos';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $error){
    echo $error->getMessage();
}

$query =
    "
/*Вывод GSM-шлюзов*/
SELECT 
    peer_out, 
    dcontext, 
    minutes
FROM 
    peers_out_time_month 
WHERE 
    peer_out NOT LIKE 'beeline%' AND
    peer_out NOT LIKE 'inter%' AND
    peer_out NOT LIKE 'life%' 
    " ;

$query0 =
    "
/*Вывод айпи линий*/
SELECT 
    peer_out, 
    minutes 
FROM 
    peers_out_time_month 
WHERE 
    peer_out LIKE 'beeline%' OR
    peer_out LIKE 'inter%' OR
    peer_out LIKE 'life%'
    ";

$query1 =
    "
/*Вывод по коду оператора, города*/
SELECT 
    cod, 
    minutes
FROM 
    peers_out_time_month_detail

/*Кол-во входящих минут*/
UNION
SELECT 
    peer_in,
    minutes
FROM 
    peers_in_time_month 
Where 
    not peer_in = ''  
    ";

$result = $db->query($query);
$result0 = $db->query($query0);
$result1 = $db->query($query1);

// Вывод значений с базы.
$content = "";
    foreach ($result as $row):

        $content .= sprintf("saturn-vm %s_%s %s\n", $row['peer_out'],$row['dcontext'],$row['minutes']);
        //echo sprintf("saturn-vm %s_%s %s</br>", $row['peer_out'],$row['dcontext'],$row['minutes']);
        // В чем разница если echo выводяться какие-то цифры.
        //printf("saturn-vm %s_%s %s</br>", $row['peer_out'],$row['dcontext'],$row['minutes']);
    endforeach;

    foreach ($result0 as $row):

        $content .= sprintf("saturn-vm %s %s\n", $row['peer_out'],$row['minutes']);

    endforeach;

    foreach ($result1 as $row):

        $content .= sprintf("saturn-vm %s %s\n", $row['cod'],$row['minutes']);

    endforeach;

// Затирается файл, заносит новые знаения.
file_put_contents('/tmp/channels', $content);
$cmd = 'zabbix_sender -vv -z 192.168.0.33 -i /tmp/channels';
echo `$cmd`;

?>
