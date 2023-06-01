"use strict";
function $(selector) {
  return document.querySelector(selector);
}

export var fetch_All = (p) => {
  var success = $("._success");
  fetch(p.url, {
    method: "POST",
    body: p.body,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      console.log(data);
      alert(data);
      console.log(data);
      success.textContent = data;
    });
};
