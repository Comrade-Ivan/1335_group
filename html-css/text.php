<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Работа с текстом</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa&family=Roboto&display=swap');
    /*
      font-family: 'Comfortaa', cursive;
      font-family: 'Roboto', sans-serif;
    */
    body {
      font-family: 'Roboto',Helvetica, Arial, sans-serif; /*Изменяем шрифт*/
    }
    h1 {
      text-align: center;
    }
    h2 {
      font-family: 'Comfortaa', cursive;
    }
    .underline {
      text-decoration: underline; /*Устанавливаем нижнее подчеркивание*/
      text-decoration-color: red; /*Цвет линии*/
      text-decoration-style: dashed; /*Стиль линии - сплошная, пунктирная и.т.д.*/
    }
    a {
      text-decoration: none; /*Убираем нижнее подчеркивание*/
    }
    .uppercase {
      text-transform: uppercase; /*Перевод в верхний или нижний регистр*/
    }
    .text-shadow {
      text-shadow: -6px 2px 0px rgba(150, 150, 150, 1); /*Устанавливаем тень, для создания проще пользоваться генераторами*/
    }
    .font-styles {
      /* font-size: 40pt; */ /*Меняем размер шрифта*/
      /* font-size: 40px; */
      font-size: 5em; /*em - equal m (равный m) по ширине буква m по высоте буква k*/
      font-weight: lighter; /*bold - изменяем жирность шрифта*/
      font-style: italic; /*Курсивный шрифт*/
      font-stretch: ultra-condensed; /*Сжимаем\Расширяем буквы*/
      font-variant: small-caps; /*Создаем Капитель*/
    }
    .paragraph {
      text-align: justify;
      word-spacing: 15px; /*Устанавливает расстояние между словами*/
      line-height: 1.5; /*Устанавливаем межстрочный интервал*/
      /* white-space: nowrap; */ /*Не дает словам переноситься вниз*/
      letter-spacing: 10px; /*Расстояние между символами*/
    }
    .special, .emoji {
      font-size: 50px;
    }
    .color-one {
      color: red; /*Указываем цвет словом*/
    }
    .color-two {
      color: #002240; /*HEX - код*/
    }
    .color-three {
      color: rgb(50, 255, 50); /*red green blue (0-255, 0-255, 0-255)*/
    }
    .color-four {
      color: rgba(255, 0, 0, 0.7); /*a - alpha-канал - прозрачность от 0 до 1 (0% до 100%)*/
    }
    .color-five {
      color: hsl(159, 100%, 50%); /*hue saturation lightness контрастность насыщенность яркость*/
    }
    .icon {
      font-size: 50px;
    }
    .fa {
      font-size: 100px !important; /*!important - важный - ключевое слово, для того, чтобы перебить значения (повысить приоритет) */
    }
  </style>
</head>
<body>
  <h1>Работа с текстом</h1>
  <p class="underline">Lorem ipsum dolor sit amet.</p>
  <a href="#">Ссылка</a>
  <p class="uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  <h2 class="text-shadow">Текст с тенью</h2>
  <h2 class="font-styles">Изменяем заголовок H2</h2>
  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, debitis quas ipsam vitae fugiat assumenda rerum explicabo. Aperiam, porro, repudiandae fugit sequi provident iusto assumenda nam ut rem eveniet reprehenderit quidem sed adipisci mollitia iure inventore ea perspiciatis cupiditate natus maxime esse deserunt neque accusamus! Ratione, necessitatibus, illo, tenetur, exercitationem saepe eveniet deleniti inventore perspiciatis dolore distinctio ullam voluptates sit! Alias, harum doloremque error saepe corporis perspiciatis animi quae repellendus nesciunt unde fuga consequatur laudantium earum vitae placeat molestiae mollitia inventore numquam quas rerum a quos labore voluptate repellat deleniti architecto optio. Saepe, et, explicabo, aperiam dolore quidem consequatur repellendus mollitia necessitatibus quo id officiis inventore ipsa ad corrupti ullam eveniet labore sit ducimus sint dolorum esse alias nisi quos eaque soluta! Consectetur, cum, sit rerum facilis eligendi temporibus quod fuga necessitatibus laboriosam repudiandae libero quo iusto at optio incidunt eveniet neque beatae distinctio quis illum? Dicta, vitae non rem totam accusamus expedita magnam nostrum. Non, impedit, asperiores, corporis sed nihil quos pariatur atque possimus similique qui libero aliquid reiciendis porro cupiditate veniam recusandae deleniti beatae a repellat rerum. Assumenda, commodi, iusto, vel laboriosam expedita qui odit quibusdam quisquam cumque fuga aperiam autem dignissimos laudantium unde molestiae architecto impedit. Ab.</p>
  <h2>Спецсимволы и эмозди</h2>
  <p class="special">&times; 	&copy; &#10163;</p>
  <p class="emoji">	&#128104;&#8205;&#127891; &#128105;&#8205;&#127891;</p>
  <h2>Цвета</h2>
  <div>
    <p class="color-one">Один</p>
    <p class="color-two">Два</p>
    <p class="color-three">Три</p>
    <p class="color-four">Четыре</p>
    <p class="color-five">Пять</p>
  </div>
  <h2>Иконки</h2>
  <p class="icon">Пользователь <i class="fa fa-address-card" aria-hidden="true"></i></p>
  <p class="icon">Дата <i class="fa fa-calendar" aria-hidden="true"></i></p>
  <p class="icon">Ванная <i class="fa fa-bath" aria-hidden="true"></i></p>
  <script src="https://use.fontawesome.com/e5fcf5449b.js"></script>
</body>
</html>