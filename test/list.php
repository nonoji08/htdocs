<?php
    include 'include.php';
    $sql="select * from bard";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    foreach ($stmt as $row) {
        $idx = $row['idx'];
        $name = $row['name'];
        $title = $row['title'];
        
        echo "$idx <a href='view.php?idx=$idx'>$title</a> $name<br>";
    }
?>