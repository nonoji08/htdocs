<?php
session_start();
if(isset($_SESSION['id']) and isset($_SESSION['pwd']))
{
	$_SESSION['id'];
	$_SESSION['pwd'];
}
else
{
	echo "<meta http-equiv='refresh' content='0;url=main.php'>";
	exit;
}
?>


<?php

$title=$_POST['title'];
$content=$_POST['content'];
$regdate=date('Y-m-d H:i:s');
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_query("set names utf8");
mysql_select_db("nonoz",$connect);
$inrec="insert into broadcastboard(title,id,content,regdate,hits) values('$title','$_SESSION[id]','$content','$regdate',0)";
$query = "UPDATE member SET boardcount = boardcount + 1 WHERE id='nononim'";
$info=mysql_query($inrec,$connect);
if(!$info)
{
	die("글등록실패");
}
else
{
echo "작성하신 글이 등록되었습니다.<br>";
}
mysql_close($connect);
?>
<meta http-equiv='refresh' content='0;url=broadcast.php'>