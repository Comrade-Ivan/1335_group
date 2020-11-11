"use strict"

//Операторы сравнения
// let a = 5;
// let b = 3;
// console.log(a > b); //true
// console.log(a < b); //false
// console.log(a >= b); //true
// console.log(a <= b); //false

// let c = 5;
// let d = "5";
// console.log(c == d); //true сравнение
// console.log(c === d); //false тождество (строгое равенство). У сравниваемых переменных должны совпадать типы данных. Используется часто при сравнении с 0, false, true, null
// console.log(d === false); //false
// console.log(c != d); //false с не равно d
// console.log(c !== d); //true не равно (тождество)

// let e = "abc";
// let f = "abc";
// let g = " abc";
// let h = "Abc";

// console.log(e == f); //true - строки полностью идентичны 
// console.log(e == g); //false - пробел тоже символ
// console.log(e == h); //false - регистр учитывается

//Условия
// let speed = 60;

// if (speed < 80) { //ЕСЛИ speed МЕНЬШЕ 80
//   alert("Проезжайте"); 
// } else if (speed < 140) { //ИНАЧЕ ЕСЛИ
//   alert("Превышаете");
// } else if (speed < 300) { 
//   alert("🚔Вас лишили прав");
// } else { //ИНАЧЕ
//   alert("🚔Полицейская машина не смогла вас догнать");
// }
// console.log("Проверка скорости проведена");

//В ситуации с множественными else if лучше использовать switch-case
//Пользователь вводит номинал монеты (1, 2, 5, 10). Мы выводим номинал буквами (прим. "Один рубль")
// let nominal = prompt("Введите номинал числом (1, 2, 5, 10)");

// if (nominal == "1") {
//   alert("Один рубль");
// } else if (nominal == "2") {
//   alert("Два рубля");
// } else if (nominal == "5") {
//   alert("Пять рублей");
// } else if (nominal == "10") {
//   alert("Десять рублей");
// } else {
//   alert("Нет такого номинала");
// }
// switch (nominal) {
//   case "1": //Условное ИНАЧЕ ЕСЛИ
//   //case используют для сравнения ===
//     alert("Один рубль");
//     break; //"закрываем" case
//   case "2":
//     alert("Два рубля");
//     break;
//   case "5":
//     alert("Пять рублей");
//     break;
//   case "10":
//     alert("Десять рублей");
//     break;
//   default: //Если не один case не подошел. Условное ИНАЧЕ
//     alert("Нет такого номинала");
// }

//Условные операторы
// let speed = +prompt("Введите скорость");
// let roadOpened = true;
// if(speed >= 20 && speed < 80 && roadOpened === true) {
//   alert("Хорошая скорость");
// } else if (speed < 20 && roadOpened === true) {
//   alert("Слишком медленно");
// } else if (roadOpened === true) {
//   alert("Слишком быстро"); 
// } else {
//   alert("Дорога закрыта");
// }
// if (roadOpened === true) {
//   if(speed >= 20 && speed < 80) {
//     alert("Хорошая скорость");
//   } else if (speed < 20) {
//     alert("Слишком медленно");
//   } else {
//     alert("Слишком быстро");
//   }
// } else {
//   alert("Дорога закрыта");
// }

//Логическое И(&&). Все варианты должны быть ИСТИНА.
// console.log(true && true) //true
// console.log(true && true && true) //true
// console.log(true && false && true) //false
// //Логическое ИЛИ(//). Один из вариантов ИСТИНА.
// console.log(true || true) //true
// console.log(true || false || true) //true
// console.log(false || false || false) //false

// //Пользователь вводит число и если число попадает в диапазон от 0 до 100 или от 900 до 1000 вывести "попало" иначе вывести "не попало"
// let a = +prompt("Введите число");
// if ( (a >= 0 && a <= 100) || (a >= 900 && a <= 1000) ) {
//   alert("попало");
// } else {
//   alert("не попало");
// }

// //Логическое НЕ(!)
// let accessAllowed = true;
// if (!accessAllowed) { //ЕСЛИ НЕ accessAllowed (true превращается в false и наоборот)
//   alert("Доступ запрещен");
// }

//Циклы

//Отобразить цифры от 0 до 9, каждая в отдельном console.log();
// console.log(0);
// console.log(1);
// console.log(2);
// console.log(3);
// console.log(4);
// console.log(5);
// console.log(6);
// console.log(7);
// console.log(8);
// console.log(9);

//Цикл while
// let i = 0;
// while (i < 10) { //Выполняет инструкции из тела цикла пока выполняется условие
//   console.log(i);
//   i++;
// }

// do { //Тело цикла выполнится хотябы один раз
//   console.log("Мне все равно на условие");
// } while (i > 100);

//Цикл for
//Внутри цикла for для обозначения интерации используются i j key
// for (let i = 0; i < 10; i++) { // for (переменная, отвечающая за шаг; условие; размер шага)
//   console.log(i);
// }
// //Пример с переборкой массива
// let fruits = ["Яблоко", "Банан", "Груша"];
// for (let i = 0; i < fruits.length; i++) {
//   console.log(fruits[i]);
// }

//Иногда нам требуется вложить цикл в цикл
//Задача - отобразить таблицу умножения
// for (let i = 1; i <= 10; i++) {
//   for(let j = 1; j <= 10; j++) {
//     console.log(`${i} x ${j} = ${i * j}`)
//   }  
// }

//break - принудительное завершение цикла
// for (let i = 0; i < 10; i++) {
//   if (i == 5) {
//     break; //(п. Сломать/Остановить) Завершит цикл при i == 5
//   }
//   console.log(i);
// }
//continue - пропуск текущей итерации
// for (let i = 0; i < 10; i++) {
//   if (i == 5) {
//     continue; //(п. Продолжить) Принудительные переход к следующей итерации цикла при i == 5
//   }
//   console.log(i);
// }

//Формируем строку
let str = "";
for(let i = 0; i < 10; i++) {
  str = str + i;
}
console.log(str);


