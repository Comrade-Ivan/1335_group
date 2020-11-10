"use strict"
//Включаем строгий режим

//Переменные
//Создание переменных

// let message; //Объявляем переменную, переменная может быть объявлена только один раз
// message = "Hello"; //Присваиваем значение переменной
// alert(message); //Используем переменную

// //Можно объявлять переменные и сразу присваивать им значения
// let greetMessage = "Привет, мир!";
// //Мы также можем менять значение уже объявленной переменной. Старое значение теряется безвозвратно
// greetMessage = "Hallo Welt!";
// alert(greetMessage);
// //Можно использовать одну переменную, чтобы высчитать другую
// let a = 5;
// let b = 3;
// let c = a + b;
// alert(c); //8

//Названия переменных
//Нотации - camelCase, snake_case
//Регистр имеет значение
// let username = "Василий";
// alert(userName); // Uncaught ReferenceError: userName is not defined
// //Название переменной должно отображать ее внутреннее содержимое

// let countOfBirdsOnTheRoad = 5; //КоличествоПтицНаДороге
// alert(countOfBirdsOnTheRoad);

//Константы
// const today = "10/11/2020"; //Объявляем константу (read-only)
// alert(today); //Можно использовать
// //today = "11/11/2020"; //Нельзя перезаписывать

// //Константами мы объявляем те переменные, которые мы не хотим менять (или не хотим чтобы кто-нибудь или что-нибудь их поменяло)
// //Название констант часто объявляется капсом
// const COLOR_RED = "#F00";
// const COLOR_GREEN = "#0F0";

// //const HELLO_MESSAGE = "Привет";
// const HELLO_MESSAGE = "Hello";

//Типы данных
// let a = 42; // Number - число
// let a1 = 53.5; // тоже Number
// let a3 = "abc" / 2; // == NaN (Not a Number) - ошибка вычисления. Тип данных Number.

// let b = "строка"; //String - cтрока
// let b1 = 'тоже строка';
// let b2 = `еще одна ${b}`; //Обратные кавычки. ${variable} - позволяет вписывать переменные в строку. Результат: "еще одна строка"
// //Сложение строк (конкатенация)
// let hello = "Привет";
// let world = "мир!";
// let message = hello + ", " + world; //Объединяем сторки hello и world c пробелом посередине
// //let message = `${hello}, ${world}`;
// alert(message);

// let c = true; //Boolean - булевый(логический) тип. Отвечает на вопросы да\нет
// let fieldChecked = true;
// let likeBirds = false;

// let d = null; //Null - Ничего(пусто). "Вернуться с пустыми руками".
// let e; //Undefined - значение не было присвоено. Переменные, которым не присваивается значение при создании имеют значение undefined

// let user = {name: "Василий", lastname: "Петров"}//Object - объект
// let fruits = ["Яблоко", "Банан", "Груша"] //Object. Но из-за другого синтаксического написания такую структуру называют Array - массив

// //Проверить с тип данных у переменной можно с помощью функции typeof()
// alert( typeof(b) );

//JS является языком с динамическим типом данных
// let a = 42;
// a = "строка";
// //Такое возможно, JS разрешает изменять тип данных у переменных.
// //В JS есть возможность использовать статический тип данных. Для этого используется TypeScript

// //Строковое преобразование
// let b = String(42);// "42"
// let b1 = String(true); //"true"
// let b2 = String(null); //"null"
// let b3 = String(undefined); //"undefined"
// //Преобразование идентично с написанием
// let b4 = String(["Яблоко", "Банан", "Груша"]); //"Яблоко,Банан,Груша"
// let b5 = String({name: "Василий", lastname: "Петров"}); //"[Object object]"

// //alert() всегда приводит к строке
// alert({name: "Василий", lastname: "Петров"});

// //Приведение к числу
// let num = "2" + 3; //так как + отвечает и за конкатенацию и за сложение, в такой ситуации числа будут приводиться к строке и осуществляться сложение строк   
// alert(num); //"23"
// let num2 = "10" / 2; //В данном случае наоборот - строка приведется к числу
// alert(num2); //"5"
// let num3 = "10abc" / 2; //Строки приводятся к числу только если в строках содержится ТОЛЬКО число
// alert(num3) //NaN

// let num4 = Number(null) // 0
// let num5 = Number(true) // 1
// let num6 = Number(false) // 0
// let num7 = Number(undefined) //NaN

// //Приведение к логическому типу
// //Значения, которые интуитивно «пустые», вроде 0, пустой строки, null, undefined и NaN, становятся false.
// //Все остальное - true.
// let d = Boolean(""); //false
// let d1 = Boolean(null); //false
// let d2 = Boolean(0); //false

// let d3 = Boolean(5); //true
// let d4 = Boolean("abc"); //true
// let d5 = Boolean(-1); //true
// let d6 = Boolean(" "); //true - пробел - символ
// let d7 = Boolean("0"); //true

//Взаимодействие с пользователем
//alert(message) - показывает модальное окно
// let a = "foo"
// let b = "bar"
// alert(a + "," + b);
// alert(a + "\n" + b); // \n - спецсимвол переноса строки
// //prompt(question [, default]) - задаем вопрос пользователю, просим что-то ввести
// //!!! prompt всегда возвращает строку !!!
// let c = prompt("Введите ваше имя");
// alert(c);
// let c1 = prompt("Введите ваше имя", "anonym") //второй параметр - значение по умолчанию
// alert(c1);
// let c2 = prompt("Введите число"); //prompt возвращает строку
// alert(c2 + 10); //(если ввести 10)"1010"
// //confirm(question) - задает пользователю вопрос типа "да/нет". Возвращает true или false
// let checkAge = confirm("Вам есть 18 лет?");
// alert(checkAge);
//alert prompt confirm приостанавливают действие кода, пока не подтвердим ли не отменим
//console.log("123") - выводит сообщение в консоль
//Математические операторы
//Унарный плюс приводит переменную к числу
//Вариант 1
// let a = "5";
// let b = 3;
// let result = +a + b; // +a - приведение переменной a к числу
// console.log(result);
//Вариант 2
// let a = +prompt("Введите число");
// console.log(a + 100);

// let a = 5;
// let b = 3;
// console.log(a + b); //сложение
// console.log(a - b); //вычитание
// console.log(a / b); //деление
// console.log(a * b); //умножение

// console.log(a % b); //Остаток от деления
// console.log(a ** b); //Возведение в степень

let a = 10;
a = a + 25; //До присвоения используется старое значение переменной
console.log(a); //35
let b = 10;
b += 25; //тоже самое, что b = b + 25; - синтаксическое сокращение
console.log(b); //35
//Работает с любыми операторками: -= *= /=

//Инкремент и декремент
let c = 0;
c++; //Инкремент - тоже самое, что и c = c + 1 - прибавление единицы
console.log(c); //1
let d = 0;
d--; //Декремент - вычитает 1
console.log(d); //-1=


