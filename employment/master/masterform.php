<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블 채용 리스트</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
  " type="text/css">

</head>
<body>
  <table class="table table-striped">
    <thead>
      <tr class="table-light">
        <th>지원자 ID</th>
        <th>지원자 이름</th>
        <th>접수한 채용</th>
        <th>접수 날짜</th>
      </tr>
    </thead>
    <tbody>
      <?php

        include "../db.php";

        $userSQL = "SELECT * FROM user_data where master = 0";
        $userinfo = mysqli_query($conn, $userSQL);
        while($row = mysqli_fetch_array($userinfo)){
          $apply_name = $row['job_id'];
          $id = $row['user_id'];
          $name = $row['user_name'];
          $apply_date = $row['user_emdate'];

          if($name !== null){
            echo "<tr>";
            echo "<td><a href='../user/em_readmaster.php?id_master_of=$id' class='link-dark' target='_top'>$id</a></td>";
            echo "<td><a href='../user/em_readmaster.php?id_master_of=$id' class='link-dark' target='_top'>$name</a></td>";
  
            $jobSQL = "SELECT * FROM job_data where job_id = $apply_name";
            $jobinfo = mysqli_query($conn, $jobSQL);
            while($row = mysqli_fetch_array($jobinfo)){
              $apply_name = $row['job_title'];
  
              echo "<td>$apply_name</td>";
              echo "<td>$apply_date</td>";
              echo "</tr>";  
          }; 
        } else {
            echo "<tr style = 'display:none;'>";
            echo "<td>지원자가 없습니다.</td>";
            echo "</tr>";
          }

        }



      ?>
    </tbody>

  </table>
</body>
</html>