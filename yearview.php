<?php
    $year=$_POST['year'];
    if($year!==0)
    {
        if($year==2000)
        {
            print "269:74랑 같은 2000년에 태어나셨습네다.";
        }
        else
        {
            print $year."연도에 태어나셨습네다.";
        }
    }
    else
    {
        print "태어난 연도를 입력하라우 동무";
    }
?>