$(function(){
  $('#apply').click(function(e){
    if($('.emb_h-btn_wrap span').hasClass('list04')){
      alert('지원이 마감되었습니다.');
      e.preventDefault();
    }
  });
})