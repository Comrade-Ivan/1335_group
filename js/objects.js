"use strict"

// let user = {
//   id: 45, //свойство объекта
//   name: "Василий", 
//   lastname: "Петров",
//   "like birds": true, //Любит ли наш объект птичек?. Если ключ состоит из нескольких слов, то он оборачивается в кавычки. Но обычно ключи делают из одного слова, используя нотации. 
// }; //{} - создание нового объекта
// console.log(user["id"]); //Обращение к св-вам через ["property"]
// console.log(user["like birds"]);
// console.log(user.id); //Обращеие к св-вам через .property
// console.log(user.name);
// console.log(user);

// user["like birds"] = false; //Присваиваем новые значения свойствам
// user.name = "Сергей";
// console.log(user);

// let users = [
//   {
//     id:1, 
//     name: "a", 
//     lastname: "b", 
//     tasks: [35, 24, 41], 
//     checker: {id: 15, name: "admin", lastname: "Админский"}
//   },
//   {id:2, name: "a", lastname: "b", tasks: [35, 24, 41], checker: {id: 15, name: "admin", lastname: "Админский"}},
//   {id:3, name: "a", lastname: "b", tasks: [35, 24, 41], checker: {id: 15, name: "admin", lastname: "Админский"}},
//   {id:4, name: "a", lastname: "b", tasks: [35, 24, 41], checker: {id: 15, name: "admin", lastname: "Админский"}},
//   {id:5, name: "a", lastname: "b", tasks: [35, 24, 41], checker: {id: 15, name: "admin", lastname: "Админский"}},
//   ]
// //Примеры свойств
// //input.value image.src elem.innerHTML(input, image, elem - элементы)

// //Методы
// let menu = {
//   opened: false, //Открыто ли меню?
//   currentUser: user,
  
//   open: function () { //Методы объекта
//     menu.opened = true; //Обращаемся к св-ву opened текущего объекта
//     console.log("Меню открылось");
//     console.log(this.currentUser.name);
//   },
  
//   close() { //Упрощенный синтаксис
//     this.opened = false; //this - этот. Вовзращает текущий объект. this возвращает объект к которому обращен метод.
//     console.log("Меню закрылось");
//   },
// };

// menu.open(); //Как и у функций вызов метода происходит с помощью ()
// menu.close();

//Числа

//Округление

// let a = 3.4563245624;

// //До целого
// let floor = Math.floor(a); //Округление вниз
// console.log(floor); //3
// let round = Math.round(a); //Округление по математическим правилам
// console.log(round); //3
// let ceil = Math.ceil(a); //Округление вверх
// console.log(ceil); //4
// //До знака после запятой
// let fixed = a.toFixed(2); //Округляем до определенного количества знаков после запятой. Округление происходит по математическим правилам
// //toFixed возвращает строковое значение. Если хотим получить число, тогда +a.toFixed(2);
// console.log(fixed);

// //Проверка на бесконечность и NaN
// console.log( isFinite(10 / 0) )//false - isFinite - конечно ли? - проверка на бесконечность
// console.log( isNaN("abc" / 2) )//true - проверка на NaN

// //Получение числа из строки
// let width = "100px";
// console.log( parseInt(width) ); //100  Обрезаем единицы измерения для целого числа
// let fontSize = "12.5pt";
// console.log( parseFloat(fontSize) ); //12.5 Обрезаем единицы измерения для дробного числа
// let height = "a100px";
// console.log( parseInt(height) ); //NaN не распрасит, так как строка начинается не с числа

// //Генерация случайного числа
// console.log(Math.random()); //Генерирует случайное число [0,1) (0 - включительно 1 - не включительно)
// //Генерация случайного целого числа от 0 до 100
// console.log( Math.floor(Math.random() * 100) );
// //Генерация случайного целого числа от 100 до 200;
// console.log( 100 + Math.floor(Math.random() * 100) );
// //https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Math/random

//Строки
//Двойные и одинарные кавычки позволяет писать только в одну строку
// let str =   "a
//             b
//             c"; - ошибка
//Обратные кавычки позволяют писать многострочно. И вписывать переменные с помощью ${}
// let cardTitle = "Карточка";
// let html = `
//   <div class="card">
//     <img>
//     <div class="card-body">
//       <h3 class="card-title">${cardTitle}</h3>
//     </div>
//     <div class="card-footer"></div>
//   </div>
// `;
// console.log(html);

// //Спецсимолы
// console.log("Строка1\nСтрока2");
// console.log("ООО \"Рога и копыта\"") //Экранирование
// console.log("\u{1F913}"); //Добавляем эмодзи

//Длина строки и получение символов из строки
// let str = "foobar";
// console.log(str.length); //Получаем длину строки (пробел - тоже символ)
// console.log(str[0]) //"f" Получаем первый символ из строки
// console.log(str[1]) //"o" Получаем второй символ из сторки
// //str[0] = "p"; Такое обращение к символам - только для чтения. Менять так символы нельзя.
// //Пример из твиттера
// if (str.length > 140) {
//   alert("Строка слишком длинная");
// }
// //Пример с весом числа
// let a = 315;
// a = String(a); //Преобразуем в строку 315 => "315"
// //a = `${a}`;
// let result = "";
// for (let i = 0; i < a.length; i++) {
//   result += (+a[i] + 10) + " ";
// }
// console.log(result);

//Изменение регистра
let str1 = "Съешь еще этих мягких французских булок";
console.log( str1.toUpperCase() ); //Перевод в верхний регистр (не меняет саму строку)
console.log( str1.toLowerCase() ); //Перевод в нижний регистр (не меняет саму строку)
console.log(str1); //Строка осталась неизменной
