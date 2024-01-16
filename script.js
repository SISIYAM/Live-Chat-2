/*
 * Title: Live Chat-box
 * Description: Simple Live Chat-Box Using Ajax
 * Author: MD Saymum Islam Siyam (CodeSQL)
 * Email: si31siyam@gmail.com
 * Portfolio: https://siyam70.netlify.app/
 * Date: 14/01/24
 */

// variables
const textarea = document.querySelector("textarea");
const sendBtn = document.querySelector("#send-btn");
const objDiv = document.querySelector("#messageBox");
// auto textarea height
textarea.addEventListener("keyup", (e) => {
  textarea.style.height = "40px";
  let textareaHeight = e.target.scrollHeight;
  textarea.style.height = `${textareaHeight}px`;
});

textarea.addEventListener("keypress", (e) => {
  // if press enter key
  if (e.key === "Enter") {
    e.preventDefault();
    // now if user press enter then click on sendBtn
    sendBtn.click();
  }
});

// if press enter or sendBtn then insert message into database
sendBtn.addEventListener("click", () => {
  let message = textarea.value;
  fetch(`insert.php?msg=${message}`)
    .then((response) => {
      if (response.ok) {
        return response.text();
      }
    })
    .then(() => {
      textarea.style.height = "40px";
      textarea.value = "";
      setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
      }, 100);
    });
});

// after insert into database show data using javaScrip fetch api
setInterval(() => {
  fetch("get.php")
    .then((output) => {
      if (output.ok) {
        return output.text();
      }
    })
    .then((add) => {
      objDiv.innerHTML = add;
    });
}, 100);
