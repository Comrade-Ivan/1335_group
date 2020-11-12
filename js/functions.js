"use strict"


//Объявление и вызов функции
// showGreetMessage(); //Вызов функции
// showGreetMessage(); //Функции можно вызывать до их объявления

// function showGreetMessage() { //Объявление функции
//   alert("Привет, мир!");
// }

//Области видимости переменных
// showGoodbyeMessage();
// function showGoodbyeMessage() {
//   let message = "До свидания!"; //Локальная переменная для функции. Переменная message существует только внутри функции
//   alert(message);
// }
// //alert(message); //Получим ошибку - message локальна для функции

// let username = "Vasya123"; //Глобальная переменная, видна во всех вложенных конструкциях
// greetUser();
// function greetUser() {
//   let message = "Добрый день, " + username; //Используем глобальную перменную username
//   alert(message);
// }
// goodbyeUser();
// function goodbyeUser() {
//   let username = "superAdmin"; //При совпадении имен локальной и глобальной переменных используется локальная
//   let message = "До свидания, " + username;
//   alert(message);
// }

// //Те же самые правила распростаняются на условия и на циклы
// //!!! Переменная, объявленная через let внутри фигурных скобок - локальная для этих фигурных скобок!!!
// for (let i = 0; i < 1; i++) {
//   let message = "Локальная переменная для цикла"; //Локальная переменная для цикла
//   console.log(message);
// }
// if (true) {
//   let message = "Локальная переменная для условия";
//   console.log(message);
// }

// function f() {
//   let var1 = 1; //Видно: var1
//   for(let i = 0; i < 5; i++) {
//     let var2 = 2; //Видно: var1 var2 i
//     if (i == 4) {
//       let var3 = 5; //Видно: var1 var2 var3 i
//       continue;
//     }
//   }
// }

//Параметры функции
// function createChatMessage(user, message, role = "guest")  {
//   //Названия параметров мы придумываем самостоятельно
//   //Параметры - локальные переменные для функции
//   //role - необязательный параметр. У него есть значение по умолчанию и его можно не передавать при вызове. Необязательные параметры пишутся после обязательных.
//   console.log(user + "[" + role + "]: " + message);
// }
// createChatMessage("user123", "Всем привет!"); //Параметры необходимо передать при вызове (слева направо)
// createChatMessage("superVasya", "Даров)))", "admin");
// //createChatMessage(prompt("Введите ник"), prompt("Введите сообщение")); //В качестве параметров будет использован РЕЗУЛЬТАТ работы функций prompt
// let username = "petya";
// let text = "Привет)";
// createChatMessage(username, text); //Передать параметры можно используя переменные

// //Возврат значения
// function f2() { //По умолчанию функция возвращает undefined
//   console.log("111");
// }
// //Указать, что должна вернуть функция мы можем с помощью ключевого слова return
// function cube(x) {
//   let result = x**3;
//   return result; //Возвращаем значение из переменной result
//   //return завершает выполнение функции
//   console.log("11111"); // - не сработает, так как написан после return
// }

// let num = cube(3); //Записываем результат работы функции в переменную
// console.log(num); 
// //Нестандартное использование return
// //Создадим кусочек витруальной кофе-машины
// let state = "idle"; //Состояние кофе-машины
// function cookCoffee() {
//   if (state != "idle") {
//     return; //Принудительно завершаем выполнение функции. Позволяет избежать лишней вложенности
//   }
//   console.log("Кофе начал готовиться");
//   state = "cooking";
// }

//Примеры
let userage = +prompt("Введите ваш возраст");
if ( checkAge(userage) ) {
  alert("Заходите");
} else {
  alert("Уходите");
}
function checkAge(age) {
  if (age >= 18) {
    return true;
  } else {
    return false;
  }
}

//Рекурсивные функции
//Рекурсивная функция - функция которая возвращает саму себя. (Чем перезапускает саму себя)

//Выведем столбец чисел от 1 до 10 не используя цикл
let i = 1;
function showNumber() {
  if (i > 10) {
    return;
  }
  console.log(i);
  i++;
  return showNumber(); //Функция вызывает саму себя. Рекурсия.
}
showNumber();







