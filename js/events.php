<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>События и слушатели событий</title>
    <style>
      .complex-button {
        background-color: rgba(0, 0, 0, .7);
        border-radius: 75px;
        border: 2px solid black;
        cursor: pointer;
        margin-top: 1em;
      }
      .complex-button img {
        height: 150px;
        border-radius: 50%;
        background-color: white;
      }
      .complex-button span {
        color: white;
        font-size: 3em;
      }
      
      .complex-button:hover {
        background-color: rgba(75, 75, 75, .7);
      }
    </style>
  </head>
  <body class="p-3">
    <h1>События и слушатели событий</h1>
    <table border="1">
      <tr>
        <th class="p-4">С помощью атрибута HTML</th>
        <th class="p-4">С помощью свойства элемента</th>
        <th class="p-4">С помощью метода .addEventListener()</th>
      </tr>
      <tr>
        <td class="p-4">
          <button class="btn btn-primary" onclick="alert('Кнопка нажата')">Кнопка</button>
          <button class="btn btn-primary" onclick="showMessage()">Кнопка</button>
        </td>
        <td class="p-4">
          <button class="btn btn-info property-button-1">Кнопка</button>
          <button class="btn btn-info property-button-2">Кнопка</button>
          <button class="btn btn-info property-button-3">Кнопка</button>
        </td>
        <td class="p-4">
          <button class="btn btn-warning event-listener-button-1">Кнопка</button>
          <button class="btn btn-warning event-listener-button-2">Кнопка</button>
          <button class="btn btn-warning event-listener-button-3">Кнопка</button>
        </td>
      </tr>
    </table>
    <h2>Несколько кнопок, по нажатию на которые вызывается одно и то же событие</h2>
    <button class="btn btn-secondary multi-button">Кнопка</button>
    <button class="btn btn-secondary multi-button">Кнопка</button>
    <button class="btn btn-secondary multi-button">Кнопка</button>
    <button class="btn btn-secondary multi-button">Кнопка</button>
    <button class="btn btn-secondary multi-button">Кнопка</button>
    <h2><i>this</i> в слушателях событий</h2>
    <button class="btn btn-danger this-button">Кнопка</button>
    <h2>Объект события</h2>
    <button class="btn btn-success event-button">Кнопка</button>
    <h2>event.target, event.currentTarget, this</h2>
    <div class="complex-button" cost="50" name="Американо">
      <img src="../../../905/coffee/img/americano.png" alt="">
      <span class="ml-4">Американо - 50 руб.</span>
    </div>
    <div class="complex-button" cost="70" name="Латтэ">
      <img src="../../../905/coffee/img/latte.jpg" alt="">
      <span class="ml-4">Латтэ - 70 руб.</span>
    </div>
    <div class="complex-button" cost="100" name="Капучино">
      <img src="../../../905/coffee/img/cappuccino.png" alt="">
      <span class="ml-4">Капучино - 100 руб.</span>
    </div>
    <div class="complex-button" cost="75" name="Эспрессо">
      <img src="../../../905/coffee/img/espresso.png" alt="">
      <span class="ml-4">Эспрессо - 75 руб.</span>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="events.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>