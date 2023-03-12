
var windowFocusHere = true;

// 다른 탭으로 이동했을 때
$(window).on("blur", function() {
    windowFocusHere = false;
});

// 다시 해당 윈도우(브라우저로 돌아왔을 때)
$(window).on("focus", function() {
    windowFocusHere = true;
});


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





// API요청하기
fetch('https://finance.naver.com/item/main.nhn?code=005930 ')
  .then((response) => response.json())//기다렸다가 결과가오면 처리 json형식으로 바꿈.
  .then((data) => {
    document.getElementsByClassName('stock--price').innerHTML = data['stock--price'];
  });
  

  // POST 메서드 구현 예제
async function postData(url = '', data = {}) {
  // 옵션 기본 값은 *로 강조
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE 등
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json',
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data), // body의 데이터 유형은 반드시 "Content-Type" 헤더와 일치해야 함
  });
  return response.json(); // JSON 응답을 네이티브 JavaScript 객체로 파싱
}

postData('https://example.com/answer', { answer: 42 }).then((data) => {
  console.log(data); // JSON 데이터가 `data.json()` 호출에 의해 파싱됨
});
