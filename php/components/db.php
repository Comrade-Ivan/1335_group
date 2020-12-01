<?
$dbhost = "localhost"; //Адрес сервера
$dbuser = "ivandp_1335"; //Имя пользователя (логин)
$dbpass = "&I4tSMxA"; //Пароль от БД
$dbname = "ivandp_1335"; //Название БД
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД " . $mysqli->connect_error);
}