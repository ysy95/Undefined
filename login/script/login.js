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

$(function(){
  // AJAX로 PHP파일 호출
  $.ajax({
    type : "GET",
    url : "http://localhost/netmarble/employment/script/session.php",
    dataType : "html",
    error : function(){
    },
    success : function(data){
      if(data == ''){
        $('.lnb').html('<li><a href="http://localhost/netmarble/login/login.html" title="로그인하기">로그인</a></li><li><a href="http://soyedpork27.dothome.co.kr/login/join.html" title="회원가입하기">회원가입</a></li>');
      } else {
        alert('이미 로그인 되어있습니다.');
        location.href = history.back();
      }
    }
  })  
  });
  