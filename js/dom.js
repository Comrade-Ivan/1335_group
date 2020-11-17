//Работа с BOM
//Browser Object Model - объектная модель браузера

//Получаем информацию о пользователе
// console.log(navigator.platform);
// console.log(navigator.userAgent);
// //Получаем текущий адрес
// console.log(location.href);
// //location.href = "https://yandex.ru"; Редирект - перенаправление на другую страницу

// //Работа с DOM
// //Document Object Model - объектная модель документа

// //querySelector(css)
// let header1 = document.querySelector("h1"); //Находит элемент по селектору CSS
// console.log(header1);
// header1.style.color = "darkblue";
// console.log(document.querySelector("#red"));
// console.log(document.querySelector(".orange-list"));
// //Если по селектору можно найти несколько элементов, то querySelector() найдет и вернет первый найденный
// let blueListItem = document.querySelector(".blue-list-item");
// blueListItem.style.color = "darkblue";
// document.querySelector(".blue-list-item").style.color = "darkblue";

//querySelectorAll(css)
//В качестве результата возвращает массив элементов. Даже если элемент один.
// let redListItems = document.querySelectorAll(".red-list-item");
// console.log(redListItems);
// for (let item of redListItems) {
//   item.style.color = "red";
// }

// let orangeList = document.querySelector(".orange-list");
// let orangeListItems = orangeList.querySelectorAll("li:nth-child(2n+1)"); //Для выбора элементов можно использовать псевдоклассы CSS
// console.log(orangeListItems[1]); //К элементам массива можно как обычно обращаться через []
// console.log(orangeListItems[orangeListItems.length - 1]); //Обращаемся к последнему элементу
// for (let item of orangeListItems) {
//   item.style.color = "orange";
// }

//Старые методы
//getElementById()
// let yellowHeader = document.getElementById("yellow");
// yellowHeader.style.color = "yellow";

// //getElementsBy*()
// //Эти методы используются редко, в основном в старом коде. Но ими так же можно воспользоваться, так как они создают "живую коллекцию".

// console.log(document.getElementsByTagName("h3")); //По тэгу
// console.log(document.getElementsByClassName("darkred-list")); //По классу
// console.log(document.getElementsByName("user-name")); //По атрибуту name

// //Живые коллекции
// let h3Query = document.querySelectorAll("h3");
// let h3GetElements = document.getElementsByTagName("h3");
// document.querySelector("h3").remove(); //Удаляем элемент
// console.log(h3Query); //Удаленный элемент остался в массиве
// console.log(h3GetElements); //Удаленный элемент удалился из массива. "Нет элемента на странице - нет в массиве" - живая коллекция

//Навигация по DOM
let darkRed = document.querySelector(".darkred-list");

//Навигация по узлам
// console.log(darkRed.parentNode);//Родительский узел
// console.log(darkRed.previousSibling);//Предыдущий сосед-узел
// console.log(darkRed.nextSibling);//Следующй сосед-узел
// console.log(darkRed.firstChild);//Первый ребенок-узел
// console.log(darkRed.lastChild);//Последний ребенок-узел
// console.log(darkRed.childNodes);//Все дети-узлы
//Навигация по элементам
console.log(darkRed.parentElement);//Родительский элемент
console.log(darkRed.previousElementSibling);//Предыдущий сосед-элемент
console.log(darkRed.nextElementSibling);//Следующй сосед-элемент
console.log(darkRed.firstElementChild);//Первый ребенок-элемент
console.log(darkRed.lastElementChild);//Последний ребенок-элемент
console.log(darkRed.children);//Все дети-элементы

//Объединяйте querySelector с навигацией по элементам для достижения нужного результата
let inputToken = document.querySelector("[name='token']");
let ulLinks = inputToken.parentElement.previousElementSibling 
//Обращаемся к родителю, потом к предыдущему соседу
console.log(ulLinks);


