<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>CSS - селекторы</title>
  <link rel="stylesheet" href="selectors.css">
  <style>
    /*Комментарий*/
    h1 { /*Селектор тэгов*/
      text-align: center;
      color: red;
    }
    #about-header { /*Селектор по ID*/
      text-align: left;
      color: black;
    }
    .about-text { /*Селектор по классу*/
      text-align: justify;
      color: DarkGreen;
    }
    .text-lowercase {
      text-transform: lowercase;
    }
    .context li { /*Контекстный селектор (Выбираем всех потомков-li внутри элемента с классом context*/
      color: RoyalBlue;
    }
    .children>li { /*Дочерний селектор (Выбирем только те li, которые являются непосредственно детьми элемента с классом .children)*/
      color: Chocolate;
    }
    .paragraph-one, .paragraph-two { /*Множественный селектор, ищет сразу по нескольким селекторам*/
      color: DarkMagenta;
    }
    .neighbour h3+p { /*Соседний селектор (ищет соседа с тэгом p рядом с h3 внутри элемента с классом .neighbour*/
      color: OrangeRed;
    }
/*     p[title="Зеленый"] { Селектор атрибутов - выбрать только ту p у который атрибут title РАВЕН "Зеленый"
  color: green;
} */
    .color[title="Зеленый"] {
      color: green;
    }
    
    .link[href^="https://"] { /* ^ - начинается с*/
      color: red;
    }
    .link[href$=".su"] { /* $ - заканчивается на */
      color: cyan; 
    }
    input[name*="user"] { /* * - содержит */
      color: MediumVioletRed;
    }
  </style>
</head>
<body>
  <h1>Селекторы</h1>
  <h2>Заголовок 2 уровня</h2>
  <h2>Заголовок 2 уровня</h2>
  <h3 style="text-align: center; color: blue;">Заголовок 3 уровня</h3>
  <h2 id="about-header">Обо мне</h2>
  <!--ID уникален-->
  <!-- kebab-case camelCase snake_case -->
  <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, doloremque, debitis, distinctio optio autem quibusdam at iste esse doloribus obcaecati ipsum ipsa velit harum odit temporibus. Corporis, voluptas nobis reiciendis repudiandae distinctio ducimus iure facilis dicta ex a debitis sint corrupti at voluptates sequi commodi officia! Repudiandae quisquam iusto corporis.</p>
  <p class="about-text text-lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, esse, sint, consequuntur, odit facilis ipsam saepe omnis illo quaerat numquam voluptatibus optio quam tenetur in recusandae debitis consequatur voluptates provident similique quo pariatur minima culpa alias repudiandae eum? Iusto, adipisci, id accusantium eligendi eius iste dicta officia fugit ipsam aperiam.</p>
  <div>
    <h3>Контекстный селектор</h3>
    <ul class="context">
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <ul>
        <li>Подэлемент списка</li>
        <li>Подэлемент списка</li>
        <li>Подэлемент списка</li>
      </ul>
    </ul>
  </div>
  <div>
    <h3>Дочерний селектор</h3>
    <ul class="children">
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <ul>
        <li>Подэлемент списка</li>
        <li>Подэлемент списка</li>
        <li>Подэлемент списка</li>
      </ul>
    </ul>
  </div>
  <div>
    <h3>Множественный селектор</h3>
    <div class="multi">
      <p class="paragraph-one">Lorem ipsum dolor sit amet.</p>
      <p class="paragraph-two">Lorem ipsum dolor sit amet.</p>
    </div>
  </div>
  <div class="neighbour">
    <h3>Соседний селектор</h3>
    <p>Меня покрасьте</p>
    <p>Меня не красьте</p>
  </div>
  <div>
    <h3>Селектор атрибутов</h3>
    <p class="color" title="Красный">Red</p>
    <p class="color" title="Зеленый">Green</p>
    <p class="color" title="Синий">Blue</p>
    <ul>
      <li><a class="link" href="https://yandex.ru">Yandex</a></li>
      <li><a class="link" href="https://vk.com">Vk</a></li>
      <li><a class="link" href="http://edu.ivandp.su">ivandp.su</a></li>
    </ul>
    <form action="">
      <input type="text" name="user-name" value="anonym">
      <input type="text" name="user-password" value="12345">
      <input type="text" name="token" value="i998hf484">
    </form>
  </div>
</body>
</html>