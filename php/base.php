<?php
  header('Content-type: text/html; charset=utf-8'); //Устанавливает кодировку на странице
  echo "Привет, <b>мир</b>! <br>";
  
  $name = "Василий";
  //За конкатенацию в php отвечает знак .
  echo "Привет, " . $name . "!" . "<br>";
  //Интерполяция (вставка перменных внутрь строки). В php можно вставлять переменные в "".
  $name = "Сергей";
  echo "Привет, $name!" . "<br>";
  //Переменные, содержащие названия других переменных
  $user = "name";
  echo "С вами снова ${$user}" . "<br>";
  
  //echo "<script>alert('Привет, мир!')</script>";
  
  echo 50 + 300 . "<br>";
  echo "50" + "300" . "<br>";
  echo "50" . "300";
  echo "abc" + "abc" . "<br>";
  
  //Основные конструкции
  //Условия
  
  $speed = 90;
  if ($speed <= 80) {
    echo "Проезжайте" . "<br>";
  } else if($speed > 80 && $speed < 120) {
    echo "Превышаете" . "<br>";
  } else {
    echo "Вас лишили прав!" . "<br>";
  }
  
  //Циклы
  $i = 0;
  while($i < 5) {
    echo $i . "<br>";
    $i++;
  }
  echo "<hr>";
  $i = 0;
  do {
    echo $i . "<br>";
    $i++;
  } while ($i > 100);
  echo "<hr>";
  for($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
  }
  echo "<hr>";
  
  //Функции
  echo summ(5) . "<br>";
  echo summ(5, 3) . "<br>";
  
  function summ($a, $b = 1) { //$b - необязательный параметр
    return $a + $b;
  }
  echo "<hr>";
  //Области видимости переменных
  //Внутри функций все переменные локальные. Остальные - глобальные.
  if (true) {
    $somevar = 42;
  }
  echo $somevar . "<br>";
  $anothervar = 13;
  
  someFunc();
  function someFunc() {
    global $anothervar; //Берем переменную из глобальной области видимости
    echo var_dump($somevar) . "<br>"; //NULL $somevar - локальная переменная для функции
    echo $anothervar . "<br>";
  }
  echo "<hr>";
  //Массивы
  $fruits = ["Яблоко", "Банан", "Виноград", "Груша", "Апельсин"];
  echo $fruits[0] . "<br>";
  echo "<hr>";
  //Переборка массива с помощью цикла for
  for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . ", ";
  }
  echo "<hr>";
  foreach($fruits as $fruit) {
    echo $fruit . ", ";
  }
  echo "<hr>";
  //Ассоциативные массивы
  $user = ["name" => "Василий", "lastname" => "Петров", "role" => "admin"];
  echo $user['name'] . "<br>";
  foreach($user as $key=>$value) {
    echo "<b>$key</b> : $value <br>";
  }
  
?>