<?php
    $search='%'.$_POST['search'].'%';
    include 'kccdb.php';
    $sql='select * from member where last_name LIKE :last_name or first_name LIKE :first_name';
    $stmh=$pdo->prepare($sql);
    $stmh->bindvalue(':last_name',$search,PDO::PARAM_STR);
    $stmh->bindvalue(':first_name',$search,PDO::PARAM_STR);
    $stmh->execte();
    
    $count=$stmh->rowcount();
    print $count."건입니다.";
?>