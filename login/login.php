<?php

session_start();

include('../employment/db.php');

//로그인

$ID = $_POST['ID'] ?? '';
$PW = $_POST['PW'] ?? '';

$check = "SELECT * FROM user_data WHERE user_id = '$ID'";
$checkRes = mysqli_query($conn, $check);

if(mysqli_num_rows($checkRes) == 0){ // 아이디가 없을 경우
  echo "일치하는 아이디가 없습니다.";
  exit;
} else{ // 아이디가 일치할 경우
$array = mysqli_fetch_array($checkRes);
$dbPW = $array['user_password'];

if (password_verify($PW, $dbPW)) {
  $_SESSION['UserID'] = $ID;

  mysqli_close($conn);

  echo"
  <script>
  location.href = '../employment/em.php';
  </script>";
} else {
    echo "비밀번호가 일치하지 않습니다.";
}

};
?>