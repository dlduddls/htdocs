<?php
require_once 'img/dbcon.php';
$file=$_FILES['upload']['name'];
printr($file);
$file_dir = $_SERVER["DOCUMENT_ROOT"]."\\fup\\";
print $file_dir;
print microtime();
$file_path = $file_dir.md5(microtime()).$file;
$img_dir='upload';
$img_path=$img_dir.$file;
print "$file_path";
if($_FILES['upload']['size']<1000000)
{
        move_uploaded_file($_FILES['upload']['tmp.name'], $file_path);
        $sql="insert into bar (upload) values(:upload)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue('upload',$img_path);
        $stmh->execute();
}
else{
    echo '<script>alert"용량초과"</script>';
    echo "<script>location.href='./write.php'</script>";
}
