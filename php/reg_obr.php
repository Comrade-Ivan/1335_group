<?
header('Content-type: text/html; charset=utf-8');
//$_GET
$login = $_POST["login"]; //Принимаем данные
$password = $_POST["password"];
$passwordCheck = $_POST["password-check"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$birthday = $_POST["birthday"];
//$birthday = htmlspecialchars( trim($_POST["birthday"]) );
//Обрабатываем данные
$login = trim($login); //Обрезает пробелы справа и слева
$name = trim($name);
$lastname = trim($lastname);
$birthday = trim($birthday);

//Защищаемся от SQL-инъекции
$login = htmlspecialchars($login);
$password = htmlspecialchars($password);
$passwordCheck = htmlspecialchars($passwordCheck);
$name = htmlspecialchars($name);
$lastname = htmlspecialchars($lastname);
$birthday = htmlspecialchars($birthday);

//Валидация данных
//Проверяем, что поля не пустые
if (empty($login) || empty($password) || empty($passwordCheck) || empty($name) || empty($lastname) || empty($birthday)) {
  exit("Не все поля заполнены!"); //exit - return для файла
}

if (mb_strlen($login) < 3) { //mb_  - приставка для правильного подсчета длины строки с русскими символами
  exit("Слишком короткий логин");
}

if ($password != $passwordCheck) {
  exit("Пароли не совпадают");
}

//Функции для шифроки md5() crypt(). Для паролей password_hash().
$password = password_hash($password, PASSWORD_BCRYPT);
//Подключаемся к БД
//14:42 1:12:00
//&I4tSMxA
require_once("components/db.php");

//Ищем пользователя с таким-же логином
$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();
//fetch_assoc() возвращает первую строку найденных результатов в виде ассоциативного массива, или Null, если ничего не нашел
if( isset($result) ) {
  exit("Такой пользователь уже существует");
}
//Добавляем в базу данных
$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `birthday`) VALUES ('$login', '$password', '$name', '$lastname', '$birthday')");
//Все команды SQL, кроме SELECT, в качестве результата возвращают булевое значение
if ($result) {
  exit("Пользователь $name успешно добавлен");
} else {
  exit("Не удалось добавить пользователя");
}


