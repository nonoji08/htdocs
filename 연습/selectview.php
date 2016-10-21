<?php
    $select=$_POST['location'];
    if($select!==""){
        if($select=='평양' || $select=='신의주')
        {
            print "남조선 간나새퀴들";
        }
        else{
            print "북조선 간나 새퀴들";
        }
    }
    else{
        print "태어난 지역을 선택하라우 동무";
    }
?>