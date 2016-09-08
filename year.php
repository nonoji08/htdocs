<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
   <title>여윽시 해앵님</title>
    </head>
    <body>
        <form action="yearview.php" name="year" method="post">
           <select name="year" id="">
           <option value="" selected>동무가 태어난 연도</option>
            <?php
                for($i=1900;$i<=2016;$i++)
                {
                    print "<option value='$i'>".$i."</option>";
                }
            ?>
            <input type="submit" value="항선리">
            </select>
        </form>
    </body>
</html>