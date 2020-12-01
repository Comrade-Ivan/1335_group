<?
  $title = "Аутентификация";
  $links = "";
  $scripts = "";
  require_once("components/header.php");
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center my-3">Аутентификация</h1>
        </div>
        <div class="col-8">
          <form action="auth_obr.php" method="POST">
            <input type="text" class="form-control my-2" placeholder="Введите логин" name="login">
            <input type="password" class="form-control my-2" placeholder="Введите пароль" name="password">
            <input type="submit" value="Войти" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
<? require_once("components/footer.php"); ?>