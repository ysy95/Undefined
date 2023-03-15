
$(function(){
    game_index = 0;
  $('.newgame-banner-list > li').eq(game_index).find('span').css('width', '0%');
  $('.newgame-banner-list > li').eq(game_index).find('span').animate({
    width: '100%'}, 6000);

  let timer = setInterval(function () {
    game_index++;
    if (game_index > 3) {
      game_index = 0;
    }
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

  

  $('.newgame-banner-list > li').click(function(){
    clearInterval(timer);
    let game_index = $('.newgame-banner-list > li').index(this);
    $('.newgame-banner li').addClass('display-none').removeClass('newgame-banner-on');
    $('.newgame-banner-l video').get(game_index).currentTime = 0;
    $('.newgame-banner li').eq(game_index).removeClass('display-none').addClass('newgame-banner-on');
    $('#newgame').css('background-image', `url(../img/gamebanner_bg_0${game_index}.jpg)`);
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
      console.log(game_index);
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
        <iframe src="https://www.youtube.com/embed/WCdMQ2i1OkQ?autoplay=1" title="세븐나이츠레볼루션 게임소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          
          <i class="fas fa-times"></i>
        </div>
      </div>
      `;

    let modal2 = `
      <div class="modal_bg">
        <div class="modal_video">
        <iframe src="https://www.youtube.com/embed/prAMtt3YM48?autoplay=1" title="머지쿵야아일랜드 게임소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <i class="fas fa-times"></i>
        </div>
      </div>
      `;
    let modal3 = `
    <div class='modal_bg'>
    <div class='modal_video'>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/h5fhJs9JiKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
      }else if (m === 3) {
        $('body').append(modal3);
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
});



