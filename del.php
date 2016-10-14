<?php
include_once '';//db연결
$sql= "delete from index.php where idx= {$_POST['idx']} ";
$pdo->query($sql);
?>
<script>
    location.href='list.php';
    </script>
