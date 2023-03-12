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
  <link rel="stylesheet" href="./css/em_read.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="http://soyedpork27.dothome.co.kr/employment/script/em_list.js" defer></script>
  <script src="./script/em_read.js" defer></script>
  <script src="../script/common.js"></script>

<?php 
    include "../db.php";

    session_start();
    
    if(isset($_SESSION['UserID'])){
      $user_id = $_SESSION['UserID'];
    }else{
      echo "<script>alert('로그인 후 이용해주세요.'); location.href='../login/login.html';</script>";
    }

    $userSQL = "SELECT * FROM user_data WHERE user_id = '$user_id'";
    $userinfo = mysqli_query($conn, $userSQL);

    while($row = mysqli_fetch_assoc($userinfo)) {
      $job_id = $row['job_id'];
      $name = $row['user_name'];
      if($row['user_profile'] == null || $row['user_profile'] == " "){
        $img = 'profile_default.png';
      } else {
        $img = $row['user_profile'];
      }
      $email = $row['user_email'];
      $phone = $row['user_phone'];
      $loaction = $row['user_location'];
      $opt1 = $row['user_opt1'];
      $opt2 = $row['user_opt2'];
      $opt3 = $row['user_opt'];
      $intro = $row['user_intro'];
  }

  if($job_id == null || $job_id == " "){
    echo "<script>alert('지원한 채용이 없습니다.'); location.href='../em.php';</script>";
  }

  ?>


</head>
<body>
  <header>
    <div class="h_wrapper">
    <div class="h-top-bg">&nbsp;</div>

    <div id='h_wrap'>
        <h1>
          <a href='index.html' title='메인페이지로 바로가기'>
            <img src='../img/main_logo.png' alt="메인로고"/>
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
              <a href='../em.php' title='인재채용'>인재채용</a>
                <ul class='sub'>
                  <li><a href='#' title='인사제도'>인사제도</a></li>
                  <li><a href='#' title='채용 공고'>채용 공고</a></li>
                  <li><a href='./em_read.php' title='채용 조회'>채용 조회</a></li>
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
          <a href='Login.html' title='로그인하기'>로그인</a>&emsp;
          <a href='join.html' title='회원가입하기'>회원가입</a>
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
      <article class="appform_h-wrap">
          <h2 class="appform_h-title_text">넷마블 입사지원</h2>
          <p class="appform_h-title_info">넷마블에 지원해주셔서 감사합니다. <br>
            아래 폼에 맞추어 이력서를 작성해주세요.</p>
        <img src="./img/image83.png" alt="BG" class="appform_h-bg">
      </article>
    </section>

    <section id="appform">
      <h2>채용지원</h2>
      <article class="appform-wrap">
        <div class="appform-title-wrap">
          <h3 class="appform-title">인적사항</h3>
          <p class="appform-require"><img src="./img/asterisk.svg" alt="필수" style="padding-right: 10px;">필수 항목</p>
        </div>
        <div class="appform-index-title">
          <?php 
          $user = "SELECT * FROM user_data WHERE user_id = '$user_id' ";
          $userselect = mysqli_query($conn, $user);

          while($row = mysqli_fetch_array($userselect)){
            echo "<p class='appform-index-info'><strong>" . $row[3] . "</strong>님이 지원하신 채용</p>";
          }

          $jobdata = "select * from job_data where job_id = $job_id";
          $result = mysqli_query($conn, $jobdata);

          while($j_row = mysqli_fetch_array($result)){
            
            echo "<p class='appform-index-text'>" . $j_row[3] . "<span class='appform-index-badge'>" . $j_row[4] . "</span> </p>";
          }
          ?>
        </div>
      </article>
    </section>



    <section id="appform_data">
      <h2>인적사항</h2>
      <article class="appform_data-formwrap">
        <h3>지원내용 작성</h3>
            <div class="form-grid">
              <div class="appform-profile">
                <img src="./profileimg/<?php echo $img ?> " 
                
                
                alt="사진미리보기" class="profile-sample">
                <div class="profile-wrap">
                  <label class="appform_data-label">사진</label>
                </div>
              </div>
  
              <div class="appform-name">
                <label class="appform_data-label">성함</label>
                <p class="em_info-text"><?php echo $name ?></p>
              </div>
    
              <div class="appform-phone">
                <label class="appform_data-label">연락처</label>
                <p class="em_info-text"><?php echo $phone ?></p>
              </div>
    
              <div class="appform-location">
                <label class="appform_data-label">주소</label>
                <p class="em_info-text"><?php echo $loaction ?></p>
              </div>
    
              <div class="appform-email">
                <label class="appform_data-label">이메일</label>
                <p class="em_info-text"><?php echo $email ?></p>
              </div>
    
              <div class="appform-opt1">
                <label class="appform_data-label">보훈대상 유무</label>

                <?php
                  if($opt1 == '1'){
                    echo "<span class='em_info-on'>대상</span>";
                    echo "<span class='em_info-off'>비대상</span>";
                  }else{
                    echo "<span class='em_info-off'>대상</span>";
                    echo "<span class='em_info-on'>비대상</span>";
                  }
                ?>
              </div>
    
              <div class="appform-opt2">
              <label class="appform_data-label">추천인 유무</label>
              <?php
                  if($opt2 == '1'){
                    echo "<span class='em_info-on'>대상</span>";
                    echo "<span class='em_info-off'>비대상</span>";
                    echo "<span class='em_info-opt3'>" . $opt3 . "</span>";
                  }else{
                    echo "<span class='em_info-on'>대상</span>";
                    echo "<span class='em_info-off'>비대상</span>";
                  }
                ?>
              </div>

            </div>
  
          <div class="appform-intro">
            <label class="appform_data-label">자기소개서</label>
            <div class="appform-intro-text">
              <p><?php echo nl2br($intro)?></p>
            </div>
          </div>
          </fieldset>

          <div class="appform-btnwrap">
            <button type="reset" class="appform-resetbtn" onclick="cancel()">지원 취소하기</button>
            <div>
              <a href="./em_form.php?id=<?php echo $job_id?>&mode=modify" title="지원서 수정하기" class="appform-submitbtn">지원서 수정</a>  
            </div>
          </div>
          
      </article>
    </section>
  </main>
  

  <!-- 푸터영역 -->
  <footer>
    <div id='f_wrap'>
      <article class='f_top'>
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
      </article>

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