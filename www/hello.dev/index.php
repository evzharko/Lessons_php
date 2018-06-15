<?

# Lesson 8

  $str_1 = "Первая строка";
  $str_2 = "Вторая строка";
  echo $str_1." ".$str_2;

# Lesson 7

  echo "<br><br>";
  $x = 32;
  $y = 22.13;
  $summ = $x + $y;
  $diff = $x - $y;
  $mult = $x * $y;
  $delenie = $x / $y;
  echo  "Сумма из $x и $y = $summ <br>";
  echo  "Разница из $x и $y = $diff <br>";
  echo  "Умножение из $x и $y = $mult <br>";
  echo  "Деление из $x и $y = $delenie <br>";

  $z = 20;
  $y = 7;
  $ostatok = $z % $y;
  echo "Вывел остаток при делении $ostatok";
  echo "<br>";
  $q = 400;
  echo "$q <br>";
  $q += 10;
  echo "Прибавили еще 10 = $q <br>";
  $q++;
  echo "Прибивили +1 = $q <br>";

# Lesson 6
  echo "<br>";
  define("PI", 3.14);
  echo "<br>";
  echo PI;
  echo "<br>";
  echo defined("PI");
  echo "<br>";

# Lesson 5

  $myNumber = 45;
  $float = -3.25;
  $string = 'Строковая переменная';
  $bool = true;


  echo "Переменная muNumber = $myNumber <br>";
  echo "Переменная float = $float <br>";
  echo "Переменная string = $string <br>";
  echo "Переменная bool = $bool <br><br>";







  echo "<br>";
  if ($bool == true)
  {
      $myNumber = 1;
      $num2 = 2;
      $set = $myNumber + $num2;
      echo "Если значение верно $set";
  }
  else
	echo "Не верно";

?>
