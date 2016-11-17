<?php
include 'dbCon.php';
$idx = $_REQUEST['idx'];
$sql = "update board set subject=:subject, content=:content where idx=$idx";

$subject = $_POST['subject'];

$content = nl2br($_POST['content']);

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':content', $content);

$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=view.php?idx=$idx' >";
?>