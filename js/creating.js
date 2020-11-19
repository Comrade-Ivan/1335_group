"use strict"

function createAlert(text) {
  let alertElem = document.createElement("div"); //Создаем элемент с тэгом div
  alertElem.className = "alert alert-success"; //Прописываем классы
  alertElem.setAttribute("role", "alert"); //Добавляем атрибут
  alertElem.innerHTML = text; //Добавляем внутреннее содержимое
  /*
  node.append(...nodes or strings) – добавляет узлы или строки в конец node,
  node.prepend(...nodes or strings) – вставляет узлы или строки в начало node,
  node.before(...nodes or strings) –- вставляет узлы или строки до node,
  node.after(...nodes or strings) –- вставляет узлы или строки после node,
  node.replaceWith(...nodes or strings) –- заменяет node заданными узлами или строками.
  */
  let body = document.body;
  //body.append(alertElem); //Добавляем в КОНЕЦ элемента
  //body.prepend(alertElem); //Добавляем в НАЧАЛО элемента
  let h2 = document.querySelector(".add-header");
  //h2.before(alertElem); //Добавляем ДО элемента
  //h2.after(alertElem); //Добавляем ПОСЛЕ элеметна
  h2.replaceWith(alertElem); //ЗАМЕНЯЕТ элемент
}

function changeUl() {
  let li = document.querySelector(".list-one li");
  let listTwo = document.querySelector(".list-two");
  listTwo.append(li); //Перемещаем элемент в другой UL
}

function removeHeader() {
  let h2 = document.querySelector(".add-header");
  h2.remove(); //Удаляем элемент
}

function cloneAlert() {
  let alertElem = document.querySelector(".alert");
  let cloneAlert = alertElem.cloneNode(true); //Создаем копию элемента
  alertElem.after(cloneAlert);
}

const users = [
  {id: 1, email: "vasya123@gmail.com", name: "Василий", login: "vasya123"},
  {id: 2, email: "petya123@gmail.com", name: "Петр", login: "petya123"},
  {id: 3, email: "sergey123@gmail.com", name: "Сергей", login: "superAdmin"},
];
createUserRows(users)
function createUserRows(users) {
  let table = document.querySelector(".users-table");
  for (let user of users) {
    let row = document.createElement("tr");
    row.innerHTML = `
      <td>${user.id}</td>
      <td>${user['email']}</td>
      <td>${user.name}</td>
      <td>${user.login}</td>
    `;
    table.append(row);
  }
}

