
var windowFocusHere = true;

// 다른 탭으로 이동했을 때
// $(window).on("blur", function() {
//     windowFocusHere = false;
// });

// // 다시 해당 윈도우(브라우저로 돌아왔을 때)
// $(window).on("focus", function() {
//     windowFocusHere = true;
// });


function Slider1__init() {
    $('.slider-1 .btn-stop').click(function() {
        var $slider = $(this).closest('.slider-1');
        $slider.attr('data-slider-1-autoplay-status', 'N');
    });
    
    $('.slider-1 .btn-play').click(function() {
        var $slider = $(this).closest('.slider-1');
        $slider.attr('data-slider-1-autoplay-status', 'Y');
    });
    
    Slider1__update();
}

var Slider1__updateLastTimestamp = 0;

function Slider1__moveNext($slider) {
    var $current = $slider.find(' .progress-bar > div');
    var $post = $current.next();
    
    if ( $post.length == 0 ) {
        $post = $slider.find(' .progress-bar > :first-child');
    }
    
    $current.removeClass('active');
    $post.addClass('active');
}

function Slider1__update(timestamp) {
    if ( !timestamp ) {
        timestamp = 0;
    }
    
    var delta = timestamp - Slider1__updateLastTimestamp;
    
    $('.slider-1').each(function(index, node) {
        var $slider = $(this);
        
        var $progressBarGage = $slider.find('.nav-bar .progress-bar > div');
        
        var autoplayTimeout = parseInt($slider.attr('data-slider-1-autoplay-timeout'));
        var autoplayCurrent = parseInt($slider.attr('data-slider-1-autoplay-current'));
        
        // 만약 Y면 true 값이 들어감
        var autoplayStatus = $slider.attr('data-slider-1-autoplay-status') !== 'N';
        
        if ( autoplayStatus && windowFocusHere ) {
            autoplayCurrent += delta;
        
            if ( autoplayCurrent > autoplayTimeout ) {
                Slider1__moveNext($slider);
                
                autoplayCurrent = 0;
            }
            
            // 게이지 퍼센트 바
            var percent = autoplayCurrent / autoplayTimeout * 100;
            
            $progressBarGage.css('width', percent + '%');
            
            // 0이된 값을 다시 넣어줘서 다시 재생시키기
            $slider.attr('data-slider-1-autoplay-current', autoplayCurrent);
        }
    });
    
    Slider1__updateLastTimestamp = timestamp;
    
    // 실행 시켜주세요 대신에 간격을 주세요.
    requestAnimationFrame(Slider1__update);
}

Slider1__init();



// 영상 슬라이드
let n = 1;//초기값
const img_list = document.querySelectorAll('.lnb > li');

img_list.forEach((el, index) => {
    el.onclick=()=>{
        document.getElementById('Bigvideo').src='./img/*'+'.mp4';
    }
});



//모바일 슬라이드
$(function(){


});
