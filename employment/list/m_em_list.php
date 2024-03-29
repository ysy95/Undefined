<?php

  $id = $_GET['id'];

  include('../db.php');

  $sql = "SELECT * FROM job_data where job_id = $id";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);

  $id = $row[0];
  $job_type = $row[2];
  $job_title = $row[3];
  $job_info = $row[4];
  $job_date = $row[5];

  if($job_date == '채용시까지' || $job_date == '2023년') {
    $job_badge02 = '3';
    $job_badge03 = '접수중';
  } else{
    $job_badge02 = '4';
    $job_badge03 = '채용종료';
  }

  if ($job_info == '경력'){
    $job_badge01 = '1';
  } else {
    $job_badge01 = '2';
  }

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 모바일 채용지원</title>
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/m_common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/m_em_list.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="../script/m_common.js" defer></script>
  <script src="./script/em_list.js" defer></script>

  <!-- 파비콘 -->
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
    <div id='h_wrap'>
      <div class="h_top">
        <div class="m_bar">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <h1>
          <a href='../../index.html' title='메인페이지로 바로가기'>
            <img src='../img/main_logo.png' alt="메인로고">
          </a>
        </h1>
        <i class="fa-solid fa-circle-user"></i>
      </div>
      <div class='h_nav'>
        <ul class='lnb'>
              <li>
                <a href='../m_login.html' title='로그인하기'>로그인</a>&emsp;
              </li>
              <li>
                <a href='../m_join.html' title='회원가입하기'>회원가입</a>
              </li>
        </ul>
        <nav>
          <ul class='gnb'>
            <li>
              <a href='#' title='게임'>게임<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='../../game/m_game.html' title='게임'>한눈에 보기</a></li>
                  <li><a href='#' title='PC'>PC</a></li>
                  <li><a href='#' title='모바일'>모바일</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='넷마블'>넷마블<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='../../netmarble/m_netmarble.html' title='넷마블 컴퍼니'>한눈에 보기</a></li>
                  <li><a href='#' title='넷마블 컴퍼니'>넷마블 컴퍼니</a></li>
                  <li><a href='#' title='연혁'>연혁</a></li>
                  <li><a href='#' title='넷마블 둘러보기'>넷마블 둘러보기</a></li>
                  <li><a href='#' title='정도 경영'>넷마블 스토어</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='NEWS'>NEWS<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='#' title='보도자료'>보도자료</a></li>
                  <li><a href='#' title='넷마블 소식'>넷마블 소식</a></li>
                  <li><a href='#' title='공지사항'>공지사항</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='투자정보'>투자정보<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='#' title='주가'>주가</a></li>
                  <li><a href='#' title='기업 재무재표'>기업 재무재표</a></li>
                  <li><a href='#' title='IR 자료'>IR 자료</a></li>
                  <li><a href='#' title='공시'>공시</a></li>
                </ul>
            </li>
            <li>
              <a href='#none' title='인재채용'>인재채용<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='../m_em.php' title='인사제도'>한눈에 보기</a></li>
                  <li><a href='#' title='인사제도'>인사제도</a></li>
                  <li><a href='#' title='채용 공고'>채용 공고</a></li>
                  <li><a href='../user/m_em_read.php' title='채용 조회'>채용 조회</a></li>
                  <li><a href='#' title='채용 문의'>채용 문의</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='문의'>
                문의
                <i class="fa-solid fa-sort-down"></i>
              </a>
              <ul class='sub'>
                <li><a href='#' title='FAQ'>FAQ</a></li>
                <li><a href='#' title='문의하기'>문의하기</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section id="page_nav">
      <div class="page_nav-item">
        <span class="page_nav-prav">Home</span>
        <img src="../img/right-nav.svg" alt="다음" class="page_nav-right">
        <span class="page_nav-prav">인재채용</span>
        <img src="../img/right-nav.svg" alt="다음" class="page_nav-right">
        <h2 class="page_nav-now">채용공고</h2>
      </div>
    </section>
    <section id="emb_h">
      <h2>넷마블 채용안내</h2>
      <article class="emb_h-wrap">
        <h2>채용 타이틀</h2>
        <div class="emb_h-btn_wrap">
          <span class="h_btn-badge list0<?php echo $job_badge01 ?>"><?php echo $job_info ?></span>
          <span class="h_btn-badge list0<?php echo $job_badge02 ?>"><?php echo $job_badge03?></span> <br>
        </div>
        <div>
          <h2 class="emb_h-title_text"><?php echo $job_title?></h2>
        </div>
      </article>
    </section>

    <section id="emb_i"> 
      <h2>채용 내용</h2>
        <hr>
          <div class="emb_i-textbox">
            <p> 
              <?php echo $row[6]?>
            </p>
          </div>
        <hr>
    </section>

    <section id="emb_m-btn">
      <h2>지원 버튼</h2>
      <a href="../m_em.php" title="목록으로 가기" class="emb_btn list01">목록보기</a>
      <a href="../form/m_em_form.php?id=<?php echo $id?>" title="지원하기" class="emb_btn list02">채용지원</a>

    </section>

  </main>
  <footer>
  <div class="f_topbtn">
    <a href="#" title="상단으로 돌아가기"><img src="../img/top_btn.png" alt="상단으로 돌아가기"></a>
  </div>
    <div class="f_top">
      <select name="Family Site" id="family">
        <option value="">Family Site</option>
        <option value="http://netmarble.com">넷마블</option>
        <option value="https://ch.netmarble.com/Index">채널 넷마블</option>
        <option value="https://company.netmarble.com">넷마블 컴퍼니</option>
      </select>
    </div>

    <div class="f_middle">
      <h2><img src="../img/main_logo2.png" alt="넷마블"></h2>  
      
        <div class="f_nav">
          <p><a href="#none" title="회사소개">회사소개</a><a href="#none" title="광고/제휴문의">광고/제휴문의</a><a href="#none" title="약관보기">약관보기</a><a href="#none" title="위치정보이용약관">위치정보이용약관</a></p>
          <p><a href="#none" title="개인정보처리방침"><strong>개인정보처리방침</strong></a><a href="#none" title="청소년보호정책">청소년보호정책</a><a href="#none" title="전자우편">전자우편</a></p>
          <p><a href="#none" title="사업자정보공개사이트"><strong>사업자정보공개사이트</strong></a><a href="#none" title="사이트맵">사이트맵</a></p>
        </div>  

      <dl>
        <dt>푸터정보</dt>
        <dd><span>(주)넷마블</span> <span>서울특별시 구로구 디지털로26길 38, G-Tower 넷마블</span></dd>
        <dd><span>PC고객센터 : 0000-0000</span> <span>모바일 고객센터 : 0000-0000</span></dd>
        <dd><span>FAX : 02-0000-0000</span> <span>사업자번호 : 000-00-00000</span></dd>
        <dd><span>통신판매업 신고번호 : 제 2014-서울구로-0000호</span></dd>
        <dd><span>각자대표집행임원 : 권영식, 도기욱</span> <span>호스팅서비스사업자 : 넷마블(주)</span></dd>
        <dd><span>(주)넷마블</span> <span>서울특별시 구로구 디지털로26길 38, G-Tower 넷마블</span></dd>
      </dl>
      <address>Copyright &copy; Netmarble Corp. All Rights Reserved.</address>
    </div>
    
    <div class="f_bottom">
      <p>
        <a href="./em_list.php?move_pc_screen=1" title="pc버전바로가기" class="pc_btn">PC버전 바로가기</a>
      </p>
    </div>
    <div class="f_fixed">&nbsp;</div>
  </footer>
  
</body>
</html>