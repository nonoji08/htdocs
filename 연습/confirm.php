<?php
    include("testsession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>일천팍</title>
    </head>
    <body>
        <?php
            print "이름 : ";
	    print $_SESSION['name']."<br>";
	    print "그룹 : ";
	    print $_SESSION['group']."<br>";
	    print "레벨 : ";
	    print $_SESSION['level'];
        ?>
    </body>
</html>