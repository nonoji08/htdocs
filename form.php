<html>
    <head>
        <meta charset="UTF-8">
        <title>한여름밤의카라잔</title>
    </head>
    <body>
        <form name="form1" method="post" action="view.php">
            이름:<br>
            <input type="text" name="name"><br>
            아이디:<br>
            <input type="text" name="id"><br>
            비밀번호:<br>
            <input type="password" name="pw"><br>
            본문:<br>
            <textarea name="honbun" cols="30" rows="5">
            </textarea><br>
            나의취미:<br>
            <input type="checkbox" name="hobby[]" value="스포츠">스포츠<br>
            <input type="checkbox" name="hobby[]" value="영화감상">영화감상<br>
            <input type="checkbox" name="hobby[]" value="독서">독서<br>
            <input type="submit" value="송신">
        </form>
    </body>
</html>