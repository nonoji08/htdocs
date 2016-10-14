<?php
include 'include.php';

$sql="select * from kcc_member";
$stmh=$pdo->prepare($sql);
$stmh->execute();
$result=$stmh->fetchAll();
foreach($result as $row){
    print_r($row);
}
?>