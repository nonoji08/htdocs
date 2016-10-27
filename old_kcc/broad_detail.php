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
	$_SESSION['rank'];
	$_SESSION['content'];
}

else
{
	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
	exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" />
<title>Nononim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />
</head>


<body>

<div align="center">
<a href="cafe.php"><img src="사진/메인로고.jpg" width="956" height="330"></a>
</div>

<hr style=color:gray;height:20;background:gray>


<tr bgcolor=black>
<td colspan=3>

<center>

<?php
$title=$_GET['title'];
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_query("set names utf8");
mysql_select_db("nonoz",$connect);
$sqlrec="select * from broadcastboard where title='$title'";
$info=mysql_query($sqlrec,$connect);
if(!$info)
	die("결과가 없습니다.");
$data=mysql_fetch_array($info);
?>
<form>
<div id='a1'>작성자<input type="text" value="<?=$data['id']?>"></div>
<div id='a1'>글제목<input type="text" value="<?=$data['title']?>"></div>
<div id='b1'>글내용</div>
<textarea cols=70 rows=15><?=$data['content']?></textarea>
</form>
<?php
$uprec="update broadcastboard set hits=hits+1 where number=$data[number]";
$info2=mysql_query($uprec,$connect);
mysql_close($connect);
?>
<p><a href="delete.php">글삭제하기</a></p>

</center>