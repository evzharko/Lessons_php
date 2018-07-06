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
    echo "
          <style type=\"text/css\">
               Table {
                border: 1px solid black;
                border-collapse: collapse;
               }
               TD, TH {
                border: 1px #989898  solid; 
                text-align: center; 
                padding: 4px; 
               }
               TH {
                background: beige;
                height: 15px; 
                vertical-align: bottom; 
                padding: 0; 
               }
          </style>
          
          <table>
          <tr><th>DNS</th><th>IP</th><th>Port</th><th>NEW IP</th><tr>
";

foreach ($result as $row) {

    echo "
           <tr>
           <td>" . $row['dns'] . "</td>
           <td>" . $row['ip'] . "</td>
           <td>" . $row['port'] . "</td>
           <td><input value='' placeholder='new ip'></td>
           </tr>
           ";
}
    echo "</table>";
?>
