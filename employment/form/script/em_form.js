       // 이미지 미리보기
        $(document).ready(function(){

        $("#userimg").on("change", function(){ // 파일 선택시
          let fileName = $(this).val().split('\\').pop();
          let fileExtension = fileName.split('.').pop().toLowerCase();
          if (fileExtension !== 'png' && fileExtension !== 'jpg' && fileExtension !== 'jpeg' && fileExtension !== 'gif' && fileExtension !== 'bmp') {
              alert('이미지 파일만 업로드 가능합니다.');
              return false;
          }

          let reader = new FileReader(); // 파일 읽기 객체 생성
          reader.onload = function(e){ // 파일 읽기 성공시
            $(".appform-profile > img").attr("src", e.target.result); // 이미지 태그에 읽은 파일 경로를 src 속성으로 지정
          }
          reader.readAsDataURL(this.files[0]); // 파일 읽기 시작
        });

        $('.profile-delete').click(()=>{
          $('#userimg').val('');
          $('.appform-profile > img').attr('src', 'img/profile_default.png');
        });

        // 인풋 포커스 기능
        $('input[type=text]').focus(function(){
          $(this).css('border-bottom', '2px solid #4F3220');
        })
        $('input[type=text]').blur(function(){
          $(this).css('border-bottom', '2px solid #d9d9d9');
        });

        // 추천인 유무에서 대상자 선택시 추천인 입력창 활성화
        $('input[name="opt2"]').on('change', function() {
          if ($('input[name="opt2"]:checked').val() == '1') {
              $('#opt5').prop('disabled', false);
          } else {
              $('#opt5').val('');
              $('#opt5').prop('disabled', true);
          }
        });




        $('.appform-submitbtn').click(function(e){
        if($('#userimg').val() == ''){
          $('.appform-warn.list01').text('이미지를 등록해주세요.');
          e.preventDefault();
          console.log('event1 ')
        } 
        if ($('#username').val() == ''){
          $('.appform-warn.list02').text('이름을 입력해주세요.');
          e.preventDefault();
          console.log('event2')
        } 
        if ($('#userphone').val() == ''){
          $('.appform-warn.list03').text('연락처를 입력해주세요.');
          e.preventDefault();
        } 
        if ($('#userlocation').val() == ''){
          $('.appform-warn.list04').text('주소를 입력해주세요.');
          e.preventDefault();
        }  
        if ($('#useremail').val() == ''){
          $('.appform-warn.list05').text('이메일을 입력해주세요.');
          e.preventDefault();
        } 
        if($('#userintro').val() == ''){
          $('.appform-warn.list06').text('자기소개서를 입력해주세요.');
          e.preventDefault();
        }
      });
        
      });

      document.getElementById('inputsave').addEventListener('click', inputSave);
      document.getElementById('inputload').addEventListener('click', inputLoad);

      // 로컬 스토리지로 임시 저장
      function inputSave() {
        let userName = document.getElementById('username').value;
        let userPhone = document.getElementById('userphone').value;
        let userEmail = document.getElementById('useremail').value;
        let userLocation = document.getElementById('userlocation').value;
        let userIntro = document.getElementById('userintro').value;
        let opt1 = document.getElementById('opt1').value;
        let opt2 = document.getElementById('opt2').value;
        let opt3 = document.getElementById('opt3').value;
        let opt4 = document.getElementById('opt4').value;
        let opt5 = document.getElementById('opt5').value;

        localStorage.setItem('username', userName);
        localStorage.setItem('userphone', userPhone);
        localStorage.setItem('useremail', userEmail);
        localStorage.setItem('userlocation', userLocation);
        localStorage.setItem('userintro', userIntro);
        localStorage.setItem('opt1', opt1);
        localStorage.setItem('opt2', opt2);
        localStorage.setItem('opt3', opt3);
        localStorage.setItem('opt4', opt4);
        localStorage.setItem('opt5', opt5);
      }

      // 로컬 스토리지에서 불러오기
      function inputLoad() {

        username = localStorage.getItem('username');
        userPhone = localStorage.getItem('userphone');
        userEmail = localStorage.getItem('useremail');
        userLocation = localStorage.getItem('userlocation');
        userIntro = localStorage.getItem('userintro');
        opt1 = localStorage.getItem('opt1');
        opt2 = localStorage.getItem('opt2');
        opt3 = localStorage.getItem('opt3');
        opt4 = localStorage.getItem('opt4');
        opt5 = localStorage.getItem('opt5');

        document.getElementById('username').value = username;
        document.getElementById('userphone').value = userPhone;
        document.getElementById('useremail').value = userEmail;
        document.getElementById('userlocation').value = userLocation;
        document.getElementById('userintro').value = userIntro;
        
        if (opt1 == 1) {
          $('#opt1').prop('checked', true);
        }
        if (opt3 == 1) {
          $('#opt3').prop('checked', true);
        }

        document.getElementById('opt5').value = opt5;

        //10분이 지나면, 로컬 스토리지 삭제
        setTimeout(function() {
          localStorage.removeItem('username');
          localStorage.removeItem('userphone');
          localStorage.removeItem('useremail');
          localStorage.removeItem('userlocation');
          localStorage.removeItem('userintro');
          localStorage.removeItem('opt1');
          localStorage.removeItem('opt2');
          localStorage.removeItem('opt3');
          localStorage.removeItem('opt4');
          localStorage.removeItem('opt5');
        }
        , 600000);

        

      }
      