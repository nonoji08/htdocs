<?php
session_start();
include 'include.php';
?>
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
<a href=delete.php>삭제</a>
<?php
 
    $con=mysqli_connect("localhost", "root", "root","kcc");
    $sql="select * from kcc_member";
    $result=mysqli_query($con,$sql);
    $numrow = mysqli_num_rows($result);    
    for($i=0; $i<$numrow; $i++){
        $row[$i]=mysqli_fetch_array($result);
    }    
 
    for($i = 0; $i < $numrow; $i++){
        $ComCodeArr[] = $row[$i]['id'];
        $NameArr[] = $row[$i]['pw'];
         echo "                                                       
<table border = 0>
         <tr>
            <td>$ComCodeArr[$i]</td>
            <td>-<td>
            <td>$NameArr[$i]</td>
			<td><input type=radio name=radiodel></td>
         </tr>
</table>
            ";
    
    }
    mysqli_close($con);    
    
?>
</body>
</html>