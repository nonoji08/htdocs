<?php
include "include.php";
$file=$_FILES['upload']['name'];
$file_dir=$_SERVER['DOCUMENT_ROOT']."\\fup\\";
print $file_dir;
print microtime();
$file_path=$file_dir.md5(microtime()).$file;
print $file_path;
if($_FILES['upload']['size']<102400){
    move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
}else{
    echo "<script>alert('업로드 용량초과');</script>";
}
?>