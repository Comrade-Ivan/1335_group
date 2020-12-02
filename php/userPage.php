<?
  $id = $_GET['id'];
  require_once("components/db.php");
  $user = $mysqli->query("SELECT `id`, `login`, `name`, `lastname`, `birthday` FROM `users` WHERE `id`='$id'")->fetch_assoc();
  $title = "Страница пользователя";
  $links = "";
  $scripts = "";
  require_once("components/header.php")
?>
<div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center my-3">Страница пользователя</h1>
        </div>
        <div class="col-8">
          <?php if (isset($user)): ?>
            <p><span>ID: </span><span><?=$user['id']?></span></p>
            <p><span>Login: </span><span><?=$user['login']?></span></p>
            <p><span>Имя: </span><span><?=$user['name']?></span></p>
            <p><span>Фамилия: </span><span><?=$user['lastname']?></span></p>
            <p><span>Дата рождения: </span><span><?=$user['birthday']?></span></p>
          <?php else: ?>
            <p>Пользователь не найден</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
<?
  require_once("components/footer.php")
?>