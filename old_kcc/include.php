<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=kcc;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}
    catch(PDOException $e){
        echo '오류'.$e->getMessage();
		
}
?>