
$(function(){

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
      $('.newgame-banner-list > li').find('div').removeClass('gage-on');
      $('.newgame-banner-list > li').eq(game_index).find('div').addClass('gage-on');
      $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
      $('.newgame-banner-list > li').eq(game_index).find('span').stop().animate({
        width: '100%'}, 6000);
    }, 6000);
  });





  ////////////////// 게임 리스트 (탭메뉴) //////////////////////

  // 1. 탭메뉴 전환 스크립트
  $('.gamelist-tab > li').click(function () {
    $(this).siblings().removeClass('gamelist-tab-on');
    $(this).addClass('gamelist-tab-on');

    let gamelist_index = $('.gamelist-tab > li').index(this); // 탭메뉴 인덱스 구하기
    $('.gamelist-list').eq(gamelist_index).addClass('on').siblings().removeClass('on')
  });

  // 2. PC에서만 더보기 버튼 나오게 하기
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


  // 3. 더보기 버튼 클릭시 추가
  $('.game-btn').click(function(){
    $('.gamelist-list-add').html(content);
    $('.gamelist-list-add').show();
    $(this).hide();
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