<?php

session_start();

include('db.php');

$ID = $_SESSION['UserID'];

$ImgSql = "SELECT * FROM user_data WHERE user_id = '$ID'";
$query = mysqli_query($conn, $ImgSql);
$ImgRes = mysqli_fetch_array($query);

$filename = "./user/profileimg/".$ImgRes['user_profile'];
if (file_exists($filename)) {
  unlink($filename);
}

$sql = "UPDATE user_data SET user_name = null, user_profile = null, user_phone = null, user_email = null, user_location = null, user_opt1 = null, user_opt2 = null, user_opt = null, user_intro = null, user_emdate = null, job_id = null where user_id = '$ID'";
$result = mysqli_query($conn, $sql);
echo '<script>alert("지원이 취소되었습니다."); location.href="./em.php";</script>'
?>