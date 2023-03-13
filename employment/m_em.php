<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 모바일</title>
  <link rel="stylesheet" href="./css/m_common.css">
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/m_em.css">
  <link rel="stylesheet" href="./css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./script/m_common.js" defer></script>
  <script src="./script/m_em.js" defer></script>
  <link rel="stylesheet" href="./css/swiper.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

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
          <a href='index.html' title='메인페이지로 바로가기'>
            <img src='./img/main_logo.png' alt="메인로고">
          </a>
        </h1>
        <i class="fa-solid fa-circle-user"></i>
      </div>
      <div class='h_nav'>
        <ul class='lnb'>
              <li>
                <a href='m_login.html' title='로그인하기'>로그인</a>&emsp;
              </li>
              <li>
                <a href='m_join.html' title='회원가입하기'>회원가입</a>
              </li>
        </ul>
        

        <nav>
          <ul class='gnb'>
            <li>
              <a href='#' title='게임'>게임<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='#' title='PC'>PC</a></li>
                  <li><a href='#' title='모바일'>모바일</a></li>
                  <li><a href='#' title=''></a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='넷마블'>넷마블<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
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
              <a href='#' title='인재채용'>인재채용<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='#' title='인사제도'>인사제도</a></li>
                  <li><a href='#' title='채용 공고'>채용 공고</a></li>
                  <li><a href='#' title='채용 조회'>채용 조회</a></li>
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
        <span class="page_nav-prav">home</span>
        <img src="./img/right-nav.svg" alt="다음" class="page_nav-right">
        <h2 class="page_nav-now">인재채용</h2>
      </div>
    </section>
    <section id="em-bg">
      <h2>인제채용 메인입니다.</h2>
    </section>
    <section id="em">
      <img src="./img/m_btn.svg" alt="버튼" class="em-toggle_btn btn01">
      <h2>넷마블 채용공고</h2>
      <article id="em-em_item01">
        <h3>주요채용</h3>
        <!-- 스와이퍼 영역1-->
        <div class="em-swiper-wrap">
          <div class="em-swiper-bg">
            <h3 class="em-title">주요채용</h3>
            <div class="swiper em-swiper" id="em-list-slider">
              <div class="swiper-wrapper">
                <!-- Slides -->
                
                    <!-- PHP 세팅 -->
                    <?php
                    include('db.php');

                    $sql = "SELECT * FROM job_data limit 8";
                    $resilt = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($resilt)){

                      // [0] =job_id

                      if($row[4] == '경력') {
                        $com01 = '1';
                      } else{
                        $com01 = '2';
                      }

                      if($row[5] == '채용시까지' || $row[5] == '2023년') {
                        $career = '접수중';
                        $com02 = '3';
                      } else{
                        $career = '채용종료';
                        $com02 = '4';
                      }
                      
                      echo "<div class='swiper-slide'>";
                      echo "<div>";
                      echo "<p class='em-item-title'>".$row['job_title']."</p>";
                      echo "<p class='em-item-date'>".$row['job_date']."</p>";
                      echo "<p class='em-item-badge-wrap'>";
                      echo "<span class='badge0" . $com01 . "'>".$row['job_info']."</span>";
                      echo "<span class='badge0" . $com02 . "'>".$career."</span>";
                      echo "</p>";
                      echo "<p>";
                      echo "<a href='./list/m_em_list.php?id=" . $row['job_id'] . "' class='em_item-btn'>채용지원 </a>";
                      echo "</p>";
                      echo "</div>";
                      echo "</div>";
                    }
                    ?>
              </div>
              <img src="./img/swiper_btn_r.svg" alt = "다음" class="swiper-button-next">
              <img src="./img/swiper_btn_l.svg" alt="이전" class="swiper-button-prev">
            </div>
          </div>
        </div>
        <div class="em-em_item02">
          <h3 class="em_item02-title">찾으시는 채용이 <br> 더 있으신가요?</h3>
          <p><img src="./img/image97.png" alt="크크" class="em_item02-img"></p>
          <a href="#none" title="채용공고 보기" class="em_item02-btn">채용공고 보기</a>
          <img src="./img/m_btn.svg" alt="버튼" class="em-toggle_btn btn01">
        </div>
      </article>
    </section>

    <section id="em_info">
      <img src="./img/m_btn.svg" alt="버튼" class="em-toggle_btn btn03 act">
      <h2>넷마블의 인사제도</h2>
      <article id="em_info-item01" style="display:none">
      <h3>인사제도 소개</h3>
      <!-- 스와이퍼 영역2 -->
      <div class="em-swiper-wrap">
        <div class="em-swiper-bg">
          <div class="swiper em_info-swiper" id="em-list">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <img src="./img/fac_lst_char6_waifu2x_noise0_scale4x.png" alt="이미지1" class="em_info-img">
                <p class="em_info-title">장기근속 혜택</p>
                <p class="em_info-text">장기근속한 넷마블인은 <br> 휴가 혜택과 포상금을 드립니다 <br> 열심히 일한 당신 쉬어라!</p>
              </div>
              <div class="swiper-slide">
                <img src="./img/fac_lst_char2_waifu2x_noise0_scale4x.png" alt="이미지1" class="em_info-img">
                <p class="em_info-title">임직원 전용 카페</p>
                <p class="em_info-text">식후 카페 찾는다고 <br> 시간낭비 NO! <br> 쾌적하게 즐기세요</p>
              </div>
              <div class="swiper-slide">
                <img src="./img/fac_lst_char4_waifu2x_noise0_scale4x.png" alt="이미지1" class="em_info-img">
                <p class="em_info-title">숙박 이용 지원</p>
                <p class="em_info-text">휴가때마다 숙박시설에 <br> 스트레스 받지 마세요! <br> 넷마블에서 숙박시설 이용지원!</p>
              </div>
              <div class="swiper-slide">
                <img src="./img/fac_lst_char3_waifu2x_noise0_scale4x.png" alt="이미지1" class="em_info-img">
                <p class="em_info-title">힐링 넷마블</p>
                <p class="em_info-text">건강 점진 및 <br> 사내 헬스장으로 심신을 <br> 더욱 건강하게!</p>
              </div>
            </div>
            <img src="./img/swiper_btn_r.svg" alt = "다음" class="swiper-button-next" id="swiper02-next">
            <img src="./img/swiper_btn_l.svg" alt="이전" class="swiper-button-prev" id="swiper02-prev">
          </div>
          </div>  
        </div>
      </article>

    </section>

    <section id="em_about"> 
      <h2>채용문의</h2>
      <article class="about-bg">
      <h2 class="about-title">채용에 관하여 궁금하신 <br> 사항이 있으신가요?</h2>
      <img src="./img/image96.png" alt="크크" class="about-img">
      <a href="#none" title="채용공고 보기" class="em_item02-btn btn02">채용문의 하기</a>
      </article>
    </section>
  </main>


  <footer>
    <div class="f_top">
      <select name="Family Site" id="family">
        <option value="">Family Site</option>
        <option value="http://netmarble.com">넷마블</option>
        <option value="https://ch.netmarble.com/Index">채널 넷마블</option>
        <option value="https://company.netmarble.com">넷마블 컴퍼니</option>
      </select>
    </div>

    <div class="f_middle">
      <h2><img src="./img/main_logo2.png" alt="넷마블"></h2>  
      
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
        <a href="./em.php?move_pc_screen=1" title="pc버전바로가기" class="pc_btn">PC버전 바로가기</a>
      </p>
    </div>
  </footer>
  
</body>
</html>