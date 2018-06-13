<? 

#echo "$_SERVER['DOCUMENT_ROOT']<br>";
#echo "$_ENV['PWD']";

$one = 1;
$two = 1;

echo "Первая переменная ";
$res = $one + $two;
echo "$res <br>";

echo "Вторая переменная ";
$two = 2;
$res = $res + $two;

echo "$res <br>";
echo "Первая строка <br>";
echo "<b>Вторая жирная строка";

#phpinfo();
?>
