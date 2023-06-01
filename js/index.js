"use strict";
function __ghs(element) {
  return document.querySelector(element);
}
__ghs("#btn").onclick = (e) => {
  e.preventDefault();
  var input = __ghs("#value").value.trim();
  
    console.log('something'); 
  
};
