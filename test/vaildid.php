<?php
@include 'dbCon.php';
$id = $_POST['id'];

$sql = "SELECT * FROM member WHERE id='$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->rowCount();
echo ($result);
?>

