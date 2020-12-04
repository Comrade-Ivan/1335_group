<?
session_start();
if( !isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
  $response = ["status" => "fail", "message" => "Недостаточно прав"];
  $response = json_encode($response);
  exit($response);
} 
require_once("components/db.php");
$result = $mysqli->query("SELECT `id`, `login`, `name`, `lastname`, `birthday`, `is_admin` FROM `users` WHERE 1");
for($users = []; $row = $result->fetch_assoc(); $users[] = $row);
$users = json_encode($users); //Кодируем в JSON
//$json = $_POST['data'];
//json_decode($json, true); //Раскодировать из JSON
exit($users);