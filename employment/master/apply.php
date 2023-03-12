<?php

session_start();

include('../db.php');

if(isset($_FILES['userimg'])) {
  $file_name = $_FILES['userimg']['name'];
  $file_size = $_FILES['userimg']['size'];
  $file_tmp = $_FILES['userimg']['tmp_name'];
  $file_type = $_FILES['userimg']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['userimg']['name'])));

  $expensions = array("jpeg", "jpg", "png");

  if(in_array($file_ext, $expensions) === false){
    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
  }

  if($file_size > 2097152) {
    $errors[] = 'File size must be excately 2 MB';
  }

  if(empty($errors) == true) {
    move_uploaded_file($file_tmp, "profileimg/".$file_name);
    $img = $file_name;
  } else {
    print_r($errors);
  }
}

//세션의 ID 값 변수에 넣기
$job_id = (int)$_GET['id'];
$sql = "SELECT * FROM job_data WHERE job_id = $job_id";
$em_list = mysqli_query($conn, $sql);

$ID = $_SESSION['UserID'] ?? '';
$name = $_POST['username'] ?? '';
$email = $_POST['useremail'] ?? '';
$phone = $_POST['userphone'] ?? '';
$address = $_POST['userlocation'] ?? '';
$opt01 = $_POST['opt1'] ?? '0';
$opt02 = $_POST['opt2'] ?? '0';
$opt03 = $_POST['opt3'] ?? '';
$intro = $_POST['userintro'] ?? '';
$now = date('Y-m-d H:i:s');


//이미지 저장

$stmt = $conn->prepare("UPDATE user_data SET user_name = ?, user_profile = ?, user_email = ?, user_phone = ?, user_location = ?, user_opt1 = ?, user_opt2 = ?, user_opt = ?, User_Intro = ?, user_emdate = ?, job_id = ? WHERE user_id = ?");
if ($stmt === false) {
    die('Prepare failed: ' . $conn->error);
}
$stmt->bind_param("ssssssssssss", $name, $img, $email, $phone, $address, $opt01, $opt02, $opt03, $intro, $now ,$job_id, $ID);
$stmt->execute();
$result = $stmt->get_result();
echo $ID;
echo '<p>지원이 완료되었습니다! <br> <a href="index.html" title="메인페이지"?>메인페이지로 가기</a><p>';
?>