<?
session_start();
header('Content-type: text/html; charset=utf-8');


$login = htmlspecialchars( trim($_POST['login']) );
$password = htmlspecialchars( trim($_POST['password']) );

if (empty($login) || empty($password)) {
  exit("Не все поля заполнены!");
}

require_once("components/db.php");

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();

if (isset($result) && password_verify($password, $result['password'])) {
  $_SESSION['id'] = $result['id'];
  $_SESSION['login'] = $result['login'];
  $_SESSION['name'] = $result['name'];
  $_SESSION['lastname'] = $result['lastname'];
  $_SESSION['birthday'] = $result['birthday'];
  $_SESSION['is_admin'] = $result['is_admin'];
  header("Location: lk.php");
  //exit("<script>location.href = 'lk.php'</script>");
  //exit("Пользователь успешно вошел");
} else {
  exit("Неверный логин или пароль");
}


