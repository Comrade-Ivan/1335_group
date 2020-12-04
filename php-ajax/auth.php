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
          <form action="auth_obr.php" method="POST" class="auth-form">
            <input type="text" class="form-control my-2" placeholder="Введите логин" name="login">
            <input type="password" class="form-control my-2" placeholder="Введите пароль" name="password">
            <p class="text-danger error-text"></p>
            <input type="submit" value="Войти" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
    <script>
      let authForm = document.querySelector(".auth-form");
      authForm.onsubmit = function(event) {
        event.preventDefault();
        sendForm(authForm);
      }
      function sendForm(form) {
        let formData = new FormData(form);
        fetch(form.action, {
          method: form.method,
          body: formData,
        })
          .then((response) => {
            if (response.ok) {
              return response.text();
            } else {
              console.error("Ошибка HTTP: " + response.status);
            }
          })
          .then((result) => {
            if(result == "ok") {
              location.href = "lk.php";
            } else {
              showErrorText(result);
            }
          })
      }
      
      
      function showErrorText(text) {
        let p = document.querySelector(".error-text");
        p.innerHTML = text;
      }
    </script>
<? require_once("components/footer.php"); ?>