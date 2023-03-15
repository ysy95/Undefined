<?php

session_start();

include '../db.php';

if (isset($_SESSION['UserID'])){
    $ID = $_SESSION['UserID'];

    $sql = "SELECT * FROM user_data WHERE user_id = '$ID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['master'] != 1){
        echo '<script> alert("관리자만 접근 가능합니다.");  location.href="http://localhost/netmarble/employment/em.php";</script>';
    }
} else {
  echo '<script> alert("로그인 후 이용해주세요."); location.href="http://localhost/netmarble/employment/em.php"; </script>';
}


?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 채용 리스트</title>
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/em_master.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="http://soyedpork27.dothome.co.kr/employment/script/em_list.js" defer></script>

  <link rel="apple-touch-icon" sizes="57x57" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="http://soyedpork27.dothome.co.kr/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="http://soyedpork27.dothome.co.kr/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://soyedpork27.dothome.co.kr/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="http://soyedpork27.dothome.co.kr/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://soyedpork27.dothome.co.kr/favicon/favicon-16x16.png">
  <link rel="manifest" href="http://soyedpork27.dothome.co.kr/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="http://soyedpork27.dothome.co.kr/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


</head>
<body>
  <header>
    <div class="h_wrapper">
      <div class="h-top-bg">&nbsp;</div>
  
      <div id='h_wrap'>
          <h1>
            <a href='index.html' title='메인페이지로 바로가기'>
              <img src='../img/main_logo.png' alt="메인로고">
            </a>
          </h1>
  
        <div class='h_right'>
          <nav>
            <ul class='gnb'>
              <li>
                <a href='../../game/game.html' title='게임'>게임</a>
                  <ul class='sub'>
                    <li><a href='#' title='PC'>PC</a></li>
                    <li><a href='#' title='모바일'>모바일</a></li>
                    <li><a href='#' title=''></a></li>
                  </ul>
              </li>
              <li>
                <a href='../../netmarble/netmarble.html' title='넷마블'>넷마블</a>
                  <ul class='sub'>
                    <li><a href='#' title='넷마블 컴퍼니'>넷마블 컴퍼니</a></li>
                    <li><a href='#' title='연혁'>연혁</a></li>
                    <li><a href='#' title='넷마블 둘러보기'>넷마블 둘러보기</a></li>
                    <li><a href='#' title='정도 경영'>넷마블 스토어</a></li>
                  </ul>
              </li>
              <li>
                <a href='#' title='NEWS'>NEWS</a>
                  <ul class='sub'>
                    <li><a href='#' title='보도자료'>보도자료</a></li>
                    <li><a href='#' title='넷마블 소식'>넷마블 소식</a></li>
                    <li><a href='#' title='공지사항'>공지사항</a></li>
                  </ul>
              </li>
              <li>
                <a href='#' title='투자정보'>투자정보</a>
                  <ul class='sub'>
                    <li><a href='#' title='주가'>주가</a></li>
                    <li><a href='#' title='기업 재무재표'>기업 재무재표</a></li>
                    <li><a href='#' title='IR 자료'>IR 자료</a></li>
                    <li><a href='#' title='공시'>공시</a></li>
                  </ul>
              </li>
              <li>
                <a href='../em.php' title='인재채용'>인재채용</a>
                  <ul class='sub'>
                    <li><a href='#' title='인사제도'>인사제도</a></li>
                    <li><a href='#' title='채용 공고'>채용 공고</a></li>
                    <li><a href='./em_master.php' title='채용 조회' id="em_read">채용 조회</a></li>
                    <li><a href='#' title='채용 문의'>채용 문의</a></li>
                  </ul>
              </li>
              <li>
                <a href='#' title='문의'>문의</a>
                <ul class='sub'>
                  <li><a href='#' title='FAQ'>FAQ</a></li>
                  <li><a href='#' title='문의하기'>문의하기</a></li>
                </ul>
              </li>
            </ul>
  
          <ul class='lnb'>
            <li>
              마스터
            </li>
          </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- 메인영역 -->
  <main>
    <section id="page_nav">
      <div class="page_nav--box">
        <h2 class="page_nav--now">인재채용</h2>
        <p class="page_nav--nav"><span>home</span> <img src="../img/right-nav.svg" alt="다음"> 인재채용</p>  
      </div>
    </section>

    <section id="appform_h">
      <h2>넷마블 이력서 조회 관리자 페이지</h2>
      <article class="appform_h-wrap">
          <h3 class="appform_h-title_text">넷마블 입사지원</h3>
          <p class="appform_h-title_info">넷마블에 지원해주셔서 감사합니다. <br>
            아래 폼에 맞추어 이력서를 작성해주세요.</p>
        <img src="./img/image83.png" alt="BG" class="appform_h-bg">
      </article>
    </section>

    <section id="appform">
      <h2>지원자 조회</h2>
      <article class="appform-wrap">
        <div class="appform-title-wrap">
          <h3 class="appform-title">지원자 조회</h3>
        </div>
      </article>
    </section>



    <section id="appform_data">
      <h2>인적사항</h2>
      <article class="appform_data-formwrap">
        <h3>인적사항</h3>
        <div class="appform_data-iframe">
          <script>
            function iHeight(){
            let iHeight = document.getElementById('myframe').contentWindow.document.body.scrollHeight;
            document.getElementById('myframe').height = iHeight;
            }
            </script>
            <div>
              <iframe src="masterform.php" onload="iHeight();" id="myframe" class="form_data" scrolling="no"></iframe>
            </div>
        </div>

      </article>
    </section>
  </main>
  

  <!-- 푸터영역 -->
  <footer>
    <div id='f_wrap'>
      <div class='f_top'>
        <ul class="f_nav">
          <li><a href="#" title="회사소개">회사소개</a></li>
          <li><a href="#" title="광고/제휴문의">광고/제휴문의</a></li>
          <li><a href="#" title="약관보기">약관보기</a></li>
          <li><a href="#" title="위치정보이용약관">위치정보이용약관</a></li>
          <li><a href="#" title="개인정보처리방침"><strong>개인정보처리방침</strong></a></li>
          <li><a href="#" title="청소년보호정책">청소년보호정책</a></li>
          <li><a href="#" title="전자우편">전자우편</a></li>
          <li><a href="#" title="사업자정보공개사이트"><strong>사업자정보공개사이트</strong></a></li>
          <li><a href="#" title="사이트맵">사이트맵</a></li>
        </ul>
      </div>
  
      <div  class='f_bottom'>
        <dl>
          <dt>푸터영역</dt>
          <dd>
            <img src="../img/main_logo2.png" alt="메인로고">
            <label >Family_site</label>
            <select>
              <option value="">Family_site</option>
              <option value="">넷마블</option>
              <option value="">넷마블 패밀리</option>
              <option value="">넷마블 컴퍼니</option>
            </select>
          </dd>
          <dd><strong>넷마블(주)</strong> 사업자번호 : 000-00-00000 통신판매업신고번호 : 제 2014-서울구로-0000호 각자 대표집행임원: 권영식, 도기욱 호스팅서비스 사업자 : 넷마블(주)</dd>
          <dd>서울특별시 구로구 디지털로26기 38, G-Tower 넷마블  PC고객센터 : 0000-0000 / 모바일 고객센터 : 0000-0000 / 제2의나라 고객센터 : 0000-0000 / </dd>
          <dd>블레이드&소울 레볼루션 고객센터 : 0000-0000 / 리니지2 레볼루션 고객센터 : 0000-0000 / FAX : 02-0000-0000</dd>
          <dd>
            <address>Copyright &copy; Netmarble Corp. All Rights Reserved. </address>
          </dd>
        </dl>
      </div>
    </div>
  </footer>
</body>
</html>