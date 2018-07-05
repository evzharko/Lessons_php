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

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $error) {
    echo $error->getMessage();
}

$query = "
SELECT 
	*
FROM 
	interface
WHERE 
	ip LIKE '192.168.%'
";
$result = $db->query($query);

foreach ($result as $row) {
    //printf ("%s   IP  %s </br>", $row['dns'], $row['ip']);
    echo "
          <style type=\"text/css\">
               TABLE {
                border: 1px solid black;
                border-collapse: collapse;
               }
               TD, TH {
                border: 1px solid black; 
                text-align: center; 
                padding: 4px; 
               }
               TH {
                background: darkgreen;
                height: 15px; 
                vertical-align: bottom; 
                padding: 0; 
               }
          </style>
          
          <table>
            <tr><th>DNS</th><th>IP</th><th>NEW IP</th><tr>
            <td>" . $row['dns'] . "</td><td>" . $row['ip'] . "</td><td><input value='' placeholder='new ip'></td>
            
          </table>";
}
?>