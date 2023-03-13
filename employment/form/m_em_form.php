<?php 
  include "../db.php";

  session_start();

  if(isset($_SESSION['UserID'])){
    $user_id = $_SESSION['UserID'];
  }else{
    echo "<script>alert('로그인 후 이용해주세요.'); location.href='../../login/login.html';</script>";
  }

  $job_id = (int)$_GET['id'];
  $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
  $job_list = mysqli_query($conn, $sql);
  $job_data = mysqli_fetch_array($job_list);

  $job_title = $job_data[3];
  $job_date = $job_data[5];

  if($job_data[4]=='경력'){
    $job_info = '경력';
    $job_badge = '1';
  } else {
    $job_info = '신입';
    $job_badge = '2';
  }

  if($job_data[5]=='채용시까지' || $job_data[5]=='2023년'){
    $job_type = '접수중';
    $job_badge2 = '4';
  } else {
    $job_type = '접수종료';
    $job_badge2 = '3';
  }



  // 수정사항일때

  $modify = $_GET['mode'];

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


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/m_common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/m_em_form.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="./script/m_em_form.js" defer></script>
  <title>넷마블 모바일 채용지원</title>
</head>
<body>
  <!-- header -->
  <header>
    <div id='h_wrap'>
      <div class="m_bar">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class='h_nav'>
        
        <h1>
          <a href='index.html' title='메인페이지로 바로가기'>
            <img src='../img/main_logo.png' alt="메인로고"/>
          </a>
        </h1>
        <nav>
          <ul class='lnb'>
            <a href='m_login.html' title='로그인하기'>로그인</a>&emsp;
            <a href='m_join.html' title='회원가입하기'>회원가입</a>
          </ul>

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
              <a href='#' title='문의'>문의<i class="fa-solid fa-sort-down"></i></a>
              <ul class='sub'>
                <li><a href='#' title='FAQ'>FAQ</a></li>
                <li><a href='#' title='문의하기'>문의하기</a></li>
              </ul>
            </li>
          </ul>

        
        </nav>
      </div>
      
      <h1>
        <a href='index.html' title='메인페이지로 바로가기'>
          <img src='../img/main_logo.png' alt="메인로고"/>
        </a>
      </h1>

      <i class="fa-solid fa-circle-user"></i>

    </div>
  </header>

  <!-- main -->
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
      <h2>넷마블 채용지원</h2>
    </section>

    <!-- form -->
    <section id="appform">
      <h2>채용공고 시스템</h2>
      <article class="emb_h-wrap">
        <div class="emb_h-title_wrap">
          <p class="emb_h-title-main">지원하신 공고</p>

          <div>
            <h2 class="emb_h-title_text"><?php echo $job_title?></h2>
          </div>

          <div class="emb_h-btn_wrap">
            <span class="h_btn-badge list0<?php echo $job_badge ?>"><?php echo $job_info?></span>
            <span class="h_btn-badge list0<?php echo $job_badge2 ?>"><?php echo $job_type?></span> <br>
          </div>
        </div>
      </article>

      <form action="./apply.php" method="post" name="apply-form"  enctype="multipart/form-data">
      <input type="hidden" name="job_id" value="<?php $job_id = $_GET['id']; echo $job_id ?>">
        <fieldset>
          <legend>내용을 입력해주세요</legend>
          <div class="form-grid">
            <div class="appform-profile">
              <label class="appform_data-label">사진 <img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
              <span class="appform-warn list01"></span>
              <img src="./img/profile_default.png" alt="사진미리보기" class="profile-sample">
              <div class="profile-wrap">

                <input type="file" name="userimg" id="userimg">
                <div  class="profile-btnwrap">
                  <label for="userimg" class="profile-upload">사진등록</label>
                  <button type="button" class="profile-delete">삭제</button>  
                </div>
              </div>
            </div>

            <div class="appform-name">
              <label class="appform_data-label list02">성함<img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
              <span class="appform-warn list02"></span>
              <input type="text" name="username" id="username" value="<?php echo $data['user_name'] ?>">
            </div>
  
            <div class="appform-phone">
              <label class="appform_data-label list02">연락처<img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
              <span class="appform-warn list03"></span>
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
              <label class="appform_data-label list02">주소<img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
              <span class="appform-warn list04"></span>
              <input type="text" name="userlocation" id="userlocation" value="<?php echo $data['user_location'] ?>">
            </div>
  
            <div class="appform-email">
              <label class="appform_data-label list02">이메일<img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
              <span class="appform-warn list05"></span>
              <input type="text" name="useremail" id="useremail" value="<?php echo $data['user_email']?>">
            </div>
          </div>

  
            <div class="appform-radio_wrap">
              <div class="appform-opt1">
                <label class="appform_data-label">보훈대상 유무</label>
                <?php if($data['user_opt1'] == 1){
                  echo '<input type="radio" name="opt1" value="1" id="opt1" checked><label for="opt1">대상</label>';
                  echo '<input type="radio" name="opt1" value="0" id="opt2"><label for="opt2">비대상</label>  ';
                } else {
                  echo '<input type="radio" name="opt1" value="1" id="opt1"><label for="opt1">대상</label>';
                  echo '<input type="radio" name="opt1" value="0" id="opt2" checked><label for="opt2">비대상</label>  ';
                }?>
              </div>
    
            <div class="appform-opt2">
              <label class="appform_data-label">추천인 유무</label>
              <?php if($data['user_opt2'] == 1){
                  echo '<input type="radio" name="opt2" value="1" id="opt3" checked><label for="opt3">대상</label>';
                  echo '<input type="radio" name="opt2" value="0" id="opt4"><label for="opt4">비대상</label> <br>';
                  echo '<input type="text" class="appform-opt3" name="opt3" id="opt5" value = "'. $data['user_opt'] .'">';
                } else {
                  echo '<input type="radio" name="opt2" value="1" id="opt3"><label for="opt3">대상</label>';
                  echo '<input type="radio" name="opt2" value="0" id="opt4" checked><label for="opt4">비대상</label> <br>';
                  echo '<input type="text" class="appform-opt3" name="opt3" id="opt5" disabled>';
                }?>       
            </div>

          </div>

        <div class="appform-intro">
          <label class="appform_data-label">자기소개서<img src="./img/asterisk.svg" alt="필수" class="asterisk"></label>
          <span class="appform-warn list06"></span>
          <textarea name="userintro" id="userintro" cols="30" rows="10" class="appform-intro-text"><?php echo $data['user_intro']?></textarea>
        </div>

        <div class="appform-btnwrap">
          <button type="button" class="appform-btn list01" id="inputsave">임시저장</button>
          <button type="button" class="appform-btn list01" id="inputload">불러오기</button>
          <button type="submit" class="appform-btn list02" id="submit">지원서 제출</button>  
        </div>
        </fieldset>
      </form>




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
        <a href="./em_form.php?move_pc_screen=1" title="pc버전바로가기" class="pc_btn">PC버전 바로가기</a>
      </p>
    </div>
    <div class="f_fixed">&nbsp;</div>
  </footer>
</body>
</html>
