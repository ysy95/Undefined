$(function(){
  // AJAX로 PHP파일 호출
  $.ajax({
    type : "GET",
    url : "http://localhost/netmarble/login/session.php",
    dataType : "html",
    error : function(){
      alert('통신실패!!');
    },
    success : function(data){
      if(data == ''){
        $('.lnb').html('<li><a href="../login/login.html" title="로그인하기">로그인</a></li><li><a href="../login/join.html" title="회원가입하기">회원가입</a></li>');
      } else {
        $('.lnb').html('<li><a href="http://localhost/test/login/logout.php" title="로그아웃하기">로그아웃</a></li>');
      }
    }
  
  })
  
  });
  
  