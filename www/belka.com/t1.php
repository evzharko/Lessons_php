<?
require "config2.php";

$query = "Select * From belka.admin_users Where email = ?";
$stmt = $db->prepare($query);
$stmt->setFetchMode(PDO::FETCH_ASSOC); //Асоциативный масив
$stmt->bindParam(1, $email);

$email = 'i.belka@gmail.com';
$stmt->execute();

echo "<pre>";
foreach ($stmt as $l){
    print_r($l);
}

/*Вывести select
    $query = "SELECT * FROM belka.admin_users";
    $stmt = $db->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()){
        echo "<p>" . $row['email'] . " - " . ($row['password']);
    }

$query = "SELECT * FROM belka.admin_users";
$stmt = $db->prepare($query);
$stmt -> execute();
while($row = $stmt->fetch()) {
    print_r($row);
}
*/