<?php
    include "include.php";
    $idx=$_REQUEST['idx'];
    $sql="select * from bard where idx=$idx";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();

        $row = $stmt->fetch();
        $idx = $row['idx'];
        $name = $row['name'];
        $title = $row['title'];
        echo "번호:$idx 작성자:$name 내용:$title";
        echo "<br><a href='update_form.php?idx=$idx'>수정</a><br><a href='delete.php?idx=$idx'>삭제</a>";
    
?>