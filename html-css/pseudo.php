<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Псевдоклассы и псевдоэлементы</title>
  <style>
    .box1, .box2, .transition-box-1, .transition-box-2 {
      display: inline-block;
      height: 250px;
      width: 250px;
    }
    .box1 {
      background-color: rgb(255, 50, 50);
    }
    .box2 {
      background-color: rgb(50, 50, 255);
    }
    /*Псевдоклассы обрабатывающие события*/
    .box1:hover { /*:hover - наводим курсор на элемент*/
      background-color: rgb(50, 255, 50);
    }
    .box2:active {/*:active - нажимаем на элемент*/
      background-color: rgb(255, 255, 50);
    }
    .link:visited { /*:visited - посещенная ссылка*/
      color: OrangeRed;
    }
    .user-input:focus { /*:focus - input в фокусе (осуществляется ввод)*/
      background-color: PaleTurquoise;
    }
    /*Выбор детей с помощью псевдоклассов*/
    .firstlast li:first-child { /*Выбираем первого ребенка*/
      background-color: SteelBlue;
    }
    .firstlast li:last-child { /*Выбираем последнего ребенка*/
      background-color: Orchid;
    }
    .oneof li:nth-child(3) { /*3й ребенок*/
      background-color: SlateBlue;
    }
    .oddeven li:nth-child(odd) { /*odd - нечетый even - четный - красит каждого четного\нечетного ребенка*/
      background-color: Khaki;
    }
    .nthchild li:nth-child(3n) { /*Каждый третий ребенок*/
      background-color: Chocolate;
    }
    .nthchild-plus li:nth-child(3n+2) { /*Каждый третий ребенок со сдвигом в 2*/
      background-color: SpringGreen;
    }
    .pseudo-standart::before {
      content: "(╯°□°）╯︵ ┻━┻"; /*Обязательное св-во псевдоэлементов*/
      color: red;
    }
    .pseudo-standart::after {
      content: "\01F354"; /*Unicode*/
      color: blue;
    }
    
    .taxi-logo {
      display: inline-block;
      width: 100px;
      height: 100px;
      background-color: #F4F1E7;
      border-radius: 0 0 0 15px;
      margin-top: 100px;
      margin-right: 100px;
      position: relative;
    }
    .taxi-logo:before {
      content: "";
      display: inline-block;
      width: 200px;
      height: 100px;
      background-color: #FDBC00;
      border-radius: 15px 15px 0 0;
      position: absolute;
      top: -100%;
    }
    .taxi-logo:after {
      content: "";
      display: inline-block;
      width: 100px;
      height: 100px;
      background-color: #2C2A26;
      border-radius: 0 0 15px 0;
      position: absolute;
      left: 100%;
    }
    
    .taxi-logo:hover::before { /*Сочетание псевдоклассов и псевдоэлементов*/
      background-color: red;
    }
    
    .transition-box-1 {
      background-color: Tomato;
      transition: background-color 500ms;
    }
    .transition-box-2 {
      background-color: Lime;
      /* transition: background-color 500ms, transform 500ms; */
      transition: all 500ms;
    }
    
    .transition-box-1:hover {
      background-color: BlueViolet;
    }
    .transition-box-2:hover {
      background-color: DeepPink;
      transform: scale(1.2);
    }
    .transition-box-3 {
      width: 100px;
      height: 100px;
      background-color: Gold;
      border: 2px solid black;
      box-sizing: border-box; /*"Убирает границу внутрь", элемент становится в 100px в ширину*/
      display: inline-block;
      position: absolute;
      transition: left 5s cubic-bezier(0,1.63,1,-0.71), background-color 0.5s ease 5s, border-radius 5s ease-in-out;
      left: 0;
      z-index: 1; /*Устанавливаем слой, на котором находится объект (чем больше тем ближе) 10 100 1000 10000*/
    }
    .transition-box-3:active{
      left: calc(100% - 100px); /*Считаем, чтобы элемент не уезжал за край*/
      background-color: Tomato;
      border-radius: 50%;
    }
    
  </style>
</head>
<body>
  <h1>Псевдоклассы и псевдоэлементы</h1>
  <h2>Псевдоклассы</h2>
  <div class="box1"></div>
  <div class="box2"></div>
  <div>
    <a href="https://yandex.ru" class="link" target="_blank">Яндекс</a>
    <input type="text" class="user-input">
  </div>
  <h3>Псевдоклассы, которые позволяют обращаться к элементам по порядку</h3>
  <h5>Первый и последний ребенок</h5>
  <ul class="firstlast">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
  </ul>
  <h5>N-ный ребенок</h5>
  <ul class="oneof">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
  </ul>
  <h5>Четный\нечетный ребенок</h5>
  <ul class="oddeven">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
  </ul>
  <h5>Кажый n-ный ребенок</h5>
  <ul class="nthchild">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
    <li>Семь</li>
    <li>Восемь</li>
  </ul>
  <ul class="nthchild-plus">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
    <li>Семь</li>
    <li>Восемь</li>
  </ul>
  <h2>Псевдоэлементы</h2>
  <h3>Стандартное использование</h3>
  <p class="pseudo-standart">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quidem.</p>
  <h3>Создание несложных фигур</h3>
  <i class="taxi-logo"></i>
  <h2>Переходы (транзиции)</h2>
  <div class="transition-box-1"></div>
  <div class="transition-box-2"></div>
  <div>
    <h3>Кривые Безье</h3>
    <div class="transition-box-3"></div>
  </div>
</body>
</html>