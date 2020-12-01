<?
  $title = "Регистрация";
  $links = "";
  $scripts = "";
  require_once("components/header.php");
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center my-3">Регистрация</h1>
        </div>
        <div class="col-8">
          <form action="reg_obr.php" method="POST">
            <input type="text" class="form-control my-2" placeholder="Введите логин" name="login">
            <input type="password" class="form-control my-2" placeholder="Введите пароль" name="password">
            <input type="password" class="form-control my-2" placeholder="Повторите пароль" name="password-check">
            <input type="text" class="form-control my-2" placeholder="Введите имя" name="name">
            <input type="text" class="form-control my-2" placeholder="Введите фамилию" name="lastname">
            <span>Дата рождения</span>
            <input type="date" class="form-control my-2" name="birthday">
            <input type="submit" value="Зарегистрироваться" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
<? require_once("components/footer.php") ?>