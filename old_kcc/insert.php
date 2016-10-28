<?php
include "include.php";
$title=$_POST['title'];
$content=$_POST['content'];
$sql="insert into notice(title,content) values(:title,:content)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);
$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=notice.php'>";
?>