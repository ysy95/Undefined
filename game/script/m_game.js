
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
  $('.gamelist-tab > li').click(function(){
    $(this).siblings().removeClass('gamelist-tab-on');
    $(this).addClass('gamelist-tab-on');

    let gamelist_index = $('.gamelist-tab > li').index(this); // 탭메뉴 인덱스 구하기
    $('.gamelist-list').eq(gamelist_index).addClass('on').siblings().removeClass('on')
  });


  // // 2. json 게임리스트 삽입 스크립트
  // $('.game-btn').click(function () {
  //   $(this).hide(); // 더보기버튼 숨기기

  //   $.ajax({
  //     url: './game.json',
  //     type: 'post',
  //     dataType: 'json',
  //     success: function (result) {
  //       let t = '<ul class="gamelist-list">';
  //       $.each(result.game, function(i,e) {
  //         t += `
  //           <li>
  //             <div class="gamelist-gameinfo">
  //               <div class="gamelist-img ${e.img_class}"></div>
  //               <figure>
  //                 <img src="./img/${e.icon_path}" alt="${e.title} 로고">
  //                 <figcaption>
  //                   <p class="gamelist-title">${e.title}</p>
  //                   <p class="gamelist-type">${e.type}</p>
  //                 </figcaption>
  //               </figure>
  //             </div>
  //             <div class="gamelist-gameinfo-hover display-none">
  //               <a href="#" target="_blank" title="${e.title} 게임설명 바로가기"><img src="./img/${e.logo_path}" alt="${e.title} 로고"></a>
  //               <a href="#" target="_blank" title="${e.title} 공식사이트 바로가기">공식사이트<i class="fas fa-angle-right"></i></a>
  //               <a href="#" target="_blank" title="${e.title} 구글플레이 바로가기"><img src="./img/btn_playstore.png" alt="구글플레이 바로가기"></a>
  //               <a href="#" target="_blank" title="${e.title} 앱스토어 바로가기"><img src="./img/btn_appstore.png" alt="앱스토어 바로가기"></a>
  //             </div>
  //             <div class="gamelist-margin"></div>
  //           </li>
  //         `;
  //       });
  //       t += "</ul>";
  //       //데이터를 t변수에 담아서 list박스에 내용을 출력한다.
  //       $('.gamelist-list-add').html(t);
  //     }
  //   });
  //   return false;
  // });





});
