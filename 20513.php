<?php
try{
    $PDO=new PDO('mysql:host=localhost;dbname=hslee22;charset=utf8','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            print '접속성공';
} catch (Exception $ex) {
    echo '실패'.$ex->getMessage();
}