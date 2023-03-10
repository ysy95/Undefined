<?php

session_start();
$data = $_SESSION['UserID'];

if($data == null){
  echo '';
} else {
  echo $data;
}

?>