<?php

try{
    $pdo=new PDO('mysql:host=localhost;dbname=kcc;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "접속";
}
    catch(PDOException $e){
        echo '오류'.$e->getMessage();
}

    $korname=$_POST['korname'];
    $enname=$_POST['enname'];
$birth=$_POST['year'].$_POST['month'].$_POST['day'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$phone=$_POST['phone_F'].$_POST['phone_S'].$_POST['phone_T'];
$cellphone=$_POST['cellphone'];
$sms=$_POST['sms'];
$email=$_POST['email'];
$home_address=$_POST['epost'].$_POST['address'].$_POST['address_etc'];
$DM=$_POST['DM'];
$company_name=$_POST['company_name'];
$job=$_POST['job'];
$position=$_POST['position'];
$company_address=$_POST['company_epost'].$_POST['company_address'].$_POST['company_address_etc'];

$g=$_POST['company_phone_G'];
$f=$_POST['company_phone_F'];
$s=$_POST['company_phone_S'];
$company_phone=$g.$f.$s;
$company_phone=preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$g-$f-$s", $company_phone);
$fax=$_POST['fax_G'].$_POST['fax_F'].$_POST['fax_S'];
$marry=$_POST['marry'];


$sql='insert into kcc_member(korname,enname,birth,id,pw,phone,cellphone,sms,email,home_address,dm,company_name,job,position,company_address,company_phone,fax,marry) values(:korname,:enname,:birth,:id,:pw,:phone,:cellphone,:sms,:email,:home_address,:dm,:company_name,:job,:position,:company_address,:company_phone,:fax,:marry)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':korname', $korname);
$stmt->bindValue(':enname', $enname);
$stmt->bindValue(':birth', $birth);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':pw', $pw);
$stmt->bindValue(':phone', $phone);
$stmt->bindValue(':cellphone', $cellphone);
$stmt->bindValue(':sms', $sms);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':home_address', $home_address);
$stmt->bindValue(':dm', $dm);
$stmt->bindValue(':company_name', $company_name);
$stmt->bindValue(':job', $job);
$stmt->bindValue(':position', $position);
$stmt->bindValue(':company_address', $company_address);
$stmt->bindValue(':company_phone', $company_phone);
$stmt->bindValue(':fax', $fax);
$stmt->bindValue(':marry', $marry);
$stmt->execute();

?>