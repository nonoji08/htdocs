jQuery( function($) {
var re_id = /^[a-z0-9_-]{3,16}$/; // 아이디 검사식
	var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 검사식

var
form = $('.form'),
id = $('#id'), 
pw = $('#pw');

form.submit( function() {
		if (re_id.test(id.val()) != true) { // 아이디 검사
			alert('[ID 입력 오류] 유효한 ID를 입력해 주세요.');
			uid.focus();
			return false;
		} else if(re_pw.test(pw.val()) != true) { // 비밀번호 검사
			alert('[PW 입력 오류] 유효한 PW를 입력해 주세요.');
			upw.focus();
			return false;
		}
	});

$('#id, #pw').after('<strong></strong>');
	

	id.keyup( function() {
		var s = $(this).next('strong'); // strong 요소를 변수에 할당
		if (id.val().length == 0) { // 입력 값이 없을 때
			s.text(''); // strong 요소에 포함된 문자 지움
		} else if (id.val().length < 3) { // 입력 값이 3보다 작을 때
			s.text('너무 짧아요.'); // strong 요소에 문자 출력
		} else if (id.val().length > 16) { // 입력 값이 16보다 클 때
			s.text('너무 길어요.'); // strong 요소에 문자 출력
		} else { // 입력 값이 3 이상 16 이하일 때
			s.text('적당해요.'); // strong 요소에 문자 출력
		}
	});
	

	pw.keyup( function() {
		var s = $(this).next('strong'); // strong 요소를 변수에 할당
		if (pw.val().length == 0) { // 입력 값이 없을 때
			s.text(''); // strong 요소에 포함된 문자 지움
		} else if (pw.val().length < 6) { // 입력 값이 6보다 작을 때
			s.text('너무 짧아요.'); // strong 요소에 문자 출력
		} else if (pw.val().length > 18) { // 입력 값이 18보다 클 때
			s.text('너무 길어요.'); // strong 요소에 문자 출력
		} else { // 입력 값이 6 이상 18 이하일 때
			s.text('적당해요.'); // strong 요소에 문자 출력
		}
	});