"use strict"

let redLight = document.querySelector(".red");
let yellowLight = document.querySelector(".yellow");
let greenLight = document.querySelector(".green");

let redTime = 3000;
let yellowTime = 1000;
let greenTime = 2000;

let currentLight = "";

startWorking();
function startWorking() {
  //Адская пирамида коллбэков
  // turnRed();
  // setTimeout(() => {
  //   turnYellow();
  //   setTimeout(() => {
  //     turnGreen();
  //     setTimeout(() => {
  //       turnYellow();
  //       setTimeout(() => {
  //         startWorking();
  //       } ,yellowTime)
  //     }, greenTime)
  //   }, yellowTime)
  // }, redTime);
  turnRed()
    .then(() => {return turnYellow()}) //return нужен для запуска "цепочки промисов"
    .then(() => {return turnGreen()})
    .then(() => turnYellow()) // == {return turnYellow()}
    .then(() => startWorking())
  
}



function turnRed() {
  return new Promise(function(resolve, reject) {
    currentLight = "red";
    redLight.style.backgroundColor = "red";
    yellowLight.style.backgroundColor = "";
    greenLight.style.backgroundColor = "";
    setTimeout(() => {
      resolve();
    }, redTime);
  });

}

function turnYellow() {
  return new Promise(function(resolve, reject) {
    currentLight = "yellow";
    redLight.style.backgroundColor = "";
    yellowLight.style.backgroundColor = "yellow";
    greenLight.style.backgroundColor = "";
    setTimeout(() => {
      resolve()
    }, yellowTime);
  });
}

function turnGreen() {
  return new Promise(function(resolve, reject) {
    currentLight = "green";
    redLight.style.backgroundColor = "";
    yellowLight.style.backgroundColor = "";
    greenLight.style.backgroundColor = "green";
    setTimeout(() => {
      resolve()
    }, greenTime);
  })
}

let car = document.querySelector(".car");

drive();
function drive() {
  driveLeft()
    .then(() => teleportRight())
    .then(() => drive());
}

function driveLeft() {
  return new Promise(function(resolve, reject) {
    car.style.transition = "left 5s linear";
    car.style.left = "100%";
    car.ontransitionend = () => {
      car.ontransitionend = null;
      resolve();
    }
  })
}

function teleportRight() {
  return new Promise(function(resolve, reject) {
    car.style.transition = "";
    car.style.left = (0 - car.getBoundingClientRect().width) + "px";
    setTimeout(() => {
      resolve()
    }, 30);
  });
}





function calculate(a, b) {
  return new Promise(function(resolve, reject) {
    console.log("Промис начал свою работу")
    setTimeout(() => {
      resolve(a + b); //Успешное завершение промиса
    }, getRandomInt(3000, 5000));
    setTimeout(() => {
      reject(a + b); //Промис завершился с ошибкой
    }, getRandomInt(3000, 5000));
  });
}

calculate(5, 7)
  .then((result) => {console.log("Промис выполнился успешно! " + result)}) //Затем .then(callback). Выполняется после resolve()
  .catch((result) => {console.error("Промис завершился с ошибкой!" + result)}) //Поймать .catch(callback). Выполняется после reject()
  .finally(() => {console.log("Промис завершил работу!")}); //В конце концов .finally(callback). Выполняется в любом случае после resolve() или reject()


function getRandomInt(start, end) {
  return start + Math.floor(Math.random()*(end - start));
}

