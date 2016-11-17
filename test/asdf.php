<!DOCTYPE html>
<html lang="ko">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>20522 최지혁</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<script type="text/javascript" src="js/jquery/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script src="js/jquery.selectric.min.js"></script>
<link rel="stylesheet" id="theme" href="css/selectric.css" />
<script src="js/validate.js"></script>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            vailded = false;
        });
        function execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    var fullAddr = ''; // 최종 주소 변수
                    var extraAddr = ''; // 조합형 주소 변수

                    // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        fullAddr = data.roadAddress;

                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        fullAddr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                    if(data.userSelectedType === 'R'){
                        //법정동명이 있을 경우 추가한다.
                        if(data.bname !== ''){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있을 경우 추가한다.
                        if(data.buildingName !== ''){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                        fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('h_postcode').value = data.zonecode; //5자리 새우편번호 사용
                    document.getElementById('home_addr1').value = fullAddr;

                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById('home_addr2').focus();
                }
            }).open();
        }
        function execDaumPostcode_W() {
            new daum.Postcode({
                oncomplete: function(data) {
                    var fullAddr = ''; // 최종 주소 변수
                    var extraAddr = ''; // 조합형 주소 변수

                    // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        fullAddr = data.roadAddress;

                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        fullAddr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                    if(data.userSelectedType === 'R'){
                        //법정동명이 있을 경우 추가한다.
                        if(data.bname !== ''){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있을 경우 추가한다.
                        if(data.buildingName !== ''){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                        fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('o_postcode').value = data.zonecode; //5자리 새우편번호 사용
                    document.getElementById('office_addr1').value = fullAddr;

                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById('office_addr2').focus();
                }
            }).open();
        }
        function vaildID() {
            var ID = $('#userid').val();
            var pattern = /^\w{4,20}$/;
            if (!pattern.test(ID, pattern)) {
                vailded = false;
                $("#idVaild").removeClass('vaildHidden');
                $(".txtVaild").text("아이디는 영문대,소문자, 숫자, 언더바(_) 로 4~20자리로 입력해주세요.");
                $(".txtVaild").css("color","#e60012");
            } else {
                request = $.ajax({
                    type:"post",
                    url:"vaildid.php",
                    data : {'id': ID},
                    dataType:'html',
                    timeout:2000});
                request.done(function (data) {
                    $("#idVaild").removeClass('vaildHidden');
                    if (data >= 1) {
                        vailded = false;
                        $(".txtVaild").text("이미 사용중인 아이디입니다.");
                        $(".txtVaild").css("color","#e60012");
                    } else {
                        vailded = true;
                        $(".txtVaild").text("사용 가능한 아이디입니다.");
                        $(".txtVaild").css("color","#666");
                    }
                });
            }
            if (!ID) { 
                $("#idVaild").addClass('vaildHidden');
            }
        }
        function vaildEmail() {
            var email = $('#email').val();
            var pattern = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;  //이메일 정규식
            
            $("#emailVaild").removeClass('vaildHidden');
            if (!pattern.test(email, pattern)) {
                email_vailded = false;
                $(".txtMailVaild").text("이메일 형식이 올바르지 않습니다.");
                $(".txtMailVaild").css("color","#e60012");
            } else {
                email_vailded = true;
                $(".txtMailVaild").text("올바른 이메일 형식입니다.");
                $(".txtMailVaild").css("color","#666");
            }
             if (!email) { 
                $("#emailVaild").addClass('vaildHidden');
            }
        }
        function validForm() {
            if (vailded == true || ) {
                alert ("보낸다");
                return true;
            } else {
                alert ("실패");
                return false;
            }
        }
    </script>   

<body>
<!-- skip nav -->
<ul id="skip">
    <li><a href="#site_menu" tabindex="0">주메뉴 바로가기</a></li>
    <li><a href="#content">본문 바로가기</a></li>
</ul>
<!-- //skip nav -->
<div id="wrap" class="sub_bg">
	<!-- header -->	
    <div id="header">	
            <h1 class="logo">
                    <a href="#" class="sp_com kcc">
                            <strong class="blind">KCC 금강컨트리클럽</strong>
                    </a>
            </h1>			
            <div id="site_gnb">	
                    <ul class="gnb_menu">
                    <li>김윤미님 환영합니다</li>
                    <li><a href="#">회원정보수정</a></li>
                    <li><a href="#">채팅룸</a></li>
                    <li><a href="#">로그아웃</a></li>
                    <li><a href="#">사이트맵</a></li>
                    </ul>
                    <a class="m_gnb_ico"></a>
            </div>
            <div id="site_menu">
                    <h2>
                            <a class="m_menu_ico"><span  class="blind">사이트메뉴</span></a>
                    </h2>
                    <!--해당메뉴 li class에 selected 추가-->
                    <div class="menu_lst_wrap">
                            <ul class="site_menu_lst">
                                    <li class="menu1">
                                                                <a href="#" class="sp_com site_menu1">Introduction 클럽소개</a>
                                                                <ul class="site_sub_menu">
                                                                <li><a href="#" class="sp_com site_menu1_1">클럽소개</a></li>
                                                                <li><a href="#" class="sp_com site_menu1_2">연혁</a></li>
                                                                <li><a href="#" class="sp_com site_menu1_3">이용안내</a></li>
                                                                <li><a href="#" class="sp_com site_menu1_4">관계사 소개</a></li>
                                                                <li><a href="#" class="sp_com site_menu1_5">오시는 길</a></li>
                                                                <li><a href="#" class="sp_com site_menu1_6">CONTACT US</a></li>
                                                                </ul>
                                    </li>
                                    <li class="menu2">
                                                                <a href="#" class="sp_com site_menu2">RESERVATION 예약정보</a>
                                                                <ul class="site_sub_menu">
                                                                <li><a href="#" class="sp_com site_menu2_1">예약관리</a></li>
                                                                <li><a href="#" class="sp_com site_menu2_2">조인관리</a></li>
                                                                <li><a href="#" class="sp_com site_menu2_3">이용내역</a></li>
                                                                <li><a href="#" class="sp_com site_menu2_4">위약정보</a></li>
                                                                </ul>
                                 </li>
                                 <li class="menu3">
                                                                <a href="#" class="sp_com site_menu3">COURCE 코스안내</a>
                                                                <ul class="site_sub_menu">
                                                                <li><a href="#" class="sp_com site_menu3_1">코스소개</a></li>
                                                                <li><a href="#" class="sp_com site_menu3_2">서코스</a></li>
                                                                <li><a href="#" class="sp_com site_menu3_3">동코스</a></li>
                                                                <li><a href="#" class="sp_com site_menu3_4">남코스</a></li>
                                                                <li><a href="#" class="sp_com site_menu3_5">코스 갤러리</a></li>
                                                                </ul>
                                 </li>
                                <li class="menu4">
                                                                <a href="#" class="sp_com site_menu4">FACILITIES 시설안내</a>
                                                                <ul class="site_sub_menu">
                                                                <li><a href="#" class="sp_com site_menu4_1">클럽하우스</a></li>
                                                                <li><a href="#" class="sp_com site_menu4_2">특선메뉴</a></li>
                                                                <li><a href="#" class="sp_com site_menu4_3">그늘집</a></li>
                                                                <li><a href="#" class="sp_com site_menu4_4">락커룸</a></li>
                                                                <li><a href="#" class="sp_com site_menu4_5">프로샵</a></li>
                                                                </ul>
                                    </li>
                                    <li class="menu5">
                                                                <a href="#" class="sp_com site_menu5">COMMUNITY 커뮤니티</a>
                                                                <ul class="site_sub_menu">
                                                                <li><a href="#" class="sp_com site_menu5_1">공지사항</a></li>
                                                                <li><a href="#" class="sp_com site_menu5_2">자료실</a></li>
                                                                <li><a href="#" class="sp_com site_menu5_3">Joinroom</a></li>
                                                                </ul>
                                    </li>
                            </ul>
                        <div class="close_box close_box2">
                                <a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
                        </div>
                    </div>
            </div>
    </div>
    <!-- //header -->
    <hr>
    <!-- container -->
    <div id="container">
            <div id="content">
                    <div class="sub_con">
                            <div class="left_con">
                                    <h2 class="sp_sub lnb_title">회원서비스</h2>
                                    <ul class="lnb">
                                    <li><a href="#">로그인<span class="sp_sub select_ico"></span></a></li>
                                    <li><a href="#" class="selected_hard">회원가입<span class="sp_sub select_ico"></span></a></li>
                                    <li><a href="#">아이디/비밀번호찾기<span class="sp_sub select_ico"></span></a></li>
                                    <li><a href="#">회원정보 수정<span class="sp_sub select_ico"></span></a></li>
                                    <li><a href="#">개인정보 취급방침<span class="sp_sub select_ico"></span></a></li>
                                    </ul> 
                            </div>		
                            <div class="right_con">	
                                    <p class="pg_nav">	
                                            <a href="#">홈</a>
                                            <span>&gt;</span>
                                            <a href="#">회원서비스</a>						
                                            <span>&gt;</span>
                                            <strong>회원가입</strong>
                                    </p>
                                    <div class="join_wrap">	
                                            <h2 class="sp_sub join_title">회원가입</h2>
                                            <p class="join_txt">다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</p>
                                            <ol class="join_step">
                                            <li>약관동의</li>
                                            <li>본인인증<span class="sp_sub ico_arr"></span></li>
                                            <li class="selected">회원정보입력<span class="sp_sub ico_arr"></span></li>
                                            <li>가입완료<span class="sp_sub ico_arr"></span></li>
                                            </ol>
                                    </div>
                                    <div class="article_box">
                                            <div class="art_tit_wrap">
                                                    <h3 class="article_tit">상세정보 입력</h3>
                                                    <p class="tip"><em>*</em>표시는 필수입력 항목입니다.</p>
                                            </div>					
                                            <form action="join.php" method="post" id="frmJoin" name="frmJoin" onsubmit="return validForm()">
                                                        <div class="enter_area">
                                                            <fieldset>
                                                                <table class="enter_form">
                                                                <caption><span>회원정보 입력</span></caption>	
                                                                <tr>
                                                                    <th><span>한글이름</span><em>*</em></th>
                                                                    <td><input type="text" id="ko_name" name="korName" class="inptxt"></td>
                                                                </tr>	
                                                                <tr>
                                                                    <th><span>영문이름</span></th>
                                                                    <td><input type="text" id="eg_name" name="engName" class="inptxt"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>생년월일</span><em>*</em></th>
                                                                    <td>
                                                                            <div id="wrapDate">
                                                                                <div class="date">
                                                                                    <select class='selectbox selYear' id="birthYear" name="birthYear">
                                                                                        <option value=""></option>
                                                                                    </select>
                                                                                </div>
                                                                                    <span class="year_txt">년</span>
                                                                                <div class="date">
                                                                                    <select class='selectbox selMonth' id="birthMonth" name="birthMonth">
                                                                                        <option value=""></option>
                                                                                    </select>
                                                                                </div>
                                                                                <span class="year_txt">월</span>

                                                                                <div class="date">
                                                                                    <select class='selectbox selDay' id="birthDay" name="birthDay">
                                                                                        <option value=""></option>
                                                                                    </select>
                                                                                </div>
                                                                                <span class="year_txt">일</span>
                                                                            </div>
                                                                    </td>
                                                            </tr>	
                                                            <tr>
                                                                <th><label for="userid">아이디</label><em>*</em></th>
                                                                <td>
                                                                    <input type="text" onkeyup="vaildID()" id="userid" name="userid" class="inptxt">
                                                                    <a class="btn_img btn_cnfrm" onclick="vaildID()"><span class="btn_img">중복확인</span></a>
                                                                    <span class="tip2">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span>
                                                                </td>
                                                           </tr>
                                                            <tr class="vaildHidden" id="idVaild">
                                                                <td></td>
                                                                <td><span class="txtVaild">vaildID</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th><label for="password">비밀번호</label><em>*</em></th>
                                                                <td>
                                                                    <input type="password" id="password" name="password" class="inptxt">
                                                                    <span class="tip2">영문 소문자, 숫자 포함 4자리 이상 10자리 이하입니다.</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><label for="password_confirm">비밀번호 확인</label><em>*</em></th>
                                                                <td>
                                                                    <input type="password" id="password_confirm" name="confirm_password" class="inptxt">
                                                                    <span class="tip2">비밀번호를 한번 더 입력하세요.</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><span>전화번호</span></th>
                                                                <td>
                                                                    <div class="wrapPhone">
                                                                        <div id="tel_g">
                                                                            <select class="tel" id="tel_g" name="phoneGroup">
                                                                                        <option value=""></option>
                                                                                        <option value="02">02</option>
                                                                                        <option value="031">031</option>
                                                                                        <option value="032">032</option>
                                                                                        <option value="033">033</option>
                                                                                        <option value="041">041</option>
                                                                                        <option value="042">042</option>
                                                                                        <option value="043">043</option>
                                                                                        <option value="044">044</option>
                                                                                        <option value="051">051</option>
                                                                                        <option value="052">052</option>
                                                                                        <option value="053">053</option>
                                                                                        <option value="054">054</option>
                                                                                        <option value="055">055</option>
                                                                                        <option value="061">061</option>
                                                                                        <option value="062">062</option>
                                                                                        <option value="063">063</option>
                                                                                        <option value="064">064</option>
                                                                               </select>
                                                                        </div>
                                                                        <div id="tel_me">
                                                                            <span class="hyphen">-</span>
                                                                            <input type="text" id="tel_m" name="phoneSecond" maxlength="4" title="전화번호 중간 번호 입력" class="inptxt w41">		
                                                                            <span class="hyphen">-</span>
                                                                            <input type="text" id="tel_e" name="phoneThird" maxlength="4" title="전화번호 마지막 번호 입력" class="inptxt w41">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                    <th><span>휴대폰번호</span><em>*</em></th>
                                                                    <td>
                                                                        <div class="wrapPhone">
                                                                            <div id="cell_g">
                                                                                <select class="cell" id ="cell_g" name="cellphoneGroup">
                                                                                        <option value=""></option>
                                                                                        <option value="010">010</option>
                                                                                        <option value="011">011</option>
                                                                                        <option value="016">016</option>
                                                                                        <option value="017">017</option>
                                                                                        <option value="018">018</option>
                                                                                        <option value="019">019</option>
                                                                                 </select>
                                                                           </div>
                                                                            <div id="cell_me">
                                                                                <span class="hyphen">-</span>
                                                                                <input type="text" id="cell_m" name="cellphoneSecond" maxlength="4" title="핸드폰 번호 중간 번호 입력" class="inptxt w41">		
                                                                                <span class="hyphen">-</span>
                                                                                <input type="text" id="cell_e" name="cellphoneThird" maxlength="4" title="핸드폰 번호 마지막 번호 입력" class="inptxt w41">
                                                                            </div>
                                                                        </div>
                                                                        <span class="tip2">예약시 휴대폰으로 문자가 발송됩니다.</span>
                                                                    </td>
                                                                </tr>				
                                                                <tr>
                                                                    <th><span>SMS 수신여부</span><em>*</em></th>
                                                                    <td>
                                                                        <div class="rdo_wrap">
                                                                            <span class="rdo_btn" onclick="fn_smsclick('Y');">
                                                                            <input type="radio" name="sms" id="agreement_y" checked="checked" value="">
                                                                            <span class="rdo_on" id="agree_fake_y"></span>
                                                                            </span>
                                                                            <label for="agreement_y">예</label>
                                                                            <span class="rdo_btn" onclick="fn_smsclick('N');">
                                                                            <input type="radio" name="sms" id="agreement_n" value="">
                                                                            <span class="rdo_off" id="agree_fake_n"></span>
                                                                            </span>
                                                                            <label for="agreement_n">아니오</label>
                                                                        </div>
                                                                        <span class="tip2">회원공지 알람에 대한 수신여부입니다.</span>
                                                                    </td>
                                                                </tr>			
                                                                <tr>
                                                                    <th><label for="email">E-MAIL</label></th>
                                                                    <td>
                                                                        <input type="email" id="email" name="email" onkeyup="vaildEmail()" class="inptxt">
                                                                    </td>
                                                                </tr>
                                                                <tr class="vaildHidden" id="emailVaild">
                                                                    <td></td>
                                                                    <td><span class="txtMailVaild">vaildEmail</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>자택 우편번호</span><em>*</em></th>
                                                                    <td>
                                                                        <input type="text" onclick="execDaumPostcode()" id="h_postcode" name="h_postcode" readonly class="inptxt w40" >
                                                                        <a onclick="execDaumPostcode()" class="btn_img btn_cnfrm"><span class="btn_img">우편번호 찾기</span></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><label for="home_addr1">자택주소</label><em>*</em></th>
                                                                    <td>
                                                                        <p><input type="text" id="home_addr1" name="home_addr1" readonly class="inptxt w416"></p>						
                                                                        <p><input type="text" id="home_addr2" name="home_addr2" title="자택 상세주소" class="inptxt w416 gap"></p>
                                                                    </td>
                                                                </tr>			
                                                                <tr>
                                                                    <th><span>DM발송처</span><em>*</em></th>
                                                                    <td>
                                                                        <div class="rdo_wrap">
                                                                            <span class="rdo_btn" onclick="fn_dmclick('H');">
                                                                            <input type="radio" name="dm" id="dm_house" checked="checked" value="">
                                                                            <span class="rdo_on" id="dm_fake_house"></span>
                                                                            </span>
                                                                            <label for="dm_house">자택</label>
                                                                            <span class="rdo_btn" onclick="fn_dmclick('O');">
                                                                            <input type="radio" name="dm" id="dm_office" value="">
                                                                            <span class="rdo_off" id="dm_fake_office"></span>
                                                                            </span>
                                                                            <label for="dm_office">직장</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>										
                                                                </table>
                                                            </fieldset>	
                                                            </div>					
                                                            <div class="enter_area">
                                                            <fieldset>
                                                                <table class="enter_form">
                                                                <tr>
                                                                    <th><label for="office_name">직장명</label><em>*</em></th>
                                                                    <td><input type="text" id="office_name" name="office_name" class="inptxt"></td>
                                                                </tr>			
                                                                <tr>
                                                                    <th><label for="job_category">직종</label></th>
                                                                    <td><input type="text" id="job_category" name="job_category" class="inptxt"></td>
                                                                </tr>			
                                                                <tr>
                                                                    <th><label for="position">직위</label><em>*</em></th>
                                                                    <td><input type="text" id="position" name="position" class="inptxt"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>직장 우편번호</span><em>*</em></th>
                                                                    <td>
                                                                        <input type="text" onclick="execDaumPostcode_W()" id="o_postcode" name="o_postcode" readonly class="inptxt w40">
                                                                        <a onclick="execDaumPostcode_W()" class="btn_img btn_cnfrm"><span class="btn_img">우편번호 찾기</span></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><label for="office_addr1">직장주소</label><em>*</em></th>
                                                                    <td>
                                                                        <p><input type="text" id="office_addr1" name="office_addr1" readonly class="inptxt w416"></p>						
                                                                        <p><input type="text" id="office_addr2" name="office_addr2" title="직장 상세주소" class="inptxt w416 gap"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>직장전화번호</span></th>
                                                                    <td>
                                                                        <div class="wrapPhone">
                                                                            <div id="office_g">
                                                                                <select class="tel" name="o_phoneGroup" id="office_g">
                                                                                        <option value=""></option>
                                                                                        <option value="02">02</option>
                                                                                        <option value="031">031</option>
                                                                                        <option value="032">032</option>
                                                                                        <option value="033">033</option>
                                                                                        <option value="041">041</option>
                                                                                        <option value="042">042</option>
                                                                                        <option value="043">043</option>
                                                                                        <option value="044">044</option>
                                                                                        <option value="051">051</option>
                                                                                        <option value="052">052</option>
                                                                                        <option value="053">053</option>
                                                                                        <option value="054">054</option>
                                                                                        <option value="055">055</option>
                                                                                        <option value="061">061</option>
                                                                                        <option value="062">062</option>
                                                                                        <option value="063">063</option>
                                                                                        <option value="064">064</option>
                                                                                    </select>
                                                                            </div>
                                                                            <div id="office_me">
                                                                                <span class="hyphen">-</span>
                                                                                <input type="text" id="office_m" name="o_phoneSecond" maxlength="4" title="직장 전화번호 중간 번호 입력" class="inptxt w41">		
                                                                                <span class="hyphen">-</span>
                                                                                <input type="text" id="office_e" name="o_phoneThird" maxlength="4" title="직장 전화번호 마지막 번호 입력" class="inptxt w41">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>팩스번호</span></th>
                                                                    <td>
                                                                        <div class="wrapPhone">
                                                                            <div id="fax_g">
                                                                                <select class="tel" name="faxGroup">
                                                                                        <option value=""></option>
                                                                                        <option value="02">02</option>
                                                                                        <option value="031">031</option>
                                                                                        <option value="032">032</option>
                                                                                        <option value="033">033</option>
                                                                                        <option value="041">041</option>
                                                                                        <option value="042">042</option>
                                                                                        <option value="043">043</option>
                                                                                        <option value="044">044</option>
                                                                                        <option value="051">051</option>
                                                                                        <option value="052">052</option>
                                                                                        <option value="053">053</option>
                                                                                        <option value="054">054</option>
                                                                                        <option value="055">055</option>
                                                                                        <option value="061">061</option>
                                                                                        <option value="062">062</option>
                                                                                        <option value="063">063</option>
                                                                                        <option value="064">064</option>
                                                                                </select>
                                                                        </div>
                                                                        <div id="fax_me">
                                                                            <span class="hyphen">-</span>
                                                                            <input type="text" name="faxSecond" id="fax_m" maxlength="4" title="직장 전화번호 중간 번호 입력" class="inptxt w41">		
                                                                            <span class="hyphen">-</span>
                                                                            <input type="text" name="faxThird" id="fax_e" maxlength="4" title="직장 전화번호 마지막 번호 입력" class="inptxt w41">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>			
                                                            <tr>
                                                                <th><span>결혼여부</span></th>
                                                                <td>
                                                                    <div class="rdo_wrap">
                                                                        <span class="rdo_btn" onclick="fn_marryclick('N');">
                                                                        <input type="radio" name="marry" id="marry_n" checked="checked" value="0">
                                                                        <span class="rdo_on" id="marry_fake_n"></span>
                                                                        </span>
                                                                        <label for="marry_n">미혼</label>
                                                                        <span class="rdo_btn" onclick="fn_marryclick('Y');">
                                                                        <input type="radio" name="marry" id="marry_y" value="1">
                                                                        <span class="rdo_off" id="marry_fake_y"></span>
                                                                        </span>
                                                                        <label for="marry_y">기혼</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><span>결혼기념일</span></th>
                                                                <td>
                                                                    <div id="wrapDate">
                                                                        <div class="date">
                                                                            <select class='selectbox selYear' name="marryYear">
                                                                                <option value=""></option>
                                                                            </select>
                                                                        </div>
                                                                            <span class="year_txt">년</span>
                                                                        <div class="date">
                                                                            <select class='selectbox selMonth' name="marryMonth">
                                                                                <option value=""></option>
                                                                            </select>
                                                                        </div>
                                                                        <span class="year_txt">월</span>

                                                                        <div class="date">
                                                                            <select class='selectbox selDay' name="marryDay">
                                                                                <option value=""></option>
                                                                            </select>
                                                                        </div>
                                                                        <span class="year_txt">일</span>
                                                                    </div>
                                                                </td>
                                                            </tr>										
                                                            </table>
                                                        </fieldset>	
                                                        </div>
                                                        <div class="btn_wrap">
                                                            <a href="#" class="sp_sub btn_cancle">취소</a>
                                                            <button type="submit" class="sp_sub btn_next" value="다음">
                                                        </div>
                                                     </form>
                                                </div>
                                            </div>
                                        </div>                     
                            </div>
                    </div>
<!-- //container -->
                    <hr>

<!-- footer -->
                   <div id="footer">		
                           <div class="f_inner">
                                   <p class="policy_sub">
                                           <a href="#">회칙 및 이용약관</a>
                                           <a href="#">개인정보 취급방침</a>
                                           <a href="#">인트라넷</a>
                                   </p>
                                   <div class="site_info">
                                           <p class="none_style">(주)금강레저 대표자:조종호</p>
                                           <p>경기도 여주군 가남면 본두리 1-2</p>
                                           <p>대표전화: 031-880-6000</p>
                                           <p>대표전화: 031-884-5155</p><br>
                                           <p class="none_style">사업자등록번호: 126-81-07997</p>
                                           <p>통신판매법 신고 : 2009-경기여주-0058</p>
                                           <p>개인정보관리책임자 : 윤두한 031-880-6000</p>
                                           <p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
                                   </div>
                                   <address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
                           </div>	
                   </div>
<!-- //footer -->
            </div>
    </body>
</html>