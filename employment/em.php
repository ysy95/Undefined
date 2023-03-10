<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 메인페이지입니다.</title>
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/em.css">
  <script src="./script/em.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="./script/common.js" defer></script>
  <?php           
    include "db.php";
  ?>
</head>
<body>
<header>
  <div class="h_wrapper">
    <div class="h-top-bg">&nbsp;</div>

    <div id='h_wrap'>
        <h1>
          <a href='index.html' title='메인페이지로 바로가기'>
            <img src='./img/main_logo.png' alt="메인로고">
          </a>
        </h1>

      <div class='h_right'>
        <nav>
          <ul class='gnb'>
            <li>
              <a href='#' title='게임'>게임</a>
                <ul class='sub'>
                  <li><a href='#' title='PC'>PC</a></li>
                  <li><a href='#' title='모바일'>모바일</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='넷마블'>넷마블</a>
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
              <a href='./em.php' title='인재채용'>인재채용</a>
                <ul class='sub'>
                  <li><a href='#' title='인사제도'>인사제도</a></li>
                  <li><a href='#' title='채용 공고'>채용 공고</a></li>
                  <li><a href='./user/em_read.php' title='채용 조회' id="em_read">채용 조회</a></li>
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

        </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

  <!-- 메인영역 -->
  <main>
    <!-- 페이지 내비게이션 -->
    <section id="page_nav">
      <div class="page_nav-box">
        <h2 class="page_nav-now">인재채용</h2>
        <p class="page_nav-nav"><span>home</span> <img src="./img/right-nav.svg" alt="다음"> 인재채용</p>  
      </div>
    </section>

    <!-- 인사제도 -->
    <section id="banner">
      <h2>넷마블의 인사제도</h2>
      <article class="banner-wrap">
        <div class="banner-title_wrap">
        <h2>넷마블의 인사제도</h2>
        <a href="#" class="banner-more_btn">더 알아보기</a>
        </div>
        <div class="banner-bannerbox">
          <div class="banner-item">
            <img src="./img/fac_lst_char6_waifu2x_noise0_scale4x.png" alt="이미지1">
            <p class="banner-item-title">장기근속 혜택</p>
            <p class="banner-item-text">장기근속한 넷마블인은 <br> 휴가 혜택과 포상금을 드립니다 <br> 열심히 일한 당신 쉬어라!</p>
          </div>
          <div class="banner-item">
            <img src="./img/fac_lst_char2_waifu2x_noise0_scale4x.png" alt="이미지1">
            <p class="banner-item-title">임직원 전용 카페</p>
            <p class="banner-item-text">식후 카페 찾는다고 <br> 시간낭비 NO! <br> 쾌적하게 즐기세요</p>
          </div>
          <div class="banner-item">
            <img src="./img/fac_lst_char4_waifu2x_noise0_scale4x.png" alt="이미지1">
            <p class="banner-item-title">숙박 이용 지원</p>
            <p class="banner-item-text">휴가때마다 숙박시설에 <br> 스트레스 받지 마세요! <br> 넷마블에서 숙박시설 이용지원!</p>
          </div>
          <div class="banner-item">
            <img src="./img/fac_lst_char3_waifu2x_noise0_scale4x.png" alt="이미지1">
            <p class="banner-item-title">힐링 넷마블</p>
            <p class="banner-item-text">건강 점진 및 <br> 사내 헬스장으로 심신을 <br> 더욱 건강하게!</p>
          </div>
        </div>
      </article>
    </section>

    <!-- 주요채용 -->
    <section id="em_info">
      <h2>주요 채용</h2>
      <article class="em_info-wrap">
        <div class="em_info-tab_wrap">
          <h2>주요 채용</h2>
          <ul class="em_info-tab_list">
            <li class="em_info-tab_btn list01 act">전체</li>
            <li class="em_info-tab_btn list01">경력</li>
            <li class="em_info-tab_btn list01">신입</li>
          </ul>
        </div>
        <div class="em_info-list">
          <ul class="em_info-tab act">

          <!-- php 삽입  -->
          <?php include './em_tab_all.php'; ?>
          </ul>

          <ul class="em_info-tab">
          <?php include './em_tab_sin.php'; ?>
          </ul>

          <ul class="em_info-tab">
          <?php include './em_tab_new.php'; ?>
          </ul>

        </div>
      </article>



    </section>

    <!-- 채용 공고 영역 -->
    <section id="em_list">
      <h2>넷마블 채용</h2>
      <article class="em_list-wrap">
        <div class="em_info-tab_wrap">
          <h2>넷마블 채용</h2>
          <!-- <ul class="em_info-tab_list">
            <li class="em_info-tab_btn act">전체</li>
            <li class="em_info-tab_btn">경력</li>
            <li class="em_info-tab_btn">신입</li>
          </ul> -->

          <?php
            $company1 = "넷마블 스튜디오";
            $company2 = "넷마블 N2";
            $company3 = "넷마블 몬스터";
            $company4 = "넷마블 넥서스";
            ?>

          <form action="em.php" method="get">

            <select name="company" id="comp" class="em_list-item-select">
            <option value="default">채용 회사를 선택해주세요</option>
            <option value="*">전체</option>
            <option value="넷마블 <br> 스튜디오"><?php echo $company1; ?></option>
            <option value="넷마블 <br> N2"><?php echo $company2; ?></option>
            <option value="넷마블 <br> 몬스터"><?php echo $company3; ?></option>
            <option value="넷마블 <br> 넥서스"><?php echo $company4; ?></option>
            </select>
          </form>

        </div>
        <div class="em_list-item_wrap">
          <ul class="em_list-grid">

          <?php
            if (isset($_GET['company'])) {
              $company = $_GET['company'];
          } else {
              $company = "*";
          }
            $list = "SELECT * FROM job_data ORDER BY job_id DESC LIMIT 7";
            if ($company == "*") {
              $list = "SELECT * FROM job_data ORDER BY job_id DESC LIMIT 7";
            } else {
              $list = "SELECT * FROM job_data WHERE job_company = '". $company ."' ORDER BY job_id DESC LIMIT 7";
            }
            $sql = mysqli_query($conn, $list);

            while($row = $sql->fetch_array()) {

              if($row[1] == '넷마블 <br> 스튜디오') {
                $com = '1';
              } else if($row[1] == '넷마블 <br> N2') {
                $com = '2';
              } else if($row[1] == '넷마블 <br> 몬스터') {
                $com = '3';
              } else if($row[1] == '넷마블 <br> 넥서스') {
                $com = '4';
              }


              echo "<li>";
              echo "<div class='em_list-item'>";
              echo "<span class='em_list-item-cm_badge list". $com ."'>" . $row[1] . "</span>";
              echo "<p class='em_list-item-info'>" . $row[2] . "</p>";
              echo "<p class='em_list-item-title'>" . $row[3] . "</p>";
              echo "<p class='em_list-item-date'>" . $row[4] . ' / ' . $row[5] . "</p>";
              echo "<a href='./list/em_list.php?id=" . $row[0] . "' title='" . $row[3] . "' class='em_list-item-btn'>지원하기</a>";
              echo "</div>";
              echo "</li>";
          }
            ?>
            <li class="em_list-pool">
              <div class="em_list-item pool">
                <p class="em_list-item-title pool">원하는 채용이<br> 없으신가요?</p>
                <p class="em_list-item-date pool">인재 Pool에 등록하시면 원하는 <br> 채용공고시에 알려드립니다!</p>
                <a href="#none" title="인재 Pool 바로가기" class="em_list-item-btn pool">인재 Pool 등록 바로가기 <img src="./img/right.svg" alt="바로가기"></a>
              </div>
              <img src="./img/image83.png" alt="bg" class="em_list-bg">
            </li>
          </ul>
        </div>
      </article>

    </section>



  </main>
  

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
          <img src="./img/main_logo2.png" alt="메인로고">
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