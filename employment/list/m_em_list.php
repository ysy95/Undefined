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
  <title>Document</title>
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/m_common.css" type="text/css">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/m_em_list.css">
</head>
<body>
  <header>

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
        <a href="../index.html" title="pc버전바로가기" class="pc_btn">PC버전 바로가기</a>
      </p>
    </div>
    <div class="f_fixed">&nbsp;</div>
  </footer>
  
</body>
</html>