<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 채용 리스트</title>
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/em_list.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="../script/common.js" defer></script>
  <script src="./script/em_list.js" defer></script>
  

  <!-- 임시저장은 로컬스토리지 구현 생각해보기 -->
  
  <?php 
    include "../db.php";

    $job_id = (int)$_GET['id'];
    $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
    $em_list = mysqli_query($conn, $sql);
  ?>
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
              <a href='#' title='게임'>게임</a>
                <ul class='sub'>
                  <li><a href='#' title='PC'>PC</a></li>
                  <li><a href='#' title='모바일'>모바일</a></li>
                  <li><a href='#' title='넷마블 스토어'></a></li>
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
              <a href='../em.php' title='인재채용'>인재채용</a>
                <ul class='sub'>
                  <li><a href='#' title='인사제도'>인사제도</a></li>
                  <li><a href='#' title='채용 공고'>채용 공고</a></li>
                  <li><a href='../user/em_read.php' title='채용 조회' id="em_read">채용 조회</a></li>
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
    <section id="page_nav">
      <div class="page_nav--box">
        <h2 class="page_nav--now">인재채용</h2>
        <p class="page_nav--nav"><span>home</span> <img src="../img/right-nav.svg" alt="다음"> 인재채용</p>  
      </div>
    </section>



    <section id="emb_h">
      <h2>채용제목</h2>
      <article class="emb_h-wrap">
        <div class="emb_h-title_wrap">
          <div>
          <?php
              while($row = mysqli_fetch_row($em_list)){
                $id = $row[0];
                $job_type = $row[2];
                $job_title = $row[3];
                $job_info = $row[4];
                $job_date = $row[5];

                if($row[5] == '채용시까지' || $row[5] == '2023년') {
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

                echo "<p class='emb_h-title_type'>" . $job_type . "</p>";
                echo "<h2 class='emb_h-title_text'>" . $job_title . "</h2>";
                echo "</div>";
                echo "<div class='emb_h-btn_wrap'>";
                echo "<span class='h_btn-badge list0" . $job_badge01 . "'>" . $job_info . "</span>";
                echo "<span class='h_btn-badge list0" . $job_badge02 . "'>" . $job_badge03 . "</span> <br>";
                echo "<a href='../form/em_form.php?id=" . $id . "' title='지원하기' class='emb_h-applibtn'>지원하기</a>";
                echo "</div>";
              }
            ?>
          

        <img src="./img/image83.png" alt="BG" class="emb_h-bg">
        </div>
      </article>
    </section>

    <section id="emb_i"> 
      <h2>채용 내용입니다.</h2>
      <article class="emb_i-index">
        <h3>채용 제목</h3>
        <hr>
          <div class="emb_i-textbox">
          <?php
              $job_id = (int)$_GET['id'];
              $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
              $em_list = mysqli_query($conn, $sql);
              

              if (!$em_list) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
              }

              while($row = mysqli_fetch_row($em_list)){
                $job_about = $row[6];

                echo "<p>" . $job_about . "</p>";
              }
            ?>
            <p> 
              
            </p>
          </div>
        <hr>
      </article>

    </section>

    <section id="emb_btn">
      <h2>채용 지원 버튼</h2>
      <article class="emb_btn-wrap">
        <h3>채용 지원 버튼</h3>
        <div class="emb_btn-pool">
          <p class="emb_btn-pooltxt">
            원하는 채용이 없으신가요? <br>
            <span>인재 Pool에 등록하시면 직무에 맞는 <br> 채용을 추천해드립니다!</span>
          </p>
          <a href="#" title="인재 Pool 등록 바로가기" class="emb_btn-poolbtn">인재 Pool 등록 바로가기 <img src="./img/left.svg" alt="바로가기"></a>
        </div>

        <div>
          <a href="../em.php" title="목록으로" class="emb_btn-listbtn">목록으로</a>
          <?php
              $job_id = (int)$_GET['id'];
              $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
              $em_list = mysqli_query($conn, $sql);
              

              if (!$em_list) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
              }

              while($row = mysqli_fetch_row($em_list)){
                $id = $row[0];

                echo "<a href='../form/em_form.php?id=" . $id . "' title='지원서 작성하기' class='emb_btn-applibtn' id='apply'>지원서 작성하기</a>";
              }
            ?>
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