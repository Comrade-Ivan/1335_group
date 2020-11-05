<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Flexbox</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Helvetica, sans-serif;
    }
    .flex-container {
      display: flex; /*Говорим, что он flex-контейнер*/
      /* flex-direction: row; */ /*По умолчанию*/
      flex-direction: column; /*Делаем отображение колоночным (элементы, которые не поместились по высоте будут перенесены в следующий столбец)*/
      height: 600px;
      
      flex-wrap: wrap; /*по умолчанию - nowrap - перенос строк*/
    }
    .box {
      height: 200px;
      width: 200px;
      background-color: rgb(255, 50, 50);
      border: 2px solid black;
      box-sizing: border-box;
    }
    a {
      text-decoration: none;
    }
    .navigation {
      display: flex;
      list-style-type: none;
      background-color: rgb(50, 50, 255);
      padding: 0;
      justify-content: space-evenly; /*Горизонтальное выравнивание*/
    }
    .navigation a {
      color: white;
      padding: 10px;
      border: 2px solid red;
      display: inline-block;
    }
    .flex-container-2 {
      display: flex;
      height: 400px;
      border: 5px solid blue;
      box-sizing: border-box;
      align-items: center; /*Вертикальное выравнивание*/
      justify-content: space-around;
    }
    .flex-container-2 .box:nth-child(2) {
      align-self: flex-start;
    }
    .flex-container-2 .box:nth-child(3) {
      align-self: flex-end;
    }
    
    .flex-container-3 {
      display: flex;
      flex-direction: column; /*Делаем направление колоночным*/
      min-height: 600px;
      border: 5px solid blue;
      box-sizing: border-box;
      
      justify-content: space-between; /*Теперь отвечает за вертикальное выравнивание*/
      align-items: center; /*Теперь отвечает за горизонтальное выравнивание*/
    }
    .flex-container-3 .box {
      width: 100px;
      height: 100px;
    }
    .flex-container-3 .box:nth-child(2) {
      align-self: flex-start;
    }
    .flex-container-3 .box:nth-child(3) {
      align-self: flex-end;
    }
    
    .flex-container-4 {
      display: flex;
    }
    .flex-container-4 .main {
      flex-grow: 1;
      width: 400px;
      border: 2px solid red;
      box-sizing: border-box;
      padding: 15px;
    }
    .flex-container-4 aside {
      border: 2px solid blue;
      flex-basis: 250px; /*базовая ширина контейнера*/
      padding: 15px;
      box-sizing: border-box;
    }
    
    .flex-container-5 {
      display: flex;
    }
    .flex-container-5 .box:nth-child(1) {
      flex-grow: 1;
    }
    .flex-container-5 .box:nth-child(2) {
      flex-grow: 1;
    }    
    .flex-container-5 .box:nth-child(3) {
      flex-grow: 1;
    }
    .flex-container-5 .box:nth-child(4) {
      flex-grow: 4;
    }
    
    .flex-container-6 {
      margin-top: 25px;
      display: flex;
      width: 600px;
      border: 2px solid blue;
      box-sizing: border-box;
    }
    
    .flex-container-6 .box:nth-child(1) {
      flex-shrink: 1;
    }
    .flex-container-6 .box:nth-child(2) {
      flex-shrink: 4;
    }
    .flex-container-6 .box:nth-child(3) {
      flex-shrink: 4;
    }
    .flex-container-6 .box:nth-child(4) {
      flex-shrink: 1;
    }
    
    .grid .navigation {
      justify-content: flex-end;
    }
    
    .header-container {
      display: flex;
    }
    
    .header-image {
      flex-grow: 1;
      background-color: grey;
      background-image: url("https://api.time.com/wp-content/uploads/2015/09/the-muppet-show-2.jpg?quality=85&w=1200&h=628&crop=1");
      background-size: cover; /*contain - картинка помещается в контейнер cover - картинка покрывает собой весь контейнер*/
      background-position: 50% 35%;
      min-height: 300px;
    }
    
    .header-text {
      flex-basis: 250px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }
    
    .card {
      border: 3px solid lightblue;
      border-radius: 15px;
      padding: 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .card img {
      width: 200px;
      border-radius: 50%;
    }
    
    .card .name {
      margin: 10px 0;
      font-size: 30px;
      font-weight: bold;
    }
    
    .cards {
      display: flex;
      padding: 25px 50px;
      justify-content: space-around;
    }
  </style>
</head>
<body>
  <div class="flex-container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <h2>Выравнивание по ширине</h2>
  <nav>
    <ul class="navigation">
      <li><a href="#">Главная</a></li>
      <li><a href="#">О нас</a></li>
      <li><a href="#">Наши проекты</a></li>
      <li><a href="#">Контакты</a></li>
    </ul>
  </nav>
  <h2>Выравнивание по высоте</h2>
  <div class="flex-container-2">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <h2>Меняем местами выравнивания по высоте и ширине с помощью flex-direction: column</h2>
  <div class="flex-container-3">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <h2>flex-grow, flex-shrink</h2>
  <div class="flex-container-4">
    <div class="main"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa facilis optio earum sequi necessitatibus quisquam natus sunt laudantium explicabo praesentium. Dicta, excepturi quas possimus accusantium. Quisquam, accusantium, mollitia, veniam consequatur voluptatem quas doloremque ipsa accusamus provident quia tenetur quidem aut porro excepturi officiis rerum placeat nisi fuga quam aliquam dolores repudiandae alias autem iste eius similique odit voluptatum incidunt illum doloribus consequuntur natus vitae libero. Dignissimos, enim molestiae odio ex officiis libero minima rem molestias tempora laudantium? Quidem, quo non cumque mollitia iusto facere commodi at iure veritatis dolores tempore sint voluptatem quia! Asperiores, sint, quis hic doloremque ipsam dolor ab amet sunt architecto voluptas facilis assumenda quo nemo. Repellat, consequuntur, modi, corporis, accusantium minima hic eaque sapiente repellendus at et dolore sit aliquid porro tempore magni! Maxime, adipisci autem doloribus corporis ea omnis eaque deserunt sapiente eligendi. Praesentium, beatae rem perspiciatis totam consequuntur ex fugit perferendis magnam ipsam doloribus.</p></div>
    <aside>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, temporibus saepe perferendis rem et amet voluptatibus sequi sed delectus reprehenderit officia totam omnis dignissimos optio voluptatum pariatur quidem porro atque ipsa odit libero illum doloribus voluptas dolorum provident aperiam ratione error illo architecto voluptate tempora soluta fugit asperiores. Ab, sit!</aside>
  </div>
  <div class="flex-container-5">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <div class="flex-container-6">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <h2>Примеры</h2>
  <h3>Сетка на flexbox</h3>
  <div class="grid">
    <nav>
      <ul class="navigation">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Наши проекты</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </nav>
    <div class="header-container">
      <div class="header-image">
<!--         <img src="https://api.time.com/wp-content/uploads/2015/09/the-muppet-show-2.jpg?quality=85&w=1200&h=628&crop=1" alt="" style="width: 100%"> -->
      </div>
      <div class="header-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, unde, neque, voluptas ducimus accusantium quidem ipsa corrupti nisi a facilis eos nesciunt consectetur cum quae provident numquam ullam eveniet. Soluta!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, eos!</p>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card">
      <img src="https://i.pinimg.com/474x/52/50/fa/5250fa089b8453406f0a6f6a6c91b27b.jpg" alt="">
      <span class="name">Елмо</span>
      <span class="description">Работник месяца</span>
    </div>
    <div class="card">
      <img src="https://images.vectorhq.com/images/previews/a7a/cookie-monster-psd-422324.png" alt="">
      <span class="name">Куки-монстр</span>
      <span class="description">Поедатель печенек</span>
    </div>
    <div class="card">
      <img src="https://secondhandsongs.com/picture/165638/240square" alt="">
      <span class="name">Кермит</span>
      <span class="description">Главная лягушка</span>
    </div>
  </div>
</body>
</html>