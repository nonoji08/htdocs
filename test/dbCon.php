<?php
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
$db_name = "kcc";
$db_type = "mysql";
$db = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

try {
    $pdo = new PDO($db,$db_user,$db_pass);
    $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $Exception) {
    die("오류".$Exception->getMessage());
}

?>