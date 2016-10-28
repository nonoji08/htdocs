<?php?idx=$idx
try{
	foreach ($stmt as $row) {
	$title = $row['title'];
    $pdo=new PDO('mysql:host=localhost;dbname=kcc;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); update kcc set where
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':title', $title);
	$stmt->execute();
}
    catch(PDOException $e){
        echo '오류'.$e->getMessage();
		$sql = "DELETE FROM board WHERE idx=$idx";
}
?>
<meta http-equiv='refresh' content='0; url='>