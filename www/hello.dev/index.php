<?

# new lessons https://www.youtube.com/watch?v=a6xtQQqx1tg&t=4702s

  $masiv = [1,2,3,4,5];
  echo "Вывод из масима " . $masiv[2];
  echo "<br \> <br \>";
  $f = [
      'name' => 'Abraham',
      'surname' => 'Zharko',
      'age' => 20,
      'byear' => 1996,
      'education' => [
          'school in 2003',
          'colleg in 2013'
      ] // многомерный массив
  ];
  echo "Использование var_dump <br /><br />";
  var_dump($masiv);
  echo "<br /><br />";
  echo $f['education'][0];
  echo "<br /><br />";
  echo $masiv[0];
  echo "<br /><br />";

  echo "Изучаю function <br />";
  function test_f($sum1, $sum2){
    $sumall = $sum1 + $sum2;
    return $sumall;
  };
  echo test_f(1,2);
  //var_dump(test_f(1,2));

  echo "<br /><br />";
  echo "Изучаю switch <br />";
  $var_switch = "apple";
  switch ($var_switch){
      case "apple":
          echo "Вывели apple";
          break;
      case "other":
          echo "Ничего не выводим";
          break;
      default;
            echo "Ничго не подошло";
            break;
  }

  echo "<br /><br />";
  echo "Изучаю switch + function <br />";

  switch (test_f(1,1)){
      case 1:
        echo "Сумма 1 + 1 = не подходит";
        break;
      case 2:
          echo "Сумма 1 + 1 = 2";
          break;
  };


  echo "<br /><br />";

  echo "Работа с foreach <br \>";
  foreach ($masiv as $masiv) {
    $masiv ++;
    echo "Выбирите цифру $masiv <br \>";
  }

  echo "<br /><br />";
  $my_varable = 100;
  echo $my_varable;


# Lesson 8

  echo "<br /><br />";
  $str_1 = "Первая строка <input type=\"text\" >";
  $str_2 = "Вторая строка";
  echo $str_1." ".$str_2." \" \\";
  echo "<br />";
  echo '"';

# Lesson 7
/*
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
*/
?>
