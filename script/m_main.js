//이벤트 슬라이드
const sw = document.querySelector('.m_game--wrap');
const lb = document.querySelector('#prev-btn');
const rb = document.querySelector('#next-btn');
let c = 0;
let s_n = document.querySelectorAll('.m_game--slide li');

const s_total = s_n.length;
const li = 100;

//클릭시 이동
lb.addEventListener('click',function(){
  clearInterval(Timer2);
  if(c > 0){
    mslide(c-1);
  }else{
    mslide(s_total-1);
  }
});
rb.addEventListener('click',()=>{
  clearInterval(Timer2);
  if( c < s_total-1){
    mslide(c+1);
  }else{
    mslide(0);
  }
});


let Timer2 = setInterval(function(){
  if(c < s_total-1){
    mslide(c+1);
  }else{
    mslide(0);
  }
},5000);
lb.addEventListener('click',()=>{
  clearInterval(Timer2);
});

//3. 자동으로 넘어가게
function mslide(n){
  sw.style.left = li*-n + '%';
  c = n;
  console.log(sw.style.left);
}
