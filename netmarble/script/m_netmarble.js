





// 제이쿼리

$(document).ready(function(){

  // 연혁 기능 시작

  // 연혁 변수
  // 연혁 셀렉트 옵션 변수
  const hist_select = $('#history_option');
  // 연혁 탭 콘텐츠 변수
  const hist_ctnt = $('.n_history-t_box > ul');


  // 연혁 탭버튼 클릭 이벤트
  hist_select.change(function(){

    // select option 의 밸류값 받기
    let ind_n = $(this).val();

    // 밸류 값 인덱스로 맞추기
    switch(ind_n){

      case '2025 - 2021' : ind_n = 0;
      break;

      case '2020 - 2016' : ind_n = 1;
      break;

      case '2015 - 2011' : ind_n = 2;
      break;

      case '2010 - 2006' : ind_n = 3;
      break;

      case '2005 - 2000' : ind_n = 4;
      break;

      default : break;
    }

    // 모든 콘텐츠 요소 숨기기
    hist_ctnt.hide();
    
    // 선택한 콘텐츠 요소 보이기
    hist_ctnt.eq(ind_n).show();
  });
  // 연혁 기능 끝




  // 둘러보기 기능 시작


  const road = $('.road');

  // 오시는 길, 편의시설 탭버튼 클릭 이벤트
  road.click(function(){
    $(this).removeClass('on').siblings().removeClass('on');
    $(this).addClass('on');

    let road_n = $(this).index();

    const div = $('.around');

    div.hide();
    div.eq(road_n).show();

  });



  
  // 둘러보기 작은 이미지
  const around_small = $('.conv-tab_img');

  // 둘러보기 클릭 이벤트
  around_small.click(function(){


  // 둘러보기 변수
  // 둘러보기 큰 이미지
  const around_big = $('.around-big_img');


  // 둘러보기 텍스트 영역
  const around_txt = $('.conv-tab_txt');


    // 클릭 시 이미지 서식 변경하기
    $(this).find('div').removeClass('on');
    $(this).siblings().find('div').removeClass('on');
    $(this).find('div').addClass('on');

    // 클릭 한 이미지 src 저장
    let around_src = $(this).find('img').attr('src');

    // 클릭 시 큰 이미지 src 변경하기
    around_big.attr("src",around_src);

    // 클릭 시 텍스트 변경하기
    // 클릭 한 이미지 인덱스 번호 저장
    let around_img_no = $(this).index();
    // 클릭 시 텍스트 값 변경하기
    switch(around_img_no){

      case 0 : around_txt.find('strong').text('ㅋㅋ 다방');around_txt.find('p').html('<p>최고급 원두와 건강한 재료로 즉석 제조되는<br>힐링 음료들이 가득한 넷마블인들의 편리한 휴식공간입니다.</p>');
      break;
      case 1 : around_txt.find('strong').text('ㅋㅋ 책방');around_txt.find('p').html('<p>넷마블인들의 교양과 상식을 풍부하게 개발 할 수 있는<br>다양한 서적이 매달 업데이트 됩니다.</p>') ;
      break;

      case 2 : around_txt.find('strong').text('헬스 케어');around_txt.find('p').html('<p>전문상담사와 전문간호사가 넷마블인의 몸 건강과 마음 건강을 지켜주는<br>1:1 맞춤 건강관리 시설입니다.</p>') ;
      break;

      case 3 : around_txt.find('strong').text('중대형 회의실');around_txt.find('p').html('<p>대면 및 비대면 회의에 필요한 각종 장비가 구비된 회의실은<br>소그룹 미팅부터 중대형 규모까지 다양하게구성되어 있습니다.</p>') ;
      break;

      case 4 : around_txt.find('strong').text('컨벤션센터');around_txt.find('p').html('<p>최첨단 음향시설과 20m 길이의 초대형 LED를 갖추고 있어<br>기자간담회, 세미나, 교육 등의 다양한 행사를 진행 할 수 있습니다.</p>') ;
      break;

      case 5 : around_txt.find('strong').text('넷마블 스토어');around_txt.find('p').html("<p>넷마블 대표 캐릭터 '넷마블 프렌즈'와 넷마블의 다양한 인기게임 상품들을 직접 보고 구매할 수 있습니다.</p>") ;
      break;

      case 6 : around_txt.find('strong').text('공원');around_txt.find('p').html('<p>도심 생태계를 지키기 위한 대규모 녹지로 누구나 이용 가능한 휴식, 문화 공간입니다.</p>') ;
      break;

      case 7 : around_txt.find('strong').text('카페/식당');around_txt.find('p').html('<p>핫플레이스가 한곳에</p>') ;
      break;

      default : around_txt.find('strong').text('병원/약국');around_txt.find('p').html('<p>치료도 바로 손쉽게</p>') ;
      break;
    }






  });

  // 둘러보기 슬라이드 시작
  // 슬라이드 버튼 변수
  const l_slide_btn = $('.arr_btn_l');
  const r_slide_btn = $('.arr_btn_r');

  const conv_tab = $('.conv-tab');

  let n = 0;

  const slide_width = 83.4 / 5;

  // 왼쪽 버튼 클릭 시 슬라이드
  l_slide_btn.click(function(){
    if(n==0){
      n=0;
    }
    else{
      n--;
      conv_tab.css('margin-left',`${-slide_width*n}%`);
      console.log(n);
    }
  });
    
  // 오른쪽 버튼 클릭 시 슬라이드
  r_slide_btn.click(function(){
    if(n==3){
      n=3;
    }
    else{
      n++;
      conv_tab.css('margin-left',`${-slide_width*n}%`);
      console.log(n);
      console.log(slide_width);
    }
  });


  // 둘러보기 기능 끝




  // 정도경영 기능 시작


  // 정도경영 탭 버튼 변수
  const manage_t_btn = $('.manage-t_btn');

  manage_t_btn.click(function(){
    $(this).removeClass('on').addClass('on');
    
    $('.manage-t_ctnt').hide();

    $('.manage-t_ctnt').eq($(this).index()).show();

    $(this).siblings().removeClass('on');

    const m_ctnt01 = $('.m-t_ctnt01');
    const m_ctnt02 = $('.m-t_ctnt02');
    const m_art = $('.n_manage-n_art');


  });


  // 정도경영 기능 끝


});