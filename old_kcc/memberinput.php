<?php
$irum=$_POST['irum'];
$nicname=$_POST['nicname'];
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$jender=$_POST['jender'];
$yy=$_POST['yy'];
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$regdate=date('Y-m-d');
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_query("set names euckr");
mysql_select_db("nonoz",$connect);
$inrec="insert into member(irum,nicname,id,pwd,jender,yy,mm,dd,email,phonenumber,rank,boardcount,count,regdate) values('$irum','$nicname','$id','$pwd','$jender','$yy','$mm','$dd','$email','$phonenumber','E',0,0,'$regdate')";
$info=mysql_query($inrec,$connect);
if(!$info)
{
	echo "<script>alert('회원가입실패');location.href='join.html';</script>";	
}
else
{
	echo "<script>alert('회원가입성공');location.href='index.html';</script>";
}
mysql_close($connect);
?>