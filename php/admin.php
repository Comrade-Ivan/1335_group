<?
  session_start();
  if( !isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
    header("Location: lk.php");
  } 
  $title = "Панель администратора";
  $links = "<link rel=\"stylesheet\" href=\"admin.css\">";
  $scripts = "";
  require_once("components/header.php");
  require_once("components/db.php");
  $result = $mysqli->query("SELECT `id`, `login`, `name`, `lastname`, `birthday`, `is_admin` FROM `users` WHERE 1");
  for($users = []; $row = $result->fetch_assoc(); $users[] = $row);
/*  $users = [];
  while($row = $result->fetch_assoc()) {
    $users[] = $row;
  }*/
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center my-3">Панель администратора</h1>
        </div>
        <div class="col-8 d-flex justify-content-center">
          <table border="1">
            <tr>
              <th>ID</th>
              <th>Login</th>
              <th>Имя</th>
              <th>Фамилия</th>
              <th>Дата рождения</th>
              <th>Управление</th>
            </tr>
            <?php foreach($users as $user): ?>
              <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['login']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['lastname']?></td>
                <td><?= $user['birthday']?></td>
                <td>
                  <a href="admin_obr.php?id=<?= $user['id'] ?>&login=<?= $user['login']?>" class="btn btn-danger btn-block my-2">Удалить</a>
                  <a href="userPage.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-block my-2">ЛК</a>
                </td>
              </tr>
            <?php endforeach;?>
          </table>
        </div>
      </div>
    </div>
<? require_once("components/footer.php") ?>