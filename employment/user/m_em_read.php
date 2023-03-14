<?php

include "../db.php";

session_start();

if(isset($_SESSION['UserID'])){
  $user_id = $_SESSION['UserID'];
}else{
  echo "<script>alert('로그인 후 이용해주세요.'); location.href='../../login/login.html';</script>";
}


$user_sql = "SELECT * FROM user_data WHERE user_id = '$user_id'";
$user_list = mysqli_query($conn, $user_sql);
$data = mysqli_fetch_assoc($user_list);

$job_id = $data['job_id'];

if($job_id == null || $job_id == " "){
  echo "<script>alert('지원한 채용이 없습니다.'); location.href='../m_em.php';</script>";
}

$job_sql = "SELECT * FROM job_data WHERE job_id = $job_id";
$job_list = mysqli_query($conn, $job_sql);
$job_data = mysqli_fetch_array($job_list);
$job_date = $job_data[5];

if($job_data['job_info']=='경력'){
  $job_info = '경력';
  $job_badge = '1';
} else {
  $job_info = '신입';
  $job_badge = '2';
}

if($job_date == '채용시까지' || $job_date == '2023년'){
  $job_type = '접수중';
  $job_badge2 = '4';
} else {
  $job_type = '접수종료';
  $job_badge2 = '3';
}


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
  <link rel="stylesheet" href="./css/m_em_read.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="./script/em_read.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="../script/m_common.js" defer></script>

<title>넷마블 채용조회</title>
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
              <a href='#none' title='게임'>게임<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='../game/m_game.html' title='게임'>게임</a></li>
                  <li><a href='#' title='PC'>PC</a></li>
                  <li><a href='#' title='모바일'>모바일</a></li>
                </ul>
            </li>
            <li>
              <a href='#' title='넷마블'>넷마블<i class="fa-solid fa-sort-down"></i></a>
                <ul class='sub'>
                  <li><a href='../netmarble/m_netmarble.html' title='넷마블 컴퍼니'>넷마블</a></li>
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
                  <li><a href='../m_em.php' title='인사제도'>인재채용</a></li>
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
      <h2>넷마블 채용지원</h2>

    </section>

    <!-- form -->
    <section id="appform">
      <h2>채용공고 시스템</h2>
      <article class="emb_h-wrap">
        <div class="emb_h-title_wrap">
          <p class="emb_h-title-main"><strong><?php echo $data['user_name']?></strong>님이 지원하신 공고</p>

          <div>
            <h2 class="emb_h-title_text"><?php echo $job_data['job_title']?></h2>
          </div>

          <div class="emb_h-btn_wrap">
            <span class="h_btn-badge list0<?php echo $job_badge ?>"><?php echo $job_info?></span>
            <span class="h_btn-badge list0<?php echo $job_badge2 ?>"><?php echo $job_type?></span> <br>
          </div>
        </div>
      </article>

          <div class="form-grid">
            <div class="appform-profile">
              <label class="appform_data-label">사진 </label>
              <?php 
              $img = $data['user_profile'];
              
              if(! $data['user_profile'] = ''){
                echo '<img src="./profileimg/'. $img . '" alt="사진미리보기" class="profile-sample">';
              } else {
                echo '<img src="./img/profile_default.png" alt="사진미리보기" class="profile-sample">';                
              }
              
              ?>
            </div>

            <div class="appform-name">
              <label class="appform_data-label list02">성함</label>
              <p class="appform-read"><?php echo $data['user_name']?></p>
            </div>
  
            <div class="appform-phone">
              <label class="appform_data-label list02">연락처</label>
              <p class="appform-read"><?php echo $data['user_phone']?></p>
            </div>
  
            <div class="appform-location">
              <label class="appform_data-label list02">주소</label>
              <p class="appform-read"><?php echo $data['user_location']?></p>
            </div>
  
            <div class="appform-email">
              <label class="appform_data-label list02">이메일</label>
              <p class="appform-read"><?php echo $data['user_email']?></p>
            </div>
          </div>

  
            <div class="appform-radio_wrap">
              <div class="appform-opt1">
                <label class="appform_data-label">보훈대상 유무</label>
                <?php
                $opt1 = $data['user_opt1'];
                if($opt1 == 1){
                    echo "<span class='em-info on'>대상</span>";
                    echo "<span class='em-info off'>비대상</span>";
                  }else{
                    echo "<span class='em-info off'>대상</span>";
                    echo "<span class='em-info on'>비대상</span>";
                  }
                ?>
              </div>
    
            <div class="appform-opt2">
              <label class="appform_data-label">추천인 유무</label>
              <?php
                $opt2 = $data['user_opt2'];
                if($opt2 == 1){
                    echo "<span class='em-info on'>대상</span>";
                    echo "<span class='em-info off'>비대상</span> <br>";
                  }else{
                    echo "<span class='em-info off'>대상</span>";
                    echo "<span class='em-info on'>비대상</span> <br>";
                  }
                ?>
              <p class="appform-opt3"><?php echo $data['user_opt']?></p>
            </div>

          </div>

        <div class="appform-intro">
          <label class="appform_data-label">자기소개서</label>
          <div class="appform-intro-text"><?php echo nl2br($data['user_intro'])?></div>
        </div>

        <div class="appform-btnwrap">
          <button type="reset" class="appform-btn list01" onclick="cancel()">지원취소</button>
          <a href="../form/m_em_form.php?id=<?php echo $job_data['job_id']?>&mode=modify" title="지원서 수정하기" class="appform-btn list02">지원서 수정</a>  
        </div>




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
        <a href="./em_read.php?move_pc_screen=1" title="pc버전바로가기" class="pc_btn">PC버전 바로가기</a>
      </p>
    </div>
    <div class="f_fixed">&nbsp;</div>
  </footer>
</body>
</html>
