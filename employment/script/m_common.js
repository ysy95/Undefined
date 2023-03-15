$(function(){
// AJAX로 PHP파일 호출
$.ajax({
  type : "GET",
  url : "http://soyedpork27.dothome.co.kr/employment/script/session.php",
  dataType : "html",
  error : function(){
  },
  success : function(data){
    if(data == ''){
      $('.lnb').html('<li><a href="http://soyedpork27.dothome.co.kr/login/login.html" title="로그인하기">로그인</a></li><li><a href="http://soyedpork27.dothome.co.kr/login/join.html" title="회원가입하기">회원가입</a></li>');
    } else {
      $('.lnb').html('<li><a href="http://soyedpork27.dothome.co.kr/login/logout.php" title="로그아웃하기">로그아웃</a></li>');
    }
  }

})

$('.m_bar').click(function(){
  $(this).find('span').toggleClass('on');
  $('.h_nav').slideToggle();
});

$('.gnb > li > a').click(function(){
  console.log('click');
  $(this).children('i').toggleClass('on').parent().parent().siblings().find('i').removeClass('on');
  $(this).next().slideToggle();
  $(this).parent().siblings().find('ul').slideUp();
});
});

