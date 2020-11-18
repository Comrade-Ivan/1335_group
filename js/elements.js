"use strict"
//Работа с внутренним содержимым элементов

function getText() {
  let paragraph = document.querySelector(".inner-html p");
  console.log(paragraph.textContent); //Получаем внутреннее содержимое параграфа без тэгов
  console.log(paragraph.innerText); //Также, как и textContent
  console.log(paragraph.innerHTML); //Получаем внутреннее содержимое параграфа в виде html
}

function setText() {
  let paragraph = document.querySelector(".inner-html p");
  //paragraph.innerText = "<b>Новый текст</b>"; //Изменяем внутренне содержимое как текст
  paragraph.innerHTML = "<b>Новый текст</b>";
}

function addCard() {
  let addDiv = document.querySelector(".html-add");
  let html = `
  <div class="alert alert-primary" role="alert">
    Это основное уведомление — check it out!
  </div>
  `;
  addDiv.innerHTML += html; //Добавляем уведомление
}

function cleanDiv() {
  let addDiv = document.querySelector(".html-add");
  addDiv.innerHTML = ""; //Очищаем внутреннее содержимое элемента
}

//Работа с атрибутами
//Стандартные атрибуты являются свойствами элемента.
//Работа как со свойствами
let attrInput = document.querySelector(".attr input");
let attrImg = document.querySelector(".attr img");
let attrA = document.querySelector(".attr a");

function getAttrs() {
  console.log(attrInput.value);
  console.log(attrImg.src);
  console.log(attrA.href);
}

function setInputValue(value) {
  attrInput.value = value; //Меняем значение в инпуте
}

function changeImage(src) {
  attrImg.src = src; //Изменяем src у картинки
}

function changeHref(link) {
  attrA.href = "https://wikipedia.org";
}

//Работа с помощью методов работы с атрибутами
/*
elem.hasAttribute(name) – проверяет наличие атрибута.
elem.getAttribute(name) – получает значение атрибута.
elem.setAttribute(name, value) – устанавливает значение атрибута.
elem.removeAttribute(name) – удаляет атрибут.
*/

function summMoney() {
  let rub100 = document.querySelector(".rub-100");
  let rub500 = document.querySelector(".rub-500");
  let resultInput = document.querySelector(".result-input");
  let cost100 = +rub100.getAttribute("cost"); //Получаем значение нестандартного атрибута cost
  let cost500 = +rub500.getAttribute("cost"); //Значения атрибутов - строки
  resultInput.value = cost100 + cost500;
}

function getImageSrc() {
  let rub100 = document.querySelector(".rub-100");
  console.log(rub100.src); //Возвращает абсолютный путь
  console.log(rub100.getAttribute("src")); //Возвращает то, что записано в атрибуте
  //Когда вы работаете или записываете с относительными путями, необходимо использовать getAttribute и setAttribute вместо свойств.
}

function setImage() {
  let rub100 = document.querySelector(".rub-100");
  rub100.setAttribute("src", "../../905/coffee/img/10rub.png"); //Устанавливаем новое значение с помощью метода
}

//Работа со стилями

let box = document.querySelector(".box");

function changeBox() {
  box.style.width = "300px"; //Устанавливаем новый стиль
  box.style.height = "300px";
  box.style.backgroundColor = "blue"; //Названия стилей, состоящие их двух слов записываются в верблюжьей нотации
}

function returnBoxStyle() {
  box.style.width = ""; //Механизм "Верни как было"
  box.style.height = ""; //К элементу теперь снова применяется значения св-ва, прописанное в файле CSS
  box.style.backgroundColor = "";
}
let box2 = document.querySelector(".box2");
function getStyle() {
  console.log(box2.style.width); //Мы не можем получить через style значение, указанное в файле CSS или тэге style. Только значение из атрибута style
  let computedStyle = getComputedStyle(box2); //Получаем объект окончательных свойств
  console.log(computedStyle.width);
  console.log(computedStyle.marginTop);
}

function addMargin(amount) {
  let computedStyle = getComputedStyle(box2);
  let currentMarginTop = parseInt(computedStyle.marginTop); //Вытаскиваем число из значения свойства
  box2.style.marginTop = (currentMarginTop + amount) + "px";
}

let left = false; //Переменная - флаг
function flyBox() {
  if (left === false) {
    box2.style.left = "80%";
    left = true;
  } else {
    box2.style.left = "";
    left = false;
  }
}

//Работа с классами
let button = document.querySelector(".classes button");

function getClasses() {
  console.log(button.className); //Получаем значение из класса
  console.log(button.classList); //Получаем массив классов
}

function fullChangeButton() {
  button.className = "bg-info p-5 text-white"; //Полностью перезаписываем атрибут class
}
//Методы работы с classList
/*
elem.classList.add/remove("class") – добавить/удалить класс.
elem.classList.toggle("class") – добавить класс, если его нет, иначе удалить.
elem.classList.contains("class") – проверка наличия класса, возвращает true/false.
*/

function changeButtonColor() {
  button.classList.remove("btn-primary") //Удаляем класс
  button.classList.add("btn-danger") //Добавляем класс
  button.classList.add("active");
}

function togglePadding() {
  button.classList.toggle("p-5");
}


