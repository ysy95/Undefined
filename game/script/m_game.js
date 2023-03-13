
$(function(){


    ////////////////// 신작 게임 //////////////////////

    let slide_list = $('.newgame-banner-list li');

    slide_list.click(function () {
  
      let n = $('.newgame-banner-list li').index(this);
  
      // 슬라이드 클릭시 동영상/문구 변경
      $('.newgame-banner li').removeClass('newgame-banner-on');
      $('.newgame-banner li').eq(n).addClass('newgame-banner-on');
  
    });


    // 오토슬라이드 기능 //
    let count = 0;

    setInterval(()=>{
      count++;
      if(count > 2){
        count = 0;
      }
      $('.newgame-banner li').removeClass('newgame-banner-on');
      $('.newgame-banner li').eq(count).addClass('newgame-banner-on');
      }, 5000);




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
