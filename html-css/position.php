<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Размеры, отступы, позиционирование</title>
  <style>
    * { /* * - каждый*/
      margin: 0;
      padding: 0;
      /*Нормализация - Cбрасываем margin и padding у всех элементов*/
      /*normalize.css - полный вариант нормализации*/
    }
  
    .header-image {
      width: 100%; /*Ширина */
      /*100% от размера родительского элемента*/
      /* height: 100%; */ /*Высота*/
      /*min/max-height min/max-width min-height max-height*/
      min-height: 100px;
      vertical-align: middle;
    }
    
    .header-container {
      position: relative;
    }
    
    .header-info {
      padding: 30px;
      display: inline-block;
      width: 500px;
      position: absolute; /*Изменяем поцизионирование у элемента*/
      /*absolute, fixed - "вытаскивают элемент" из DOM-дерева (остальные элементы думают что его нет) отсчет координат идет от левого верхнего края экрана*/
      /* ** absolute - Если у родителя значение position задано как fixed, relative или absolute, то отсчет координат ведется от края родительского элемента.*/
      /*relative - оставляет элемент в DOM-дереве(остальные элементы думают что он существует), позицией 0,0 является верхний левый угол изначального расположения элемента*/
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); /*Располагаем элемент по центру (сдвигаем на половину себя вверх и влево)*/
      background-color: rgba(255, 255, 255, 0.8);
      box-shadow: -15px -8px 0px 0px rgba(0,0,0,0.6); /*Устанавливаем тень*/
    }
    .header-info button {
      margin-top: 15px;
      padding: 10px;
      border-radius: 5px;
      background-color: #01488E;
      color: white;
      border: none;
      cursor: pointer; /*Устанавливаем курсор - пальчик*/
    }
    
    .navigation {
      background-color: #01488E;
      /* padding: 1em 0 2em 5em; */
      padding: 1em; /*Внутренний отступ с 4х сторон*/
      padding-left: 3em;
    }
    
    .navigation-item {
      display: inline-block; /*display - изменяет параметр отображения элементов (можно делать блочные элементы строчными(лучше блочно-строчными) и наоборот*/
      /*block, inline, inline-block, none, flex, grid*/
      list-style-type: none;
      margin: 0 10px; /*Внешний отступ*/
      /*margin элемента и padding родителя складываются*/
    }
    .navigation-item a {
      text-decoration: none;
      color: white;
    }
    main {
      padding: 0 50px;
    }
    .about-header, .employee-header {
      text-align: center;
      margin: 50px 0;
      /* border: 2px solid rgb(230, 230, 230); */ /*Граница - 2px сплошная серая*/
      border-top: 2px solid rgb(230, 230, 230);
      border-bottom: 2px solid rgb(230, 230, 230);
      padding: 15px;
    }
    .about-text {
      text-align: justify;
    }
    
    .employee-image {
      height: 200px;
      width: 200px;
      margin: 0 auto; /*auto - старается автоматически выровнять элемент по середине*/
      display: block; /*Делаем элемент блочным, чтобы auto было где выравнивать внутренний контент*/
      border: 2px solid lightgrey;
      border-radius: 50%; /*скругляем углы у элемента 50% - делает круг*/
      /* border-radius: 15px 50% 30px 0; */
    } 
    
    .employee h3, .employee h5 {
      text-align: center;
    }
  </style>
</head>
<body>
  <!--тэги header, main, footer, nav, section, aside являются по сути своей div, но с более верным семантическим смыслом-->
  <header> <!--Шапка сайта-->
    <div class="header-container">
      <img class="header-image" src="https://auto4star.com/wp-content/uploads/2018/11/harrison_header_1.jpg" alt="">
      <div class="header-info">
        <h2>Заказать</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, nulla, quibusdam dolores harum quo aperiam nobis debitis eius inventore voluptatibus</p>
        <button>Заказать</button>
      </div>
    </div>
    <nav>
      <ul class="navigation">
        <li class="navigation-item"><a href="#">Главная</a></li>
        <li class="navigation-item"><a href="#">О нас</a></li>
        <li class="navigation-item"><a href="#">Наши сотрудники</a></li>
        <li class="navigation-item"><a href="#">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <main> <!--Основное содержимое-->
    <section class="about">
      <h2 class="about-header">О нас</h2>
      <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, necessitatibus, corporis non possimus laboriosam unde dolorum officiis ea! Minima, perspiciatis, tenetur fuga sequi iusto laudantium cum itaque eum animi quibusdam dolore assumenda quos explicabo obcaecati necessitatibus mollitia quisquam esse beatae temporibus suscipit aspernatur totam at architecto! Repellat, molestias, necessitatibus, modi consequuntur assumenda repellendus dolores nobis sit velit similique omnis quaerat labore maxime. Reprehenderit, enim, ipsum, laborum, vel dignissimos architecto rem excepturi repudiandae sapiente eligendi nihil repellendus cumque repellat reiciendis beatae. Similique, expedita odio voluptates mollitia magni tempore accusamus nesciunt tempora. Hic, tempora accusantium iusto officiis tenetur. Obcaecati, expedita minima eligendi vero dignissimos quisquam alias quibusdam voluptatum delectus officia. Impedit, distinctio, facilis sint minima eveniet incidunt fuga autem in nostrum consequuntur velit repudiandae maiores quaerat quam beatae itaque dicta dolorum esse quis animi totam nihil cumque. Dignissimos, ea, eius, consectetur ducimus earum maiores maxime dolores numquam ab est quas illum. Temporibus, mollitia, iure, atque recusandae fugiat error asperiores nobis delectus consectetur eius quis voluptatum tempora natus ea dignissimos. Perferendis autem expedita quibusdam doloremque beatae porro sint accusantium cum culpa corporis. Dolore, minima, porro, vitae, nostrum ratione esse quisquam ut quam et quod quibusdam pariatur sit expedita deleniti repellat voluptates laboriosam illum.</p>
    </section>
    <section class="employee">
      <h2 class="employee-header">Наши сотрудники</h2>
      <img class="employee-image" src="https://images.crateandbarrel.com/is/image/Crate/SSTElmoBabyNestSHS18/$web_pdp_main_carousel_low$/190411135414/sesame-street-elmo-baby-nest.jpg" alt="">
      <h3>Элмо</h3>
      <h5>Работник месяца</h5>
    </section>
  </main>
  <footer> <!--Подвал сайта-->
    
  </footer>
</body>
</html>