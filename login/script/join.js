const c01 = document.querySelector("#c01");
const c02 = document.querySelector("#lc01");
const modal = document.querySelector(".modal");
const modalClose = document.querySelector(".modal_close");

modalClose.addEventListener("click", () => {
  console.log("close");
  modal.style = "display: none";
});


c01.addEventListener("click", (e) => {
  e.preventDefault();
  modal.style = "display: flex";
});
c02.addEventListener("click", (e) => {
  e.preventDefault();
  modal.style = "display: flex";
});

function modal_chk() {
  modal.style = "display: none";
  c01.checked = true;
}

const submitBtn = document.querySelector("input[type=submit]");
const email = document.querySelector("#Email");
const id = document.querySelector("#ID");
const pw = document.querySelector("#PW");
const pw2 = document.querySelector("#PWChk");
const errorBox = document.querySelector(".error");

submitBtn.addEventListener("click", (e) => {
  if (email.value == "") {
    e.preventDefault();
    email.focus();
    errorBox.style = "display: block";
    errorBox.innerText = "이메일을 입력해주세요.";
  } else if (id.value == "") {
    e.preventDefault();
    id.focus();
    errorBox.innerText = "아이디를 입력해주세요.";
  } else if (pw.value == "") {
    e.preventDefault();
    pw.focus();
    errorBox.style = "display: block";
    errorBox.innerText = "비밀번호를 입력해주세요.";
  } else if (pw.value !== pw2.value) {
    e.preventDefault();
    pw.focus();
    errorBox.style = "display: block";
    errorBox.innerText = "비밀번호가 일치하지 않습니다.";
  } else if (c01.checked == false) {
    e.preventDefault();
    errorBox.style = "display: block";
    errorBox.innerText = "개인정보 수집 및 이용에 동의해주세요.";
  }
});