<?php
    include 'dbCon.php';
    function get_ext($n) {
        $ext = substr($n, strrpos($n, '.') + 1);
        return $ext;
    }
    $sql = "insert into board (subject, writer, content, changedFilename, originalFilename, fileLocation, date)"
            . " values (:subject, :writer, :content, :changedFilename, :originalFilename, :fileLocation, :date)";
    
    $subject = $_POST['subject'];
    $writer = $_POST['writer'];
    $content = nl2br($_POST['content']);
    $date = date("Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")));

    $file = $_FILES['upload']['name'];
    $file_dir = $_SERVER['DOCUMENT_ROOT']."\\fup\\";
    $file_token = date("Ymd")."-".md5(microtime()); 
    $wFile_dir = "fup/";
    $wFile_path = $wFile_dir.$file_token."/".$_FILES['upload']['name'];
    
    if ($_FILES['upload']['size'] >= 3072) {
        mkdir($file_dir.$file_token."/");
        $file_path = $file_dir.$file_token."/".$file;
        $file_ext = get_ext($file);
        $test_filepath = $file_dir.$file_token.".".$file_ext;
        echo "<script>alert($test_filepath);</script>";
        move_uploaded_file($_FILES['upload']['tmp_name'], $test_filepath);
        move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':subject', $subject);
        $stmt->bindValue(':writer', $writer);
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':originalFilename', $file);
        $stmt->bindValue(':changedFilename', $file_token.".".$file_ext);
        $stmt->bindValue(':fileLocation', $wFile_dir);
        $stmt->bindValue(':date', $date);

        $stmt->execute();
        echo "<meta http-equiv='refresh' content='0; url=board.php?idx=1' >";
    } else {
        if ($_FILES['upload']['size']==0) {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':subject', $subject);
            $stmt->bindValue(':writer', $writer);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':originalFilename', NULL);
            $stmt->bindValue(':fileLocation', NULL);

            $stmt->execute();
            echo "<meta http-equiv='refresh' content='0; url=board.php?idx=1' >";
        } else {
            echo "<script>alert('파일의 용량이 너무 큽니다.');</script>";
            echo "<script>history.back(-1);</script>";       
        }
    }
?>