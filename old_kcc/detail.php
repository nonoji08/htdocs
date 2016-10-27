<?php
session_start();
if(isset($_SESSION['id']) and isset($_SESSION['pwd']))
/*{
	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
	exit;
}
else*/
{
	$_SESSION['id'];
	$_SESSION['pwd'];
}

else
{
	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
	exit;
}
?>
<?php
$id=$_GET['id'];
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_select_db("nonoz",$connect);
mysql_query("set names utf8");
$sqlrec="select * from member where id='$id'";
$info=mysql_query($sqlrec,$connect);
if(!$info)
{
	die("쿼리실패");
}
else
{
$data=mysql_fetch_array($info);
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" />
<title>NOhacking - Nononim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />

<style>
a{text-decoration:none}

.submit
{
background-color: white;
}
</style>

</head>


<body bgcolor=#f5f5f5>


<div align="center"><a href="main.php"><img src="사진/1.jpg" width="400" height="250"></a>
</div>


<div align=right>
<form name=loginform method=post>
<table border=0>
<tr><td colspan=2><hr></td></tr>
<tr><td><font color=green>username</td>
<td>
<input type=text name=id style='background:#f5f5f5;color:pink;border:0' maxlength=10 size=10 readonly value=<?php echo "{$_SESSION['id']}"; ?>>


</td>
</tr>
<tr><td colspan=2 align=center>

[<a href="#" onclick="location.href='detail.php?id=<?php echo $_SESSION['id'] ?>';">회원정보</a>]
[<a href="#" onclick="location.href='authlogin.php?logout=yes';">로그아웃</a>]&nbsp;&nbsp;&nbsp;
</td></tr>

<tr><td colspan=2><hr></td></tr>
</table>
</form>
</div>

<br>

<hr style=color:gray;height:20;background:gray>


<tr>
<td colspan=3>

<center>
<br><font color=green>
<b>-= information =-<br><br>

<form>

<h2> <?=$data['id']?> 회원님의 정보</h2>

<div>이름<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly value=" <?=$data['irum']?>"></div>

<div>아이디<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly value=" <?=$data['id']?>"></div>

<div>닉네임<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly rows=3 cols=50 value=" <?=$data['nicname']?>"></div>

<div>생일<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly value=" <?=$data['yy']?>년 <?=$data['mm']?>월 <?=$data['dd']?>일"></div>

<div>이메일<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly value=" <?=$data['email']?>"></div>

<div>전화번호<input type="text" style="background:#f5f5f5;border:0;color:blue" readonly value=" <?=$data['phonenumber']?>"></div>


<br>
<hr style=color:gray;height:20;background:gray>

<a href="#" onclick="location.href='detailupdate.php?id=<?php echo $_SESSION['id'] ?>';">회원정보수정</a>
</form>

</center>

</body>
</html>