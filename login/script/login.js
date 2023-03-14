const id = document.querySelector("#ID");
const pw = document.querySelector("#PW");
const loginBtn = document.querySelector("input[type=submit]");
const errorBox = document.querySelector(".error");

loginBtn.addEventListener("click", (e) => {
  if (id.value == "") {
    e.preventDefault();
    id.focus();
    errorBox.style = "display: block";
    errorBox.innerText = "아이디를 입력해주세요.";
  } else if (pw.value == "") {
    e.preventDefault();
    pw.focus();
    errorBox.style = "display: block";
    errorBox.innerText = "비밀번호를 입력해주세요.";
  }
});
  