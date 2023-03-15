
$(function () {

  ////////////////// 신작 게임 //////////////////////

  game_index = 0;
  $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
  $('.newgame-banner-list > li').eq(game_index).find('span').animate({
    width: '100%'}, 6000);

  let timer = setInterval(function () {
    game_index++;
    if (game_index > 2) {
      game_index = 0;
    }
    $('.newgame-banner li').addClass('display-none').removeClass('newgame-banner-on');
    $('.newgame-banner-l video').get(game_index).currentTime = 0;
    $('.newgame-banner li').eq(game_index).removeClass('display-none').addClass('newgame-banner-on');
    $('#newgame').css('background-image', `url(./img/gamebanner_bg_0${game_index}.jpg)`);
    $('.newgame-banner-list > li').find('div').removeClass('gage-on');
    $('.newgame-banner-list > li').eq(game_index).find('div').addClass('gage-on');
    $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
    $('.newgame-banner-list > li').eq(game_index).find('span').stop().animate({
      width: '100%'}, 6000);
  }, 6000);

  

  $('.newgame-banner-list > li').click(function(){
    clearInterval(timer);
    let game_index = $('.newgame-banner-list > li').index(this);
    $('.newgame-banner li').addClass('display-none').removeClass('newgame-banner-on');
    $('.newgame-banner-l video').get(game_index).currentTime = 0;
    $('.newgame-banner li').eq(game_index).removeClass('display-none').addClass('newgame-banner-on');
    $('#newgame').css('background-image', `url(./img/gamebanner_bg_0${game_index}.jpg)`);
    $('.newgame-banner-list > li').find('div').removeClass('gage-on');
    $('.newgame-banner-list > li').eq(game_index).find('div').addClass('gage-on');
    $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
    $('.newgame-banner-list > li').eq(game_index).find('span').stop().animate({
      width: '100%'}, 6000);
    timer = setInterval(function () {
      game_index++;
      if (game_index > 2) {
        game_index = 0;
      }
      // console.log(game_index);
      $('.newgame-banner li').addClass('display-none').removeClass('newgame-banner-on');
      $('.newgame-banner-l video').get(game_index).currentTime = 0;
      $('.newgame-banner li').eq(game_index).removeClass('display-none').addClass('newgame-banner-on');
      $('#newgame').css('background-image', `url(../img/gamebanner_bg_0${game_index}.jpg)`);
      $('.newgame-banner-list > li').find('div').removeClass('gage-on');
      $('.newgame-banner-list > li').eq(game_index).find('div').addClass('gage-on');
      $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
      $('.newgame-banner-list > li').eq(game_index).find('span').stop().animate({
        width: '100%'}, 6000);
    }, 6000);
  });






  // 모달창 스크립트 //
  let play_btn = $('.newgame-video-btn');

  play_btn.click(function () {

    let m = play_btn.index(this);
    console.log(m);

    let modal0 = `
      <div class="modal_bg">
        <div class="modal_video">
          <iframe src="https://www.youtube.com/embed/0xo6sCThrtM?autoplay=1" title="제2의나라 게임소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <i class="fas fa-times"></i>
        </div>
      </div>
      `;

    let modal1 = `
      <div class="modal_bg">
        <div class="modal_video">
          <iframe src="https://www.youtube.com/embed/prAMtt3YM48?autoplay=1" title="머지쿵야아일랜드 게임소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <i class="fas fa-times"></i>
        </div>
      </div>
      `;

    let modal2 = `
      <div class="modal_bg">
        <div class="modal_video">
          <iframe src="https://www.youtube.com/embed/WCdMQ2i1OkQ?autoplay=1" title="세븐나이츠레볼루션 게임소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <i class="fas fa-times"></i>
        </div>
      </div>
      `;

    // 해당 인덱스의 슬라이드의 모달이 나오게 if문 작성
    if (m === 0) {
      $('body').append(modal0);
    } else if (m === 1) {
      $('body').append(modal1);
    } else if (m === 2) {
      $('body').append(modal2);
    };

    // 닫기나 빈 배경을 클릭하면 모달창 숨기기
    $('.modal_video i.fa-times').click(function () {
      $('.modal_bg').fadeOut();
      $('.modal_video').remove();
    });

    $('.modal_bg').click(function () {
      $('.modal_bg').fadeOut();
      $('.modal_video').remove();
    });

  });



  ////////////////// 추천 게임 //////////////////////

  // 슬라이드 좌/우버튼 변수 선언
  let l_btn = $('.playnow-btn.b-left');
  let r_btn = $('.playnow-btn.b-right');

  // 1) 마지막 슬라이드 앞쪽으로 자리 재배치
  $('.playnow-banner li:last-of-type').insertBefore('.playnow-banner li:first-of-type');
  $('.playnow-banner li:nth-of-type(2)').addClass('playnow-on');


  // 2) 움직이는 함수 만들기
  function moveLeft() {
    $('.playnow-banner li:last-of-type').insertBefore('.playnow-banner li:first-of-type');
  };
  function moveRight() {
    $('.playnow-banner li:first-of-type').insertAfter('.playnow-banner li:last-of-type');
  };

  // 3) 좌,우 버튼 클릭시 각각 해당하는 함수를 호출하여 움직이게 하기
  l_btn.click(function () {
    moveLeft();
    $('.playnow-banner li').removeClass('playnow-on');
    $('.playnow-banner li:nth-of-type(2)').addClass('playnow-on');
  });
  r_btn.click(function () {
    moveRight();
    $('.playnow-banner li').removeClass('playnow-on');
    $('.playnow-banner li:nth-of-type(2)').addClass('playnow-on');
  });




  ////////////////// 게임 리스트 (탭메뉴) //////////////////////

  // 1. 탭메뉴 전환 스크립트
  $('.gamelist-tab > li').click(function () {
    $(this).siblings().removeClass('gamelist-tab-on');
    $(this).addClass('gamelist-tab-on');

    let gamelist_index = $('.gamelist-tab > li').index(this); // 탭메뉴 인덱스 구하기
    $('.gamelist-list').eq(gamelist_index).addClass('on').siblings().removeClass('on')
  });


  // 2. 마우스 오버 스크립트
  $('.gamelist-list li').hover(function () {
    $(this).find('.gamelist-gameinfo-hover').addClass('on')
  }, function () {
    $(this).find('.gamelist-gameinfo-hover').removeClass('on')
  });


  // 3. PC에서만 더보기 버튼 나오게 하기
  // 단, 다시 PC 눌렀을때는 더보기 버튼이 나오게 하기
  $('.gamelist-tab > li:first-child').click(function () {
    $('.game-btn').show();
    $('.gamelist-list-add').hide();
  });

  $('.gamelist-tab > li:nth-child(2)').click(function () {
    $('.gamelist-list-add').hide();
    $('.game-btn').hide();
  });

  $('.gamelist-tab > li:last-child').click(function () {
    $('.gamelist-list-add').hide();
    $('.game-btn').hide();
  });


  // 4. 더보기 버튼 클릭시 추가
  $('.game-btn').click(function(){
    $('.gamelist-list-add').html(content);
    $('.gamelist-list-add').show();
    $(this).hide();

    
  // 5. 더보기된 컨텐츠 마우스오버
    $('.gamelist-list2 li').hover(function () {
      $(this).find('.gamelist-gameinfo-hover').addClass('on')
    }, function () {
      $(this).find('.gamelist-gameinfo-hover').removeClass('on')
    });
  
  });

  let content =
  `
  <ul class="gamelist-list2">
    <li>
      <div class="gamelist-gameinfo">
        <div class="gamelist-img img09"></div>
        <figure>
          <img src="./img/gamelist09.png" alt="쿵야 캐치마인드 로고">
          <figcaption>
            <p class="gamelist-title">쿵야 캐치마인드</p>
            <p class="gamelist-type">캐주얼</p>
          </figcaption>
        </figure>
      </div>
      <div class="gamelist-gameinfo-hover">
        <a href="#" target="_blank" title="쿵야 캐치마인드 게임설명 바로가기"><img src="./img/hover_gamelist09.png" alt="쿵야 캐치마인드 로고"></a>
        <a href="#" target="_blank" title="쿵야 캐치마인드 공식사이트 바로가기">공식사이트<i class="fas fa-angle-right"></i></a>
        <a href="#" target="_blank" title="쿵야 캐치마인드 구글플레이 바로가기"><img src="./img/btn_playstore.png" alt="구글플레이 바로가기"></a>
        <a href="#" target="_blank" title="쿵야 캐치마인드 앱스토어 바로가기"><img src="./img/btn_appstore.png" alt="앱스토어 바로가기"></a>
      </div>
    </li>

    <li>
      <div class="gamelist-gameinfo">
        <div class="gamelist-img img10"></div>
        <figure>
          <img src="./img/gamelist10.png" alt="마구마구 2023 로고">
          <figcaption>
            <p class="gamelist-title">마구마구 2023</p>
            <p class="gamelist-type">스포츠</p>
          </figcaption>
        </figure>
      </div>
      <div class="gamelist-gameinfo-hover">
        <a href="#" target="_blank" title="마구마구 2023 게임설명 바로가기"><img src="./img/hover_gamelist10.png" alt="마구마구 2023 로고"></a>
        <a href="#" target="_blank" title="마구마구 2023 공식사이트 바로가기">공식사이트<i class="fas fa-angle-right"></i></a>
        <a href="#" target="_blank" title="마구마구 2023 구글플레이 바로가기"><img src="./img/btn_playstore.png" alt="구글플레이 바로가기"></a>
        <a href="#" target="_blank" title="마구마구 2023 앱스토어 바로가기"><img src="./img/btn_appstore.png" alt="앱스토어 바로가기"></a>
      </div>
    </li>

    <li>
      <div class="gamelist-gameinfo">
        <div class="gamelist-img img11"></div>
        <figure>
          <img src="./img/gamelist11.png" alt="킹오브파이터 올스타 로고">
          <figcaption>
            <p class="gamelist-title">킹오브파이터 올스타</p>
            <p class="gamelist-type">RPG</p>
          </figcaption>
        </figure>
      </div>
      <div class="gamelist-gameinfo-hover">
        <a href="#" target="_blank" title="킹오브파이터 올스타 게임설명 바로가기"><img src="./img/hover_gamelist11.png" alt="킹오브파이터 올스타 로고"></a>
        <a href="#" target="_blank" title="킹오브파이터 올스타 공식사이트 바로가기">공식사이트<i class="fas fa-angle-right"></i></a>
        <a href="#" target="_blank" title="킹오브파이터 올스타 구글플레이 바로가기"><img src="./img/btn_playstore.png" alt="구글플레이 바로가기"></a>
        <a href="#" target="_blank" title="킹오브파이터 올스타 앱스토어 바로가기"><img src="./img/btn_appstore.png" alt="앱스토어 바로가기"></a>
      </div>
    </li>

    <li>
      <div class="gamelist-gameinfo">
        <div class="gamelist-img img12"></div>
        <figure>
          <img src="./img/gamelist12.png" alt="BTS Universe Story 로고">
          <figcaption>
            <p class="gamelist-title">BTS Universe Story</p>
            <p class="gamelist-type">캐주얼</p>
          </figcaption>
        </figure>
      </div>
      <div class="gamelist-gameinfo-hover">
        <a href="#" target="_blank" title="BTS Universe Story 게임설명 바로가기"><img src="./img/hover_gamelist12.png" alt="BTS Universe Story 로고"></a>
        <a href="#" target="_blank" title="BTS Universe Story 공식사이트 바로가기">공식사이트<i class="fas fa-angle-right"></i></a>
        <a href="#" target="_blank" title="BTS Universe Story 구글플레이 바로가기"><img src="./img/btn_playstore.png" alt="구글플레이 바로가기"></a>
        <a href="#" target="_blank" title="BTS Universe Story 앱스토어 바로가기"><img src="./img/btn_appstore.png" alt="앱스토어 바로가기"></a>
      </div>
    </li>

  </ul>
  `;

});