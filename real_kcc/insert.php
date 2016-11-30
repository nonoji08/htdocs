<?php
    include 'include.php';
    function get_ext($n) {
        $ext = substr($n, strrpos($n, '.') + 1);
        return $ext;
    }
    $sql = "insert into kcc_board (title, name, content, file_name, file_location, date)"
            . " values (:title, :name, :content, :file_name, :file_location, :date)";
			
    $title = $_POST['title'];
    $name = $_POST['name'];
    $content = nl2br($_POST['content']);
    $date = date("Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")));
    $file = $_FILES['upload']['name'];
    $file_dir = $_SERVER['DOCUMENT_ROOT']."\\fup\\";
    $file_token = date("Ymd")."-".$file;
    $wFile_dir = "fup/";
    $wFile_path = $wFile_dir.$file_token."/".$_FILES['upload']['name'];
    
    if ($_FILES['upload']['size'] >= 5120) {
        mkdir($file_dir.$file_token."/");
        $file_path = $file_dir.$file_token."/".$file;
        $file_ext = get_ext($file);
        $test_filepath = $file_dir.$file_token.".".$file_ext;
        echo "<script>alert($test_filepath);</script>";
        move_uploaded_file($_FILES['upload']['tmp_name'], $test_filepath);
        move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':file_name', $file_token.".".$file_ext);
        $stmt->bindValue(':file_location', $wFile_dir);
        $stmt->bindValue(':date', $date);
        $stmt->execute();
        echo "<meta http-equiv='refresh' content='0; url=notice.php' >";
    } else {
        if ($_FILES['upload']['size']==0) {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':file_name', NULL);
            $stmt->bindValue(':file_location', NULL);
            $stmt->execute();
            echo "<meta http-equiv='refresh' content='0; url=notice.php' >";
        } else {
            echo "<script>alert('파이리 너무 큽니다.');</script>";
            echo "<script>history.back(-1);</script>";       
        }
    }
?>