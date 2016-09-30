<?php
    $korname=$_POST['korname'];
    $enname=$_POST['enname'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$phone=$_POST['phone'];
$cellphone=$_POST['cellphone'];
$sms=$_POST['sms'];
$email=$_POST['email'];
$epost=$_POST['epost'];
$address=$_POST['address'];
$address_etc=$_POST['address_etc'];
$DM=$_POST['DM'];
$company_name=$_POST['company_name'];
$job=$_POST['job'];
$position=$_POST['position'];
$company_epost=$_POST['company_epost'];
$company_address=$_POST['company_address'];
$company_address_etc=$_POST['company_address_etc'];
$company_phone=$_POST['company_phone'];
$fax=$_POST['fax'];
$marry=$_POST['marry'];

$connect=mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("kcc",$connect);

   $input="insert into kcc_member(korname,enname,year,month,day,id,pw,phone,cellphone,sms,email,epost,address,address_etc,DM,company_name,job,position,company_epost,company_address,company_address_etc,company_phone,fax,marry) values('$korname','$enname','$year','$month','$day','$id','$pw','$phone','$cellphone','$sms','$email','$epost','$address','$address_etc','$DM','$company_name','$job','$position','$company_epost','$company_address','$company_address_etc','$company_phone','$fax','$marry')";
echo "<script>alert('$korname');</script>";
$info=mysql_query($input);
?>