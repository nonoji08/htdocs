<html>
    <head>
        <meta charset="UTF-8">
        <title>타이털</title>
    </head>
    <body>
	<?php
		/*
		$con=mysql_connect('localhost','root','') or die("에휴");
		print("접속성공");
		mysql_select_db("php");
		mysql_close($con);
		*/
		/*
		$mysqli=new mysqli('localhost','root','','php');
		if($mysqli->connect_error){
			die("hslee22");
		}
		print "접속성공";
		$mysqli->close();
		*/

		$pdo=new PDO("mysqlhost='localhost';dbname='php';charset='utf8','root',''");
	?>
    </body>
</html>