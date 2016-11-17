<?php 
    include "dbCon.php";
    $idx = $_REQUEST['idx'];
    $sql = "DELETE FROM board WHERE idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    echo "<meta http-equiv='refresh' content='0; url=board.php' >";
?>