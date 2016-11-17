<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<script type="text/javascript" src="js/jquery/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/main_common.js"></script>
<script type="text/javascript" src="js/jquery/flexslider/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="js/jquery/flexslider/flexslider.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function() {
	$('.banner').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		slideshow: true,
		slideshowSpeed: 3000,
		animationLoop: true
	  });
});
</script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#gnb" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>

<!-- //skip nav -->
<div id="wrap" class="main">
	<!-- header -->	
    <div id="header">	
            <h1 class="logo">
                <a href="index.php" class="sp_com kcc">
                    <strong class="blind">KCC 금강컨트리클럽</strong>
                </a>
            </h1>			
            <div id="site_gnb">	
                <ul class="gnb_menu">
                <li><a href="#">로그인</a></li>
                <li><a href="sub3.php">회원가입</a></li>
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
                                        <li><a href="board.php" class="sp_com site_menu5_1">공지사항</a></li>
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
			<div class="sp_bg spot_wth">
				<h2 class="blind">날씨온도 정보</h2>
				<ol class="wth_list">
				<li class="today">						
					<strong class="w_tit">오늘</strong>
					<strong class="w_tit2">02. 14 FRI</strong>
					<img src="img/img_wth.png" width="90" height="70" alt="구름많음" class="w_img">
					<div class="tmpr_info">
						<span class="now_tmpr">23</span>
						<span class="tmpr_ico">℃</span>
					</div>
					<p class="tmpr_info2">
					<span>최고 25℃</span>
					<span>최저 14℃</span>
					<span>강수확률 0%</span>
					</p>
				</li>
				<li class="tomorrow">
					<strong class="w_tit">내일</strong>
					<img src="img/img_wth2.png" width="60" height="45" alt="맑음" class="w_img">
				</li>
				<li class="after_tmr">
					<strong class="w_tit">모레</strong>
					<img src="img/img_wth3.png" width="60" height="45" alt="구름많음" class="w_img">
				</li>
				</ol>
				<a href="#" class="week_wth">주간 날씨보기<span class="sp_main ico"></span></a>
			</div>
			<ul class="spot_link">
			<li>
				<a href="#" class="sp_main reserv">RESERVATION<span class="blind">온라인 예약하기</span></a>
			</li>	
			<li>
				<a href="#" class="sp_main webcam">WEBCAM<span class="blind">현재 필드상태를 보여드립니다</span></a>
			</li>
			<li>
				<a href="#" class="sp_main mobileapp">MOBILE APP<span class="blind">모바일에서도 금강CC를 만나세요</span></a>	
			</li>	
			</ul>	
			<div class="notice_area">
				<div class="sp_bg notice">
					<h3 class="sp_main notice_txt">공지사항</h3>
				</div>
				<div class="sp_bg notice_list">
					<table class="notice_list_in">
					<colgroup>
					<col width="163"><col>
					</colgroup>
					<tbody>
                                            <?php 
                                                include "dbCon.php";
                                                $sql = "SELECT * FROM board order by idx DESC LIMIT 0,5";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute();
                                                foreach ($stmt as $row) {
                                                    $idx = $row['idx'];
                                                    $subject = $row['subject'];
                                                    $date = $row['date'];
                                                    $rtn = str_replace("-", ".", substr($date, 2, 8));
                                                    echo "<tr><td class='title'><a href='view.php?idx=$idx'>$subject</a></td><td class='reg_date'>$rtn</td></tr>";
                                                }
                                            ?>
					</tbody>
					</table>					
					<div class="notice_pg">
						<a href="#" class="sp_main btn_pre">이전 공지사항</a>
						<a href="#" class="sp_main btn_next">다음 공지사항</a>
						<a href="#" class="notice_more">+ 더보기</a>
					</div>
				</div>
				<!-- http://flexslider.woothemes.com/ -->
				<div class="banner">
					<ul class="bnn_list slides">
					<li>
						<a href="#"><img src="img/main_banner2.gif" width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner3.jpg"  width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner2.gif"  width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					</ul>
				</div>	
			</div>
			<ul class="link_area">			
			<li>
				<a href="#" class="dirctns"><span class="sp_main dirctns_txt">찾아오는 길</span></a>
			</li>
			<li>
				<a href="#" class="contactus"><span class="sp_main contactus_txt">연락하기</span></a>
			</li>
			<li>
				<a href="#" class="clubhouse"><span class="sp_main clubhouse_txt">CLUB HOUSE</span></a>
			</li>
			<li>
				<a href="#" class="courceinfo"><span class="sp_main courceinfo_txt">코스안내</span></a>
			</li>
			</ul>
			<span class="sp_main bg_ico"></span>
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy">
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
				<p>
					<a href="#" class="licenseInfo sp_main"><span class="blind">사업자 정보확인</span></a>
				</p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>