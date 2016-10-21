<?php
            session_start();
            $count=1; 
            if(isset($_SESSION['count'])){
                $count=$_SESSION['count'];
                $count++;
            }
        $_SESSION['count']=$count;
?>
        
<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
   <title>여윽시 해애앵님</title>
    </head>
    <body>
        <?php
            if($count==1){
        ?>
        첫경험입니다. <br>
        <?php
            }else{
                    
        ?>
        당신의 방문은 <?=$count?>번째입니다.
        <?php
            }
        ?>
    </body>
</html>