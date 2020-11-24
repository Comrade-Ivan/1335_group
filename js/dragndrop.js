"use strict"

let fruits = document.querySelectorAll(".fruit");
for(let fruit of fruits) {
  fruit.addEventListener("mousedown", takeItem);
}

function takeItem(event) {
  event.preventDefault(); //Отменяем стандартное действие браузера (убираем призраков картинок)
  
  //Таскаем сам элемент
  let fruit = this;
  
  //Таскаем копии
  // let fruit = this.cloneNode(true);
  // this.after(fruit);
  
  fruit.style.position = "absolute";
  //fruit.style.top = this.getBoundingClientRect().top + "px"; //Перемещение копии
  //fruit.style.left = this.getBoundingClientRect().left + "px"; //Перемещение копии
  fruit.style.zIndex = "1000";
  
  let elemBelow = null;
  let cart = document.querySelector(".cart");
  
  console.log(fruit.getBoundingClientRect()); //Получаем информацию о расположении элемента на экране и его фактической ширине/высоте в px
  
  //Тащим за центр  
  // fruit.style.top = (event.clientY - fruit.getBoundingClientRect().height/2) + "px"; //Позиция курсора по оси Y
  // fruit.style.left = (event.clientX - fruit.getBoundingClientRect().width/2) + "px"; //Позиция курсора по оси Х
  
  //Тащим за "где взяли"
  let shiftX = event.clientX - fruit.getBoundingClientRect().left;
  let shiftY = event.clientY - fruit.getBoundingClientRect().top;
  
  moveAt(event);
  
  function moveAt(event) {
    fruit.style.top = (event.clientY - shiftY) + "px"; //Позиция курсора по оси Y
    fruit.style.left = (event.clientX - shiftX) + "px";  //Позиция курсора по оси Х
    fruit.hidden = true; //Прячем элемент
    elemBelow = document.elementFromPoint(event.clientX, event.clientY); // Счтиваем элемент под
    fruit.hidden = false; //Показываем элемент
    // if (elemBelow == cart || elemBelow.parentElement == cart) {
    //  //Вариант с elementFromPoint
    //   cart.style.backgroundColor = "yellow";
    // } else {
    //   cart.style.backgroundColor = "";
    // }
    if ( inCart(fruit) ) {
      cart.style.backgroundColor = "yellow";
    } else {
      cart.style.backgroundColor = "";
    }
  }
  
  document.addEventListener("mousemove", moveAt); //Элемент начинает двигаться за курсором
  
  fruit.addEventListener("mouseup", function handler() {
    fruit.removeEventListener("mouseup", handler);
    document.removeEventListener("mousemove", moveAt);
    fruit.style.zIndex = "";
    // if (elemBelow == cart || elemBelow.parentElement == cart) {
    //   cart.style.backgroundColor = "lightgreen";
    //   cart.append(fruit);
    // } else {
    //   cart.style.backgroundColor = "";
    //   document.querySelector(".fruits").prepend(fruit)
    //   //fruit.remove(); //Перемещение копии
    // }    
    if ( inCart(fruit) ) {
      cart.style.backgroundColor = "lightgreen";
      cart.append(fruit);
      calcCartSum()
    } else {
      cart.style.backgroundColor = "";
      document.querySelector(".fruits").prepend(fruit)
      calcCartSum()
      //fruit.remove(); //Перемещение копии
    }
  })
}

function inCart(elem) {
  let cart = document.querySelector(".cart");
  let cartLeftTopCorner = {
    x: cart.getBoundingClientRect().x, 
    y: cart.getBoundingClientRect().y
  };
  let cartRightBottomCorder = {
    x: cartLeftTopCorner.x + cart.getBoundingClientRect().width,
    y: cartLeftTopCorner.y + cart.getBoundingClientRect().height,
  }
  
  let elemLeftTopCorner = {
    x: elem.getBoundingClientRect().x, 
    y: elem.getBoundingClientRect().y
  };
  let elemRightBottomCorder = {
    x: elemLeftTopCorner.x + elem.getBoundingClientRect().width,
    y: elemLeftTopCorner.y + elem.getBoundingClientRect().height,
  }
  
  if (elemLeftTopCorner.x > cartLeftTopCorner.x && 
      elemLeftTopCorner.y > cartLeftTopCorner.y &&
      elemRightBottomCorder.x < cartRightBottomCorder.x &&
      elemRightBottomCorder.y < cartRightBottomCorder.y
  ) {
    return true;
  } else {
    return false;
  }
}

function calcCartSum() {
  let cart = document.querySelector(".cart");
  let products = cart.querySelectorAll(".fruit");
  let sum = 0;
  for (let product of products) {
    sum += +product.getAttribute("cost");
  }
  let resultInput = document.querySelector(".cart-result");
  resultInput.value = sum;
}
