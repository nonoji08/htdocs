<?php
include 'dbCon.php';
/* 정규식 적용 함수 */
function cellFormat($g,$s,$t) {
    $cellPattern = "/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/"; //핸드폰번호 정규식
    return preg_replace($cellPattern,"$1-$2-$3", $g.$s.$t);
}
function phoneFormat($g,$s,$t) {
    $phonePattern = "/^(\d{2,3})(\d{3,4})(\d{4})$/"; //전화번호 정규식
    return preg_replace($phonePattern,"$1-$2-$3", $g.$s.$t);
}
function dateFormat($y,$m,$d) {
    $zero = "0";
    $datePattern = "/([0-9]{4})([0-9]{2})([0-9]{2})/"; //날짜 정규식
    if ($m<=9)
       $m = $zero . $m;
    if ($d<=9)
       $d = $zero . $d;
       
    return preg_replace($datePattern,"$1-$2-$3", $y.$m.$d); 
 } 
$korName = $_POST['korName'];
$engName = $_POST['engName'];
$birthYear = $_POST['birthYear'];
$birthMonth = $_POST['birthMonth'];
$birthDay = $_POST['birthDay'];
$id = $_POST['userid'];
$password = $_POST['password'];
$chkPassword = $_POST['confirm_password'];
$phoneGroup = $_POST['phoneGroup'];
$phoneSecond = $_POST['phoneSecond'];
$phoneThird = $_POST['phoneThird'];
$cellphoneGroup = $_POST['cellphoneGroup'];
$cellphoneSecond = $_POST['cellphoneSecond'];
$cellphoneThird = $_POST['cellphoneThird'];
$sms = $_POST['sms'];
$email = $_POST['email'];
$h_postcode = $_POST['h_postcode'];
$h_address = $_POST['home_addr1'];
$h_address2 = $_POST['home_addr2'];
$dm = $_POST['dm'];
$o_Name = $_POST['office_name'];
$o_jobFamily = $_POST['job_category'];
$o_jobPosition = $_POST['position'];
$o_postcode = $_POST['o_postcode'];
$o_address = $_POST['office_addr1'];
$o_address2 = $_POST['office_addr2'];
$o_phoneGroup = $_POST['o_phoneGroup'];
$o_phoneSecond = $_POST['o_phoneSecond'];
$o_phoneThird = $_POST['o_phoneThird'];
$faxGroup = $_POST['faxGroup'];
$faxSecond = $_POST['faxSecond'];
$faxThird = $_POST['faxThird'];
$marry = $_POST['marry'];
$marryYear = $_POST['marryYear'];
$marryMonth = $_POST['marryMonth'];
$marryDay = $_POST['marryDay'];

/* 전화번호 정규식 적용 */
$r_Phone = phoneFormat($phoneGroup,$phoneSecond,$phoneThird); //일반번호
$r_Cell = cellFormat($cellphoneGroup,$cellphoneSecond,$cellphoneThird); //핸드폰번호
$r_oPhone = phoneFormat($o_phoneGroup,$o_phoneSecond,$o_phoneThird); //회사번호
$r_Fax = phoneFormat($faxGroup,$faxSecond,$faxThird); //팩스번호
$r_Birth = dateFormat($birthYear,$birthMonth,$birthDay);
$r_Marry = dateFormat($marryYear,$marryMonth,$marryDay);
$r_homeAddr = $h_address.$h_address2;
$r_officeAddr = $o_address.$o_address2;

$sql = "insert into member (kName, eName, birth, id, pw, phone, cellphone, sms, email, housePostcode, houseAddress, DM, officeName, jobFamily, jobPosition, officePostcode, officeAddress, officePhone, faxNumber, chkMarry, weddingDay)"
        . " values (:kName, :eName, :birth, :id, :pw, :phone, :cellphone, :sms, :email, :housePostcode, :houseAddress, :DM, :officeName, :jobFamily, :jobPosition, :officePostcode, :officeAddress, :officePhone, :faxNumber, :chkMarry, :weddingDay)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':kName', $korName);
$stmt->bindValue(':eName', $engName);
$stmt->bindValue(':birth', $r_Birth);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':pw', $password);
$stmt->bindValue(':phone', $r_Phone);
$stmt->bindValue(':cellphone', $r_Cell);
$stmt->bindValue(':sms', $sms);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':housePostcode', $h_postcode);
$stmt->bindValue(':houseAddress', $r_homeAddr);
$stmt->bindValue(':DM', $dm);
$stmt->bindValue(':officeName', $o_Name);
$stmt->bindValue(':jobFamily', $o_jobFamily);
$stmt->bindValue(':jobPosition', $o_jobPosition);
$stmt->bindValue(':officePostcode', $o_postcode);
$stmt->bindValue(':officeAddress', $r_officeAddr);
$stmt->bindValue(':officePhone', $r_oPhone);
$stmt->bindValue(':faxNumber', $r_Fax);
$stmt->bindValue(':chkMarry', $marry);
$stmt->bindValue(':weddingDay', $r_Marry);

$stmt->execute();

echo "<meta http-equiv='refresh' content='0; url=sub3.php' >";
?>