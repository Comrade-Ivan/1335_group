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
// let str1 = "Съешь еще этих мягких французских булок";
// console.log( str1.toUpperCase() ); //Перевод в верхний регистр (не меняет саму строку)
// console.log( str1.toLowerCase() ); //Перевод в нижний регистр (не меняет саму строку)
// console.log(str1); //Строка осталась неизменной

//Поиск подстроки
// let str = "Съешь еще этих мягких французских булок";
// console.log(str.indexOf("еще")); //6 Ищет подстроку в строке и возвращает индекс символа, с которого начинается строка
// console.log(str.indexOf("Съешь"));//0
// console.log(str.indexOf("съешь"));//-1 При ненахождении возвращает -1
// console.log(str.indexOf("еще", 20));//-1 Поиск осуществляется с 20 символа
// //метод indexOf неудобно использовать в условиях, так как 0 == false, а -1 == true
// //Проверяем наличие подстроки в строке
// console.log(str.includes("этих")); //true Содержит подстроку 
// console.log(str.startsWith("Съешь"));//true Начинается с
// console.log(str.endsWith("булок"));//true Заканчивается на
// console.log(str.endsWith("печенек"));//false

// function findString(str, substr) {
//   if (str.includes(substr)) {
//     return str.indexOf(substr);
//   } else {
//     return null;
//   }
// } 
// let result = findString("Съешь еще этих мягких французских булок", "мягких");
// console.log(result);
// let result2 = findString("Съешь еще этих мягких французских булок", "печенек");
// console.log(result2);

//Получение подстроки
// let testString = "foobar";

// //slice(start [, end])
// console.log(testString.slice(0, 3)); //Получаем подстроку с 0 до 3(не включительно) символа
// console.log(testString); //Сама строка не изменилась
// console.log(testString.slice(3)) //"bar" с 3го символа и до конца
// console.log(testString.slice(-3, -1)); //"ba" при отрицательных значениях индекса отсчет начинается с -1 (последний символ в строке имеет индекс -1)
// console.log(testString.slice(-5, 5));//"fooba" Можно сочетать положительные и отрицательные индексы

// //substring(start [, end])
// //Отрицательные значения start и end приравниваются к 0
// //start может быть больше, чем end
// console.log(testString.substring(2, 5)); //"oba"
// console.log(testString.substring(5, 2)); //"oba"

// //substr(start [, length])
// console.log(testString.substr(0, 3)); //"foo"
// console.log(testString.substr(3, 2)); //"ba"
// console.log(testString.substr(-3, 1)); //"b"
// console.log(testString.substr(-3, 3)); //"bar"
// console.log(testString.substr(-3, 4)); //"bar"
// console.log(testString.substr(2)) //"obar" начиная со второго символа и до конца

//------------------------Массивы-------------------------------------
//Array - массив. Тип данных - object
// let arr = []; //Создание пустого массива
// console.log(Boolean(arr)); //true - пустой массив не приводится к false

// let fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// //Элементы массива перечислаются через запятую
// //Название переменной обычно во множественном числе, или подразумевается, что может хранить множественные значения
// let arr2 = [42, "строка", true, null, undefined, [1, 2, 3], {name:"Василий", lastname:"Петров"}];
// //В массиве могут храниться любые типы данных

// //К элементам массива обращаются используя синтаксис [];
// console.log(fruits[0]) //Яблоко
// console.log(fruits[2]) //Груша
// //Можно перезаписывать элементы массива
// fruits[3] = "Персик";
// console.log(fruits);

//Переборка массива
// let fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];

// for(let i = 0; i < fruits.length; i++) {
//   fruits[i] += "!";
//   console.log("Фрукт №" + i + ": " + fruits[i]);
// }
// console.log(fruits); //Массив изменился

// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// for(let fruit of fruits) { //Использует локальную переменную fruit
//   fruit += "!";
//   console.log(fruit);
// }
// console.log(fruits) //Массив остался нетронутым

//Виды массивов

//Ассоциативный массив. В JS выглядит в виде объекта. Ключи состоят из слов
// let fruits = {
//   shelf1: "Яблоко",
//   shelf2: "Груша",
//   shelf3: "Банан",
// }

// //Многомерный массив. Массив, содержащий другой массив.
// let multiArray = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9],
//   ];
// console.log(multiArray[1][1]) //5
// let language = {
//   ru: ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
//   en: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
// }
// console.log(language["ru"][2]); //"Ср"
// console.log(language.ru[2]); //"Ср"

//Методы работы с массивами

//Добавление/Удаление с конца массива (.push() .pop())
// let fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// let lastFruit = fruits.pop(); //Вырезаем последний элемент и возвращают его
// console.log([fruits, lastFruit]);

// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// fruits.push("Персик"); //Добавляем элемент в конец массива
// console.log(fruits);

// //Добавление/Удаление из начала массива (.unshift() .shift())
// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// let firstFruit = fruits.shift(); //Вырезаем первый элемент и возвращают его
// console.log([fruits, firstFruit]);

// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// fruits.unshift("Персик"); //Добавляем элемент в начало массива
// console.log(fruits);

//"Швейцарский нож" .splice()
// let fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// //.splice работает с самим массивом, а не с его копией
// fruits.splice(2, 2); //Начиная со второго элемента удаляем 2 элемента
// console.log(fruits); 

// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// fruits.splice(2, 0, "Персик", "Авокадо"); //Добавляем персик и авокадо перед грушей
// console.log(fruits); 

// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// fruits.splice(2, 2, "Персик", "Авокадо"); //Заменяем грушу и апельсин на персик и аводкадо
// console.log(fruits); 

//Более простой .slice()
//.slice не изменяет сам массив, а работает с его копией
// fruits = ["Яблоко", "Банан", "Груша", "Апельсин", "Виноград"];
// console.log(fruits.slice()) //Получаем копию массива
// console.log(fruits.slice(2, 5));
// console.log(fruits.slice(-2));
// console.log(fruits) //Массив остался неизменным

// let newFruits = fruits; //Это не копия, это ссылка на тот же объект
// newFruits.push("Персик"); //Изменения приведут и к изменениям в fruits, так как newFruit и fruits ссылкаются на один и тот же объект
// console.log([newFruits, fruits]);

// let newFruits2 = fruits.slice(); //Создаем копию
// newFruits2.push("Персик");
// console.log([newFruits2, fruits]) //Массив fruits не изменился

//Объединение массивов
let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let arr3 = [7, 8, 9];
let resultArr = arr3.concat(arr2, arr1);
arr1 = arr1.concat(arr2, arr3); //Объединяем массивы
console.log(resultArr);
console.log(arr1);

//Превращение строки в массив и наоборот
let string = "Съешь еще этих мягких французских булок, да выпей чаю";
console.log(string.split("")); //Делим на символы. .split() разбирает строку на массив по разделителю и возвращает его.
console.log(string.split(" ")); //Разделитель " "(пробел) - поделит строку на слова
console.log(string.split(", ")); //Разделитель ", " - поделит строку на до запятой и после запятой
console.log(string.split("а"));

let arr = string.split(" ");
arr = arr.reverse(); //"Переворачиваем" массив
console.log(arr);

let resultString = arr.join(" XXX "); //Объединяем массив в строку по разделителю
console.log(resultString);






