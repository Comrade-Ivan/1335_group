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
          <form action="reg_obr.php" method="POST" class="reg-form">
            <input type="hidden" name="token" value="f8h3of483f348f">
            <input type="text" class="form-control my-2" placeholder="Введите логин" name="login">
            <input type="password" class="form-control my-2" placeholder="Введите пароль" name="password">
            <input type="password" class="form-control my-2" placeholder="Повторите пароль" name="password-check">
            <input type="text" class="form-control my-2" placeholder="Введите имя" name="name">
            <input type="text" class="form-control my-2" placeholder="Введите фамилию" name="lastname">
            <span>Дата рождения</span>
            <input type="date" class="form-control my-2" name="birthday">
            <p class="text-danger error-text"></p>
            <input type="submit" value="Зарегистрироваться" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
    <script>
      let regForm = document.querySelector(".reg-form");
      regForm.onsubmit = function(event) {
        event.preventDefault();
        sendForm(regForm);
      }
      
      function sendForm(form) {
        let formData = new FormData(form); //Формируем данные для отправки
        //console.log(formData.get("login"));
        fetch("reg_obr.php", { //Отправляем запрос
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if(response.ok) { //Проверяем, что статус ответа - 200
              return response.text();
            } else {
              console.error("Ошибка HTTP: " + response.status);
            }
          }) //Получаем ответ с сервера и декодируем его (раскодировка - тоже промис)
          .then((result) => {
            if (result == "ok") {
              alert("Пользователь успешно зарегистрирован!");
              location.href = "auth.php";
            } else {
              showErrorText(result);
            }
          }); //Получаем результат раскодировки
      }
      function showErrorText(text) {
        let p = document.querySelector(".error-text");
        p.innerHTML = text;
      }
    </script>
<? require_once("components/footer.php") ?>