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


<style>

a{text-decoration:none}

</style>


</head>


<body>

<div align="center">
<a href="cafe.php"><img src="사진/메인로고.jpg" width="956" height="330"></a>
</div>

<?php
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_query("set names utf8");
mysql_select_db("nonoz",$connect);

session_start();
if(($_SESSION['rank']) == Admin )
{
	echo "<form action='broadcastinput.php' method='post'>";
	echo "<div align='right'> <input type='submit' value='글쓰기' style='height:25px;width:80px;'> </div>";
	echo "</form>";
}
?>


<hr style=color:gray;height:20;background:gray>


<tr bgcolor=black>
<td colspan=3>


<table align="center">
<?php
$connect=mysql_connect("localhost","nonoz","lmh990818");
mysql_select_db("nonoz",$connect);
if(empty($_GET['page'])){$page=1;}
else
{$page=$_GET['page'];}
$line_page=10;
$block_page=5;
$s1="select * from broadcastboard";
$result=mysql_query($s1,$connect);
$totrow=mysql_num_rows($result);
$totpage=ceil($totrow/$line_page);
$totblock=ceil($totpage/$block_page);
$cblock=ceil($page/$block_page);
$frow=($page-1)*$line_page;
$selrec="select * from broadcastboard order by number desc limit $frow,$line_page";
$info=mysql_query($selrec,$connect);
while($rowinfo=mysql_fetch_array($info))
{
	echo "<tr>";
	echo "<td id='td_td' align='left'> $rowinfo[regdate] 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	
	echo "<td id='td_td'> <a href='detail.php?id=$rowinfo[id]'> $rowinfo[id] 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>";

	echo "<td id='td_td'> <a href='broad_detail.php?title=$rowinfo[title]'> $rowinfo[title] 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>";

	echo "<td id='td_td'> $rowinfo[hits] </td>";
	echo "<tr>";}
mysql_close($connect);
?>
</table>
<br>
</body>
<center>
<?php
$fpage=(($cblock-1)*$block_page)+1;
$lpage=min($totpage,$cblock*$block_page);
if($cblock>1)
{
	$prvblock=($cblock-1)*$block_page;
	echo "<a href='broadcast.php?page=$prvblock'> ←이전</a>";
}
for($i=$fpage;$i<=$lpage;$i++)
{
	if($i==$page)
		echo "<b id='ab'>[$i]</b>";
	else
		echo "<a href='broadcast.php?page=$i'> [$i] </a>";
}
if($cblock<$totblock)
{
	$nxtblock=($cblock+1)*$block_page;
	echo "<a href='broadcast.php?page=$nxtblock'> 다음→</a>";
}
?>

<br>
</center>
<hr style=color:gray;height:20;background:gray>