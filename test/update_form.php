
<?php
                                                include 'include.php';
                                                $idx=$_REQUEST['idx'];
                                                $sql = "SELECT * FROM bard WHERE idx=$idx";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute();
                                                $row=$stmt->fetch();
                                                    $idx = $row['idx'];
                                                    $name = $row['name'];
                                                    $title = $row['title'];
                                            echo "<script>$(document).ready(function() {"
                                                    . "$('#name').val('$name'); $('#title').val('$title'); $('#idx').val('$idx');"
                                                            . "});</script>";
                                            ?>
                                            <form action='update.php' method='post'>
                                            제목 :<input type='text' name='title'/><br>
                                            작성자 :<input type='text' name='content'><br>
                                            <input type="hidden" name="idx" id="idx">
                                            <button> 등록</button>
                                            <a href="list.php" class="sp_coms btn_view">취소</a>
                                            </form>