<?php

include('../employment/db.php');

// 회원가입 변수 설정 ID, PW, PW_Chk, Email

$ID = $_POST['ID'] ?? '';
$PW = $_POST['PW'] ?? '';
$PWChk = $_POST['PWChk'] ?? '';
$Email = $_POST['Email'] ?? '';
$markerting = $_POST['marketing'] ?? '0';

$stmt = $conn->prepare("select * from user_data where user_id = ?");
$stmt->bind_param("s", $ID);
$stmt->execute();
$checkRes = $stmt->get_result();
if(mysqli_fetch_assoc($checkRes) > 0){
  echo '<p>중복되어 있는 ID입니다. 로그인 해 주세요. <br> <a href="login.html" title="로그인">로그인</a></p>';
  exit;
};

if($PW !== $PWChk){
  echo '<script> alert("비밀번호가 일치하지 않습니다! 다시 입력해주세요!") </script>';
  exit;
}

$hashed_password = password_hash($PW, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO user_data SET
user_id=?, 
user_password=?, 
user_defaultEmail=?, 
marketing=?
");
$stmt->bind_param("ssss", $ID, $hashed_password, $Email, $markerting);
$stmt->execute();

echo "<script>alert('가입이 완료되었습니다.');</script>";
echo "<script>location.replace('./login.html');</script>";
mysqli_close($conn); // 데이터베이스 접속 종료
exit;
?>