<?php
//    phpinfo();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Generator" content="EditPlus">
        <meta name="Author" content="">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <title>솔져</title>
        <style>
            .for{
                background:green;
            }
        </style>
    </head>
    <body>
       <ul>
       <li>1</li>
        <?php
            print "안녕 안녕 안녕하세요";
        ?>
        <li>2</li>
        <li>3
        <?php
            print PHP_VERSION;
            print PHP_OS;
            define("HELLO","이미쉘");
            print HELLO."<br>";
            define("_18","신발");
            print _18;
            print __DIR__;
        ?>
        </li>
        <li>4</li>
        </ul>
        
        <p class="for">
        <?php
        
        //for문
        for($i=1;$i<10;$i++)
        {
            for($j=1;$j<10;$j++)
            {
                print $i."*".$j."=".$i*$j."<br>";
            }
        }
        ?>
        </p>
    </body>
</html>