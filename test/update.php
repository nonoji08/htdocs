<?php
    include "include.php";
    $idx = $_REQUEST['idx'];
    $sql = "update bard set name=:name, title=:title where idx=$idx";

    $name= $_POST['name'];
    $title = $_POST['title'];

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':title', $title);

    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0; url=view.php?idx=$idx' >";
?>