<?php
          $list = "select * from job_data where job_info = '경력' order by job_id asc LIMIT 5";
          $sql = mysqli_query($conn, $list);
          while($row = $sql->fetch_array()) {

            if($row[5] == '채용시까지' || $row[5] == '2023년') {
              $career = '접수중';
              $com02 = '3';
            } else{
              $career = '채용종료';
              $com02 = '4';
            }
            if($row[4] == '경력') {
              $com01 = '2';
            } else{
              $com01 = '1';
            }

            echo '
            <li>
            <a href="./list/em_list.php?id='. $row[0] .'" title="" class="em_info-list-item">
              <div class="em-item">
                <div class="em-item-left">
                  <span class="em-item-title">' . $row[3] . '</span> <br>
                  <span class="em-item-info">' . $row[2] . '</span> / 
                  <span class="em-item-info">' . $row[5] . '</span>  
                </div>
                <div class="em-item-right">
                  <span class="em-item-badge item0' . $com01 . '">' . $row[4] , '</span> <br>
                  <span class="em-item-badge item0' . $com02 . '">' .$career . '</span>  
                </div>
              </div>
            </a>
          </li>
          ';
          };

          ?>