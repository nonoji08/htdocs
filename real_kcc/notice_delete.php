<?php 
    include "include.php";
    $idx = $_REQUEST['idx'];
    $sql = "DELETE FROM kcc_board WHERE idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0; url=notice.php' >";
?>