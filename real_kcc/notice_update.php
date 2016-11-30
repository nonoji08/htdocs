<?php
include 'include.php';
$idx = $_REQUEST['idx'];
$sql = "update kcc_board set title=:title, content=:content where idx=$idx";
$title = $_POST['title'];
$content = nl2br($_POST['content']);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);

$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=view.php?idx=$idx' >";
?>