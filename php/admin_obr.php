<?
header('Content-type: text/html; charset=utf-8');
session_start();
if( !isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
  header("Location: lk.php");
}
require_once("components/db.php");

$deleteID = $_GET['id'];
$login = $_GET['login'];

if (!$deleteID || $deleteID == 0) {
  exit("Некорректный ID");
}

$deleteUser = $mysqli->query("SELECT * FROM `users` WHERE `id`='$deleteID'")->fetch_assoc();
if (!isset($deleteUser) || $deleteUser['is_admin'] == 1) {
  exit("Некорректный ID");
}

$result = $mysqli->query("DELETE FROM `users` WHERE `id`='$deleteID'");
if ($result) {
  header("Location: admin.php");
} else {
  exit("Не удалось удалить пользователя");
}









