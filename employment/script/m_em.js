let swiper = new Swiper("#em-list-slider", {
  loop : true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

let swiper2 = new Swiper("#em-list", {
  loop: true,
  navigation: {
    nextEl: "#swiper02-next",
    prevEl: "#swiper02-prev",
  },
});

$(document).ready(()=> {
  $(".em-toggle_btn.btn01").click(()=>{
    $(".em-toggle_btn.btn01").toggleClass("act");
    $("#em-em_item01").slideToggle();
  });
  $(".em-toggle_btn.btn02").click(()=>{
    $(".em-toggle_btn.btn02").toggleClass("act");
    $("#em-em_item01").slideToggle();
  });
  $(".em-toggle_btn.btn03").click(()=>{
    $(".em-toggle_btn.btn03").toggleClass("act");
    $("#em_info-item01").slideToggle();
  });
  });

  