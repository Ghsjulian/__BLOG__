"use strict";
import { check } from "./check.js";
import { fetch_All } from "./fetch.js";
function $(selector) {
  return document.querySelector(selector);
}
/*
$("#order").onclick = (e) => {
  window.location.href = "__index__.php?page=__confirm_order__";
};
*/
/*_________REGISTRATION CODE AREA____________*/
/*
$(".__regi_btn").addEventListener("click", (e) => {
  e.preventDefault();
  var error = [];
  var frm = $("#myfrm");
  var err = $("._error");
  var success = $("._success");
  var user_name = $("#user_name").value.trim();
  var user_email = $("#user_email").value.trim();
  var user_password = $("#user_password").value.trim();
  var form_data = new FormData(frm);

  if (user_name == "") {
    error[0] = "Enter Full Name";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (user_email == "") {
    error[0] = "Enter Your User Name";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (user_password == "") {
    error[0] = "Enter Password";
    err.style.display = "block";
    err.textContent = error[0];
  } else {
    error[0] = "";
  }
  if (error[0] == "") {
    err.style.display = "none";
    success.style.display = "block";
    fetch_All({ url: "public/server/__function__.php", body: form_data });
  }
});
*/
$(".__upload_btn").onclick = (e) => {
  e.preventDefault();
  var frm = $("#myfrm");
  var file = $("#file");
  var form_data = new FormData(frm);
  // form_data.append('file', .files[0])
  console.log(form_data.get("file"));
  fetch("public/server/__function__.php", {
    method: "POST",
    body: form_data,
    //  contentType: false,
    // processData: false,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      console.log(data);
      alert(data);
    });
};
