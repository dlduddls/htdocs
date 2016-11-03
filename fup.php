<?php
$file=$_FILES['upload']["name"];
print_r($file);
$file_dir=$_SERVER["DOCUMENT_ROOT"]."\\fup\\";
print "$file_dir";
print microtime();
$file_path = $file_dir.md5(microtime()).$_file;
print "$file_path";
if($_FILES['upload']['size']<1)
{
        move_uploaded_file($_FILES['upload']['tmp.name'], $file_path);
}
else{
    echo '<script>alert"용량초과"</script>';
    echo '';
}
