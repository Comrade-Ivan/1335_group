<?php
header('Content-type: text/html; charset=utf-8');
session_start();
require_once("components/db.php");
if ( !isset($_SESSION['id']) ) {
  exit("Недостаточно прав");  
}
$id = $_SESSION['id'];
if( isset($_POST['name']) ) {
  $columnName = "name";
  $newValue = htmlspecialchars( trim($_POST['name']) );
  if (empty($newValue) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `name`='$newValue' WHERE `id`='$id'";
} else if ( isset($_POST['lastname']) ) {
  $columnName = "lastname";
  $newValue = htmlspecialchars( trim($_POST['lastname']) );
  if (empty($newValue) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `lastname`='$newValue' WHERE `id`='$id'";
} else if ( isset($_POST['birthday']) ) {
  $columnName = "birthday";
  $newValue = htmlspecialchars( trim($_POST['birthday']) );
  if (empty($newValue) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `birthday`='$newValue' WHERE `id`='$id'";  
} else {
  exit("Неверные данные");
}

$result = $mysqli->query($sql);
if ($result) {
  $_SESSION[$columnName] = $newValue;
  exit("Данные обновлены");
} else {
  exit("Не удалось обновить данные");
}



