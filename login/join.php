<?php

include('../employment/db.php');

// 회원가입 변수 설정 ID, PW, PW_Chk, Email

$ID = $_POST['ID'] ?? '';
$PW = $_POST['PW'] ?? '';
$Email = $_POST['Email'] ?? '';
$markerting = $_POST['marketing'] ?? '0';

$stmt = $conn->prepare("select * from user_data where user_id = ?");
$stmt->bind_param("s", $ID);
$stmt->execute();
$checkRes = $stmt->get_result();
if(mysqli_fetch_assoc($checkRes) > 0){
  echo "<script>alert('이미 존재하는 아이디입니다.');</script>";
  echo "<script>history.back();</script>";
  exit;
};

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