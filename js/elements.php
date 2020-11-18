<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Работа с элементами</title>
    <style>
      .box, .box2 {
        height: 250px;
        width: 250px;
        border: 2px solid black;
        background-color: red;
      }
      
      .box2 {
        width: 20%;
        margin-top: 1em;
        position: relative;
        left: 0;
        transition: left .5s ease;
      }
      
      .active {
        border: 3px solid gold !important;
      }
    </style>
  </head>
  <body class="p-3">
    <h1>Работа с элементами</h1>
    <h2>Работа с внутренним содержимым</h2>
    <div class="inner-html">
      <p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. Quaerat, iusto?</p>
      <div class="html-add"></div>
    </div>
    <h2>Работа с атрибутами</h2>
    <div class="attr">
      <input type="text" placeholder="Введите текст">
      <img src="https://kot.sh/sites/default/files/styles/large/public/articles-image/25-prost-banana-preview.jpg?itok=fwYNew5Q" alt="">
      <a href="https://yandex.ru">Ссылка</a>
    </div>
    <div class="money-summ">
      <img src="../../905/coffee/img/100rub.jpg" alt="" cost="100" class="rub-100">
      <span>+</span>
      <img src="../../905/coffee/img/500rub.jpg" alt="" cost="500" class="rub-500">
      <span>=</span>
      <input type="text" class="result-input">
    </div>
    <h2>Работа со стилями</h2>
      <div class="box"></div>
      <div class="box2"></div>
    <h2>Работа с классами</h2>
    <div class="classes">
      <button class="btn btn-primary">Кнопка</button>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="elements.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>