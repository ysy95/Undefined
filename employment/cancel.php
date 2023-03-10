<?php

include('../db.php');

$ID = $_session['UserID'];

$filename = "./user/profileimg/" . $ImgRes['UserImg'];
if (file_exists($filename)) {
  unlink($filename);
}

$query = "UPDATE UserData SET UserName = null, UserImg = null, UserPhone = null, UserLocation = null, UserOpt01 = null, UserOpt02 = null, UserOpt03 = null, UserIntro = null 
where UserID = '$ID'";

$result = mysqli_query($conn, $query);
echo '<p>지원이 취소되었습니다.<p> <br> <a href="index.html">메인화면</a>';
?>