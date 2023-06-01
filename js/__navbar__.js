"use strict";
function $(selector) {
  return document.querySelector(selector);
}

/*============Menu Icons Showing===========*/

$("#nav-btn").onclick = (e) => {
  e.preventDefault();
  if ($("#nav-btn").textContent == "=") {
    $("#nav-btn").textContent = "X";
    $("#nav-btn").style.color = "#fff";
    $("#nav-btn").style.backgroundColor = "#ff0000";
  } else {
    $("#nav-btn").textContent = "=";
  }
  $("#nav").style.display = "block";
  $("#nav").classList.toggle("mobile");
};
