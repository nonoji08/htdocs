
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/kcc.css">
    <meta charset="UTF-8">
   <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript" src="js/register.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
                <script>
                    function sample6_execDaumPostcode() {
                        new daum.Postcode({
                            oncomplete: function(data) {
                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
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
                                document.getElementById('epost').value = data.zonecode; //5자리 새우편번호 사용
                                document.getElementById('address').value = fullAddr;

                                // 커서를 상세주소 필드로 이동한다.
                                document.getElementById('address_etc').focus();
                            }
                        }).open();
                    }
                </script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
                <script>
                    function hslee22() {
                        new daum.Postcode({
                            oncomplete: function(data) {
                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
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
                                document.getElementById('company_epost').value = data.zonecode; //5자리 새우편번호 사용
                                document.getElementById('company_address').value = fullAddr;

                                // 커서를 상세주소 필드로 이동한다.
                                document.getElementById('company_address_etc').focus();
                            }
                        }).open();
                    }
                </script>
    <title>20513 이민환</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div class="log">
                <ul id="wel">
                    <li>justhwoo님 환영합니다</li>
                    <li>|</li>
                    <li>회원정보수정</li>
                    <li>|</li>
                    <li>채팅룸</li>
                    <li>|</li>
                    <li>로그아웃</li>
                    <li>|</li>
                    <li>사이트맵</li>
                </ul>
                <div id="line"></div>
                <div><a href="../index.php"><img id="img" src="img/kcclogo.png" alt="logo">
                <img id="logo" src="img/Untitled-1.png" alt="logo"></a></div>
                <div class="intro">
                <ul>
                    <li><a href="#">INTRODUCTION<br/>클럽소개</a></li>
                    <li><a href="#">RESERVATION<br/>예약하기</a></li>
                    <li><a href="#">COURSE<br/>코스안내</a></li>
                    <li><a href="#">FACILITIES<br/>시설안내</a></li>
                    <li><a href="#">COMMUNITY<br/>커뮤니티</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div id="article">
            <div id="survise">
                <h2>회원서비스</h2>
                <nav>
                    <ul>
                        <li>로그인</li>
                        <li>회원가입 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ></li>
                        <li>아이디/비밀번호찾기</li>
                        <li>회원정보 수정</li>
                        <li>개인정보 취급방침</li>
                    </ul>
                </nav>
            </div>
            <div id="joinbox">
            <div id="join">
            <h4>홈 &nbsp; >&nbsp; 회원서비스&nbsp; > &nbsp;회원가입 <br/> &nbsp;</h4>
            <h1>회원가입</h1>
            <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
            <ul>
                <li>약관동의</li>
                <li>></li>
                <li>본인인증</li>
                <li>></li>
                <li>회원정보입력</li>
                <li>></li>
                <li>가입완료</li>
            </ul>
            </div>
            <form method="post" action="kcc_check.php" class="form">
            <div id="in">
                <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
            </div>
            <div id="put">

             <table class="table">
                    <tr>
                        <td>한글이름&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="korname" required></td>
                    </tr>
                    <tr>
                        <td>영문이름</td>
                        <td><input type="text" name="enname" style="margin-left:12px;" required></td>
                    </tr>
                    <tr>
                        <td>생년월일&nbsp;<span class="star">*</span></td>
                          <td>
                           <?php
                            echo "<select name='year'>\n"; 

                             for ($i=1900; $i<=2016; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>
                            </td>
                        <td>
                            <?php
                            echo "<select name='month'>\n"; 

                             for ($i=1; $i<=12; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>
                            &nbsp;월</td>
                        <td><?php
                            echo "<select name='day'>\n"; 

                             for ($i=1; $i<=31; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>&nbsp;일
                        </td>
                    </tr>
                    <tr>
                        <td>아이디&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="id" id="id" style="margin-left:16px;" required></td>
                        <td><input type="button" value="중복확인"></td>
                        <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호&nbsp;<span class="star">*</span></td>
                        <td><input type="password" name="pw" id="pw" required></td>
                        <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                        <td><input type="password" style="margin-left:-37px;" required></td>
                        <td><span class="ex">&nbsp; 비밀번호를 한번 더 입력하세요</span></td>
                    </tr>
                    <tr>
                        <td id="call">전화번호</td>
                        <td><select name="phone_G">
                            <option value="02">02</option>
                            <option value="031">031</option>
                            <option value="032">032</option>
                            <option value="033">033</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="phone_F" maxlength="4">&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="phone_S" maxlength="4"></td>
                        <td><span class="ex">&nbsp; 예약시 휴대폰으로 문자가 발송됩니다.</span></td>
                    </tr>
                    <tr>
                        <td id="cellphone">휴대폰번호&nbsp;<span class="star">*</span></td>
                         <td><select name="cellphone_G">
                            <option value="010">010</option>
                            <option value="011">011</option>
                            <option value="016">016</option>
                            <option value="017">017</option>
                            <option value="018">018</option>
                            <option value="019">019</option>
                        </select>&nbsp;-</td>
                         <td><input type="text" style="width:60px;" name="cellphone_F" maxlength="4" required>&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="cellphone_S" maxlength="4" required></td>
                    </tr>
                    <tr>
                        <td id="sms">SMS 수신여부&nbsp;<span class="star">*</span></td>
                        <td><input type="radio" name="sms" value="y" checked="checked"><span class="ex">&nbsp;예</span></td>
                        <td><input type="radio" name="sms" value="n"><span class="ex">&nbsp;아니오</span></td>
                        <td><span class="ex">회원공지 알림에 대한 수신여부입니다.</span></td>
                    <tr>
                    <td>E-MAIL</td>
                    <td><input type="text" name="email" style="margin-left:26px;"></td>
                    </tr>            
                    <tr>
                        <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                 <!--
                    <tr>
                        <td>자택주소&nbsp;<span class="star">*</span></td>
                        <td><input type="text" style="width:300px;" name="address"></td>
                        <td><br/><input name="address_etc" type="text" style="width:300px; margin-left:131px;"></td>
                    </tr>-->
                        <td><input type="text" style="width:70px;margin-left:-40px;" id="epost" name="epost" placeholder="우편번호" readonly required>
                        <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기"></td>
                 </tr><tr>
                 <td><input type="text" id="address" name="address" style="width:300px;" placeholder="주소" readonly required>
                 <input type="text" id="address_etc" style="width:300px; margin-left:10px;" name="address_etc" placeholder="상세주소"></td>
                 </tr>
                    <tr>
                        <td>DM발송처<span class="star">*</span></td>
                        <td><input type="radio" name="dm" value="home" checked="checked"></td>
                        <td><span class="ex">자택</span></td>
                        <td><input type="radio" name="dm" value="company"></td>
                        <td><span class="ex">직장</span></td>
                    </tr>
                </table>
                <div id="line2"></div>
                <div id="put2">
                    <table class="table2">
                        <tr>
                            <td>직장명&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="company_name" style="margin-left:14px;" required></td>
                        </tr>
                        <tr>
                            <td>직종</td>
                            <td><input type="text" name="job" style="margin-left:42px;"></td>
                        </tr>
                        <tr>
                            <td>직위&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="position" style="margin-left:30px;" required></td>
                        </tr>
                        <tr>
                            <td id="workpost">직장 우편번호<span class="star">*</span></td>
                            <td><input type="text" id="company_epost" name="company_epost" style="width:70px;" readonly required>&nbsp;-</td>
                            <td><input type="button" onclick="hslee22()" value="우편번호 찾기"></td>
                        </tr>
                        <tr>
                            <td>직장주소<span class="star">*</span></td>
                            <td><input type="text" id="company_address" name="company_address" style="width:300px; margin-left:4px;" placeholder="주소" readonly required></td>
                            <td><br/><input type="text" id="company_address_etc" name="company_address_etc" style="width:300px; margin-left:129px;" placeholder="상세주소"></td>
                        </tr>
                        <tr>
                            <td id="number">직장전화번호<span class="star">*</span></td>
                            <td><select name="company_phone_G">
                            <option value="010">010</option>
                            <option value="011">011</option>
                            <option value="016">016</option>
                            <option value="017">017</option>
                            <option value="018">018</option>
                            <option value="019">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" name="company_phone_F" style="width:60px;" maxlength="4" required>&nbsp;-</td>
                        <td><input type="text" name="company_phone_S" style="width:60px;" maxlength="4" required></td>
                        </tr>
                        <td id="fax">팩스번호</td>
                            <td><select name="fax_G">
                            <option value="010">010</option>
                            <option value="011">011</option>
                            <option value="016">016</option>
                            <option value="017">017</option>
                            <option value="018">018</option>
                            <option value="019">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" name="fax_F" style="width:60px;" required>&nbsp;-</td>
                        <td><input type="text" name="fax_S" style="width:60px;" required></td>
                        <tr>
                            <td id="marry">결혼여부</td>
                            <td><input type="radio" name="marry" value="미혼" checked="checked"></td>
                            <td><span class="ex" >미혼</span></td>
                            <td><input type="radio" name="marry" value="기혼"></td>
                            <td><span class="ex">기혼</span></td>
                        </tr>
                        <tr>
                            <td id="mdate">결혼기념일</td>
                        <td><?php
                            echo "<select name='marry_year'>\n"; 

                             for ($i=1900; $i<=2016; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>&nbsp;년</td>
                        <td><?php
                            echo "<select name='marry_month'>\n"; 

                             for ($i=1; $i<=12; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>&nbsp;월</td>
                        <td><?php
                            echo "<select name='marry_day'>\n"; 

                             for ($i=1; $i<=31; $i++) { 
                                echo "<option value='$i'>$i</option>\n"; 
                             } 
                             echo "</select>\n";
                            ?>&nbsp;일
                        </td>
                        </tr>
                    </table>
                </div>
                <div id="line3"></div>
                <div id="btn">
                   <a href="#" id="back">취소</a>
                   <input type="submit" id="next" value="다음">
                </div>
            </div>
            </form>
        </div>
        <div id="footer">
            <div class="footer_line"></div>
            <div class="footer_p">
            <h4>회칙 및 이용약관 &nbsp; &nbsp; &nbsp; &nbsp; 개인정보 취급방침 &nbsp; &nbsp; &nbsp; &nbsp; 인트라넷</h4>    
            <h5>(주)금강레져 대표자:조종호&nbsp; <span class="W">|</span>&nbsp; 경기도 여주군 가남면 본두리 1-2&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-880-6000&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-884-5155</h5>
            <h5>사업자등록번호: 126-81-0997&nbsp; <span class="W">|</span>&nbsp; 통신판매법 신고 : 2009-경기여주-0058&nbsp; <span class="W">|</span>&nbsp; 개인정보관리책임자 : 윤두환 031-880-6000 <input type="button" value="사업자 정보확인 ▶"></h5>
            <h5>Copyright (c) Kumkang leisure Ltd. All rights reserved</h5>
            </div>
        </div>
        </div>
    </div>
</body>
</html>