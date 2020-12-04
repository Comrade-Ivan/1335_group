<?php 
  session_start();
  if (!isset($_SESSION['id'])) {
    header("Location: auth.php");
  }
  $title = "Личный кабинет";
  $links = "";
  $scripts = "";
  require_once("components/header.php");
?>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center my-3">Личный кабинет</h1>
        </div>
        <div class="col-8">
          <p><span>ID: </span><span><?php echo $_SESSION['id']?></span></p>
          <p><span>Login: </span><span><?php echo $_SESSION['login']?></span></p>
          <p><span>Имя: </span><span><?php echo $_SESSION['name']?></span></p>
          <form action="lk_obr.php" method="POST">
            <input type="text" name="name" value="<?= $_SESSION['name']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
          </form>
          <p><span>Фамилия: </span><span><?= $_SESSION['lastname']?></span></p>
          <form action="lk_obr.php" method="POST">
            <input type="text" name="lastname" value="<?= $_SESSION['lastname']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
          </form>
          <p><span>Дата рождения: </span><span><?= $_SESSION['birthday']?></span></p>
          <form action="lk_obr.php" method="POST">
            <input type="date" name="birthday" value="<?= $_SESSION['birthday']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
<?php require_once("components/footer.php"); ?>