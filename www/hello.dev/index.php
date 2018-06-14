<?

# Lesson 7

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

# Lesson 6

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
