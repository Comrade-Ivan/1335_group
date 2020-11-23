"use strict"

setTimeout(callback, delay)
//Колбэк-функция - функция, которая выполнится после другой функции, завершившей своё выполнение

function showOne() {
  console.log("сообщение");
}

function showMessage(message) {
  console.log(message);
}

setTimeout(showOne, 3000); //Функция в таком случае указывается без скобок, так как вместо результат работы функции нам нужно тело функции
setTimeout(function() { //Безымянная функция. Функция обертка.
//C помощью функции-обертки можно передать параметры в вызываемую функцию, или вызвать несколько функций сразу
  showMessage("hello");
}, 5000)

setTimeout(function() {
  console.log("111");
}, 7000);

// setTimeout(function handler() {
//   console.log("111");
// }, 7000);

//Функция-стрелка - синтаксическое сокращение безымянной функции
// setTimeout(() => {
//   console.log("333");
// }, 10000)

// //setInterval

// setInterval(() => { //Показывает сообщение каждую секунду
//   console.log("Повторяющееся сообщение");
// }, 1000);

//Отмена таймаутов и интервалов

let timeout = setTimeout(() => {console.log("Таймаут сработал")}, 5000); //Для того, чтобы очистить таймаут или интервал при создании они кладутся в переменную
setTimeout(() => {
  clearTimeout(timeout); //Очищает таймаут
}, 3000)

let interval = setInterval(() => {console.log("Повторяющееся сообщение")}, 1000);
setTimeout(() => {
  clearInterval(interval); //Очищает таймаут
}, 3000)

//Мнимая загрузка (от 0 до 100%)
let counter = 0;
let counterInterval = setInterval(() => {
  if (counter == 100) {
    clearInterval(counterInterval); //Останавливаем интервал внутри самого интервала
  }
  console.log(counter);
  counter++;
  document.body.style.backgroundColor = "rgb(" + (255 - counter) + ", 255, 255)";
}, 100);


function returnInputValue() {
  let input = document.querySelector(".input-text");
  console.log(input.value);
}





