<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Регистрация</title>
  </head>
  <body>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>