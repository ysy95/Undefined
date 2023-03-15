<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="넷마블 인재채용페이지">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 인재채용</title>
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/em_form.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="../script/common.js" defer></script>
  <script src="./script/em_form.js" defer></script>

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

  <?php 
    include "../db.php";

    session_start();

    $modify = $_GET['mode'] ?? '';
    $job_id = (int)$_GET['id'];
    $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
    $em_list = mysqli_query($conn, $sql);

    if(isset($_SESSION['UserID'])){
      $user_id = $_SESSION['UserID'];
    }else{
      echo "<script>alert('로그인 후 이용해주세요.'); location.href='../../login/login.html';</script>";
    }


    if($modify == 'modify'){
      $user_sql = "SELECT * FROM user_data WHERE user_id = '$user_id'";
      $user_list = mysqli_query($conn, $user_sql);
      $data = mysqli_fetch_assoc($user_list);
      $profileImg = $data['user_profile'];
      $filename = "../user/profileimg/" . $profileImg;
      if (file_exists($filename)) {
        unlink($filename);
      }
      $data['user_profile'] = null;
      } else {
        $data['user_profile'] = '';
        $data['user_name'] = '';
        $data['user_email'] = '';
        $data['user_phone'] = '';
        $data['user_intro'] = '';
      }

    mysqli_close($conn);
  ?>
</head>


<body>
<header>
  <div class="h_wrapper">
    <div class="h-top-bg">&nbsp;</div>

    <div id='h_wrap'>
        <h1>
          <a href='../../index.html' title='메인페이지로 바로가기'>
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
                  <li><a href='#' title='넷마블 스토어'></a></li>
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
          <li>
            <a href='./login/login.php' title='로그인하기'>로그인</a>&emsp;
          </li>
          <li>
            <a href='./login/join.php' title='회원가입하기'>회원가입</a>
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
        <h2 class="page_nav--now">채용지원</h2>
        <p class="page_nav--nav"><span>home</span>
        <img src="../img/right-nav.svg" alt="다음"> 
        <span>인재채용</span>
        <img src="../img/right-nav.svg" alt="다음"> 
        채용지원</p>  
      </div>
    </section>

    <section id="appform_h">
      <h2>입사지원 시스템</h2>
      <article class="appform_h-wrap">
          <h3 class="appform_h-title_text">넷마블 입사지원</h3>
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

          while($row = mysqli_fetch_array($em_list)){
            echo "<p class='appform-index-info'>지원하실 채용</p>";
            echo "<p class='appform-index-text'>" . $row[3] . "<span class='appform-index-badge'>" . $row[4] . "</span> </p>";
          }
          ?>
        </div>
      </article>
    </section>

    <section id="appform_data">
        <h2>인적사항</h2>
        <article class="appform_data-formwrap">
          <h3>지원내용 작성</h3>
          <form action="./apply.php" method="post" name="apply-form"  enctype='multipart/form-data'>
          <fieldset>
            <legend>내용을 입력해주세요</legend>
            <div class="form-grid">
              <div class="appform-profile">
                <img src="./img/profile_default.png" alt="사진미리보기" class="profile-sample">
                <div class="profile-wrap">
                  <label class="appform_data-label">사진 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label> <span class="appform-warn list01"></span>
                  <input type="file" name="userimg" id="userimg">
                  <input type="hidden" name="job_id" value="<?php $job_id = $_GET['id']; echo $job_id ?>">
                  <?php 
                    if($modify == 'modify'){
                      echo "<p style='font-size:var(--f-size01'>보안상의 이유로 새 사진을 첨부해주세요!</p>";
                    }

                  ?>
                  <div  class="profile-btnwrap">
                    <label for="userimg" class="profile-upload">업로드</label>
                    <button type="button" class="profile-delete">삭제</button>  
                  </div>
                </div>
              </div>
  
              <div class="appform-name">
                <label class="appform_data-label">성함 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label><span class="appform-warn list02"></span>
                <input type="text" name="username" id="username" value="<?php echo $data['user_name']?>">
              </div>
    
              <div class="appform-phone">
                <label class="appform_data-label">연락처 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label><span class="appform-warn"></span>
                <input type="text" name="userphone" id="userphone" value="<?php echo $data['user_phone']?>" onkeyup="formatPhone(this)" maxlength="14">
              </div>
              <script>
              function formatPhone(obj) {
                let numbers = obj.value.replace(/\D/g, '');
                const char = {3:'-',7:'- '};
                let formatted = '';
                for (let i = 0; i < numbers.length; i++) {
                  formatted += (char[i]||'') + numbers[i];
                }
                obj.value = formatted;
              }
              </script>
    
              <div class="appform-location">
                <label class="appform_data-label">주소 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
                <span class="appform-warn list04"></span>
                <input type="text" name="userlocation" id="userlocation" value="<?php echo $data['user_location']?>">
              </div>
    
              <div class="appform-email">
                <label class="appform_data-label">이메일 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label><span class="appform-warn list05"></span>
                <input type="text" name="useremail" id="useremail" value="<?php echo $data['user_email']?>">
              </div>
    
              <div class="appform-opt1">
                <label class="appform_data-label list01">보훈대상 유무</label>
                <?php if($data['user_opt1'] == 1){
                  echo '<input type="radio" name="opt1" value="1" id="opt1" checked><label for="opt1">대상</label>';
                  echo '<input type="radio" name="opt1" value="0" id="opt2"><label for="opt2">비대상</label>  ';
                } else {
                  echo '<input type="radio" name="opt1" value="1" id="opt1"><label for="opt1">대상</label>';
                  echo '<input type="radio" name="opt1" value="0" id="opt2" checked><label for="opt2">비대상</label>  ';
                }?>
              </div>
    
            <div class="appform-opt2">
              <label class="appform_data-label list01">추천인 유무</label>
              <?php if($data['user_opt2'] == 1){
                  echo '<input type="radio" name="opt2" value="1" id="opt3" checked><label for="opt3">대상</label>';
                  echo '<input type="radio" name="opt2" value="0" id="opt4"><label for="opt4">비대상</label>';
                  echo '<input type="text" class="appform-opt3" name="opt3" id="opt5" value = "'. $data['user_opt'] .'">';
                } else {
                  echo '<input type="radio" name="opt2" value="1" id="opt3"><label for="opt3">대상</label>';
                  echo '<input type="radio" name="opt2" value="0" id="opt4" checked><label for="opt4">비대상</label>  ';
                  echo '<input type="text" class="appform-opt3" name="opt3" id="opt5" disabled>';
                }?>              
            </div>
            </div>
  
          <div class="appform-intro">
            <label class="appform_data-label">자기소개서 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label><span class="appform-warn list06"></span>
            <textarea name="userintro" id="userintro" cols="30" rows="10" class="appform-intro-text"><?php echo $data['user_intro']?></textarea>
          </div>
          </fieldset>

          <div class="appform-btnwrap">
          <?php
          if($modify == 'modify'){
            echo '<button type="button" class="appform-resetbtn" id="reset01" onclick="click()">초기화</button>';
          } else {
            echo '<button type="reset" class="appform-resetbtn">초기화</button>';
          }?>
            <div>
              <button type="button" class="appform-savebtn" id="inputload">불러오기</button>
              <button type="button" class="appform-savebtn" id="inputsave">임시저장</button>
              <button type="submit" class="appform-submitbtn">지원서 제출</button>  
            </div>
          </div>
        </form>
      </article>
    </section>
  </main>
  

  <!-- 푸터영역 -->
  <footer>
  <div class="f_topbtn">
    <a href="#" title="상단으로 돌아가기"><img src="../img/top_btn.png" alt="상단으로 돌아가기"></a>
  </div>
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