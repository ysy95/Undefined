<?php

//데이터베이스 계정 설정
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password='' ?? '';
$mysql_db = 'netmarble';

//데이터베이스 계정 연결하기
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

$conn->error_reporting = true;

if(!$conn){
  printf ("데이터베이스 연결 실패: %s\n", mysqli_connect_error());
  exit();
}
?>

