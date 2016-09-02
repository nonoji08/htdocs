<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $name=$_POST["name"];
            $id=$_POST["id"];
            $pw=$_POST["pw"];
            $bonmoon=$_POST["honbun"];
            
            print "$name 고갱님<br>";
            print "ID: $id <br>";
            print "PW: $pw<br>";
            print "본문: $bonmoon<br>";
            if(isset($_POST["hobby"])){
                $hobby=  implode(' ', $_POST["hobby"]);
                print "취미: $hobby ";
            }   else{
                print "취미: X";
            }
        ?>
    </body>
</html>