<?php
    include 'include.php';
    mysql_query(" delete from notice where idx=$idx");
    echo "<script>alert('삭제완료');</script><meta http-equiv='refresh' content='0; url=notice.php'>";
?>