<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблицы и формы</title>
</head>
<body>
  <h1>Таблицы и формы</h1>
  <h2>Таблицы</h2>
  <table border="1">
    <thead> <!--Заголовки таблицы-->
      <tr> <!--Table row - строка таблицы-->
        <th># п.п</th> <!--Заголовок таблицы-->
        <th>Тип проекта</th>
        <th>Количество</th>
      </tr>
    </thead>
    <tbody> <!--Содержимое таблицы-->
      <tr>
        <td>1</td> <!--Table data - данные таблицы-->
        <td>Лэндинг</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Многостраничный сайт</td>
        <td>3</td>
      </tr>
      <tr>
        <td>3</td>
        <td>CMS</td>
        <td>1</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Веб-приложение</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <!--Таблица без thead и tbody-->
  <table border="1">
    <tr>
      <th>Тип сайта</th>
      <th>Количество</th>
    </tr>
    <tr>
      <td>Адаптивный</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Статичный</td>
      <td>2</td>
    </tr>
  </table>
  <hr>
  <!--Объединение ячеек таблицы-->
  <table border="1">
    <thead>
      <tr>
        <th colspan="3">Название таблицы</th> <!--colspan - объединяет ячейки по горизонтали-->
      </tr>
      <tr>
        <th>Заголовок 1</th>
        <th>Заголовок 2</th>
        <th>Заголовок 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Данные 1.1</td>
        <td colspan="2">Данные 1.2</td>
      </tr>
      <tr>
        <td>Данные 2.1</td>
        <td>Данные 2.2</td>
        <td rowspan="2">Данные 2.3</td> <!--rowspan - объединяет вертикальные ячейки-->
      </tr>
      <tr>
        <td>Данные 3.1</td>
        <td>Данные 3.2</td>
      </tr>
    </tbody>
  </table>
  <h2>Формы</h2>
  <form action="#" method="POST"> <!--Объявляем форму методы - GET и POST-->
    <input type="text" name="login" placeholder="Введите логин" value="anonym" required> <!--input - место для ввода данных-->
    <input type="password" name="pass" placeholder="Введите пароль" required> <!--name - "ключ" инпута-->  
    <!--placeholder - подсказка для пользователя-->
    <!--value - реальное значение input'а-->
    <!--required - обязательный к заполнению-->
    <div>
      <h3>Что вы хотите изучить?</h3>
      <input type="checkbox" name="html-css" id="html-checkbox" checked>
      <label for="html-checkbox">HTML и CSS</label> <!--Подвязываем текст к input'у-->
      <label>
        <input type="checkbox" name="js">
        <span>JavaScript</span>
      </label>      
      <label>
        <input type="checkbox" name="php">
        <span>PHP</span>
      </label>
    </div>
    <div>
      <h3>Укажите свой уровень</h3>
      <label>
        <input type="radio" name="level" value="beginner" checked> <!--checked - отмеченный-->
        <span>&#128517;Начинающий</span>
      </label>
      <label>
        <input type="radio" name="level" value="intermediate">
        <span>Любитель</span>
      </label>
      <label>
        <input type="radio" name="level" value="professional">
        <span>Профессионал</span>
      </label>
    </div>
    <div>
      <h3>Прикрепите ваше резюме</h3>
      <input type="file" name="CV">
    </div>
    <div>
      <h3>Оставьте ваш комментарий</h3>
      <textarea name="comment" cols="30" rows="10" placeholder="Ваш комментарий здесь..."></textarea> <!--"Многострочный" input-->
    </div>
    <div>
      <h3>Выберите способ оплаты</h3>
      <select name="payment"> <!--Выбираем один из варинтов в выпадающем списке-->
        <option value="cash">Наличными</option>
        <option value="card">Картой</option>
        <option value="сoupon">Купоном</option>
      </select>
    </div>
    <p></p>
    <div>
      <input type="submit" value="Отправить заявку"> <!--Отправляем форму на файл, написанный в атрибуте action у формы-->
      <input type="reset" value="Очистить форму">
      <!--<button>Кнопка</button> не используется в формах, так как вызывает submit-->
      <input type="button" value="Бесполезная кнопка">
    </div>
  </form>
</body>
</html>





