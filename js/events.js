"use strict"

function showMessage() {
  alert("Показываю сообщение");
} 
function showHiMessage(username) {
  alert("Привет, " + username);
}

//C использованием свойств DOM-объекта
let propertyButton1 = document.querySelector(".property-button-1");
propertyButton1.onclick = showMessage; //Передаем тело функции

let propertyButton2 = document.querySelector(".property-button-2");
propertyButton2.onclick = function() { //Используем функцию-обертку
  showHiMessage("Василий");
}

let propertyButton3 = document.querySelector(".property-button-3");
propertyButton3.onclick = () => {
  alert("Снимаем слушателя событий");
  propertyButton3.onclick = null; //Снимает слушателя событий (кнопка нажмется только один раз)
}

//С использованием метода .addEventListener()

let eventButton1 = document.querySelector(".event-listener-button-1");
eventButton1.addEventListener("click", showMessage);
eventButton1.addEventListener("click", function() { //addEventListener позволяет повесить несколько обработчиков на одно и то же событие
  showHiMessage("Сергей");
});

//Снимаем слушателя событий с помощью removeEventListener()
let eventButton2 = document.querySelector(".event-listener-button-2");
eventButton2.addEventListener("click", showMessage);
//eventButton2.addEventListener("click", showMessage); //Избегайте задваивания addEventListener

let eventButton3 = document.querySelector(".event-listener-button-3");
eventButton3.addEventListener("click", function handler() {
  eventButton2.removeEventListener("click", showMessage); //Чтобы снять событие, повешенное с помощью addEventListener, функция-обработчик должна быть именованной
  eventButton3.removeEventListener("click", handler);
});

//Вешаем один и тот же обработчик на одинаковые элементы
let multiButtons = document.querySelectorAll(".multi-button");
for (let button of multiButtons) {
  button.addEventListener("click", function() {
    alert("Вы нажали на кнопку");
    console.log(this);
  })
}

//this в слушателях событий
//this возвращает объект к которому обращен метод
function showThis() {
  console.log(this);
}

let thisButton = document.querySelector(".this-button");
thisButton.addEventListener("click", showThis);
thisButton.addEventListener("click", function() {
  console.log(this);
})
//Внутри функции-обработчика this возвращает объект, а котором висит слушатель события

//Потеря this
//Функции-стрелки не имеют собственно this, они берут его из внешней области видимости
thisButton.addEventListener("click", () => {
  console.log(this);
});

//Объект события - event
//Любой слушатель событий передает в функцию-обработчик первым параметром объект с информацией о событии

let eventButton = document.querySelector(".event-button");
eventButton.addEventListener("click", function(event) {
  console.log(event);
  console.log([event.clientX, event.clientY]);
})


//event.target event.currentTarget this
let complexButton = document.querySelector(".complex-button");
complexButton.addEventListener("click", function(event) {
  console.log(event.target); //Возвращает элемент, на котором было совершено нажатие (он может не совпадать с элементом, на котором висит событие)
  console.log(event.currentTarget); //Возвращает элемент, на котором висит событие (альтернатива this)
  console.log(this);
})  

//Пример
let balance = 70;
let coffeeButtons = document.querySelectorAll(".complex-button");
for (let coffeeButton of coffeeButtons) {
  coffeeButton.addEventListener("click", buyCoffee);
}
function buyCoffee(event) {
  let cost = +this.getAttribute("cost"); //Получаем значение нестандартных атрибутов
  let name = this.getAttribute("name");
  if (balance >= cost) {
    balance -= cost;
    alert(`Ваш ${name} готовится. Сдача: ${balance}`);
  } else {
    alert("Недостаточно средств");
  } 
}

