<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Сетка bootstrap</title>
    <style>
      [class*="col"] {
        border: 2px solid blue;
        box-sizing: border-box;
        background-color: lightblue;
        min-height: 150px;
      }
      [class*="col"]:nth-child(4n) {
        background-color: lightgreen;
      }
      [class*="col"]:nth-child(4n+1) {
        background-color: pink;
      }
      [class*="col"]:nth-child(4n+2) {
        background-color: cyan;
      }
      .numbers div {
        font-size: 5vw;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header class="container-fluid">
      <div class="row">
        <div class="col"></div>
      </div>
    </header>
    <main class="container">
      <div class="row"> <!--row - flex-container-->
        <div class="col"></div> <!--Занимает все свободное пространство-->
        <div class="col-2"></div> <!-- col-количество колонок которые он занимает (от col-1 до col-12)-->
        <div class="col-6"></div>
        <div class="col-2"></div>
        <div class="col-8"></div> <!--При переполнении следующие col просто спускаются на следующую строку-->
        <div class="col-4"></div>
        <div class="col-11"></div>
        <div class="col-6"></div>
      </div>
    </main>
    <footer class="container-fluid">
      <div class="row">
        <div class="col"></div>
      </div>
    </footer>
    
    <h2 class="my-5">row внутри col</h2>
    <div class="container">
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
          <div class="row">
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
          </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
      </div>
    </div>
    <h2>Выравнивания</h2>
    <div class="container">
      <div class="row justify-content-around align-items-center" style="height: 600px; background: lightgrey;">
        <!--Мы можем работать с row как с обычным flex-контейнером-->
        <div class="col-2"></div>
        <div class="col-2 align-self-start"></div>
        <div class="col-2 align-self-end"></div>
        <div class="col-2"></div>
      </div>
    </div>
    <h2>Адаптивная верстка на bootstrap</h2>
    <div class="container">
      <div class="row numbers">
        <!---->
        <div class="col-12 order-1 col-sm-6 col-md-4">1</div>
        <div class="col-12 order-2 col-sm-6 col-md-4">2</div>
        <div class="col-12 order-3 d-sm-none d-md-block col-md-4">3</div>
        <!--Отображение элементов
          d-{размер}-none - прячет элемент 
          d-{размер}-{block, inline, flex} - показываем элемент снова
        -->
        <div class="col-12 order-4 col-sm-6 col-md-3 col-lg-12">4</div>
        <div class="col-12 order-5 col-sm-6 col-md-6 offset-md-3 offset-lg-0 col-lg-6">5</div>
        <!--Отступы
          offset-{размер}-{кол-во колонок} - добавляем отступ от левого края
          offset-{размер}-0 - сбрасываем отступ
        -->
        <div class="col-12 order-6 col-sm-4 col-md-12 col-lg-6">6</div>
        <div class="col-12 order-7 col-sm-4 col-md-6 col-lg-12 order-lg-8">7</div>
        <div class="col-12 order-8 col-sm-4 col-md-6 col-lg-12 order-lg-7">8</div>
        <!--Порядок
          order-{размер}-{[1,12]} - порядок элемента на странице
          для простоты работы можно задать элементам изначальный order
        -->
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>