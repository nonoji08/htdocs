function validateFrm() {
    var msg = "아래의 항목을 확인하여 주십시오. \n";
    if ($('#ko_name').val()==""||$('#birthYear').val()==""||$('#birthMonth').val()==""||$('#birthDay').val()==""||$('#userid').val()==""||$('#password').val()==""||$('#password_confirm').val()==""||$('#cell_g').val()==""||$('#cell_m').val()==""||$('#cell_e').val()==""||$('#agreement').val()==""||$('#h_postcode').val()==""||$('#home_addr1').val()==""||$('#home_addr2').val()==""||$('#dm').val()==""||$('#office_name').val()==""||$('#position').val()==""||$('#o_postcode').val()==""||$('#office_addr1').val()==""||$('#office_addr2').val()=="") {
       msg += " · 입력되지 않은 항목이 있습니다.\n";
       if ('validID' == 0) {
           msg += " · 아이디의 중복확인이 되어있지 않습니다.\n"; 
       }
       if ($('#password_confirm').val()!==$('#password_confirm').val()) {
           msg += "· 입력한 비밀번호와 비밀번호 확인이 일치하지 않습니다.\n";
       }
       alert(msg);
       return 0;
    } else {
        document.getElementById("frmJoin").submit();
    }
}
