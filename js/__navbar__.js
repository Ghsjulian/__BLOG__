"use strict";
function $(selector) {
  return document.querySelector(selector);
}

/*============Menu Icons Showing===========*/

$("#nav-bttnyyy").onclick = (e) => {
  e.preventDefault();
  alert(' '); 
  $("#nav-btn").innerHTML = "";
  //$("#nav").style.display = "block";
  $("#nav").classList.toggle("mobile");
};
