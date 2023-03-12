<?php

session_start();

if (isset($_SESSION['UserID'])){
    session_destroy();
    echo '<script> alert("로그아웃 되었습니다."); location.href=history.back() </script>';
} 
?>

