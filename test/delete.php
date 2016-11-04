<?php 
    include "include.php";
    $idx = $_REQUEST['idx'];
    $sql = "DELETE FROM bard WHERE idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
?>