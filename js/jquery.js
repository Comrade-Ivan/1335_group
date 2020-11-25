"use strict"

$("h1").css("text-align", "center");
//document.querySelector("h1").style.textAlign = "center";
console.log($("h1")); //Получаем объект JQuery
console.log($("h1")[0]); //Вытягиваем HTMLElement из объекта JQuery

let header = $("h1"); //Результат поиска можно записывать в переменные
$(header).css("color", "darkblue");

let headerSelector = document.querySelector("h1"); //Можно даже использовать методы, не относящиеся к JQuery
$(headerSelector).css("text-transform", "uppercase");

$(".multi-span").css("color", "red"); //JQuery применяет свои методы ко всем найденным элементам (не важно один он или их много)

//Работа с DOM

//Работа с внутренним содержимым (контекстом)
$(".box").html("<p class=\"text-center text-white\">Я квадрат</p>"); //Внутреннее содержимое
console.log( $(".box").html() ); //Аналог .innerHTML

console.log( $(".input").val() ); //Аналог .value
$(".input").val("54321");

//Работа с атрибутами
console.log( $(".input").attr("type") ); //Считываем значение атрибута
$(".input").attr("title", "Это инпут, а вы что думали?"); //Меняем значение атрибута
$(".input").attr({ //Меняем значение нескольких атрибутов
              "type": "number",
              "name": "someInput",
              "tabindex": "-1",
              "group" : "info",
            });
//Работа со стилями
console.log( $(".box").css("border-radius") ) //Получаем текстовое значение стиля из CSS
$(".box").css("border-radius", "15%"); //Изменяем стиль
$(".box").css({ //Изменяем несколько стилей
            "background-color" : "rgb(100, 255, 100)",
            "border" : "5px dashed yellow",
            "font-size" : "4em",
          });
//Работа с классами
$(".box").addClass("d-flex align-items-center p-3"); //Добавляем классы
$(".box").removeClass("p-3"); //Удалить класс
$(".box").toggleClass("text-danger"); //Вкл./Выкл. класс

//Применение методов каскадом
$(".box-2").html("<p class=\"text-center text-white\">Я квадрат</p>")
            .attr("title", "Это второй квадрат")
            .css({
              "background-color" : "rgb(100, 255, 100)",
              "border" : "5px dashed yellow",
              "font-size" : "4em",
            })
            .addClass("d-flex align-items-center p-3");
            
//События

$(".my-button").click(function() { //Аналог .onclick
  console.log(this);
  alert("Вы нажали на кнопку!");
})
function handler(event) {
  console.log(event);
  if ($(this).hasClass("btn-primary")) {
    $(this).removeClass("btn-primary").addClass("btn-warning");
  } else {
    $(this).removeClass("btn-warning").addClass("btn-primary");
  }
}
$(".my-button-2").on("click", handler) //Работает как addEventListener

$(".my-button-3").click(function() {
  $(".my-button").click(null); //Не сработает
  $(".my-button-2").off("click", handler) //Работает как removeEventListener
})

//Анимации на JQuery
// setTimeout(() => {
//   $(".box-3").css("position", "relative")
//             .hide(500)
//             .show(500)
//             .toggle(500)
//             .toggle(500)
//             .fadeOut(1000)
//             .fadeIn(1000)
//             .slideUp(1000)
//             .slideDown(1000)
//             .delay(3000) //Задержка для анимаций
//             .animate({
//               "left" : "250px",
//             }, 2000)
//             .animate({
//               "top" : "250px",
//             }, 2000)
//             .animate({
//               "left" : 0,
//               "top" : 0,
//             }, 0)
//             .animate({
//               "width" : "400px",  
//             }, 1000, () => {
//               alert("Анимация завершена");
//             }) //"Телепортация"
// },3000)
let benny = new Audio("benny.mp3");
$(".box-3").click(() => {
  if (benny.currentTime == 0) {
    benny.play(); //Начать прогрывание
  } else {
    benny.pause(); //Приостанавливает музыку
    benny.currentTime = 0; //Текущее время
    //В таком совмещении реализуем несуществующий метод .stop()
  }
})


setTimeout(() => {
  $(".box-3").css("position", "relative")
  
  infiniteMovement();
},3000)
function infiniteMovement() {
  $(".box-3").animate({
              "left" : "250px",
            }, 500)
            .animate({
              "top" : "250px",
            }, 500)
            .animate({
              "left" : 0,
            }, 500)
            .animate({
              "top" : 0,
            }, 500, infiniteMovement)
}

