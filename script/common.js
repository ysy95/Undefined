// 패밀리사이트
function siteUrl(familySite){//사용자가 선택목록을 선택하면 siteUrl함수가 호출됨.
  // alert(s);
  if(familySite.value!='none'){//옵션을 선택하면
    window.open(familySite.value,'_self');//선택한 사이트가 열리게 하고 
    familySite.value='none';//기존값을지운다
  }else{//선택하지 않으면
    return familySite;//프로그램을 종료
  }
}
