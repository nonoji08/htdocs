<!DOCTYPE html>
<html>
<head>
<script>
if(!$(':input:radio[name=radiodel]:checked').val()) {
    alert("섹션을 선택해주세요.");
	history.back();
}
</script>
<link rel="stylesheet" href="css/kcc.css">
<meta charset="UTF-8">
<link rel="shortcut icon" href="/favicon.ico" />
<title>hslee22</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />

<body>
        <table id='kcc_table' width="1000px">
            <tr><td>idx</td><td>id</td><td>name</td><td>phone</td><td>home</td></tr>
            <?php

                include '../include.php';
                $sql="select * from kcc_member";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                foreach($stmt as $row){
                    $idx=$row['idx'];
                    $id=$row['id'];
                    $name=$row['korname'];
                    $phone=$row['cellphone'];
                    $home=$row['home_address'];

                    echo "<tr><td>$idx</td><td>$id</td><td>$name</td><td>$phone</td><td>$home</td></tr>";
                }
            ?>
        </table>
	<div><a href="../index.php">메인으로</a></div>
</body>
</html>