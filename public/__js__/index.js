"use strict";
function __ghs(element) {
  return document.querySelector(element);
}

// SAVE POST
__ghs(".post_btn").addEventListener("click", (e) => {
  e.preventDefault();
  var file = __ghs("#file"); //document.querySelector('input[type="file"]');
  var category = __ghs("option").value;
  var post = __ghs("#post_content").value;
  var formData = new FormData();
  formData.append("file", file.files[0]);
  formData.append("category", category);
  formData.append("post", post);
  fetch("public/__server__/__save_post__.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      alert(data);
    })
    .catch((error) => {
      console.error("Error uploading file:", error);
    });
});
