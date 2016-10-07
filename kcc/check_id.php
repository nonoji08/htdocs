<?
$id = $_REQUEST['id'];     // 위의 check_id() 함수 안에서 var ul = url+"?id="+id; 선언했다
 $result = mysql_query("SELECT id FROM kcc_member WHERE id = '$id'");
 $num = mysql_num_rows($result);
 
 if($num < 1){
    echo("사용 가능한 아이디입니다");
 }else{
    echo("사용중인 아이디입니다 다른아이디를 입력해주세요");
 }
?>