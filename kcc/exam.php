<html>
<head>
<script language="javascript">
var httpRequest = null;
function getXMLHttpRequest(){
     if(window.ActiveXObject){
        try{
                return new ActiveXObject("Msxml2.XMLHTTP");
        }catch(e){
                try{
                        return new ActiveXObject("Microsoft.XMLHTTP");
                }catch(e1){
                        return(null);
                }
        }
     }else if(window.XMLHttpRequest){
           return new XMLHttpRequest();
     }else{
           return null;
     }
}
function load(url){
     httpRequest = getXMLHttpRequest();
     httpRequest.onreadystatechange = viewMessage;
     httpRequest.open("GET", url, true);
     httpRequest.send(null);
}
function viewMessage(){
     if(httpRequest.readyState == 4){
           if(httpRequest.status == 200){
                  alert(httpRequest.responseText);
                  if(httpRequest.responseText != "사용 가능한 아이디입니다"){
                        var frm = document.mem_frm;
                             frm.salon_id.value = "";
                             frm.salon_id.focus();    
                  }else{
                       var frm = document.mem_frm;
                            frm.confirm_id.value = frm.salon_id.value;  
                  } 
           }else{
                   alert("실패하였습니다 : "+httpRequest.status);
           }
     }
}
 
function check_id(url){
   var frm  = document.mem_frm;
   var id   = frm.salon_id.value;
   var c_id = frm.confirm_id.value;
   if((id.replace(/(^\s*)|(\s*$)/g,"") != "" && c_id == "x") || (c_id != "x" && c_id != id && id.replace(/(^\s*)|(\s*$)/g,"") != "")){
   
        if(chck2(id) == "f"){
             alert("아이디는 영문이나 숫자 혹은 영문과 숫자의조합만 가능합니다");
             frm.salon_id.value = "";
             frm.salon_id.focus();
             return;  
        }
        if(byteCheck(id) < 4 ){
             alert("아이디는 최소 4자리 이상 15자리 이하로 입력해주세요");
             frm.salon_id.value = "";
             frm.salon_id.focus();
             return;
        }     
        if(id.search(/\W|\s/g) > -1){
           alert("특수문자 또는 공백이 입력되었습니다\n\n특수문자와 공백은 입력할 수 없습니다.");
           frm.salon_id.value = "";
           frm.salon_id.focus();
           return;
        }
   
      var ul = url+"?id="+id;
      load(ul);     
   }
}
 
function go_submit(){
   var frm  = document.mem_frm;
   var id   = frm.salon_id.value;            
 
   if(id.replace(/(^\s*)|(\s*$)/g,"") == ""){
       alert("아이디를 입력해 주세요");
       frm.salon_id.focus();
       return;
   }
}
</script>
</head> 
<body>
 
// 아이디 입력용 form
<form name="mem_frm" method="post">
   <!--한번 아이디를 승인받은 후 다시 아이디를 고쳤는지 여부를 체크하기 위한 파라미터-->
   <input type="hidden" name="confirm_id" value="x" /> 
   <input type="text" name="salon_id" size="15" maxlength="15" onblur="check_id('check_id.php')" />
   <input type="button" value="입 력" onclick="go_submit()" />
</form>
</body>
</html>