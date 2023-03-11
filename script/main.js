let windowFocusHere = true;

$(()=>{

  // 다른탭으로 이동했을때
  $(window).on("blur", function(){
    windowFocusHere = false;
  });

  // 다시 해당 윈도우(브라우저로 돌아왔을 때)
  $(window).on("focus", function(){
    windowFocusHere = true;
  });

  function Slider1__init(){
    $('.slider-1 .btn-stop').click(function(){
      let $slider = $(this).closest('.slider-1');
      $slider.attr('data-slider-1-autoplay-status', 'N');
    });

    $('.slider-1 .btn-play').click(function(){
      let $slider = $(this).closest('.slider-1');
      $slider.attr('data-slider-1-autoplay-status','Y'); 
    });
  }
});