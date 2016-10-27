<?php
session_start();
if(isset($_SESSION['id']) and isset($_SESSION['pwd']))
{
	$_SESSION['id'];
	$_SESSION['pwd'];
}
else
{
	echo "<meta http-equiv='refresh' content='0;url=broadcast.php'>";
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" />
<title>Nononim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />

<style>
a{text-decoration:none}
</style>

</head>


<body>

<div align="center">
<a href="cafe.php"><img src="사진/메인로고.jpg" width="956" height="330"></a>
</div>

<center>
<table width="610">
<form action="broadwrite.php" method="post">
<br>

<tr>
<td> <div style="color:pink;font-size:18px" autocomplete="off">제목</td> <td><input type="text" style="width:500px;height:20px" required name="title"></div><p></td>
</tr>

<tr>
<td> <div style="color:pink;font-size:18px">내용</td> <td><textarea style="width:500px;height:200px" required name="content"></textarea></div></td>


<td VALIGN="bottom"> <div align="right"><input type="submit" style="width:50px" value="완료"></div> </td>


</tr>
</table>
</center>
</form>
</body>
</html>