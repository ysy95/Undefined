let tab_btn = document.querySelectorAll('.em_info-tab_btn.list01');
let tab = document.querySelectorAll('.em_info-tab');


for(let i = 0; i < tab_btn.length; i++) {
  tab_btn[i].addEventListener('click', function() {
    for(let j = 0; j < tab_btn.length; j++) {
      tab_btn[j].classList.remove('act');
      tab[j].classList.remove('act');
    }
    tab_btn[i].classList.add('act');
    tab[i].classList.add('act');
  });
}

select = document.getElementById("comp");
select.addEventListener("change", function() {
  this.form.submit();
});

// 페이지 로드시 이전 스크롤 위치로 이동
window.onload = function() {
  if (sessionStorage.getItem("scrollPosition") !== null) {
      window.scrollTo(0, sessionStorage.getItem("scrollPosition"));
  }
}

// 페이지 언로드시 현재 스크롤 위치 저장
window.onbeforeunload = function() {
  sessionStorage.setItem("scrollPosition", window.pageYOffset);
}
